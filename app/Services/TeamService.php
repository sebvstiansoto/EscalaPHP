<?php

declare(strict_types=1);

namespace App\Services;

use PDO;

class TeamService
{
    public function __construct(private PDO $pdo)
    {
    }

    /** @return array<string, mixed>|null */
    public function findBySlug(string $slug): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM teams WHERE slug = ?');
        $stmt->execute([$slug]);

        return $stmt->fetch() ?: null;
    }

    public function create(string $name, int $ownerId, int $seats = 10): string
    {
        $slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $name) ?? 'team');
        $slug = trim($slug, '-') . '-' . substr(bin2hex(random_bytes(2)), 0, 4);
        $this->pdo->prepare('INSERT INTO teams (name, slug, seats, owner_id, created_at) VALUES (?, ?, ?, ?, ?)')
            ->execute([$name, $slug, $seats, $ownerId, date('c')]);
        $teamId = (int) $this->pdo->lastInsertId();
        $this->pdo->prepare('INSERT INTO team_members (team_id, user_id, role, joined_at) VALUES (?, ?, ?, ?)')
            ->execute([$teamId, $ownerId, 'owner', date('c')]);

        return $slug;
    }

    public function addMember(int $teamId, int $userId): bool
    {
        $team = $this->pdo->prepare('SELECT seats, (SELECT COUNT(*) FROM team_members WHERE team_id = ?) AS used FROM teams WHERE id = ?');
        $team->execute([$teamId, $teamId]);
        $row = $team->fetch();
        if (!$row || (int) $row['used'] >= (int) $row['seats']) {
            return false;
        }

        $this->pdo->prepare('INSERT OR IGNORE INTO team_members (team_id, user_id, role, joined_at) VALUES (?, ?, ?, ?)')
            ->execute([$teamId, $userId, 'member', date('c')]);

        return true;
    }

    /** @return list<array<string, mixed>> */
    public function forUser(int $userId): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT t.*, tm.role FROM teams t
             JOIN team_members tm ON tm.team_id = t.id
             WHERE tm.user_id = ? ORDER BY t.created_at DESC'
        );
        $stmt->execute([$userId]);

        return $stmt->fetchAll();
    }

    public function grantProToMembers(int $teamId, EntitlementService $entitlements): int
    {
        $stmt = $this->pdo->prepare('SELECT user_id FROM team_members WHERE team_id = ?');
        $stmt->execute([$teamId]);
        $count = 0;
        foreach ($stmt->fetchAll() as $row) {
            $entitlements->activatePro((int) $row['user_id']);
            $count++;
        }

        return $count;
    }
}
