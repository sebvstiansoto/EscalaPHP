<?php

declare(strict_types=1);

/**
 * Adds lessons until each available course has at least 8.
 * Safe to re-run: existing slugs are skipped.
 */

$root = dirname(__DIR__);
spl_autoload_register(static function (string $class) use ($root): void {
    $prefix = 'App\\';
    if (!str_starts_with($class, $prefix)) {
        return;
    }
    $file = $root . '/app/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});

/** @return array{0: string, 1: string, 2: list<string>} */
function expansionTopics(string $category, string $courseSlug): array
{
    $cert = str_starts_with($courseSlug, 'cert-');
    if ($cert) {
        return [
            'Simulacro de preguntas clave',
            'Estrategia y checklist del examen',
            ['exam-prep', 'strategy', 'review'],
        ];
    }

    return match ($category) {
        'backend' => [
            'Patrones de producción y resiliencia',
            'Observabilidad, debugging y checklist de deploy',
            ['production', 'resilience', 'ops'],
        ],
        'frontend' => [
            'Performance, bundle y Core Web Vitals',
            'Accesibilidad, SEO y checklist de release',
            ['performance', 'a11y', 'release'],
        ],
        'devops' => [
            'Alta disponibilidad y recuperación ante fallos',
            'Runbooks, SLOs y operación en producción',
            ['ha', 'dr', 'runbook'],
        ],
        'mobile' => [
            'Publicación en stores y CI mobile',
            'Performance, crashes y monitoreo en producción',
            ['store', 'ci', 'monitoring'],
        ],
        'data-ai' => [
            'Escalado, particionado y costos',
            'Calidad de datos, pipelines y alertas',
            ['scale', 'cost', 'pipeline'],
        ],
        'certificaciones' => [
            'Simulacro de preguntas clave',
            'Repaso final y estrategia de examen',
            ['exam', 'review', 'strategy'],
        ],
        default => [
            'Buenas prácticas avanzadas en producción',
            'Checklist profesional y próximos pasos',
            ['best-practices', 'checklist', 'career'],
        ],
    };
}

function sampleCode(string $runtime, string $topic, string $courseSlug): string
{
    return match ($runtime) {
        'python' => match ($topic) {
            'production' => <<<'CODE'
# Circuit breaker simplificado con tenacity / retry
from tenacity import retry, stop_after_attempt, wait_exponential

@retry(stop=stop_after_attempt(3), wait=wait_exponential(multiplier=0.5))
async def call_payment_api(payload: dict) -> dict:
    async with httpx.AsyncClient(timeout=5.0) as client:
        r = await client.post("/charge", json=payload)
        r.raise_for_status()
        return r.json()
CODE,
            default => <<<'CODE'
# Health check listo para Kubernetes
from fastapi import FastAPI

app = FastAPI()

@app.get("/health")
def health() -> dict:
    return {"status": "ok", "checks": {"db": True, "cache": True}}
CODE,
        },
        'javascript', 'typescript' => <<<'CODE'
// Structured logging en Node/Next
import pino from 'pino';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? 'info',
  redact: ['req.headers.authorization', 'password'],
});

logger.info({ route: '/api/users', ms: 42 }, 'request completed');
CODE,
        'shell' => <<<'CODE'
#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s
CODE,
        'yaml' => <<<'CODE'
# Deployment con probes y recursos
apiVersion: apps/v1
kind: Deployment
metadata:
  name: api
spec:
  replicas: 3
  template:
    spec:
      containers:
        - name: api
          readinessProbe:
            httpGet: { path: /health, port: 8080 }
          resources:
            requests: { cpu: 100m, memory: 128Mi }
            limits: { cpu: 500m, memory: 512Mi }
CODE,
        default => <<<CODE
<?php
declare(strict_types=1);

// Checklist post-deploy — {$courseSlug}
\$checks = [
    'health' => file_get_contents('https://app.test/health') !== false,
    'migrations' => true,
    'cache_warm' => true,
];
CODE,
    };
}

