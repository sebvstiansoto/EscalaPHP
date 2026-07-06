<?php

declare(strict_types=1);

return [
    [
        'slug' => 'git-basics',
        'order' => 1,
        'title' => 'Commits e historial',
        'level' => 'Fundamentos',
        'minutes' => 20,
        'summary' => 'init, add, commit y log — la base de Git.',
        'concepts' => ['git', 'commit', 'staging'],
        'sections' => [
            ['heading' => '¿Qué es Git?', 'body' => 'Git guarda **snapshots** de tu código. Cada commit es un punto en el historial al que puedes volver.'],
            ['heading' => 'Flujo básico', 'body' => '`git add` prepara cambios. `git commit` los guarda con un mensaje descriptivo.', 'code' => "git add .\ngit commit -m \"feat: login de usuarios\""],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué comando guarda cambios en el historial de Git?',
                'options' => ['git commit', 'git save', 'git push only'],
                'answer' => 'git commit',
                'explanation' => '`git commit` crea un snapshot permanente en tu repo local.',
                'pro_tip' => 'Mensajes claros: "feat:", "fix:", "docs:" — convención Conventional Commits.',
            ],
            [
                'type' => 'contains',
                'question' => 'Escribe los dos comandos para añadir todo y commitear con mensaje "inicio"',
                'must_contain' => ['git add', 'git commit', 'inicio'],
                'hint' => "git add .\ngit commit -m \"inicio\"",
                'explanation' => 'add + commit es el ritual diario de todo desarrollador.',
                'pro_tip' => 'Commitea seguido y en bloques pequeños — más fácil de revisar.',
            ],
        ],
    ],
    [
        'slug' => 'git-branch',
        'order' => 2,
        'title' => 'Branches y merge',
        'level' => 'Intermedio',
        'minutes' => 25,
        'summary' => 'Ramas feature, merge y resolver conflictos.',
        'concepts' => ['branch', 'merge', 'feature'],
        'sections' => [
            ['heading' => '¿Por qué ramas?', 'body' => 'Las ramas aíslan tu trabajo. `main` queda estable mientras desarrollas en `feature/login`.'],
            ['heading' => 'Crear y fusionar', 'body' => 'Creas rama, trabajas, y fusionas a main cuando está lista.', 'code' => "git checkout -b feature/login\ngit merge feature/login"],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué comando crea y cambia a una rama nueva?',
                'options' => ['git checkout -b feature/x', 'git branch delete', 'git new'],
                'answer' => 'git checkout -b feature/x',
                'explanation' => '`-b` crea la rama y te mueve a ella en un solo paso.',
                'pro_tip' => 'En Git moderno también: `git switch -c feature/x`.',
            ],
            [
                'type' => 'contains',
                'question' => 'Escribe el comando para fusionar la rama feature/login en la rama actual',
                'must_contain' => ['git merge', 'feature/login'],
                'hint' => 'git merge feature/login',
                'explanation' => 'Merge integra el historial de otra rama en la tuya.',
                'pro_tip' => 'Antes de merge, asegúrate de estar en la rama destino (ej. main).',
            ],
        ],
    ],
    [
        'slug' => 'git-pr',
        'order' => 3,
        'title' => 'Pull Requests en GitHub',
        'level' => 'Equipo',
        'minutes' => 25,
        'summary' => 'Code review, CI en PRs y merge seguro.',
        'concepts' => ['pull-request', 'review', 'github'],
        'sections' => [
            ['heading' => 'Pull Request', 'body' => 'Un **PR** propone fusionar tu rama. El equipo revisa código antes de merge a `main`.'],
            ['heading' => 'Flujo en empresa', 'body' => 'Push rama → abrir PR → CI corre tests → review → merge. Nunca directo a main.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Para qué sirve un Pull Request?',
                'options' => ['Revisar código antes de fusionar', 'Borrar el repositorio', 'Compilar PHP'],
                'answer' => 'Revisar código antes de fusionar',
                'explanation' => 'El PR es el punto de control de calidad en equipos.',
                'pro_tip' => 'Un buen PR es pequeño, con descripción clara y tests pasando.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Qué debería pasar automáticamente al abrir un PR?',
                'options' => ['Tests de CI', 'Deploy a producción directo', 'Nada'],
                'answer' => 'Tests de CI',
                'explanation' => 'CI valida que tu cambio no rompe nada antes del merge.',
                'pro_tip' => 'EscalaPHP tiene `.github/workflows/ci.yml` — revísalo como ejemplo real.',
            ],
        ],
    ],
    [
        'slug' => 'git-remote',
        'order' => 4,
        'title' => 'Remotos, push y pull',
        'level' => 'Intermedio',
        'minutes' => 25,
        'summary' => 'origin, fetch, pull y sincronizar con GitHub.',
        'concepts' => ['remote', 'push', 'pull', 'origin'],
        'sections' => [
            ['heading' => 'Repositorio remoto', 'body' => '**origin** apunta a GitHub/GitLab. `git push` sube commits; `git pull` trae cambios del equipo.'],
            ['heading' => 'Flujo diario', 'body' => 'Antes de trabajar: `git pull`. Al terminar: `git push`.', 'code' => "git pull origin main\ngit push origin feature/login"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué comando sube commits al remoto?', 'options' => ['git push', 'git upload', 'git send'], 'answer' => 'git push', 'explanation' => 'push envía tus commits locales a origin.', 'pro_tip' => 'Si push falla, alguien subió antes — haz pull y resuelve.'],
            ['type' => 'contains', 'question' => 'Escribe git pull origin main', 'must_contain' => ['git pull', 'origin', 'main'], 'hint' => 'git pull origin main', 'explanation' => 'pull = fetch + merge del remoto.', 'pro_tip' => 'git fetch solo descarga sin fusionar — más seguro para revisar.'],
        ],
    ],
    [
        'slug' => 'git-conflict',
        'order' => 5,
        'title' => 'Resolver conflictos de merge',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Marcadores <<<<<<, elegir cambios y completar merge.',
        'concepts' => ['conflict', 'merge', 'resolution'],
        'sections' => [
            ['heading' => '¿Por qué conflictos?', 'body' => 'Dos personas editaron las mismas líneas. Git no puede decidir solo — tú eliges.'],
            ['heading' => 'Marcadores', 'body' => '<<<<<<< HEAD\n tu código\n=======\n su código\n>>>>>>> rama', 'code' => "# Edita el archivo, quita marcadores, deja la versión correcta\ngit add archivo.php\ngit commit"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => 'Tras resolver conflictos manualmente, ¿qué sigue?', 'options' => ['git add y git commit', 'git delete', 'Reinstalar Git'], 'answer' => 'git add y git commit', 'explanation' => 'Marcas resuelto con add y completas el merge con commit.', 'pro_tip' => 'VS Code y Cursor tienen UI visual para conflictos.'],
            ['type' => 'choice', 'question' => '¿Cómo evitas muchos conflictos?', 'options' => ['Pull frecuente y PRs pequeños', 'Un solo commit gigante', 'No usar ramas'], 'answer' => 'Pull frecuente y PRs pequeños', 'explanation' => 'Integración continua reduce solapamiento de cambios.', 'pro_tip' => 'Comunica qué archivos tocas en el equipo.'],
        ],
    ],
    [
        'slug' => 'git-stash',
        'order' => 6,
        'title' => 'Stash y trabajo en progreso',
        'level' => 'Intermedio',
        'minutes' => 20,
        'summary' => 'Guardar cambios temporales sin commitear.',
        'concepts' => ['stash', 'wip', 'context-switch'],
        'sections' => [
            ['heading' => 'git stash', 'body' => 'Guardas cambios locales, vuelves a un working tree limpio, cambias de rama, y luego `git stash pop`.'],
            ['heading' => 'Caso real', 'body' => 'Estás en feature/A pero te piden un hotfix urgente en main — stash, switch, fix, pop.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace git stash?', 'options' => ['Guarda cambios sin commit temporalmente', 'Borra el repo', 'Crea una rama nueva'], 'answer' => 'Guarda cambios sin commit temporalmente', 'explanation' => 'Stash es un cajón para WIP (work in progress).', 'pro_tip' => 'git stash list muestra todos los stashes guardados.'],
            ['type' => 'contains', 'question' => 'Escribe git stash y git stash pop', 'must_contain' => ['git stash'], 'hint' => "git stash\ngit stash pop", 'explanation' => 'stash guarda; pop restaura y elimina el stash.', 'pro_tip' => 'Mensaje descriptivo: git stash push -m "wip login"'],
        ],
    ],
    [
        'slug' => 'git-rebase',
        'order' => 7,
        'title' => 'Rebase vs merge',
        'level' => 'Avanzado',
        'minutes' => 30,
        'summary' => 'Historial lineal con rebase interactivo.',
        'concepts' => ['rebase', 'history', 'interactive'],
        'sections' => [
            ['heading' => 'Rebase', 'body' => 'Reaplica tus commits encima de otra rama — historial más limpio que merge.'],
            ['heading' => 'Regla de oro', 'body' => '**Nunca rebase commits ya pusheados** que otros usan. Solo en ramas locales o feature tuyas.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cuándo NO debes hacer rebase?', 'options' => ['Commits compartidos en main remoto', 'Rama local sin push', 'Antes de abrir PR'], 'answer' => 'Commits compartidos en main remoto', 'explanation' => 'Rebase reescribe historial — rompe repos de compañeros.', 'pro_tip' => 'Squash en PR es alternativa segura en GitHub.'],
            ['type' => 'contains', 'question' => 'Escribe git rebase main desde tu rama feature', 'must_contain' => ['git rebase', 'main'], 'hint' => 'git rebase main', 'explanation' => 'Rebase coloca tus commits sobre la punta de main.', 'pro_tip' => 'git rebase -i para squash/editar commits.'],
        ],
    ],
];
