<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'bienvenida',
    'order' => 1,
    'title' => 'Bienvenida: tu primera línea de PHP',
    'level' => 'Fundamentos',
    'minutes' => 15,
    'summary' => 'Qué es programar, qué es PHP y cómo funciona una página web.',
    'concepts' => 
    array (
      0 => 'programa',
      1 => 'servidor',
      2 => 'php',
      3 => 'echo',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué estás aprendiendo aquí?',
        'body' => 'No solo sintaxis. Vas a aprender cómo se construye software que aguanta **miles de usuarios**: rutas, base de datos, caché y buenas prácticas. Esta misma app es tu laboratorio.',
        'code' => 'Usa echo con comillas simples.',
      ),
      1 => 
      array (
        'heading' => '¿Qué es PHP?',
        'body' => 'PHP es un lenguaje que corre en el **servidor** (una computadora en internet). Cuando alguien visita tu web, el servidor ejecuta PHP y devuelve HTML al navegador.',
        'code' => 'Usa echo con comillas simples.',
      ),
      2 => 
      array (
        'heading' => 'Tu primera instrucción',
        'body' => 'La función `echo` muestra texto. En PHP cada instrucción termina con punto y coma `;`.',
        'code' => '<?php
echo \'Hola, EscalaPHP\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde se ejecuta normalmente PHP en una app web?',
        'options' => 
        array (
          0 => 'En el navegador del usuario',
          1 => 'En el servidor',
          2 => 'En la base de datos',
        ),
        'answer' => 'En el servidor',
        'explanation' => 'PHP se ejecuta en el **servidor** y le envía HTML ya listo al navegador. Por eso el visitante nunca ve tu código PHP: solo ve el resultado.',
        'pro_tip' => 'Este modelo (servidor procesa, navegador muestra) es la base de casi toda la web. Entenderlo te ahorrará confusiones más adelante.',
      ),
      1 => 
      array (
        'type' => 'code',
        'question' => 'Escribe código que imprima exactamente: Aprendiendo a escalar',
        'hint' => 'Usa echo con comillas simples.',
        'starter' => 'echo ',
        'expected_output' => 'Aprendiendo a escalar',
        'explanation' => '`echo` envía texto a la salida y el `;` cierra la instrucción. Acabas de ejecutar tu primer código PHP en un servidor real.',
        'pro_tip' => 'En apps grandes casi nunca usas echo directo: se usan plantillas. Pero por dentro, todo termina en instrucciones como esta.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'variables',
    'order' => 2,
    'title' => 'Variables y tipos de datos',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'Guardar información en memoria: strings, números y booleanos.',
    'concepts' => 
    array (
      0 => 'variable',
      1 => 'string',
      2 => 'integer',
      3 => 'boolean',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Variables',
        'body' => 'Una **variable** es una caja con nombre. En PHP empiezan con `$`: `$nombre = "Ana";`',
        'code' => 'Ejemplo: $precio = 99; echo $precio;',
      ),
      1 => 
      array (
        'heading' => 'Tipos básicos',
        'body' => '**string** (texto), **int** (entero), **float** (decimal), **bool** (true/false). PHP infiere el tipo automáticamente.',
        'code' => '<?php
$usuarios = 1500;
$activo = true;
$plan = \'pro\';',
      ),
      2 => 
      array (
        'heading' => '¿Por qué importa a escala?',
        'body' => 'Cuando tienes millones de registros, elegir el tipo correcto y no guardar datos redundantes **ahorra memoria y dinero** en servidores.',
        'code' => 'Ejemplo: $precio = 99; echo $precio;',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'contains',
        'question' => 'Crea una variable $precio con valor 99 y haz echo de $precio',
        'must_contain' => 
        array (
          0 => '$precio',
          1 => '99',
          2 => 'echo',
        ),
        'hint' => 'Ejemplo: $precio = 99; echo $precio;',
        'explanation' => 'Guardaste un valor en una variable y luego lo mostraste. Ese ciclo (guardar → usar) es el corazón de cualquier programa.',
        'pro_tip' => 'Usa nombres claros como `$precioTotal` en vez de `$p`. En equipos grandes, un buen nombre vale más que un comentario.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuál es un booleano válido en PHP?',
        'options' => 
        array (
          0 => 'true',
          1 => 'yes',
          2 => 'verdadero',
        ),
        'answer' => 'true',
        'explanation' => 'En PHP los booleanos son exactamente `true` y `false` (en inglés, sin comillas). `yes` o `verdadero` serían solo texto.',
        'pro_tip' => 'Los booleanos controlan decisiones (`if`). Dominarlos te prepara para la lógica de la siguiente lección.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'condiciones',
    'order' => 3,
    'title' => 'Condiciones y bucles',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Tomar decisiones y repetir tareas automáticamente.',
    'concepts' => 
    array (
      0 => 'if',
      1 => 'foreach',
      2 => 'for',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'if / else',
        'body' => 'Ejecuta código solo cuando se cumple una condición.',
        'code' => '<?php
$carga = 85;
if ($carga > 80) {
    echo \'Activar caché\';
}',
      ),
      1 => 
      array (
        'heading' => 'foreach',
        'body' => 'Recorre listas. Esencial para procesar resultados de base de datos.',
        'code' => '<?php
$planes = [\'free\', \'pro\', \'enterprise\'];
foreach ($planes as $plan) {
    echo $plan;
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'code',
        'question' => 'Imprime "ok" si $edad es mayor o igual a 18, si no imprime "menor"',
        'starter' => '$edad = 20;
',
        'expected_output' => 'ok',
        'hint' => 'Usa if ($edad >= 18) { echo "ok"; } else { echo "menor"; }',
        'explanation' => 'Tomaste una **decisión** con if/else. Así es como un servidor decide qué mostrar según condiciones reales.',
        'pro_tip' => 'A escala, millones de if/else se ejecutan por segundo. Por eso luego usamos caché para no repetir decisiones costosas.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué bucle recorre cada elemento de un array?',
        'options' => 
        array (
          0 => 'foreach',
          1 => 'for each',
          2 => 'loop',
        ),
        'answer' => 'foreach',
        'explanation' => '**foreach** es el bucle estándar para arrays en PHP.',
        'pro_tip' => 'Cuando lees de una BD, casi siempre recorres resultados con foreach.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'funciones',
    'order' => 4,
    'title' => 'Funciones y arrays',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Reutilizar lógica y manejar listas de datos.',
    'concepts' => 
    array (
      0 => 'funcion',
      1 => 'array',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Funciones',
        'body' => 'Una función agrupa pasos con un nombre. Evita duplicar código en proyectos grandes.',
        'code' => '<?php
function saludar(string $nombre): string {
    return \'Hola \' . $nombre;
}',
      ),
      1 => 
      array (
        'heading' => 'Arrays',
        'body' => 'Lista ordenada de valores. A escala, casi todo viene como array desde la BD o una API.',
        'code' => '<?php
$metricas = [\'requests\' => 12000, \'errores\' => 3];',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'contains',
        'question' => 'Define function duplicar($n) que retorne $n * 2 y haz echo de duplicar(21)',
        'must_contain' => 
        array (
          0 => 'function duplicar',
          1 => 'return',
          2 => 'echo',
        ),
        'hint' => 'function duplicar($n) { return $n * 2; } echo duplicar(21);',
        'explanation' => 'Creaste una función reutilizable. En proyectos grandes, cada función hace **una cosa** y se usa en muchos sitios.',
        'pro_tip' => 'Duplicar código es el enemigo #1 de equipos grandes. Si copias-pegas 3 veces, crea una función.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo se define un array en PHP?',
        'options' => 
        array (
          0 => '$items = ["a", "b"];',
          1 => 'array = {a, b}',
          2 => 'list(a, b)',
        ),
        'answer' => '$items = ["a", "b"];',
        'explanation' => 'Los arrays en PHP usan corchetes `[]` o la función `array()`.',
        'pro_tip' => 'Los arrays asociativos `$user["name"]` son muy comunes en APIs y BD.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'http',
    'order' => 5,
    'title' => 'HTTP: cómo habla el navegador con tu app',
    'level' => 'Web',
    'minutes' => 20,
    'summary' => 'Peticiones GET, POST, códigos de estado y rutas.',
    'concepts' => 
    array (
      0 => 'http',
      1 => 'get',
      2 => 'post',
      3 => 'ruta',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'HTTP en simple',
        'body' => 'El navegador **pide** (request) y el servidor **responde** (response). GET lee; POST envía datos (formularios).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: http\';',
      ),
      1 => 
      array (
        'heading' => 'Rutas',
        'body' => 'Cada URL es una ruta. En esta app `/` es inicio, `/leccion` muestra lecciones, `/glosario` el diccionario.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: http\';',
      ),
      2 => 
      array (
        'heading' => 'Códigos de estado',
        'body' => '200 = OK, 404 = no encontrado, 500 = error del servidor. A escala, monitorear estos números es crítico.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: http\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué método HTTP usarías para enviar un formulario de registro?',
        'options' => 
        array (
          0 => 'GET',
          1 => 'POST',
          2 => 'DELETE',
        ),
        'answer' => 'POST',
        'explanation' => '**POST** envía datos en el cuerpo de la petición, no en la URL. Es el estándar para formularios y crear registros.',
        'pro_tip' => 'Nunca envíes contraseñas con GET — quedarían visibles en la URL y en logs del servidor.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué código indica "página no encontrada"?',
        'options' => 
        array (
          0 => '200',
          1 => '404',
          2 => '301',
        ),
        'answer' => '404',
        'explanation' => '**404** = el servidor no encontró lo que pediste. EscalaPHP muestra una página 404 cuando la ruta no existe.',
        'pro_tip' => 'Monitorea los 404 en producción: muchos 404 en la misma URL pueden indicar un enlace roto o un ataque.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'mvc',
    'order' => 6,
    'title' => 'MVC: organizar código como un senior',
    'level' => 'Arquitectura',
    'minutes' => 30,
    'summary' => 'Modelo, Vista, Controlador — la base de Laravel y Symfony.',
    'concepts' => 
    array (
      0 => 'mvc',
      1 => 'controlador',
      2 => 'vista',
      3 => 'modelo',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'El problema sin estructura',
        'body' => 'Si mezclas HTML, SQL y lógica en un solo archivo, el proyecto se vuelve imposible de mantener con 50 desarrolladores.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mvc\';',
      ),
      1 => 
      array (
        'heading' => 'MVC',
        'body' => '**Modelo**: datos (usuarios, lecciones). **Vista**: HTML que ve el usuario. **Controlador**: coordina todo.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mvc\';',
      ),
      2 => 
      array (
        'heading' => 'En EscalaPHP',
        'body' => 'Mira la carpeta `app/Controllers` (controladores), `resources/views` (vistas) y `app/Database.php` (acceso a datos). ¡Estás dentro de un MVC real!',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: mvc\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué capa muestra HTML al usuario?',
        'options' => 
        array (
          0 => 'Modelo',
          1 => 'Vista',
          2 => 'Controlador',
        ),
        'answer' => 'Vista',
        'explanation' => 'La **Vista** es HTML puro (o plantillas). El usuario solo ve esto — nunca ve PHP ni SQL directamente.',
        'pro_tip' => 'En Laravel las vistas usan Blade. En EscalaPHP están en resources/views/. Mismo concepto.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué capa decide qué hacer con una petición HTTP?',
        'options' => 
        array (
          0 => 'Modelo',
          1 => 'Vista',
          2 => 'Controlador',
        ),
        'answer' => 'Controlador',
        'explanation' => 'El **Controlador** recibe la petición, pide datos al Modelo, y elige qué Vista mostrar. Es el director de orquesta.',
        'pro_tip' => 'Mantén controladores delgados: si tiene más de 30 líneas, probablemente necesita refactor.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'base-de-datos',
    'order' => 7,
    'title' => 'Base de datos: SQLite y persistencia',
    'level' => 'Datos',
    'minutes' => 30,
    'summary' => 'Guardar progreso, consultas SQL y por qué la BD suele ser el cuello de botella.',
    'concepts' => 
    array (
      0 => 'sql',
      1 => 'sqlite',
      2 => 'tabla',
      3 => 'consulta',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Por qué base de datos?',
        'body' => 'La memoria del PHP se borra al terminar la petición. Para guardar usuarios, pedidos o progreso necesitas una **base de datos**.',
        'code' => 'SELECT * FROM users',
      ),
      1 => 
      array (
        'heading' => 'SQLite en esta app',
        'body' => 'Tu progreso vive en `database/escala.sqlite`. En producción a gran escala se usa PostgreSQL o MySQL, pero SQL es el mismo concepto.',
        'code' => 'SELECT lesson_slug, completed FROM progress WHERE session_id = \'...\';',
      ),
      2 => 
      array (
        'heading' => 'Escala',
        'body' => 'Un senior optimiza **índices**, evita consultas N+1 y usa réplicas de lectura. La BD es donde más se nota una mala arquitectura.',
        'code' => 'SELECT * FROM users',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando SQL lee filas de una tabla?',
        'options' => 
        array (
          0 => 'SELECT',
          1 => 'SEND',
          2 => 'SHOW',
        ),
        'answer' => 'SELECT',
        'explanation' => '**SELECT** lee datos. INSERT crea, UPDATE modifica, DELETE borra. SELECT es el que más usarás.',
        'pro_tip' => 'Un SELECT lento puede tumbar toda tu app. Siempre revisa que tus tablas tengan índices en columnas de búsqueda.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe una consulta SQL que seleccione todo de una tabla llamada users',
        'must_contain' => 
        array (
          0 => 'SELECT',
          1 => 'users',
        ),
        'hint' => 'SELECT * FROM users',
        'explanation' => 'SELECT * trae todas las columnas. En producción evita * y pide solo las columnas que necesitas — es más rápido.',
        'pro_tip' => 'Esta app usa PDO con consultas preparadas. Nunca concatenes input del usuario en SQL.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'cache',
    'order' => 8,
    'title' => 'Caché: responder sin repetir trabajo',
    'level' => 'Escala',
    'minutes' => 25,
    'summary' => 'Guardar resultados temporales para ir 10x más rápido.',
    'concepts' => 
    array (
      0 => 'cache',
      1 => 'redis',
      2 => 'ttl',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Analogía',
        'body' => 'Calcular algo costoso cada vez es como cocinar desde cero por cada plato. La **caché** guarda el resultado listo por un tiempo (TTL).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cache\';',
      ),
      1 => 
      array (
        'heading' => 'En esta app',
        'body' => 'La clase `App\\Cache` guarda archivos JSON en `storage/cache/`. En producción se usa **Redis** o **Memcached** compartido entre servidores.',
        'code' => '<?php
$cache->set(\'lecciones\', $data, 3600);
$data = $cache->get(\'lecciones\');',
      ),
      2 => 
      array (
        'heading' => 'Cuándo cachear',
        'body' => 'Datos que cambian poco y se leen mucho: catálogo de productos, configuración, listados públicos.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: cache\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué problema resuelve principalmente la caché?',
        'options' => 
        array (
          0 => 'Evitar repetir cálculos o consultas costosas',
          1 => 'Reemplazar la base de datos permanentemente',
          2 => 'Cifrar contraseñas',
        ),
        'answer' => 'Evitar repetir cálculos o consultas costosas',
        'explanation' => 'La caché guarda resultados ya calculados. La próxima vez responde al instante sin volver a trabajar.',
        'pro_tip' => 'Facebook cachea casi todo. Wikipedia usa Varnish. Redis es el estándar en PHP moderno.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué sistema suele usarse como caché en memoria en PHP?',
        'options' => 
        array (
          0 => 'Redis',
          1 => 'Excel',
          2 => 'FTP',
        ),
        'answer' => 'Redis',
        'explanation' => '**Redis** guarda datos en RAM con acceso ultrarrápido. Es el estándar para caché y sesiones a escala.',
        'pro_tip' => 'Redis también sirve para colas, contadores y pub/sub. Aprenderlo te abre muchas puertas.',
      ),
    ),
  ),
  8 => 
  array (
    'slug' => 'colas',
    'order' => 9,
    'title' => 'Colas: trabajo pesado en segundo plano',
    'level' => 'Escala',
    'minutes' => 25,
    'summary' => 'Emails, PDFs y procesos lentos sin bloquear al usuario.',
    'concepts' => 
    array (
      0 => 'cola',
      1 => 'worker',
      2 => 'job',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'El problema',
        'body' => 'Si al registrarse un usuario esperas 8 segundos mientras envías email + factura + analytics, **pierdes usuarios**.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: colas\';',
      ),
      1 => 
      array (
        'heading' => 'Solución: colas',
        'body' => 'La petición HTTP encola un **job** y responde al instante. **Workers** (procesos PHP separados) ejecutan el trabajo después.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: colas\';',
      ),
      2 => 
      array (
        'heading' => 'En Laravel',
        'body' => 'Laravel Queue + Redis es el estándar en PHP a escala. Lo verás cuando migres este proyecto a Laravel.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: colas\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace un worker en una cola?',
        'options' => 
        array (
          0 => 'Procesa trabajos encolados en segundo plano',
          1 => 'Diseña la interfaz HTML',
          2 => 'Compila JavaScript',
        ),
        'answer' => 'Procesa trabajos encolados en segundo plano',
        'explanation' => 'El **worker** saca jobs de la cola y los ejecuta sin que el usuario espere. HTTP responde al instante.',
        'pro_tip' => 'Laravel Horizon te deja ver colas en tiempo real. Es una de las herramientas más usadas en PHP a escala.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué encolar el envío de un email en vez de hacerlo en la petición HTTP?',
        'options' => 
        array (
          0 => 'Para que el usuario no espere mientras se envía',
          1 => 'Porque PHP no puede enviar emails',
          2 => 'Para evitar usar base de datos',
        ),
        'answer' => 'Para que el usuario no espere mientras se envía',
        'explanation' => 'Enviar email puede tardar segundos. La cola responde al instante y el worker envía después.',
        'pro_tip' => 'Lo mismo aplica a generar PDFs, procesar imágenes o llamar APIs externas.',
      ),
    ),
  ),
  9 => 
  array (
    'slug' => 'api',
    'order' => 10,
    'title' => 'API REST: tu app hablando con otras',
    'level' => 'Escala',
    'minutes' => 30,
    'summary' => 'JSON, endpoints y cómo escalan los servicios modernos.',
    'concepts' => 
    array (
      0 => 'api',
      1 => 'json',
      2 => 'rest',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es una API?',
        'body' => 'Una interfaz para que otras apps consuman datos. En vez de HTML devuelves **JSON**.',
        'code' => '{"leccion": "cache", "completada": true}',
      ),
      1 => 
      array (
        'heading' => 'REST simple',
        'body' => 'GET /lecciones (listar), GET /lecciones/1 (ver una), POST /progreso (crear), PUT (actualizar), DELETE (borrar).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: api\';',
      ),
      2 => 
      array (
        'heading' => 'Microservicios',
        'body' => 'A escala mundial, equipos separados mantienen servicios que se hablan por API. PHP excelente como API de negocio.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: api\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué formato es estándar en APIs modernas?',
        'options' => 
        array (
          0 => 'JSON',
          1 => 'CSV',
          2 => 'DOC',
        ),
        'answer' => 'JSON',
        'explanation' => '**JSON** es texto estructurado que cualquier lenguaje entiende. Es el idioma universal de las APIs.',
        'pro_tip' => 'El endpoint /api/run de EscalaPHP devuelve JSON. Ya tienes una API funcionando sin saberlo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué código HTTP indica éxito en una API?',
        'options' => 
        array (
          0 => '200',
          1 => '500',
          2 => '404',
        ),
        'answer' => '200',
        'explanation' => '**200 OK** significa que la petición fue exitosa y la respuesta es válida.',
        'pro_tip' => 'Usa 201 para recursos creados, 400 para errores del cliente y 500 para errores del servidor.',
      ),
    ),
  ),
  10 => 
  array (
    'slug' => 'seguridad',
    'order' => 11,
    'title' => 'Seguridad básica que no puedes saltarte',
    'level' => 'Producción',
    'minutes' => 25,
    'summary' => 'Validación, sesiones y errores comunes en apps PHP.',
    'concepts' => 
    array (
      0 => 'validacion',
      1 => 'sesion',
      2 => 'sql-injection',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Nunca confíes en el usuario',
        'body' => 'Todo input del formulario debe **validarse**. Usa consultas preparadas (PDO) para evitar SQL injection — esta app ya lo hace.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: seguridad\';',
      ),
      1 => 
      array (
        'heading' => 'Sesiones',
        'body' => 'PHP `session_start()` identifica tu visita sin login. Tu progreso se asocia a `session_id` en la tabla progress.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: seguridad\';',
      ),
      2 => 
      array (
        'heading' => 'Errores en producción',
        'body' => 'Nunca muestres stack traces al público. Regístralos internamente (Sentry, logs).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: seguridad\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo prevenir SQL injection en PHP?',
        'options' => 
        array (
          0 => 'Consultas preparadas con PDO',
          1 => 'Concatenar strings del usuario en el SQL',
          2 => 'Deshabilitar la base de datos',
        ),
        'answer' => 'Consultas preparadas con PDO',
        'explanation' => 'Las **consultas preparadas** separan el SQL de los datos del usuario. El atacante no puede inyectar código malicioso.',
        'pro_tip' => 'OWASP Top 10 lista SQL injection como riesgo #1. PDO + prepared statements es tu escudo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo debes guardar contraseñas de usuarios?',
        'options' => 
        array (
          0 => 'Con password_hash() en PHP',
          1 => 'En texto plano en la BD',
          2 => 'Con base64_encode()',
        ),
        'answer' => 'Con password_hash() en PHP',
        'explanation' => '**password_hash()** genera un hash seguro. Nunca guardes contraseñas legibles.',
        'pro_tip' => 'EscalaPHP usa password_hash en el registro. Es el mismo patrón que Laravel y Symfony.',
      ),
    ),
  ),
  11 => 
  array (
    'slug' => 'proyecto-final',
    'order' => 12,
    'title' => 'Proyecto final: tu hoja de ruta',
    'level' => 'Siguiente nivel',
    'minutes' => 40,
    'summary' => 'Migrar a Laravel, desplegar y seguir creciendo como senior.',
    'concepts' => 
    array (
      0 => 'laravel',
      1 => 'deploy',
      2 => 'roadmap',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Lo que ya construiste',
        'body' => 'Rutas, MVC, SQLite, caché, validación de ejercicios, sesiones. Eso es un **producto real**, no un tutorial pasivo.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: proyecto-final\';',
      ),
      1 => 
      array (
        'heading' => 'Siguiente paso: Laravel',
        'body' => 'Instala Laravel y recrea EscalaPHP con Eloquent ORM, Blade, migraciones, Redis y queues. Tu amigo senior en PHP probablemente usa Laravel o Symfony.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: proyecto-final\';',
      ),
      2 => 
      array (
        'heading' => 'Plan de 90 días',
        'body' => '1) Termina los 12 módulos. 2) Añade login real. 3) Migra a Laravel. 4) Despliega en un VPS. 5) Pide code review a tu amigo senior.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: proyecto-final\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'min_length',
        'question' => 'Escribe tu meta en una frase (mínimo 10 caracteres). Ejemplo: Quiero fundar mi empresa tech',
        'min_length' => 10,
        'hint' => 'Tu meta se guarda en tu perfil. Sé específico y ambicioso.',
        'explanation' => 'Tener una meta clara es lo que separa a quien "aprende un poco" de quien **construye algo grande**.',
        'pro_tip' => 'Revisa tu meta cada mes. Los mejores fundadores ajustan el rumbo, pero nunca pierden el norte.',
      ),
    ),
  ),
  12 => 
  array (
    'slug' => 'laravel',
    'order' => 13,
    'title' => 'Laravel: el salto profesional',
    'level' => 'Framework',
    'minutes' => 45,
    'summary' => 'Instala Laravel, entiende Eloquent, Blade, migraciones y despliega.',
    'concepts' => 
    array (
      0 => 'laravel',
      1 => 'eloquent',
      2 => 'blade',
      3 => 'artisan',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Por qué Laravel?',
        'body' => 'Laravel es el framework PHP más usado en empresas. EscalaPHP que construiste es un mini-framework — Laravel es la versión industrial.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: laravel\';',
      ),
      1 => 
      array (
        'heading' => 'Componentes clave',
        'body' => '**Eloquent** (ORM para BD), **Blade** (plantillas), **Artisan** (CLI), **Queue** (colas), **Cache** (Redis), **Migration** (esquema BD).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: laravel\';',
      ),
      2 => 
      array (
        'heading' => 'Tu plan de migración',
        'body' => '1) `composer create-project laravel/laravel escala-laravel` 2) Recrea rutas y vistas 3) Migra SQLite a migraciones 4) Añade Redis 5) Deploy.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: laravel\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué componente de Laravel maneja las plantillas HTML?',
        'options' => 
        array (
          0 => 'Blade',
          1 => 'Eloquent',
          2 => 'Artisan',
        ),
        'answer' => 'Blade',
        'explanation' => '**Blade** es el motor de plantillas de Laravel. Similar a resources/views/ de EscalaPHP pero con superpoderes.',
        'pro_tip' => 'Blade compila a PHP puro. No añade overhead en producción.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando crea un nuevo proyecto Laravel?',
        'options' => 
        array (
          0 => 'composer create-project laravel/laravel',
          1 => 'npm install laravel',
          2 => 'php new laravel',
        ),
        'answer' => 'composer create-project laravel/laravel',
        'explanation' => 'Composer es el gestor de paquetes de PHP. Laravel se instala como cualquier dependencia profesional.',
        'pro_tip' => 'Laravel Sail incluye Docker para desarrollo local sin configurar nada manualmente.',
      ),
    ),
  ),
);
