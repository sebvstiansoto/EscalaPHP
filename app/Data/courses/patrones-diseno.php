<?php

declare(strict_types=1);

return [
    [
        'slug' => 'pt-intro',
        'order' => 1,
        'title' => 'Introducción a patrones de diseño',
        'level' => 'Conceptos',
        'minutes' => 20,
        'summary' => 'Qué es un patrón, GoF y cuándo aplicarlo.',
        'concepts' => ['pattern', 'gof', 'reuse'],
        'sections' => [
            ['heading' => 'Patrones', 'body' => 'Soluciones **reutilizables** a problemas recurrentes en código. No son librerías — son recetas probadas.'],
            ['heading' => 'GoF', 'body' => 'Gang of Four (1994): creacionales, estructurales, comportamiento. Siguen vigentes en PHP, Python y JS.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Para qué sirve un patrón de diseño?', 'options' => ['Resolver problemas comunes con solución probada', 'Hacer código más largo siempre', 'Reemplazar Git'], 'answer' => 'Resolver problemas comunes con solución probada', 'explanation' => 'Vocabulario común entre desarrolladores.', 'pro_tip' => 'No fuerces patrones — úsalos cuando el dolor es real.'],
            ['type' => 'choice', 'question' => '¿Tres categorías clásicas GoF?', 'options' => ['Creacionales, estructurales, comportamiento', 'Frontend, backend, DB', 'Git, Docker, K8s'], 'answer' => 'Creacionales, estructurales, comportamiento', 'explanation' => 'Clasificación estándar desde los 90s.', 'pro_tip' => 'Laravel usa muchos patrones internamente (Facade, Strategy).'],
        ],
    ],
    [
        'slug' => 'pt-singleton',
        'order' => 2,
        'title' => 'Singleton y Factory',
        'level' => 'Creacional',
        'minutes' => 30,
        'summary' => 'Una instancia vs fábricas de objetos.',
        'concepts' => ['singleton', 'factory', 'creation'],
        'sections' => [
            ['heading' => 'Singleton', 'body' => 'Garantiza **una sola instancia** (conexión BD, logger). Cuidado: dificulta tests y estado global.', 'code' => "class Logger {\n    private static ?self \$i = null;\n    public static function get(): self {\n        return self::\$i ??= new self();\n    }\n}"],
            ['heading' => 'Factory', 'body' => 'Factory Method / Abstract Factory crean objetos sin acoplar al tipo concreto.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Riesgo principal del Singleton?', 'options' => ['Estado global y tests difíciles', 'Usa mucha RAM siempre', 'Solo funciona en Java'], 'answer' => 'Estado global y tests difíciles', 'explanation' => 'En PHP moderno preferimos DI container.', 'pro_tip' => 'Laravel service container reemplaza muchos singletons manuales.'],
            ['type' => 'choice', 'question' => '¿Factory Method resuelve...?', 'options' => ['Crear objetos sin conocer la clase exacta en el cliente', 'Borrar objetos', 'Compilar CSS'], 'answer' => 'Crear objetos sin conocer la clase exacta en el cliente', 'explanation' => 'Desacopla creación de uso.', 'pro_tip' => 'PaymentGatewayFactory → Stripe o PayPal según config.'],
        ],
    ],
    [
        'slug' => 'pt-repository',
        'order' => 3,
        'title' => 'Repository y Service Layer',
        'level' => 'Estructural',
        'minutes' => 35,
        'summary' => 'Abstraer persistencia y lógica de negocio.',
        'concepts' => ['repository', 'service', 'layer'],
        'sections' => [
            ['heading' => 'Repository', 'body' => 'Capa entre dominio y BD. `UserRepository::findByEmail()` oculta SQL/Eloquent del resto.', 'code' => "interface UserRepositoryInterface {\n    public function findByEmail(string \$email): ?User;\n}"],
            ['heading' => 'Service Layer', 'body' => 'UserRegistrationService orquesta validación, repo y email — el controller solo delega.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Ventaja del Repository?', 'options' => ['Cambiar BD o ORM sin tocar toda la app', 'Más queries siempre', 'Elimina SQL'], 'answer' => 'Cambiar BD o ORM sin tocar toda la app', 'explanation' => 'Abstracción de persistencia.', 'pro_tip' => 'Eloquent ya es medio repository — interface ayuda en apps grandes.'],
            ['type' => 'contains', 'question' => 'Escribe interface UserRepository con findById', 'must_contain' => ['interface', 'findById'], 'hint' => 'interface UserRepository { public function findById(int $id); }', 'explanation' => 'Contrato que implementa EloquentRepository.', 'pro_tip' => 'Inyecta interface, no clase concreta — DIP.'],
        ],
    ],
    [
        'slug' => 'pt-strategy',
        'order' => 4,
        'title' => 'Strategy y Observer',
        'level' => 'Comportamiento',
        'minutes' => 30,
        'summary' => 'Algoritmos intercambiables y eventos.',
        'concepts' => ['strategy', 'observer', 'event'],
        'sections' => [
            ['heading' => 'Strategy', 'body' => 'Encapsulas algoritmos (envío, impuestos, descuento) e intercambias en runtime.', 'code' => "interface ShippingStrategy {\n    public function cost(Order \$o): int;\n}"],
            ['heading' => 'Observer', 'body' => 'Sujeto notifica a observadores — Laravel Events/Listeners es Observer a escala.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Strategy vs if/else gigante?', 'options' => ['Strategy abre extensión sin modificar código existente', 'if/else siempre mejor', 'Son iguales'], 'answer' => 'Strategy abre extensión sin modificar código existente', 'explanation' => 'Open/Closed Principle.', 'pro_tip' => 'Nuevo método de pago = nueva clase Strategy.'],
            ['type' => 'choice', 'question' => '¿Equivalente Laravel de Observer?', 'options' => ['Events y Listeners', 'Blade only', 'Artisan'], 'answer' => 'Events y Listeners', 'explanation' => 'event(new UserRegistered($user)) desacopla acciones.', 'pro_tip' => 'Colas en listeners para email pesado.'],
        ],
    ],
    [
        'slug' => 'pt-di',
        'order' => 5,
        'title' => 'Inyección de dependencias',
        'level' => 'Arquitectura',
        'minutes' => 35,
        'summary' => 'DIP, constructor injection y contenedores.',
        'concepts' => ['di', 'dip', 'container'],
        'sections' => [
            ['heading' => 'DIP', 'body' => 'Depende de **abstracciones**, no de implementaciones concretas.', 'code' => "public function __construct(\n    private MailerInterface \$mailer\n) {}"],
            ['heading' => 'Container', 'body' => 'Symfony y Laravel resuelven dependencias automáticamente en constructores.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Inyección por constructor ventaja?', 'options' => ['Dependencias explícitas y testeables', 'Oculta dependencias', 'Más global state'], 'answer' => 'Dependencias explícitas y testeables', 'explanation' => 'Mock MailerInterface en tests fácilmente.', 'pro_tip' => 'Evita `new Service()` dentro de clases — pide por constructor.'],
            ['type' => 'choice', 'question' => '¿Qué resuelve el service container?', 'options' => ['Instanciar clases y sus dependencias en cadena', 'Solo rutas HTTP', 'CSS'], 'answer' => 'Instanciar clases y sus dependencias en cadena', 'explanation' => 'Autowiring en Symfony/Laravel.', 'pro_tip' => 'bind() para interfaces → implementación.'],
        ],
    ],
    [
        'slug' => 'pt-solid',
        'order' => 6,
        'title' => 'Principios SOLID',
        'level' => 'Avanzado',
        'minutes' => 35,
        'summary' => 'S, O, L, I, D aplicados a PHP real.',
        'concepts' => ['solid', 'srp', 'ocp'],
        'sections' => [
            ['heading' => 'SOLID', 'body' => '**S**ingle responsibility, **O**pen/closed, **L**iskov, **I**nterface segregation, **D**ependency inversion.'],
            ['heading' => 'SRP en práctica', 'body' => 'Una clase = una razón para cambiar. Controller no envía emails — delega a Listener.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Single Responsibility significa...?', 'options' => ['Una clase, una responsabilidad', 'Un método por archivo', 'Un solo usuario'], 'answer' => 'Una clase, una responsabilidad', 'explanation' => 'God classes son difíciles de mantener.', 'pro_tip' => 'Si describes clase con "y", probablemente viola SRP.'],
            ['type' => 'choice', 'question' => '¿Open/Closed?', 'options' => ['Abierto a extensión, cerrado a modificación', 'Abierto todo el día', 'Cerrado a tests'], 'answer' => 'Abierto a extensión, cerrado a modificación', 'explanation' => 'Extiende con nuevas clases, no editando viejas.', 'pro_tip' => 'Strategy y plugins cumplen OCP.'],
        ],
    ],
];
