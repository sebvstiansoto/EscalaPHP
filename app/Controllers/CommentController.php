<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\CommentService;

class CommentController
{
    public function __construct(private CommentService $comments)
    {
    }

    public function list(): void
    {
        header('Content-Type: application/json; charset=utf-8');
        $type = (string) ($_GET['type'] ?? 'lesson');
        $id = (string) ($_GET['id'] ?? '');
        echo json_encode(['ok' => true, 'comments' => $this->comments->forEntity($type, $id)], JSON_UNESCAPED_UNICODE);
    }

    public function post(): void
    {
        header('Content-Type: application/json; charset=utf-8');
        $input = json_decode((string) file_get_contents('php://input'), true) ?: [];
        $ok = $this->comments->add(
            (string) ($input['type'] ?? 'lesson'),
            (string) ($input['id'] ?? ''),
            (string) ($input['body'] ?? ''),
            isset($input['parent_id']) ? (int) $input['parent_id'] : null,
        );
        echo json_encode(['ok' => $ok], JSON_UNESCAPED_UNICODE);
    }
}
