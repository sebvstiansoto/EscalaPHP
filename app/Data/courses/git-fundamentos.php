<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'git-basics',
    'order' => 1,
    'title' => 'Commits e historial',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'init, add, commit y log — la base de Git.',
    'concepts' => 
    array (
      0 => 'git',
      1 => 'commit',
      2 => 'staging',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es Git?',
        'body' => 'Git guarda **snapshots** de tu código. Cada commit es un punto en el historial al que puedes volver.',
        'code' => 'git add .
git commit -m "inicio"',
      ),
      1 => 
      array (
        'heading' => 'Flujo básico',
        'body' => '`git add` prepara cambios. `git commit` los guarda con un mensaje descriptivo.',
        'code' => 'git add .
git commit -m "feat: login de usuarios"',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando guarda cambios en el historial de Git?',
        'options' => 
        array (
          0 => 'git commit',
          1 => 'git save',
          2 => 'git push only',
        ),
        'answer' => 'git commit',
        'explanation' => '`git commit` crea un snapshot permanente en tu repo local.',
        'pro_tip' => 'Mensajes claros: "feat:", "fix:", "docs:" — convención Conventional Commits.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe los dos comandos para añadir todo y commitear con mensaje "inicio"',
        'must_contain' => 
        array (
          0 => 'git add',
          1 => 'git commit',
          2 => 'inicio',
        ),
        'hint' => 'git add .
git commit -m "inicio"',
        'explanation' => 'add + commit es el ritual diario de todo desarrollador.',
        'pro_tip' => 'Commitea seguido y en bloques pequeños — más fácil de revisar.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'git-branch',
    'order' => 2,
    'title' => 'Branches y merge',
    'level' => 'Intermedio',
    'minutes' => 25,
    'summary' => 'Ramas feature, merge y resolver conflictos.',
    'concepts' => 
    array (
      0 => 'branch',
      1 => 'merge',
      2 => 'feature',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Por qué ramas?',
        'body' => 'Las ramas aíslan tu trabajo. `main` queda estable mientras desarrollas en `feature/login`.',
        'code' => 'git merge feature/login',
      ),
      1 => 
      array (
        'heading' => 'Crear y fusionar',
        'body' => 'Creas rama, trabajas, y fusionas a main cuando está lista.',
        'code' => 'git checkout -b feature/login
git merge feature/login',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando crea y cambia a una rama nueva?',
        'options' => 
        array (
          0 => 'git checkout -b feature/x',
          1 => 'git branch delete',
          2 => 'git new',
        ),
        'answer' => 'git checkout -b feature/x',
        'explanation' => '`-b` crea la rama y te mueve a ella en un solo paso.',
        'pro_tip' => 'En Git moderno también: `git switch -c feature/x`.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe el comando para fusionar la rama feature/login en la rama actual',
        'must_contain' => 
        array (
          0 => 'git merge',
          1 => 'feature/login',
        ),
        'hint' => 'git merge feature/login',
        'explanation' => 'Merge integra el historial de otra rama en la tuya.',
        'pro_tip' => 'Antes de merge, asegúrate de estar en la rama destino (ej. main).',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'git-pr',
    'order' => 3,
    'title' => 'Pull Requests en GitHub',
    'level' => 'Equipo',
    'minutes' => 25,
    'summary' => 'Code review, CI en PRs y merge seguro.',
    'concepts' => 
    array (
      0 => 'pull-request',
      1 => 'review',
      2 => 'github',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pull Request',
        'body' => 'Un **PR** propone fusionar tu rama. El equipo revisa código antes de merge a `main`.',
        'code' => '# Practica: git-pr
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Flujo en empresa',
        'body' => 'Push rama → abrir PR → CI corre tests → review → merge. Nunca directo a main.',
        'code' => '# Practica: git-pr
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué sirve un Pull Request?',
        'options' => 
        array (
          0 => 'Revisar código antes de fusionar',
          1 => 'Borrar el repositorio',
          2 => 'Compilar PHP',
        ),
        'answer' => 'Revisar código antes de fusionar',
        'explanation' => 'El PR es el punto de control de calidad en equipos.',
        'pro_tip' => 'Un buen PR es pequeño, con descripción clara y tests pasando.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué debería pasar automáticamente al abrir un PR?',
        'options' => 
        array (
          0 => 'Tests de CI',
          1 => 'Deploy a producción directo',
          2 => 'Nada',
        ),
        'answer' => 'Tests de CI',
        'explanation' => 'CI valida que tu cambio no rompe nada antes del merge.',
        'pro_tip' => 'EscalaPHP tiene `.github/workflows/ci.yml` — revísalo como ejemplo real.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'git-remote',
    'order' => 4,
    'title' => 'Remotos, push y pull',
    'level' => 'Intermedio',
    'minutes' => 25,
    'summary' => 'origin, fetch, pull y sincronizar con GitHub.',
    'concepts' => 
    array (
      0 => 'remote',
      1 => 'push',
      2 => 'pull',
      3 => 'origin',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Repositorio remoto',
        'body' => '**origin** apunta a GitHub/GitLab. `git push` sube commits; `git pull` trae cambios del equipo.',
        'code' => 'git pull origin main',
      ),
      1 => 
      array (
        'heading' => 'Flujo diario',
        'body' => 'Antes de trabajar: `git pull`. Al terminar: `git push`.',
        'code' => 'git pull origin main
git push origin feature/login',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando sube commits al remoto?',
        'options' => 
        array (
          0 => 'git push',
          1 => 'git upload',
          2 => 'git send',
        ),
        'answer' => 'git push',
        'explanation' => 'push envía tus commits locales a origin.',
        'pro_tip' => 'Si push falla, alguien subió antes — haz pull y resuelve.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe git pull origin main',
        'must_contain' => 
        array (
          0 => 'git pull',
          1 => 'origin',
          2 => 'main',
        ),
        'hint' => 'git pull origin main',
        'explanation' => 'pull = fetch + merge del remoto.',
        'pro_tip' => 'git fetch solo descarga sin fusionar — más seguro para revisar.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'git-conflict',
    'order' => 5,
    'title' => 'Resolver conflictos de merge',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Marcadores <<<<<<, elegir cambios y completar merge.',
    'concepts' => 
    array (
      0 => 'conflict',
      1 => 'merge',
      2 => 'resolution',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Por qué conflictos?',
        'body' => 'Dos personas editaron las mismas líneas. Git no puede decidir solo — tú eliges.',
        'code' => '# Practica: git-conflict
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Marcadores',
        'body' => '<<<<<<< HEAD\\n tu código\\n=======\\n su código\\n>>>>>>> rama',
        'code' => '# Edita el archivo, quita marcadores, deja la versión correcta
git add archivo.php
git commit',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => 'Tras resolver conflictos manualmente, ¿qué sigue?',
        'options' => 
        array (
          0 => 'git add y git commit',
          1 => 'git delete',
          2 => 'Reinstalar Git',
        ),
        'answer' => 'git add y git commit',
        'explanation' => 'Marcas resuelto con add y completas el merge con commit.',
        'pro_tip' => 'VS Code y Cursor tienen UI visual para conflictos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo evitas muchos conflictos?',
        'options' => 
        array (
          0 => 'Pull frecuente y PRs pequeños',
          1 => 'Un solo commit gigante',
          2 => 'No usar ramas',
        ),
        'answer' => 'Pull frecuente y PRs pequeños',
        'explanation' => 'Integración continua reduce solapamiento de cambios.',
        'pro_tip' => 'Comunica qué archivos tocas en el equipo.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'git-stash',
    'order' => 6,
    'title' => 'Stash y trabajo en progreso',
    'level' => 'Intermedio',
    'minutes' => 20,
    'summary' => 'Guardar cambios temporales sin commitear.',
    'concepts' => 
    array (
      0 => 'stash',
      1 => 'wip',
      2 => 'context-switch',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'git stash',
        'body' => 'Guardas cambios locales, vuelves a un working tree limpio, cambias de rama, y luego `git stash pop`.',
        'code' => 'git stash
git stash pop',
      ),
      1 => 
      array (
        'heading' => 'Caso real',
        'body' => 'Estás en feature/A pero te piden un hotfix urgente en main — stash, switch, fix, pop.',
        'code' => 'git stash
git stash pop',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace git stash?',
        'options' => 
        array (
          0 => 'Guarda cambios sin commit temporalmente',
          1 => 'Borra el repo',
          2 => 'Crea una rama nueva',
        ),
        'answer' => 'Guarda cambios sin commit temporalmente',
        'explanation' => 'Stash es un cajón para WIP (work in progress).',
        'pro_tip' => 'git stash list muestra todos los stashes guardados.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe git stash y git stash pop',
        'must_contain' => 
        array (
          0 => 'git stash',
        ),
        'hint' => 'git stash
git stash pop',
        'explanation' => 'stash guarda; pop restaura y elimina el stash.',
        'pro_tip' => 'Mensaje descriptivo: git stash push -m "wip login"',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'git-rebase',
    'order' => 7,
    'title' => 'Rebase vs merge',
    'level' => 'Avanzado',
    'minutes' => 30,
    'summary' => 'Historial lineal con rebase interactivo.',
    'concepts' => 
    array (
      0 => 'rebase',
      1 => 'history',
      2 => 'interactive',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Rebase',
        'body' => 'Reaplica tus commits encima de otra rama — historial más limpio que merge.',
        'code' => 'git rebase main',
      ),
      1 => 
      array (
        'heading' => 'Regla de oro',
        'body' => '**Nunca rebase commits ya pusheados** que otros usan. Solo en ramas locales o feature tuyas.',
        'code' => 'git rebase main',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo NO debes hacer rebase?',
        'options' => 
        array (
          0 => 'Commits compartidos en main remoto',
          1 => 'Rama local sin push',
          2 => 'Antes de abrir PR',
        ),
        'answer' => 'Commits compartidos en main remoto',
        'explanation' => 'Rebase reescribe historial — rompe repos de compañeros.',
        'pro_tip' => 'Squash en PR es alternativa segura en GitHub.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe git rebase main desde tu rama feature',
        'must_contain' => 
        array (
          0 => 'git rebase',
          1 => 'main',
        ),
        'hint' => 'git rebase main',
        'explanation' => 'Rebase coloca tus commits sobre la punta de main.',
        'pro_tip' => 'git rebase -i para squash/editar commits.',
      ),
    ),
  ),
);
