<?php

declare(strict_types=1);

/**
 * Términos referenciados en cursos de Escala (prioridad alta — enlaces desde lecciones).
 */
return [
    // Django REST
    ['slug' => 'drf', 'term' => 'Django REST Framework (DRF)', 'category' => 'python', 'definition' => 'Extensión de Django para construir APIs REST con serializers, viewsets y autenticación.'],
    ['slug' => 'serializer', 'term' => 'Serializer', 'category' => 'python', 'definition' => 'Clase DRF que convierte modelos Django a JSON y valida datos entrantes.'],
    ['slug' => 'modelserializer', 'term' => 'ModelSerializer', 'category' => 'python', 'definition' => 'Serializer DRF generado automáticamente desde un modelo Django con campos y validaciones.'],
    ['slug' => 'viewset', 'term' => 'ViewSet', 'category' => 'python', 'definition' => 'Clase DRF que agrupa acciones CRUD (list, create, retrieve, update, destroy) en un solo lugar.'],
    ['slug' => 'authentication', 'term' => 'Authentication', 'category' => 'backend', 'definition' => 'Capa que verifica la identidad del usuario en una API (token, sesión, OAuth).'],
    ['slug' => 'permission', 'term' => 'Permission', 'category' => 'backend', 'definition' => 'Regla que define si un usuario autenticado puede ejecutar una acción (leer, escribir, borrar).'],
    ['slug' => 'pagination', 'term' => 'Pagination', 'category' => 'backend', 'definition' => 'Dividir resultados en páginas (?page=2&limit=20) para no enviar miles de registros de golpe.'],
    ['slug' => 'search', 'term' => 'Search (búsqueda API)', 'category' => 'backend', 'definition' => 'Filtrar recursos por texto en campos indexados. Ejemplo: ?search=ana en DRF.'],
    ['slug' => 'static', 'term' => 'Static files', 'category' => 'backend', 'definition' => 'Archivos CSS, JS e imágenes servidos sin lógica dinámica. Django: collectstatic + Nginx.'],

    // Nginx
    ['slug' => 'web-server', 'term' => 'Web server', 'category' => 'devops', 'definition' => 'Software que sirve HTTP al mundo (Nginx, Apache). Recibe peticiones y devuelve respuestas.'],
    ['slug' => 'server-block', 'term' => 'Server block', 'category' => 'devops', 'definition' => 'Bloque de configuración Nginx para un dominio o sitio virtual (equivalente a VirtualHost en Apache).'],
    ['slug' => 'location', 'term' => 'location (Nginx)', 'category' => 'devops', 'definition' => 'Directiva Nginx que define reglas para una URL o patrón de ruta (/api, /static).'],
    ['slug' => 'directive', 'term' => 'Directiva (Nginx)', 'category' => 'devops', 'definition' => 'Instrucción de configuración en Nginx: listen, root, proxy_pass, etc.'],
    ['slug' => 'fastcgi', 'term' => 'FastCGI', 'category' => 'devops', 'definition' => 'Protocolo que conecta Nginx con PHP-FPM para ejecutar PHP de forma eficiente.'],
    ['slug' => 'pool', 'term' => 'Pool (PHP-FPM)', 'category' => 'devops', 'definition' => 'Grupo de procesos PHP-FPM que atienden peticiones. Se configura en www.conf (pm.max_children).'],
    ['slug' => 'letsencrypt', 'term' => 'Let\'s Encrypt', 'category' => 'devops', 'definition' => 'Autoridad certificadora gratuita para HTTPS. Certbot renueva certificados automáticamente.'],
    ['slug' => 'proxy_pass', 'term' => 'proxy_pass', 'category' => 'devops', 'definition' => 'Directiva Nginx que reenvía peticiones a otro servidor upstream (backend, app Node).'],
    ['slug' => 'upstream', 'term' => 'Upstream', 'category' => 'devops', 'definition' => 'Grupo de servidores backend detrás de Nginx para balanceo y failover.'],
    ['slug' => 'load-balance', 'term' => 'Load balancing', 'category' => 'devops', 'definition' => 'Distribuir tráfico entre varios servidores para escalar y evitar sobrecarga.'],
    ['slug' => 'reload', 'term' => 'nginx reload', 'category' => 'devops', 'definition' => 'Recargar configuración de Nginx sin cortar conexiones activas: nginx -s reload.'],

    // Symfony
    ['slug' => 'flex', 'term' => 'Symfony Flex', 'category' => 'php', 'definition' => 'Herramienta que instala y configura paquetes Symfony automáticamente vía Composer.'],
    ['slug' => 'attribute', 'term' => 'PHP Attribute', 'category' => 'php', 'definition' => 'Metadatos en código PHP 8+ (#[Route(\'/api\')]). Symfony los usa para rutas y validación.'],
    ['slug' => 'autowire', 'term' => 'Autowire', 'category' => 'php', 'definition' => 'Symfony inyecta dependencias automáticamente en constructores sin configurarlas manualmente.'],
    ['slug' => 'doctrine', 'term' => 'Doctrine ORM', 'category' => 'php', 'definition' => 'ORM estándar de Symfony/PHP para mapear clases a tablas SQL con entidades y repositorios.'],
    ['slug' => 'entity', 'term' => 'Entity (entidad)', 'category' => 'php', 'definition' => 'Clase PHP que representa una tabla en Doctrine. Anotaciones o attributes definen columnas.'],
    ['slug' => 'form', 'term' => 'Form (formulario)', 'category' => 'frontend', 'definition' => 'Elemento HTML <form> para capturar datos. En Symfony: Form component con validación y CSRF.'],
    ['slug' => 'api-platform', 'term' => 'API Platform', 'category' => 'php', 'definition' => 'Framework Symfony que genera APIs REST/GraphQL automáticamente desde entidades Doctrine.'],

    // Patrones de diseño
    ['slug' => 'pattern', 'term' => 'Patrón de diseño', 'category' => 'patrones', 'definition' => 'Solución probada y reutilizable a un problema recurrente de arquitectura de software.'],
    ['slug' => 'gof', 'term' => 'GoF (Gang of Four)', 'category' => 'patrones', 'definition' => 'Autores del libro clásico de 1994 que catalogó 23 patrones: creacionales, estructurales y de comportamiento.'],
    ['slug' => 'singleton', 'term' => 'Singleton', 'category' => 'patrones', 'definition' => 'Patrón creacional: una sola instancia de una clase en toda la aplicación (ej. conexión DB).'],
    ['slug' => 'factory', 'term' => 'Factory', 'category' => 'patrones', 'definition' => 'Patrón creacional: delega la creación de objetos a una clase fábrica sin exponer la lógica al cliente.'],
    ['slug' => 'creation', 'term' => 'Patrones creacionales', 'category' => 'patrones', 'definition' => 'Patrones que abstraen el proceso de instanciar objetos: Singleton, Factory, Builder, Prototype.'],
    ['slug' => 'repository', 'term' => 'Repository', 'category' => 'patrones', 'definition' => 'Patrón que encapsula acceso a datos detrás de una interfaz, ocultando SQL u ORM al resto de la app.'],
    ['slug' => 'layer', 'term' => 'Capa (layer)', 'category' => 'patrones', 'definition' => 'División lógica del código: presentación, dominio, infraestructura. Cada capa tiene responsabilidad clara.'],
    ['slug' => 'strategy', 'term' => 'Strategy', 'category' => 'patrones', 'definition' => 'Patrón de comportamiento: intercambia algoritmos en runtime sin cambiar el código cliente.'],
    ['slug' => 'observer', 'term' => 'Observer', 'category' => 'patrones', 'definition' => 'Patrón donde objetos suscritos reciben notificación automática cuando cambia el sujeto observado.'],
    ['slug' => 'event', 'term' => 'Event (patrón)', 'category' => 'patrones', 'definition' => 'Señal de que algo ocurrió en el sistema. Los listeners reaccionan sin acoplar componentes.'],
    ['slug' => 'dip', 'term' => 'DIP', 'category' => 'patrones', 'definition' => 'Dependency Inversion Principle: depender de abstracciones, no de implementaciones concretas.'],
    ['slug' => 'srp', 'term' => 'SRP', 'category' => 'patrones', 'definition' => 'Single Responsibility Principle: una clase debe tener una sola razón para cambiar.'],
    ['slug' => 'ocp', 'term' => 'OCP', 'category' => 'patrones', 'definition' => 'Open/Closed Principle: abierto a extensión, cerrado a modificación.'],
    ['slug' => 'adapter', 'term' => 'Adapter', 'category' => 'patrones', 'definition' => 'Patrón estructural: convierte la interfaz de una clase en otra que el cliente espera.'],
    ['slug' => 'decorator', 'term' => 'Decorator', 'category' => 'patrones', 'definition' => 'Patrón que añade comportamiento a un objeto envolviéndolo sin modificar su clase original.'],
    ['slug' => 'facade', 'term' => 'Facade', 'category' => 'patrones', 'definition' => 'Interfaz simplificada a un subsistema complejo. Laravel Facades son un ejemplo.'],
    ['slug' => 'builder', 'term' => 'Builder', 'category' => 'patrones', 'definition' => 'Patrón creacional: construye objetos complejos paso a paso con una API fluida.'],
];
