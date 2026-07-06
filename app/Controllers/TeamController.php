<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\EntitlementService;
use App\Services\LearnerContext;
use App\Services\TeamService;
use App\View;

class TeamController
{
    public function __construct(
        private TeamService $teams,
        private LearnerContext $context,
        private EntitlementService $entitlements,
        private array $config,
    ) {
    }

    public function index(): void
    {
        if (!$this->context->isLoggedIn()) {
            header('Location: /login?redirect=/equipos');
            exit;
        }

        View::show('teams', [
            'config' => $this->config,
            'title' => 'Equipos B2B',
            'teams' => $this->teams->forUser((int) $this->context->userId()),
            'message' => $_SESSION['team_message'] ?? null,
        ]);
        unset($_SESSION['team_message']);
    }

    public function create(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        if (!$this->context->isLoggedIn()) {
            header('Location: /login');
            exit;
        }

        $name = trim((string) ($_POST['name'] ?? ''));
        if ($name === '') {
            $_SESSION['team_message'] = 'Escribe un nombre de equipo.';
            header('Location: /equipos');
            exit;
        }

        $slug = $this->teams->create($name, (int) $this->context->userId());
        $_SESSION['team_message'] = "Equipo creado: {$slug}";
        header('Location: /equipos');
        exit;
    }

    public function invite(): void
    {
        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);
        if (!$this->context->isLoggedIn()) {
            header('Location: /login');
            exit;
        }

        $teamSlug = (string) ($_POST['team'] ?? '');
        $email = strtolower(trim((string) ($_POST['email'] ?? '')));
        $team = $this->teams->findBySlug($teamSlug);
        if ($team === null) {
            header('Location: /equipos');
            exit;
        }

        $stmt = $this->context->pdo()->prepare('SELECT id FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if ($user && $this->teams->addMember((int) $team['id'], (int) $user['id'])) {
            $this->teams->grantProToMembers((int) $team['id'], $this->entitlements);
            $_SESSION['team_message'] = 'Miembro añadido con acceso Pro.';
        } else {
            $_SESSION['team_message'] = 'No se pudo añadir (email no encontrado o sin plazas).';
        }

        header('Location: /equipos');
        exit;
    }
}
