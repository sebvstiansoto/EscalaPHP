<?php

declare(strict_types=1);

namespace App\Services;

use App\LessonCatalog;

/**
 * Mentor conversacional basado en reglas (sin API externa).
 */
class MentorChatService
{
    /** @return array{answer: string, sources: list<string>} */
    public function reply(string $question): array
    {
        $q = mb_strtolower(trim($question));
        if ($q === '') {
            return ['answer' => 'Escribe tu duda sobre PHP y te ayudo.', 'sources' => []];
        }

        $glossary = LessonCatalog::glossary();
        foreach ($glossary as $term) {
            $slug = (string) $term['slug'];
            $name = mb_strtolower((string) $term['term']);
            if (str_contains($q, $slug) || str_contains($q, $name)) {
                return [
                    'answer' => "**{$term['term']}**: {$term['definition']}",
                    'sources' => ['glosario'],
                ];
            }
        }

        $patterns = [
            'echo' => '`echo` imprime texto. Ejemplo: `echo "Hola";` — no olvides el `;` al final.',
            'variable' => 'Las variables en PHP empiezan con `$`. Ejemplo: `$nombre = "Ana";`',
            'servidor' => 'PHP corre en el **servidor**, no en el navegador. El navegador solo recibe HTML.',
            'mvc' => '**MVC** separa Modelo (datos), Vista (HTML) y Controlador (lógica). Mira `app/Controllers/` en EscalaPHP.',
            'cache|caché' => 'La **caché** guarda resultados ya calculados para responder más rápido. En producción se usa Redis.',
            'sql|select' => '**SELECT** lee datos de tablas. Ejemplo: `SELECT * FROM users`. Usa siempre consultas preparadas (PDO).',
            'laravel' => '**Laravel** es el framework PHP más usado en empresas. Instálalo con `composer create-project laravel/laravel`.',
            'if|condicion' => 'Usa `if ($edad >= 18) { ... } else { ... }` para tomar decisiones.',
            'funcion|function' => 'Una función agrupa código reutilizable: `function suma($a, $b) { return $a + $b; }`',
            'api|json' => 'Las APIs devuelven **JSON**. EscalaPHP ya tiene una en `/api/run`.',
            'error|no funciona' => 'Revisa: ¿terminaste con `;`? ¿Las comillas están cerradas? Prueba en el **Laboratorio**.',
        ];

        foreach ($patterns as $keys => $answer) {
            foreach (explode('|', $keys) as $key) {
                if (str_contains($q, $key)) {
                    return ['answer' => $answer, 'sources' => ['mentor']];
                }
            }
        }

        return [
            'answer' => 'Buena pregunta. Te recomiendo repasar el módulo relacionado en el mapa o abrir el **Glosario**. Si es sobre código, prueba en el **Laboratorio** y dime el error exacto.',
            'sources' => [],
        ];
    }
}
