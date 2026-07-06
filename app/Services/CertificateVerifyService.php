<?php

declare(strict_types=1);

namespace App\Services;

use App\CourseCatalog;
use PDO;

class CertificateVerifyService
{
    public function __construct(private PDO $pdo, private LearnerContext $context)
    {
    }

    public function issue(string $courseSlug, string $displayName): string
    {
        $existing = $this->findCode($courseSlug);
        if ($existing !== null) {
            return $existing;
        }

        $code = strtoupper(substr(bin2hex(random_bytes(8)), 0, 12));
        $this->pdo->prepare(
            'INSERT INTO certificate_codes (user_id, session_id, course_slug, verify_code, issued_at) VALUES (?, ?, ?, ?, ?)'
        )->execute([
            $this->context->userId(),
            $this->context->sessionId(),
            $courseSlug,
            $code,
            date('c'),
        ]);

        return $code;
    }

    public function findCode(string $courseSlug): ?string
    {
        $stmt = $this->pdo->prepare(
            'SELECT verify_code FROM certificate_codes WHERE session_id = ? AND course_slug = ? ORDER BY issued_at DESC LIMIT 1'
        );
        $stmt->execute([$this->context->sessionId(), $courseSlug]);
        $code = $stmt->fetchColumn();

        return $code ? (string) $code : null;
    }

    /** @return array<string, mixed>|null */
    public function verify(string $code): ?array
    {
        $code = strtoupper(trim($code));
        if ($code === '') {
            return null;
        }
        $stmt = $this->pdo->prepare(
            'SELECT c.*, u.display_name FROM certificate_codes c
             LEFT JOIN users u ON u.id = c.user_id WHERE c.verify_code = ?'
        );
        $stmt->execute([$code]);
        $row = $stmt->fetch();
        if (!$row) {
            return null;
        }

        $course = CourseCatalog::course((string) $row['course_slug']);

        return [
            'valid' => true,
            'code' => $row['verify_code'],
            'name' => $row['display_name'] ?? 'Aprendiz',
            'course' => $course['title'] ?? $row['course_slug'],
            'issued_at' => $row['issued_at'],
        ];
    }
}