/** @return array<string, mixed> */
function buildLesson(
    string $courseSlug,
    string $courseTitle,
    string $category,
    string $runtime,
    int $order,
    int $variant,
): array {
    [$prodTitle, $opsTitle, $concepts] = expansionTopics($category, $courseSlug);
    $isCert = str_starts_with($courseSlug, 'cert-');
    $title = $variant === 0 ? $prodTitle : $opsTitle;
    $short = preg_replace('/[^a-z0-9]+/', '-', strtolower($courseSlug)) ?? $courseSlug;
    $short = trim($short, '-');
    $slug = $short . ($variant === 0 ? '-produccion' : '-operaciones');
    if ($isCert) {
        $slug = $short . ($variant === 0 ? '-simulacro' : '-estrategia');
    }

    $level = $variant === 0 ? 'Producción' : 'Avanzado';
    $topicKey = $variant === 0 ? 'production' : 'ops';
    $code = sampleCode($runtime, $topicKey, $courseSlug);

    $body1 = $isCert
        ? "Repasa escenarios típicos del examen oficial de {$courseTitle}: servicios clave, límites, costos y arquitecturas recomendadas."
        : "Aplica lo aprendido en {$courseTitle} a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.";
    $body2 = $isCert
        ? 'Gestiona el tiempo, marca preguntas difíciles, elimina respuestas obviamente incorrectas y repasa tus puntos débiles la semana previa.'
        : 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.';

    $heading1 = $isCert ? 'Preguntas tipo examen' : 'Patrones en producción';
    $heading2 = $isCert ? 'Día del examen' : 'Operación continua';

    return [
        'slug' => $slug,
        'order' => $order,
        'title' => $title,
        'level' => $level,
        'minutes' => $isCert ? 40 : 35,
        'summary' => "{$title} — cierre avanzado de {$courseTitle}.",
        'concepts' => $concepts,
        'sections' => [
            [
                'heading' => $heading1,
                'body' => $body1,
                'code' => $code,
            ],
            [
                'heading' => $heading2,
                'body' => $body2,
                'code' => sampleCode($runtime, 'default', $courseSlug),
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => $isCert
                    ? '¿Qué hacer primero ante una pregunta larga en el examen?'
                    : '¿Qué revisar antes de un deploy a producción?',
                'options' => $isCert
                    ? ['Leer el final para entender qué piden', 'Responder al azar', 'Saltar sin leer']
                    : ['Health checks, migraciones y rollback plan', 'Solo el color del botón', 'Nada si compila'],
                'answer' => $isCert
                    ? 'Leer el final para entender qué piden'
                    : 'Health checks, migraciones y rollback plan',
                'explanation' => $isCert
                    ? 'Muchas preguntas de certificación esconden el requisito real al final del enunciado.'
                    : 'Un checklist de deploy evita incidentes evitables.',
                'pro_tip' => $isCert
                    ? 'Simula con temporizador — la presión del tiempo es parte del examen.'
                    : 'Automatiza el checklist en CI/CD cuando sea posible.',
            ],
            [
                'type' => 'choice',
                'question' => $isCert
                    ? '¿Cuándo marcar una pregunta para revisar después?'
                    : '¿Señal de que necesitas observabilidad mejor?',
                'options' => $isCert
                    ? ['Cuando llevas más de 2 min sin avanzar', 'Nunca', 'Siempre en la primera']
                    : ['Descubres fallos por tweets de usuarios', 'Todo funciona en local', 'Tienes logs estructurados'],
                'answer' => $isCert
                    ? 'Cuando llevas más de 2 min sin avanzar'
                    : 'Descubres fallos por tweets de usuarios',
                'explanation' => $isCert
                    ? 'Gestiona el reloj: responde lo seguro primero y vuelve a lo marcado.'
                    : 'Si no tienes métricas/trazas, operas a ciegas.',
                'pro_tip' => $isCert
                    ? 'Repasa los simulacros conclicados de la plataforma antes del día D.'
                    : 'Define SLI/SLO antes de escalar el equipo.',
            ],
        ],
    ];
}

$added = 0;
$target = 8;

foreach (App\CourseCatalog::courses() as $slug => $course) {
    if (($course['status'] ?? '') !== 'available') {
        continue;
    }

    $file = $root . '/app/Data/' . ($course['lessons'] ?? '');
    if (!is_file($file)) {
        echo "Skip {$slug}: lessons file missing\n";
        continue;
    }

    /** @var list<array<string, mixed>> $lessons */
    $lessons = require $file;
    $count = count($lessons);
    if ($count >= $target) {
        continue;
    }

    $existing = array_column($lessons, 'slug');
    $maxOrder = 0;
    foreach ($lessons as $l) {
        $maxOrder = max($maxOrder, (int) ($l['order'] ?? 0));
    }

    $category = (string) ($course['category'] ?? 'fundamentos');
    $runtime = (string) ($course['runtime'] ?? 'php');
    $title = (string) ($course['title'] ?? $slug);
    $need = $target - $count;
    $variant = 0;

    for ($i = 0; $i < $need; $i++) {
        $order = $maxOrder + 1 + $i;
        $lesson = buildLesson($slug, $title, $category, $runtime, $order, $variant);
        $variant++;

        if (in_array($lesson['slug'], $existing, true)) {
            $lesson['slug'] = $lesson['slug'] . '-' . $order;
        }

        $lessons[] = $lesson;
        $existing[] = $lesson['slug'];
        $added++;
    }

    file_put_contents($file, "<?php\n\ndeclare(strict_types=1);\n\nreturn " . var_export($lessons, true) . ";\n");
    echo "Expanded {$slug}: {$count} → " . count($lessons) . "\n";
}

echo "\nAdded {$added} lessons total.\n";
