<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'sf-intro',
    'order' => 1,
    'title' => 'Introducción a Symfony',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Componentes, flex y ecosistema enterprise.',
    'concepts' => 
    array (
      0 => 'symfony',
      1 => 'component',
      2 => 'flex',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Symfony',
        'body' => 'Framework PHP modular. Banca, Spotify API, Drupal usan Symfony. Laravel hereda muchos componentes.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sf-intro\';',
      ),
      1 => 
      array (
        'heading' => 'Symfony Flex',
        'body' => 'composer create-project symfony/skeleton — instala solo lo que necesitas.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sf-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Symfony vs Laravel en una frase?',
        'options' => 
        array (
          0 => 'Symfony más modular/enterprise; Laravel más productivo',
          1 => 'Son el mismo',
          2 => 'Symfony solo frontend',
        ),
        'answer' => 'Symfony más modular/enterprise; Laravel más productivo',
        'explanation' => 'Muchos equipos usan ambos en monorepos.',
        'pro_tip' => 'Aprender Symfony mejora tu Laravel (HTTP Kernel, EventDispatcher).',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Gestor de dependencias PHP?',
        'options' => 
        array (
          0 => 'Composer',
          1 => 'npm',
          2 => 'pip',
        ),
        'answer' => 'Composer',
        'explanation' => 'Symfony se instala vía Composer.',
        'pro_tip' => 'symfony console es como artisan.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'sf-routing',
    'order' => 2,
    'title' => 'Routing y controladores',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Atributos PHP 8, routes y controllers.',
    'concepts' => 
    array (
      0 => 'route',
      1 => 'controller',
      2 => 'attribute',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Atributos',
        'body' => 'Symfony moderno usa atributos PHP 8 en vez de YAML.',
        'code' => '#[Route(\'/api/users\', methods: [\'GET\'])]
public function list(): JsonResponse',
      ),
      1 => 
      array (
        'heading' => 'Controller',
        'body' => 'Clases delgadas — inyectas servicios por constructor.',
        'code' => '#[Route(\'/hello\')]',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo defines rutas en Symfony 6+?',
        'options' => 
        array (
          0 => 'Atributos PHP #[Route]',
          1 => 'Solo .htaccess',
          2 => 'routes.php obligatorio',
        ),
        'answer' => 'Atributos PHP #[Route]',
        'explanation' => 'YAML sigue disponible pero atributos son estándar.',
        'pro_tip' => 'php bin/console debug:router lista rutas.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe #[Route con path /hello',
        'must_contain' => 
        array (
          0 => 'Route',
          1 => '/hello',
        ),
        'hint' => '#[Route(\'/hello\')]',
        'explanation' => 'Atributo sobre método del controller.',
        'pro_tip' => 'name: genera nombre de ruta para redirectToRoute.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'sf-di',
    'order' => 3,
    'title' => 'Dependency Injection Container',
    'level' => 'Core',
    'minutes' => 35,
    'summary' => 'services.yaml, autowire y tags.',
    'concepts' => 
    array (
      0 => 'container',
      1 => 'autowire',
      2 => 'service',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Container',
        'body' => 'config/services.yaml registra servicios. **autowire: true** resuelve tipos automáticamente.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sf-di\';',
      ),
      1 => 
      array (
        'heading' => 'Interfaces',
        'body' => 'Bind MailerInterface → Symfony Mailer. Mismo patrón que Laravel bindings.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sf-di\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde configuras servicios Symfony?',
        'options' => 
        array (
          0 => 'config/services.yaml',
          1 => 'composer.json',
          2 => 'public/index.php',
        ),
        'answer' => 'config/services.yaml',
        'explanation' => 'Central de DI del proyecto.',
        'pro_tip' => 'php bin/console debug:container lista servicios.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿autowire hace...?',
        'options' => 
        array (
          0 => 'Inyecta dependencias por type-hint automáticamente',
          1 => 'Borra servicios',
          2 => 'Compila assets',
        ),
        'answer' => 'Inyecta dependencias por type-hint automáticamente',
        'explanation' => 'Menos boilerplate en constructores.',
        'pro_tip' => 'bind $projectDir: %kernel.project_dir% para parámetros.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'sf-doctrine',
    'order' => 4,
    'title' => 'Doctrine ORM',
    'level' => 'Datos',
    'minutes' => 40,
    'summary' => 'Entidades, repositorios y migraciones.',
    'concepts' => 
    array (
      0 => 'doctrine',
      1 => 'entity',
      2 => 'migration',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Entidades',
        'body' => 'Clases PHP mapeadas a tablas con anotaciones/atributos Doctrine.',
        'code' => '#[ORM\\Entity]
class Product {
    #[ORM\\Id, ORM\\GeneratedValue]
    private ?int $id = null;
}',
      ),
      1 => 
      array (
        'heading' => 'Migraciones',
        'body' => 'php bin/console make:migration && doctrine:migrations:migrate',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sf-doctrine\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ORM usado por Symfony?',
        'options' => 
        array (
          0 => 'Doctrine',
          1 => 'Eloquent',
          2 => 'SQLAlchemy',
        ),
        'answer' => 'Doctrine',
        'explanation' => 'Doctrine es el estándar en Symfony.',
        'pro_tip' => 'EntityRepository extiende consultas custom.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Comando aplicar migraciones Doctrine?',
        'options' => 
        array (
          0 => 'doctrine:migrations:migrate',
          1 => 'artisan migrate',
          2 => 'flyway',
        ),
        'answer' => 'doctrine:migrations:migrate',
        'explanation' => 'Equivalente a Laravel migrate.',
        'pro_tip' => 'DQL es query language de Doctrine — similar a Eloquent.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'sf-forms',
    'order' => 5,
    'title' => 'Formularios y validación',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'FormType, CSRF y constraints.',
    'concepts' => 
    array (
      0 => 'form',
      1 => 'validation',
      2 => 'csrf',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Form component',
        'body' => 'Symfony Forms genera HTML, valida y mapea a entidades — muy potente en admin.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sf-forms\';',
      ),
      1 => 
      array (
        'heading' => 'Validator',
        'body' => '#[Assert\\NotBlank], #[Assert\\Email] — constraints declarativas.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sf-forms\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Symfony Forms ventaja?',
        'options' => 
        array (
          0 => 'Validación + mapeo a entidad integrados',
          1 => 'Solo decoración',
          2 => 'Sin CSRF',
        ),
        'answer' => 'Validación + mapeo a entidad integrados',
        'explanation' => 'Ideal para backoffice complejo.',
        'pro_tip' => 'FormType reutilizable entre formularios.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Constraints viven en...?',
        'options' => 
        array (
          0 => 'Atributos Assert en propiedades',
          1 => 'Solo JavaScript',
          2 => 'nginx.conf',
        ),
        'answer' => 'Atributos Assert en propiedades',
        'explanation' => 'Validación server-side obligatoria.',
        'pro_tip' => 'Custom constraint para reglas de negocio.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'sf-api',
    'order' => 6,
    'title' => 'API Platform y JSON',
    'level' => 'API',
    'minutes' => 35,
    'summary' => 'APIs REST/GraphQL con mínimo código.',
    'concepts' => 
    array (
      0 => 'api-platform',
      1 => 'serializer',
      2 => 'rest',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'API Platform',
        'body' => 'Bundle que expone entidades Doctrine como API REST con paginación, filtros y docs OpenAPI.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sf-api\';',
      ),
      1 => 
      array (
        'heading' => 'Serializer',
        'body' => 'Symfony Serializer convierte entidades ↔ JSON — controlas grupos de serialización.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: sf-api\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿API Platform genera...?',
        'options' => 
        array (
          0 => 'CRUD REST desde entidades',
          1 => 'Solo HTML',
          2 => 'Docker images',
        ),
        'answer' => 'CRUD REST desde entidades',
        'explanation' => 'Rápido para APIs internas y microservicios.',
        'pro_tip' => 'Groups serialization evita filtrar password en JSON.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Documentación API automática?',
        'options' => 
        array (
          0 => 'OpenAPI / Swagger UI',
          1 => 'No existe',
          2 => 'Solo PDF',
        ),
        'answer' => 'OpenAPI / Swagger UI',
        'explanation' => 'Como FastAPI /docs en Python.',
        'pro_tip' => 'API Platform + Mercure para tiempo real.',
      ),
    ),
  ),
);
