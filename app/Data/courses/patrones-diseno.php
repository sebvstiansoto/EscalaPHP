<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'pt-intro',
    'order' => 1,
    'title' => 'Introducción a patrones de diseño',
    'level' => 'Conceptos',
    'minutes' => 20,
    'summary' => 'Qué es un patrón, GoF y cuándo aplicarlo.',
    'concepts' => 
    array (
      0 => 'pattern',
      1 => 'gof',
      2 => 'reuse',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones',
        'body' => 'Soluciones **reutilizables** a problemas recurrentes en código. No son librerías — son recetas probadas.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-intro\';',
      ),
      1 => 
      array (
        'heading' => 'GoF',
        'body' => 'Gang of Four (1994): creacionales, estructurales, comportamiento. Siguen vigentes en PHP, Python y JS.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué sirve un patrón de diseño?',
        'options' => 
        array (
          0 => 'Resolver problemas comunes con solución probada',
          1 => 'Hacer código más largo siempre',
          2 => 'Reemplazar Git',
        ),
        'answer' => 'Resolver problemas comunes con solución probada',
        'explanation' => 'Vocabulario común entre desarrolladores.',
        'pro_tip' => 'No fuerces patrones — úsalos cuando el dolor es real.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Tres categorías clásicas GoF?',
        'options' => 
        array (
          0 => 'Creacionales, estructurales, comportamiento',
          1 => 'Frontend, backend, DB',
          2 => 'Git, Docker, K8s',
        ),
        'answer' => 'Creacionales, estructurales, comportamiento',
        'explanation' => 'Clasificación estándar desde los 90s.',
        'pro_tip' => 'Laravel usa muchos patrones internamente (Facade, Strategy).',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'pt-singleton',
    'order' => 2,
    'title' => 'Singleton y Factory',
    'level' => 'Creacional',
    'minutes' => 30,
    'summary' => 'Una instancia vs fábricas de objetos.',
    'concepts' => 
    array (
      0 => 'singleton',
      1 => 'factory',
      2 => 'creation',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Singleton',
        'body' => 'Garantiza **una sola instancia** (conexión BD, logger). Cuidado: dificulta tests y estado global.',
        'code' => 'class Logger {
    private static ?self $i = null;
    public static function get(): self {
        return self::$i ??= new self();
    }
}',
      ),
      1 => 
      array (
        'heading' => 'Factory',
        'body' => 'Factory Method / Abstract Factory crean objetos sin acoplar al tipo concreto.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-singleton\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Riesgo principal del Singleton?',
        'options' => 
        array (
          0 => 'Estado global y tests difíciles',
          1 => 'Usa mucha RAM siempre',
          2 => 'Solo funciona en Java',
        ),
        'answer' => 'Estado global y tests difíciles',
        'explanation' => 'En PHP moderno preferimos DI container.',
        'pro_tip' => 'Laravel service container reemplaza muchos singletons manuales.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Factory Method resuelve...?',
        'options' => 
        array (
          0 => 'Crear objetos sin conocer la clase exacta en el cliente',
          1 => 'Borrar objetos',
          2 => 'Compilar CSS',
        ),
        'answer' => 'Crear objetos sin conocer la clase exacta en el cliente',
        'explanation' => 'Desacopla creación de uso.',
        'pro_tip' => 'PaymentGatewayFactory → Stripe o PayPal según config.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'pt-repository',
    'order' => 3,
    'title' => 'Repository y Service Layer',
    'level' => 'Estructural',
    'minutes' => 35,
    'summary' => 'Abstraer persistencia y lógica de negocio.',
    'concepts' => 
    array (
      0 => 'repository',
      1 => 'service',
      2 => 'layer',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Repository',
        'body' => 'Capa entre dominio y BD. `UserRepository::findByEmail()` oculta SQL/Eloquent del resto.',
        'code' => 'interface UserRepositoryInterface {
    public function findByEmail(string $email): ?User;
}',
      ),
      1 => 
      array (
        'heading' => 'Service Layer',
        'body' => 'UserRegistrationService orquesta validación, repo y email — el controller solo delega.',
        'code' => 'interface UserRepository { public function findById(int $id); }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja del Repository?',
        'options' => 
        array (
          0 => 'Cambiar BD o ORM sin tocar toda la app',
          1 => 'Más queries siempre',
          2 => 'Elimina SQL',
        ),
        'answer' => 'Cambiar BD o ORM sin tocar toda la app',
        'explanation' => 'Abstracción de persistencia.',
        'pro_tip' => 'Eloquent ya es medio repository — interface ayuda en apps grandes.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe interface UserRepository con findById',
        'must_contain' => 
        array (
          0 => 'interface',
          1 => 'findById',
        ),
        'hint' => 'interface UserRepository { public function findById(int $id); }',
        'explanation' => 'Contrato que implementa EloquentRepository.',
        'pro_tip' => 'Inyecta interface, no clase concreta — DIP.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'pt-strategy',
    'order' => 4,
    'title' => 'Strategy y Observer',
    'level' => 'Comportamiento',
    'minutes' => 30,
    'summary' => 'Algoritmos intercambiables y eventos.',
    'concepts' => 
    array (
      0 => 'strategy',
      1 => 'observer',
      2 => 'event',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Strategy',
        'body' => 'Encapsulas algoritmos (envío, impuestos, descuento) e intercambias en runtime.',
        'code' => 'interface ShippingStrategy {
    public function cost(Order $o): int;
}',
      ),
      1 => 
      array (
        'heading' => 'Observer',
        'body' => 'Sujeto notifica a observadores — Laravel Events/Listeners es Observer a escala.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-strategy\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Strategy vs if/else gigante?',
        'options' => 
        array (
          0 => 'Strategy abre extensión sin modificar código existente',
          1 => 'if/else siempre mejor',
          2 => 'Son iguales',
        ),
        'answer' => 'Strategy abre extensión sin modificar código existente',
        'explanation' => 'Open/Closed Principle.',
        'pro_tip' => 'Nuevo método de pago = nueva clase Strategy.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Equivalente Laravel de Observer?',
        'options' => 
        array (
          0 => 'Events y Listeners',
          1 => 'Blade only',
          2 => 'Artisan',
        ),
        'answer' => 'Events y Listeners',
        'explanation' => 'event(new UserRegistered($user)) desacopla acciones.',
        'pro_tip' => 'Colas en listeners para email pesado.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'pt-di',
    'order' => 5,
    'title' => 'Inyección de dependencias',
    'level' => 'Arquitectura',
    'minutes' => 35,
    'summary' => 'DIP, constructor injection y contenedores.',
    'concepts' => 
    array (
      0 => 'di',
      1 => 'dip',
      2 => 'container',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'DIP',
        'body' => 'Depende de **abstracciones**, no de implementaciones concretas.',
        'code' => 'public function __construct(
    private MailerInterface $mailer
) {}',
      ),
      1 => 
      array (
        'heading' => 'Container',
        'body' => 'Symfony y Laravel resuelven dependencias automáticamente en constructores.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-di\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Inyección por constructor ventaja?',
        'options' => 
        array (
          0 => 'Dependencias explícitas y testeables',
          1 => 'Oculta dependencias',
          2 => 'Más global state',
        ),
        'answer' => 'Dependencias explícitas y testeables',
        'explanation' => 'Mock MailerInterface en tests fácilmente.',
        'pro_tip' => 'Evita `new Service()` dentro de clases — pide por constructor.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué resuelve el service container?',
        'options' => 
        array (
          0 => 'Instanciar clases y sus dependencias en cadena',
          1 => 'Solo rutas HTTP',
          2 => 'CSS',
        ),
        'answer' => 'Instanciar clases y sus dependencias en cadena',
        'explanation' => 'Autowiring en Symfony/Laravel.',
        'pro_tip' => 'bind() para interfaces → implementación.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'pt-solid',
    'order' => 6,
    'title' => 'Principios SOLID',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'S, O, L, I, D aplicados a PHP real.',
    'concepts' => 
    array (
      0 => 'solid',
      1 => 'srp',
      2 => 'ocp',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SOLID',
        'body' => '**S**ingle responsibility, **O**pen/closed, **L**iskov, **I**nterface segregation, **D**ependency inversion.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-solid\';',
      ),
      1 => 
      array (
        'heading' => 'SRP en práctica',
        'body' => 'Una clase = una razón para cambiar. Controller no envía emails — delega a Listener.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: pt-solid\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Single Responsibility significa...?',
        'options' => 
        array (
          0 => 'Una clase, una responsabilidad',
          1 => 'Un método por archivo',
          2 => 'Un solo usuario',
        ),
        'answer' => 'Una clase, una responsabilidad',
        'explanation' => 'God classes son difíciles de mantener.',
        'pro_tip' => 'Si describes clase con "y", probablemente viola SRP.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Open/Closed?',
        'options' => 
        array (
          0 => 'Abierto a extensión, cerrado a modificación',
          1 => 'Abierto todo el día',
          2 => 'Cerrado a tests',
        ),
        'answer' => 'Abierto a extensión, cerrado a modificación',
        'explanation' => 'Extiende con nuevas clases, no editando viejas.',
        'pro_tip' => 'Strategy y plugins cumplen OCP.',
      ),
    ),
  ),
);
