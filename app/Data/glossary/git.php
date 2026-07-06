<?php

declare(strict_types=1);

$cat = 'git';

return [
    ['slug' => 'git', 'term' => 'Git', 'category' => $cat, 'definition' => 'Sistema de control de versiones que guarda el historial de cambios en tu código.'],
    ['slug' => 'commit', 'term' => 'Commit', 'category' => $cat, 'definition' => 'Snapshot guardado del código en un momento con mensaje descriptivo.'],
    ['slug' => 'staging', 'term' => 'Staging area', 'category' => $cat, 'definition' => 'Zona intermedia donde preparas archivos antes de hacer commit (git add).'],
    ['slug' => 'branch', 'term' => 'Branch (rama)', 'category' => $cat, 'definition' => 'Línea de desarrollo independiente para trabajar en features sin afectar main.'],
    ['slug' => 'merge', 'term' => 'Merge', 'category' => $cat, 'definition' => 'Unir los cambios de una rama en otra (ej. feature → main).'],
    ['slug' => 'feature', 'term' => 'Feature branch', 'category' => $cat, 'definition' => 'Rama dedicada a una funcionalidad nueva, separada de la rama principal.'],
    ['slug' => 'pull-request', 'term' => 'Pull Request (PR)', 'category' => $cat, 'definition' => 'Solicitud en GitHub para revisar y fusionar cambios de una rama a otra.'],
    ['slug' => 'review', 'term' => 'Code Review', 'category' => $cat, 'definition' => 'Revisión por pares del código antes de mergear. Mejora calidad y comparte conocimiento.'],
    ['slug' => 'github', 'term' => 'GitHub', 'category' => $cat, 'definition' => 'Plataforma que hospeda repositorios Git con PRs, issues, Actions y colaboración.'],
    ['slug' => 'remote', 'term' => 'Remote', 'category' => $cat, 'definition' => 'Repositorio Git en un servidor (GitHub, GitLab). Se sincroniza con push/pull.'],
    ['slug' => 'push', 'term' => 'git push', 'category' => $cat, 'definition' => 'Sube commits locales al repositorio remoto.'],
    ['slug' => 'pull', 'term' => 'git pull', 'category' => $cat, 'definition' => 'Descarga cambios del remoto y los fusiona con tu rama local.'],
    ['slug' => 'origin', 'term' => 'origin', 'category' => $cat, 'definition' => 'Nombre por defecto del repositorio remoto principal.'],
    ['slug' => 'conflict', 'term' => 'Merge conflict', 'category' => $cat, 'definition' => 'Cuando Git no puede fusionar automáticamente porque dos ramas editaron las mismas líneas.'],
    ['slug' => 'resolution', 'term' => 'Conflict resolution', 'category' => $cat, 'definition' => 'Proceso manual de elegir qué cambios conservar al resolver un conflicto de merge.'],
    ['slug' => 'stash', 'term' => 'git stash', 'category' => $cat, 'definition' => 'Guarda cambios temporales sin commit para cambiar de rama y recuperarlos después.'],
    ['slug' => 'wip', 'term' => 'WIP', 'category' => $cat, 'definition' => 'Work In Progress — trabajo incompleto, a menudo en commits o PRs de borrador.'],
    ['slug' => 'context-switch', 'term' => 'Context switch', 'category' => $cat, 'definition' => 'Cambiar de tarea o rama. git stash ayuda a guardar el estado actual.'],
    ['slug' => 'rebase', 'term' => 'Rebase', 'category' => $cat, 'definition' => 'Reaplica commits de una rama sobre otra para un historial lineal más limpio.'],
    ['slug' => 'history', 'term' => 'Historial (history)', 'category' => $cat, 'definition' => 'Cadena de commits que documenta la evolución del proyecto.'],
    ['slug' => 'interactive', 'term' => 'Interactive rebase', 'category' => $cat, 'definition' => 'Rebase que permite reordenar, editar o combinar commits (git rebase -i).'],
    ['slug' => 'clone', 'term' => 'git clone', 'category' => $cat, 'definition' => 'Copia un repositorio remoto completo a tu máquina local.'],
    ['slug' => 'fork', 'term' => 'Fork', 'category' => $cat, 'definition' => 'Copia de un repositorio en tu cuenta de GitHub para contribuir a proyectos ajenos.'],
    ['slug' => 'tag', 'term' => 'Git tag', 'category' => $cat, 'definition' => 'Etiqueta que marca un punto del historial, típicamente una versión (v1.0.0).'],
    ['slug' => 'semver', 'term' => 'SemVer', 'category' => $cat, 'definition' => 'Versionado semántico MAJOR.MINOR.PATCH para comunicar cambios compatibles o breaking.'],
    ['slug' => 'gitignore', 'term' => '.gitignore', 'category' => $cat, 'definition' => 'Archivo que indica a Git qué archivos no versionar: .env, vendor/, node_modules/.'],
    ['slug' => 'cherry-pick', 'term' => 'Cherry-pick', 'category' => $cat, 'definition' => 'Aplicar un commit específico de una rama a otra sin mergear toda la rama.'],
    ['slug' => 'bisect', 'term' => 'git bisect', 'category' => $cat, 'definition' => 'Búsqueda binaria en el historial Git para encontrar el commit que introdujo un bug.'],
    ['slug' => 'blame', 'term' => 'git blame', 'category' => $cat, 'definition' => 'Muestra quién modificó cada línea de un archivo y en qué commit.'],
    ['slug' => 'diff', 'term' => 'git diff', 'category' => $cat, 'definition' => 'Compara cambios entre commits, ramas o working directory.'],
    ['slug' => 'hotfix', 'term' => 'Hotfix', 'category' => $cat, 'definition' => 'Parche urgente en producción, típicamente desde rama hotfix mergeada a main y develop.'],
];
