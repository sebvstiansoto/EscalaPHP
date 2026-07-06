<?php

declare(strict_types=1);

return [
    [
        'slug' => 'bienvenida',
        'order' => 1,
        'title' => 'Bienvenida: tu primera línea de PHP',
        'level' => 'Fundamentos',
        'minutes' => 15,
        'summary' => 'Qué es programar, qué es PHP y cómo funciona una página web.',
        'concepts' => ['programa', 'servidor', 'php', 'echo'],
        'sections' => [
            [
                'heading' => '¿Qué estás aprendiendo aquí?',
                'body' => 'No solo sintaxis. Vas a aprender cómo se construye software que aguanta **miles de usuarios**: rutas, base de datos, caché y buenas prácticas. Esta misma app es tu laboratorio.',
            ],
            [
                'heading' => '¿Qué es PHP?',
                'body' => 'PHP es un lenguaje que corre en el **servidor** (una computadora en internet). Cuando alguien visita tu web, el servidor ejecuta PHP y devuelve HTML al navegador.',
            ],
            [
                'heading' => 'Tu primera instrucción',
                'body' => 'La función `echo` muestra texto. En PHP cada instrucción termina con punto y coma `;`.',
                'code' => "<?php\necho 'Hola, EscalaPHP';",
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Dónde se ejecuta normalmente PHP en una app web?',
                'options' => ['En el navegador del usuario', 'En el servidor', 'En la base de datos'],
                'answer' => 'En el servidor',
                'explanation' => 'PHP se ejecuta en el **servidor** y le envía HTML ya listo al navegador. Por eso el visitante nunca ve tu código PHP: solo ve el resultado.',
                'pro_tip' => 'Este modelo (servidor procesa, navegador muestra) es la base de casi toda la web. Entenderlo te ahorrará confusiones más adelante.',
            ],
            [
                'type' => 'code',
                'question' => 'Escribe código que imprima exactamente: Aprendiendo a escalar',
                'hint' => "Usa echo con comillas simples.",
                'starter' => "echo ",
                'expected_output' => 'Aprendiendo a escalar',
                'explanation' => '`echo` envía texto a la salida y el `;` cierra la instrucción. Acabas de ejecutar tu primer código PHP en un servidor real.',
                'pro_tip' => 'En apps grandes casi nunca usas echo directo: se usan plantillas. Pero por dentro, todo termina en instrucciones como esta.',
            ],
        ],
    ],
    [
        'slug' => 'variables',
        'order' => 2,
        'title' => 'Variables y tipos de datos',
        'level' => 'Fundamentos',
        'minutes' => 20,
        'summary' => 'Guardar información en memoria: strings, números y booleanos.',
        'concepts' => ['variable', 'string', 'integer', 'boolean'],
        'sections' => [
            [
                'heading' => 'Variables',
                'body' => 'Una **variable** es una caja con nombre. En PHP empiezan con `$`: `$nombre = "Ana";`',
            ],
            [
                'heading' => 'Tipos básicos',
                'body' => '**string** (texto), **int** (entero), **float** (decimal), **bool** (true/false). PHP infiere el tipo automáticamente.',
                'code' => "<?php\n\$usuarios = 1500;\n\$activo = true;\n\$plan = 'pro';",
            ],
            [
                'heading' => '¿Por qué importa a escala?',
                'body' => 'Cuando tienes millones de registros, elegir el tipo correcto y no guardar datos redundantes **ahorra memoria y dinero** en servidores.',
            ],
        ],
        'exercises' => [
            [
                'type' => 'contains',
                'question' => 'Crea una variable $precio con valor 99 y haz echo de $precio',
                'must_contain' => ['$precio', '99', 'echo'],
                'hint' => 'Ejemplo: $precio = 99; echo $precio;',
                'explanation' => 'Guardaste un valor en una variable y luego lo mostraste. Ese ciclo (guardar → usar) es el corazón de cualquier programa.',
                'pro_tip' => 'Usa nombres claros como `$precioTotal` en vez de `$p`. En equipos grandes, un buen nombre vale más que un comentario.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Cuál es un booleano válido en PHP?',
                'options' => ['true', 'yes', 'verdadero'],
                'answer' => 'true',
                'explanation' => 'En PHP los booleanos son exactamente `true` y `false` (en inglés, sin comillas). `yes` o `verdadero` serían solo texto.',
                'pro_tip' => 'Los booleanos controlan decisiones (`if`). Dominarlos te prepara para la lógica de la siguiente lección.',
            ],
        ],
    ],
    [
        'slug' => 'condiciones',
        'order' => 3,
        'title' => 'Condiciones y bucles',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'Tomar decisiones y repetir tareas automáticamente.',
        'concepts' => ['if', 'foreach', 'for'],
        'sections' => [
            [
                'heading' => 'if / else',
                'body' => 'Ejecuta código solo cuando se cumple una condición.',
                'code' => "<?php\n\$carga = 85;\nif (\$carga > 80) {\n    echo 'Activar caché';\n}",
            ],
            [
                'heading' => 'foreach',
                'body' => 'Recorre listas. Esencial para procesar resultados de base de datos.',
                'code' => "<?php\n\$planes = ['free', 'pro', 'enterprise'];\nforeach (\$planes as \$plan) {\n    echo \$plan;\n}",
            ],
        ],
        'exercises' => [
            [
                'type' => 'code',
                'question' => 'Imprime "ok" si $edad es mayor o igual a 18, si no imprime "menor"',
                'starter' => "\$edad = 20;\n",
                'expected_output' => 'ok',
                'hint' => 'Usa if ($edad >= 18) { echo "ok"; } else { echo "menor"; }',
                'explanation' => 'Tomaste una **decisión** con if/else. Así es como un servidor decide qué mostrar según condiciones reales.',
                'pro_tip' => 'A escala, millones de if/else se ejecutan por segundo. Por eso luego usamos caché para no repetir decisiones costosas.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Qué bucle recorre cada elemento de un array?',
                'options' => ['foreach', 'for each', 'loop'],
                'answer' => 'foreach',
                'explanation' => '**foreach** es el bucle estándar para arrays en PHP.',
                'pro_tip' => 'Cuando lees de una BD, casi siempre recorres resultados con foreach.',
            ],
        ],
    ],
    [
        'slug' => 'funciones',
        'order' => 4,
        'title' => 'Funciones y arrays',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'Reutilizar lógica y manejar listas de datos.',
        'concepts' => ['funcion', 'array'],
        'sections' => [
            [
                'heading' => 'Funciones',
                'body' => 'Una función agrupa pasos con un nombre. Evita duplicar código en proyectos grandes.',
                'code' => "<?php\nfunction saludar(string \$nombre): string {\n    return 'Hola ' . \$nombre;\n}",
            ],
            [
                'heading' => 'Arrays',
                'body' => 'Lista ordenada de valores. A escala, casi todo viene como array desde la BD o una API.',
                'code' => "<?php\n\$metricas = ['requests' => 12000, 'errores' => 3];",
            ],
        ],
        'exercises' => [
            [
                'type' => 'contains',
                'question' => 'Define function duplicar($n) que retorne $n * 2 y haz echo de duplicar(21)',
                'must_contain' => ['function duplicar', 'return', 'echo'],
                'hint' => 'function duplicar($n) { return $n * 2; } echo duplicar(21);',
                'explanation' => 'Creaste una función reutilizable. En proyectos grandes, cada función hace **una cosa** y se usa en muchos sitios.',
                'pro_tip' => 'Duplicar código es el enemigo #1 de equipos grandes. Si copias-pegas 3 veces, crea una función.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Cómo se define un array en PHP?',
                'options' => ['$items = ["a", "b"];', 'array = {a, b}', 'list(a, b)'],
                'answer' => '$items = ["a", "b"];',
                'explanation' => 'Los arrays en PHP usan corchetes `[]` o la función `array()`.',
                'pro_tip' => 'Los arrays asociativos `$user["name"]` son muy comunes en APIs y BD.',
            ],
        ],
    ],
    [
        'slug' => 'http',
        'order' => 5,
        'title' => 'HTTP: cómo habla el navegador con tu app',
        'level' => 'Web',
        'minutes' => 20,
        'summary' => 'Peticiones GET, POST, códigos de estado y rutas.',
        'concepts' => ['http', 'get', 'post', 'ruta'],
        'sections' => [
            [
                'heading' => 'HTTP en simple',
                'body' => 'El navegador **pide** (request) y el servidor **responde** (response). GET lee; POST envía datos (formularios).',
            ],
            [
                'heading' => 'Rutas',
                'body' => 'Cada URL es una ruta. En esta app `/` es inicio, `/leccion` muestra lecciones, `/glosario` el diccionario.',
            ],
            [
                'heading' => 'Códigos de estado',
                'body' => '200 = OK, 404 = no encontrado, 500 = error del servidor. A escala, monitorear estos números es crítico.',
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué método HTTP usarías para enviar un formulario de registro?',
                'options' => ['GET', 'POST', 'DELETE'],
                'answer' => 'POST',
                'explanation' => '**POST** envía datos en el cuerpo de la petición, no en la URL. Es el estándar para formularios y crear registros.',
                'pro_tip' => 'Nunca envíes contraseñas con GET — quedarían visibles en la URL y en logs del servidor.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Qué código indica "página no encontrada"?',
                'options' => ['200', '404', '301'],
                'answer' => '404',
                'explanation' => '**404** = el servidor no encontró lo que pediste. EscalaPHP muestra una página 404 cuando la ruta no existe.',
                'pro_tip' => 'Monitorea los 404 en producción: muchos 404 en la misma URL pueden indicar un enlace roto o un ataque.',
            ],
        ],
    ],
    [
        'slug' => 'mvc',
        'order' => 6,
        'title' => 'MVC: organizar código como un senior',
        'level' => 'Arquitectura',
        'minutes' => 30,
        'summary' => 'Modelo, Vista, Controlador — la base de Laravel y Symfony.',
        'concepts' => ['mvc', 'controlador', 'vista', 'modelo'],
        'sections' => [
            [
                'heading' => 'El problema sin estructura',
                'body' => 'Si mezclas HTML, SQL y lógica en un solo archivo, el proyecto se vuelve imposible de mantener con 50 desarrolladores.',
            ],
            [
                'heading' => 'MVC',
                'body' => '**Modelo**: datos (usuarios, lecciones). **Vista**: HTML que ve el usuario. **Controlador**: coordina todo.',
            ],
            [
                'heading' => 'En EscalaPHP',
                'body' => 'Mira la carpeta `app/Controllers` (controladores), `resources/views` (vistas) y `app/Database.php` (acceso a datos). ¡Estás dentro de un MVC real!',
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué capa muestra HTML al usuario?',
                'options' => ['Modelo', 'Vista', 'Controlador'],
                'answer' => 'Vista',
                'explanation' => 'La **Vista** es HTML puro (o plantillas). El usuario solo ve esto — nunca ve PHP ni SQL directamente.',
                'pro_tip' => 'En Laravel las vistas usan Blade. En EscalaPHP están en resources/views/. Mismo concepto.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Qué capa decide qué hacer con una petición HTTP?',
                'options' => ['Modelo', 'Vista', 'Controlador'],
                'answer' => 'Controlador',
                'explanation' => 'El **Controlador** recibe la petición, pide datos al Modelo, y elige qué Vista mostrar. Es el director de orquesta.',
                'pro_tip' => 'Mantén controladores delgados: si tiene más de 30 líneas, probablemente necesita refactor.',
            ],
        ],
    ],
    [
        'slug' => 'base-de-datos',
        'order' => 7,
        'title' => 'Base de datos: SQLite y persistencia',
        'level' => 'Datos',
        'minutes' => 30,
        'summary' => 'Guardar progreso, consultas SQL y por qué la BD suele ser el cuello de botella.',
        'concepts' => ['sql', 'sqlite', 'tabla', 'consulta'],
        'sections' => [
            [
                'heading' => '¿Por qué base de datos?',
                'body' => 'La memoria del PHP se borra al terminar la petición. Para guardar usuarios, pedidos o progreso necesitas una **base de datos**.',
            ],
            [
                'heading' => 'SQLite en esta app',
                'body' => 'Tu progreso vive en `database/escala.sqlite`. En producción a gran escala se usa PostgreSQL o MySQL, pero SQL es el mismo concepto.',
                'code' => "SELECT lesson_slug, completed FROM progress WHERE session_id = '...';",
            ],
            [
                'heading' => 'Escala',
                'body' => 'Un senior optimiza **índices**, evita consultas N+1 y usa réplicas de lectura. La BD es donde más se nota una mala arquitectura.',
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué comando SQL lee filas de una tabla?',
                'options' => ['SELECT', 'SEND', 'SHOW'],
                'answer' => 'SELECT',
                'explanation' => '**SELECT** lee datos. INSERT crea, UPDATE modifica, DELETE borra. SELECT es el que más usarás.',
                'pro_tip' => 'Un SELECT lento puede tumbar toda tu app. Siempre revisa que tus tablas tengan índices en columnas de búsqueda.',
            ],
            [
                'type' => 'contains',
                'question' => 'Escribe una consulta SQL que seleccione todo de una tabla llamada users',
                'must_contain' => ['SELECT', 'users'],
                'hint' => 'SELECT * FROM users',
                'explanation' => 'SELECT * trae todas las columnas. En producción evita * y pide solo las columnas que necesitas — es más rápido.',
                'pro_tip' => 'Esta app usa PDO con consultas preparadas. Nunca concatenes input del usuario en SQL.',
            ],
        ],
    ],
    [
        'slug' => 'cache',
        'order' => 8,
        'title' => 'Caché: responder sin repetir trabajo',
        'level' => 'Escala',
        'minutes' => 25,
        'summary' => 'Guardar resultados temporales para ir 10x más rápido.',
        'concepts' => ['cache', 'redis', 'ttl'],
        'sections' => [
            [
                'heading' => 'Analogía',
                'body' => 'Calcular algo costoso cada vez es como cocinar desde cero por cada plato. La **caché** guarda el resultado listo por un tiempo (TTL).',
            ],
            [
                'heading' => 'En esta app',
                'body' => 'La clase `App\\Cache` guarda archivos JSON en `storage/cache/`. En producción se usa **Redis** o **Memcached** compartido entre servidores.',
                'code' => "<?php\n\$cache->set('lecciones', \$data, 3600);\n\$data = \$cache->get('lecciones');",
            ],
            [
                'heading' => 'Cuándo cachear',
                'body' => 'Datos que cambian poco y se leen mucho: catálogo de productos, configuración, listados públicos.',
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué problema resuelve principalmente la caché?',
                'options' => [
                    'Evitar repetir cálculos o consultas costosas',
                    'Reemplazar la base de datos permanentemente',
                    'Cifrar contraseñas',
                ],
                'answer' => 'Evitar repetir cálculos o consultas costosas',
                'explanation' => 'La caché guarda resultados ya calculados. La próxima vez responde al instante sin volver a trabajar.',
                'pro_tip' => 'Facebook cachea casi todo. Wikipedia usa Varnish. Redis es el estándar en PHP moderno.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Qué sistema suele usarse como caché en memoria en PHP?',
                'options' => ['Redis', 'Excel', 'FTP'],
                'answer' => 'Redis',
                'explanation' => '**Redis** guarda datos en RAM con acceso ultrarrápido. Es el estándar para caché y sesiones a escala.',
                'pro_tip' => 'Redis también sirve para colas, contadores y pub/sub. Aprenderlo te abre muchas puertas.',
            ],
        ],
    ],
    [
        'slug' => 'colas',
        'order' => 9,
        'title' => 'Colas: trabajo pesado en segundo plano',
        'level' => 'Escala',
        'minutes' => 25,
        'summary' => 'Emails, PDFs y procesos lentos sin bloquear al usuario.',
        'concepts' => ['cola', 'worker', 'job'],
        'sections' => [
            [
                'heading' => 'El problema',
                'body' => 'Si al registrarse un usuario esperas 8 segundos mientras envías email + factura + analytics, **pierdes usuarios**.',
            ],
            [
                'heading' => 'Solución: colas',
                'body' => 'La petición HTTP encola un **job** y responde al instante. **Workers** (procesos PHP separados) ejecutan el trabajo después.',
            ],
            [
                'heading' => 'En Laravel',
                'body' => 'Laravel Queue + Redis es el estándar en PHP a escala. Lo verás cuando migres este proyecto a Laravel.',
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué hace un worker en una cola?',
                'options' => [
                    'Procesa trabajos encolados en segundo plano',
                    'Diseña la interfaz HTML',
                    'Compila JavaScript',
                ],
                'answer' => 'Procesa trabajos encolados en segundo plano',
                'explanation' => 'El **worker** saca jobs de la cola y los ejecuta sin que el usuario espere. HTTP responde al instante.',
                'pro_tip' => 'Laravel Horizon te deja ver colas en tiempo real. Es una de las herramientas más usadas en PHP a escala.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Por qué encolar el envío de un email en vez de hacerlo en la petición HTTP?',
                'options' => [
                    'Para que el usuario no espere mientras se envía',
                    'Porque PHP no puede enviar emails',
                    'Para evitar usar base de datos',
                ],
                'answer' => 'Para que el usuario no espere mientras se envía',
                'explanation' => 'Enviar email puede tardar segundos. La cola responde al instante y el worker envía después.',
                'pro_tip' => 'Lo mismo aplica a generar PDFs, procesar imágenes o llamar APIs externas.',
            ],
        ],
    ],
    [
        'slug' => 'api',
        'order' => 10,
        'title' => 'API REST: tu app hablando con otras',
        'level' => 'Escala',
        'minutes' => 30,
        'summary' => 'JSON, endpoints y cómo escalan los servicios modernos.',
        'concepts' => ['api', 'json', 'rest'],
        'sections' => [
            [
                'heading' => '¿Qué es una API?',
                'body' => 'Una interfaz para que otras apps consuman datos. En vez de HTML devuelves **JSON**.',
                'code' => '{"leccion": "cache", "completada": true}',
            ],
            [
                'heading' => 'REST simple',
                'body' => 'GET /lecciones (listar), GET /lecciones/1 (ver una), POST /progreso (crear), PUT (actualizar), DELETE (borrar).',
            ],
            [
                'heading' => 'Microservicios',
                'body' => 'A escala mundial, equipos separados mantienen servicios que se hablan por API. PHP excelente como API de negocio.',
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué formato es estándar en APIs modernas?',
                'options' => ['JSON', 'CSV', 'DOC'],
                'answer' => 'JSON',
                'explanation' => '**JSON** es texto estructurado que cualquier lenguaje entiende. Es el idioma universal de las APIs.',
                'pro_tip' => 'El endpoint /api/run de EscalaPHP devuelve JSON. Ya tienes una API funcionando sin saberlo.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Qué código HTTP indica éxito en una API?',
                'options' => ['200', '500', '404'],
                'answer' => '200',
                'explanation' => '**200 OK** significa que la petición fue exitosa y la respuesta es válida.',
                'pro_tip' => 'Usa 201 para recursos creados, 400 para errores del cliente y 500 para errores del servidor.',
            ],
        ],
    ],
    [
        'slug' => 'seguridad',
        'order' => 11,
        'title' => 'Seguridad básica que no puedes saltarte',
        'level' => 'Producción',
        'minutes' => 25,
        'summary' => 'Validación, sesiones y errores comunes en apps PHP.',
        'concepts' => ['validacion', 'sesion', 'sql-injection'],
        'sections' => [
            [
                'heading' => 'Nunca confíes en el usuario',
                'body' => 'Todo input del formulario debe **validarse**. Usa consultas preparadas (PDO) para evitar SQL injection — esta app ya lo hace.',
            ],
            [
                'heading' => 'Sesiones',
                'body' => 'PHP `session_start()` identifica tu visita sin login. Tu progreso se asocia a `session_id` en la tabla progress.',
            ],
            [
                'heading' => 'Errores en producción',
                'body' => 'Nunca muestres stack traces al público. Regístralos internamente (Sentry, logs).',
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Cómo prevenir SQL injection en PHP?',
                'options' => [
                    'Consultas preparadas con PDO',
                    'Concatenar strings del usuario en el SQL',
                    'Deshabilitar la base de datos',
                ],
                'answer' => 'Consultas preparadas con PDO',
                'explanation' => 'Las **consultas preparadas** separan el SQL de los datos del usuario. El atacante no puede inyectar código malicioso.',
                'pro_tip' => 'OWASP Top 10 lista SQL injection como riesgo #1. PDO + prepared statements es tu escudo.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Cómo debes guardar contraseñas de usuarios?',
                'options' => [
                    'Con password_hash() en PHP',
                    'En texto plano en la BD',
                    'Con base64_encode()',
                ],
                'answer' => 'Con password_hash() en PHP',
                'explanation' => '**password_hash()** genera un hash seguro. Nunca guardes contraseñas legibles.',
                'pro_tip' => 'EscalaPHP usa password_hash en el registro. Es el mismo patrón que Laravel y Symfony.',
            ],
        ],
    ],
    [
        'slug' => 'proyecto-final',
        'order' => 12,
        'title' => 'Proyecto final: tu hoja de ruta',
        'level' => 'Siguiente nivel',
        'minutes' => 40,
        'summary' => 'Migrar a Laravel, desplegar y seguir creciendo como senior.',
        'concepts' => ['laravel', 'deploy', 'roadmap'],
        'sections' => [
            [
                'heading' => 'Lo que ya construiste',
                'body' => 'Rutas, MVC, SQLite, caché, validación de ejercicios, sesiones. Eso es un **producto real**, no un tutorial pasivo.',
            ],
            [
                'heading' => 'Siguiente paso: Laravel',
                'body' => 'Instala Laravel y recrea EscalaPHP con Eloquent ORM, Blade, migraciones, Redis y queues. Tu amigo senior en PHP probablemente usa Laravel o Symfony.',
            ],
            [
                'heading' => 'Plan de 90 días',
                'body' => '1) Termina los 12 módulos. 2) Añade login real. 3) Migra a Laravel. 4) Despliega en un VPS. 5) Pide code review a tu amigo senior.',
            ],
        ],
        'exercises' => [
            [
                'type' => 'min_length',
                'question' => 'Escribe tu meta en una frase (mínimo 10 caracteres). Ejemplo: Quiero fundar mi empresa tech',
                'min_length' => 10,
                'hint' => 'Tu meta se guarda en tu perfil. Sé específico y ambicioso.',
                'explanation' => 'Tener una meta clara es lo que separa a quien "aprende un poco" de quien **construye algo grande**.',
                'pro_tip' => 'Revisa tu meta cada mes. Los mejores fundadores ajustan el rumbo, pero nunca pierden el norte.',
            ],
        ],
    ],
    [
        'slug' => 'laravel',
        'order' => 13,
        'title' => 'Laravel: el salto profesional',
        'level' => 'Framework',
        'minutes' => 45,
        'summary' => 'Instala Laravel, entiende Eloquent, Blade, migraciones y despliega.',
        'concepts' => ['laravel', 'eloquent', 'blade', 'artisan'],
        'sections' => [
            [
                'heading' => '¿Por qué Laravel?',
                'body' => 'Laravel es el framework PHP más usado en empresas. EscalaPHP que construiste es un mini-framework — Laravel es la versión industrial.',
            ],
            [
                'heading' => 'Componentes clave',
                'body' => '**Eloquent** (ORM para BD), **Blade** (plantillas), **Artisan** (CLI), **Queue** (colas), **Cache** (Redis), **Migration** (esquema BD).',
            ],
            [
                'heading' => 'Tu plan de migración',
                'body' => '1) `composer create-project laravel/laravel escala-laravel` 2) Recrea rutas y vistas 3) Migra SQLite a migraciones 4) Añade Redis 5) Deploy.',
            ],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué componente de Laravel maneja las plantillas HTML?',
                'options' => ['Blade', 'Eloquent', 'Artisan'],
                'answer' => 'Blade',
                'explanation' => '**Blade** es el motor de plantillas de Laravel. Similar a resources/views/ de EscalaPHP pero con superpoderes.',
                'pro_tip' => 'Blade compila a PHP puro. No añade overhead en producción.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Qué comando crea un nuevo proyecto Laravel?',
                'options' => [
                    'composer create-project laravel/laravel',
                    'npm install laravel',
                    'php new laravel',
                ],
                'answer' => 'composer create-project laravel/laravel',
                'explanation' => 'Composer es el gestor de paquetes de PHP. Laravel se instala como cualquier dependencia profesional.',
                'pro_tip' => 'Laravel Sail incluye Docker para desarrollo local sin configurar nada manualmente.',
            ],
        ],
    ],
];
