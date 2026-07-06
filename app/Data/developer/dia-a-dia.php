<?php

declare(strict_types=1);

return [
    'title' => 'Un día en la vida del developer',
    'subtitle' => 'Qué hace un programador profesional en un día típico — más allá de escribir código.',
    'timeline' => [
        [
            'time' => '09:00',
            'title' => 'Daily standup',
            'icon' => '☕',
            'desc' => 'Reunión corta (15 min): qué hice ayer, qué haré hoy, qué me bloquea.',
            'terms' => ['standup', 'scrum', 'blocker'],
            'skills' => ['Comunicar bloqueos a tiempo', 'Ser conciso'],
        ],
        [
            'time' => '09:30',
            'title' => 'Revisar tickets / backlog',
            'icon' => '📋',
            'desc' => 'Mirar Jira/Linear: priorizar user stories, estimar esfuerzo, aclarar requisitos con el Product Owner.',
            'terms' => ['backlog', 'user-story', 'acceptance-criteria'],
            'skills' => ['Leer requisitos con ojo crítico', 'Preguntar antes de asumir'],
        ],
        [
            'time' => '10:00',
            'title' => 'Code review',
            'icon' => '👀',
            'desc' => 'Revisar Pull Requests de compañeros: lógica, tests, seguridad, legibilidad. Dar feedback constructivo.',
            'terms' => ['pull-request', 'review', 'git'],
            'skills' => ['Feedback respetuoso', 'Detectar bugs antes de producción'],
        ],
        [
            'time' => '11:00',
            'title' => 'Desarrollo (deep work)',
            'icon' => '⌨️',
            'desc' => 'Escribir código, tests y documentación. Rama feature, commits pequeños y descriptivos.',
            'terms' => ['branch', 'commit', 'testing', 'refactor'],
            'skills' => ['Enfocarse sin interrupciones', 'Commits atómicos'],
        ],
        [
            'time' => '13:00',
            'title' => 'Almuerzo + desconexión',
            'icon' => '🍽',
            'desc' => 'Descansar de verdad. Burnout es real en tech.',
            'terms' => [],
            'skills' => ['Work-life balance'],
        ],
        [
            'time' => '14:00',
            'title' => 'Pair programming / debugging',
            'icon' => '🐛',
            'desc' => 'Resolver bug reportado, reproducir en local, leer logs, escribir test que falle, arreglar, PR.',
            'terms' => ['debug', 'logs', 'regression', 'pair-programming'],
            'skills' => ['Leer stack traces', 'Cambiar una cosa a la vez'],
        ],
        [
            'time' => '16:00',
            'title' => 'Reunión técnica / RFC',
            'icon' => '💬',
            'desc' => 'Diseñar solución antes de codear: diagrama, trade-offs, consenso del equipo.',
            'terms' => ['rfc', 'system-design', 'trade-off'],
            'skills' => ['Pensar antes de implementar', 'Documentar decisiones'],
        ],
        [
            'time' => '17:00',
            'title' => 'Deploy y monitoreo',
            'icon' => '🚀',
            'desc' => 'Merge a main, CI pasa, deploy a staging/prod, verificar health check y métricas.',
            'terms' => ['deploy', 'ci', 'healthcheck', 'monitoring'],
            'skills' => ['No deployar los viernes sin guardia', 'Verificar después del deploy'],
        ],
        [
            'time' => '18:00',
            'title' => 'Aprendizaje continuo',
            'icon' => '📚',
            'desc' => 'Leer docs, curso en Escala, experimentar en laboratorio. La tecnología no para.',
            'terms' => ['roadmap'],
            'skills' => ['Aprender algo nuevo cada semana'],
        ],
    ],
    'myths' => [
        ['myth' => 'Solo escribo código todo el día', 'reality' => 'Reuniones, reviews, documentación y debugging ocupan ~40% del tiempo.'],
        ['myth' => 'Debo saberlo todo de memoria', 'reality' => 'Lo normal es googlear, leer docs y preguntar al equipo.'],
        ['myth' => 'Un bug es un fracaso', 'reality' => 'Los bugs son parte del proceso. Lo importante es detectarlos pronto y aprender.'],
        ['myth' => 'Senior = el que más sabe', 'reality' => 'Senior = el que toma mejores decisiones, mentorea y reduce riesgo.'],
    ],
];
