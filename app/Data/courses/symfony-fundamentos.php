<?php

declare(strict_types=1);

return [
    [
        'slug' => 'sf-intro',
        'order' => 1,
        'title' => 'Introducción a Symfony',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'Componentes, flex y ecosistema enterprise.',
        'concepts' => ['symfony', 'component', 'flex'],
        'sections' => [
            ['heading' => 'Symfony', 'body' => 'Framework PHP modular. Banca, Spotify API, Drupal usan Symfony. Laravel hereda muchos componentes.'],
            ['heading' => 'Symfony Flex', 'body' => 'composer create-project symfony/skeleton — instala solo lo que necesitas.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Symfony vs Laravel en una frase?', 'options' => ['Symfony más modular/enterprise; Laravel más productivo', 'Son el mismo', 'Symfony solo frontend'], 'answer' => 'Symfony más modular/enterprise; Laravel más productivo', 'explanation' => 'Muchos equipos usan ambos en monorepos.', 'pro_tip' => 'Aprender Symfony mejora tu Laravel (HTTP Kernel, EventDispatcher).'],
            ['type' => 'choice', 'question' => '¿Gestor de dependencias PHP?', 'options' => ['Composer', 'npm', 'pip'], 'answer' => 'Composer', 'explanation' => 'Symfony se instala vía Composer.', 'pro_tip' => 'symfony console es como artisan.'],
        ],
    ],
    [
        'slug' => 'sf-routing',
        'order' => 2,
        'title' => 'Routing y controladores',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'Atributos PHP 8, routes y controllers.',
        'concepts' => ['route', 'controller', 'attribute'],
        'sections' => [
            ['heading' => 'Atributos', 'body' => 'Symfony moderno usa atributos PHP 8 en vez de YAML.', 'code' => "#[Route('/api/users', methods: ['GET'])]\npublic function list(): JsonResponse"],
            ['heading' => 'Controller', 'body' => 'Clases delgadas — inyectas servicios por constructor.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo defines rutas en Symfony 6+?', 'options' => ['Atributos PHP #[Route]', 'Solo .htaccess', 'routes.php obligatorio'], 'answer' => 'Atributos PHP #[Route]', 'explanation' => 'YAML sigue disponible pero atributos son estándar.', 'pro_tip' => 'php bin/console debug:router lista rutas.'],
            ['type' => 'contains', 'question' => 'Escribe #[Route con path /hello', 'must_contain' => ['Route', '/hello'], 'hint' => "#[Route('/hello')]", 'explanation' => 'Atributo sobre método del controller.', 'pro_tip' => 'name: genera nombre de ruta para redirectToRoute.'],
        ],
    ],
    [
        'slug' => 'sf-di',
        'order' => 3,
        'title' => 'Dependency Injection Container',
        'level' => 'Core',
        'minutes' => 35,
        'summary' => 'services.yaml, autowire y tags.',
        'concepts' => ['container', 'autowire', 'service'],
        'sections' => [
            ['heading' => 'Container', 'body' => 'config/services.yaml registra servicios. **autowire: true** resuelve tipos automáticamente.'],
            ['heading' => 'Interfaces', 'body' => 'Bind MailerInterface → Symfony Mailer. Mismo patrón que Laravel bindings.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde configuras servicios Symfony?', 'options' => ['config/services.yaml', 'composer.json', 'public/index.php'], 'answer' => 'config/services.yaml', 'explanation' => 'Central de DI del proyecto.', 'pro_tip' => 'php bin/console debug:container lista servicios.'],
            ['type' => 'choice', 'question' => '¿autowire hace...?', 'options' => ['Inyecta dependencias por type-hint automáticamente', 'Borra servicios', 'Compila assets'], 'answer' => 'Inyecta dependencias por type-hint automáticamente', 'explanation' => 'Menos boilerplate en constructores.', 'pro_tip' => 'bind $projectDir: %kernel.project_dir% para parámetros.'],
        ],
    ],
    [
        'slug' => 'sf-doctrine',
        'order' => 4,
        'title' => 'Doctrine ORM',
        'level' => 'Datos',
        'minutes' => 40,
        'summary' => 'Entidades, repositorios y migraciones.',
        'concepts' => ['doctrine', 'entity', 'migration'],
        'sections' => [
            ['heading' => 'Entidades', 'body' => 'Clases PHP mapeadas a tablas con anotaciones/atributos Doctrine.', 'code' => "#[ORM\\Entity]\nclass Product {\n    #[ORM\\Id, ORM\\GeneratedValue]\n    private ?int \$id = null;\n}"],
            ['heading' => 'Migraciones', 'body' => 'php bin/console make:migration && doctrine:migrations:migrate'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿ORM usado por Symfony?', 'options' => ['Doctrine', 'Eloquent', 'SQLAlchemy'], 'answer' => 'Doctrine', 'explanation' => 'Doctrine es el estándar en Symfony.', 'pro_tip' => 'EntityRepository extiende consultas custom.'],
            ['type' => 'choice', 'question' => '¿Comando aplicar migraciones Doctrine?', 'options' => ['doctrine:migrations:migrate', 'artisan migrate', 'flyway'], 'answer' => 'doctrine:migrations:migrate', 'explanation' => 'Equivalente a Laravel migrate.', 'pro_tip' => 'DQL es query language de Doctrine — similar a Eloquent.'],
        ],
    ],
    [
        'slug' => 'sf-forms',
        'order' => 5,
        'title' => 'Formularios y validación',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'FormType, CSRF y constraints.',
        'concepts' => ['form', 'validation', 'csrf'],
        'sections' => [
            ['heading' => 'Form component', 'body' => 'Symfony Forms genera HTML, valida y mapea a entidades — muy potente en admin.'],
            ['heading' => 'Validator', 'body' => '#[Assert\\NotBlank], #[Assert\\Email] — constraints declarativas.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Symfony Forms ventaja?', 'options' => ['Validación + mapeo a entidad integrados', 'Solo decoración', 'Sin CSRF'], 'answer' => 'Validación + mapeo a entidad integrados', 'explanation' => 'Ideal para backoffice complejo.', 'pro_tip' => 'FormType reutilizable entre formularios.'],
            ['type' => 'choice', 'question' => '¿Constraints viven en...?', 'options' => ['Atributos Assert en propiedades', 'Solo JavaScript', 'nginx.conf'], 'answer' => 'Atributos Assert en propiedades', 'explanation' => 'Validación server-side obligatoria.', 'pro_tip' => 'Custom constraint para reglas de negocio.'],
        ],
    ],
    [
        'slug' => 'sf-api',
        'order' => 6,
        'title' => 'API Platform y JSON',
        'level' => 'API',
        'minutes' => 35,
        'summary' => 'APIs REST/GraphQL con mínimo código.',
        'concepts' => ['api-platform', 'serializer', 'rest'],
        'sections' => [
            ['heading' => 'API Platform', 'body' => 'Bundle que expone entidades Doctrine como API REST con paginación, filtros y docs OpenAPI.'],
            ['heading' => 'Serializer', 'body' => 'Symfony Serializer convierte entidades ↔ JSON — controlas grupos de serialización.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿API Platform genera...?', 'options' => ['CRUD REST desde entidades', 'Solo HTML', 'Docker images'], 'answer' => 'CRUD REST desde entidades', 'explanation' => 'Rápido para APIs internas y microservicios.', 'pro_tip' => 'Groups serialization evita filtrar password en JSON.'],
            ['type' => 'choice', 'question' => '¿Documentación API automática?', 'options' => ['OpenAPI / Swagger UI', 'No existe', 'Solo PDF'], 'answer' => 'OpenAPI / Swagger UI', 'explanation' => 'Como FastAPI /docs en Python.', 'pro_tip' => 'API Platform + Mercure para tiempo real.'],
        ],
    ],
];
