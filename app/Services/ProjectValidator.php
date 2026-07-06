<?php

declare(strict_types=1);

namespace App\Services;

use App\ExerciseValidator;
use App\LessonCatalog;

class ProjectValidator
{
    public function __construct(private ExerciseValidator $validator)
    {
    }

    /**
     * @param array<string, mixed> $project
     * @return array{ok: bool, message: string}
     */
    public function validate(array $project, string $code): array
    {
        if (empty($project['validation'])) {
            return ['ok' => true, 'message' => 'Proyecto marcado como completado.'];
        }

        $validation = $project['validation'];
        $type = $validation['type'] ?? 'code';

        if ($type === 'honor') {
            return ['ok' => true, 'message' => 'Proyecto completado.'];
        }

        if (!isset($validation['language']) && !empty($project['language'])) {
            $validation['language'] = $project['language'];
        }

        $result = $this->validator->validate($validation, $code);

        return ['ok' => (bool) $result['ok'], 'message' => (string) $result['message']];
    }

    /** @param array<string, mixed> $project */
    public function requiresCode(array $project): bool
    {
        $validation = $project['validation'] ?? null;

        return is_array($validation) && ($validation['type'] ?? '') !== 'honor';
    }
}
