<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Http\Csrf;
use App\Services\EntitlementService;
use App\Services\LearnerContext;
use App\Services\Mailer;
use App\Services\NotificationService;
use App\View;

class BillingController
{
    public function __construct(
        private EntitlementService $entitlements,
        private LearnerContext $context,
        private NotificationService $notifications,
        private Mailer $mailer,
        private array $config,
    ) {
    }

    public function pricing(): void
    {
        View::show('pricing', [
            'config' => $this->config,
            'title' => 'Planes — Escala',
            'currentPlan' => $this->entitlements->plan(),
            'user' => $this->currentUser(),
        ]);
    }

    public function checkout(): void
    {
        if (!$this->context->isLoggedIn()) {
            header('Location: /login?redirect=/precios');
            exit;
        }

        Csrf::abortIfInvalid($_POST['_csrf'] ?? null);

        $stripeKey = (string) ($this->config['stripe_secret_key'] ?? '');

        if ($stripeKey !== '') {
            header('Location: ' . $this->createStripeCheckout($stripeKey));
            exit;
        }

        // Modo desarrollo: activar Pro sin Stripe
        $userId = (int) $this->context->userId();
        $this->entitlements->activatePro($userId);
        $this->notifications->create('billing', 'Plan Pro activado', 'Tienes acceso a todos los cursos.');
        $user = $this->currentUser();
        if ($user) {
            $this->mailer->send(
                (string) $user['email'],
                'Plan Pro activado — Escala',
                '<p>¡Gracias! Tu plan Pro está activo. Accede a todos los cursos.</p>'
            );
        }

        header('Location: /facturacion/exito');
        exit;
    }

    public function success(): void
    {
        View::show('billing/success', [
            'config' => $this->config,
            'title' => '¡Plan Pro activado!',
            'user' => $this->currentUser(),
        ]);
    }

    public function webhook(): void
    {
        $payload = (string) file_get_contents('php://input');
        $secret = (string) ($this->config['stripe_webhook_secret'] ?? '');

        if ($secret === '') {
            http_response_code(400);
            echo 'Webhook no configurado';
            return;
        }

        $event = json_decode($payload, true);
        if (!is_array($event)) {
            http_response_code(400);
            return;
        }

        $type = (string) ($event['type'] ?? '');
        if ($type === 'checkout.session.completed') {
            $session = $event['data']['object'] ?? [];
            $userId = (int) ($session['metadata']['user_id'] ?? 0);
            if ($userId > 0) {
                $this->entitlements->activatePro(
                    $userId,
                    (string) ($session['customer'] ?? null),
                    (string) ($session['subscription'] ?? null),
                );
            }
        }

        http_response_code(200);
        echo json_encode(['received' => true]);
    }

    private function createStripeCheckout(string $secretKey): string
    {
        $userId = (int) $this->context->userId();
        $appUrl = rtrim((string) ($this->config['app_url'] ?? 'http://localhost:8000'), '/');
        $priceId = (string) ($this->config['stripe_price_id'] ?? '');

        $params = [
            'mode' => 'subscription',
            'success_url' => $appUrl . '/facturacion/exito',
            'cancel_url' => $appUrl . '/precios',
            'metadata[user_id]' => (string) $userId,
        ];

        if ($priceId !== '') {
            $params['line_items[0][price]'] = $priceId;
            $params['line_items[0][quantity]'] = '1';
        } else {
            $params['line_items[0][price_data][currency]'] = 'usd';
            $params['line_items[0][price_data][unit_amount]'] = '999';
            $params['line_items[0][price_data][recurring][interval]'] = 'month';
            $params['line_items[0][price_data][product_data][name]'] = 'Escala Pro';
            $params['line_items[0][quantity]'] = '1';
        }

        $trialDays = (int) ($this->config['stripe_trial_days'] ?? 0);
        if ($trialDays > 0) {
            $params['subscription_data[trial_period_days]'] = (string) $trialDays;
        }

        $ch = curl_init('https://api.stripe.com/v1/checkout/sessions');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_USERPWD => $secretKey . ':',
            CURLOPT_POSTFIELDS => http_build_query($params),
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        $data = json_decode((string) $response, true);

        return (string) ($data['url'] ?? '/precios');
    }

    /** @return array<string, mixed>|null */
    private function currentUser(): ?array
    {
        if (!$this->context->isLoggedIn()) {
            return null;
        }

        $stmt = $this->context->pdo()->prepare('SELECT id, email, display_name, plan FROM users WHERE id = ?');
        $stmt->execute([$this->context->userId()]);

        return $stmt->fetch() ?: null;
    }
}
