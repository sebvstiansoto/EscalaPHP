<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'web-html',
    'order' => 1,
    'title' => 'HTML semántico',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'Estructura de una página con etiquetas con significado.',
    'concepts' => 
    array (
      0 => 'html',
      1 => 'tags',
      2 => 'semantica',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es HTML?',
        'body' => 'HTML define la **estructura** de una página: títulos, párrafos, listas, enlaces. El navegador lo interpreta y muestra.',
        'code' => 'console.log(\'Practica: web-html\');',
      ),
      1 => 
      array (
        'heading' => 'Etiquetas semánticas',
        'body' => 'Usa `<header>`, `<main>`, `<article>`, `<footer>` en vez de `<div>` genéricos. Ayuda a SEO y accesibilidad.',
        'code' => '<article>
  <h1>Título</h1>
  <p>Contenido</p>
</article>',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué etiqueta define el contenido principal de una página?',
        'options' => 
        array (
          0 => '<main>',
          1 => '<div>',
          2 => '<span>',
        ),
        'answer' => '<main>',
        'explanation' => '`<main>` marca el contenido central — semántico y accesible.',
        'pro_tip' => 'Un solo `<main>` por página. Los lectores de pantalla lo usan para navegar.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuál crea un enlace en HTML?',
        'options' => 
        array (
          0 => '<a href="...">',
          1 => '<link>',
          2 => '<url>',
        ),
        'answer' => '<a href="...">',
        'explanation' => 'La etiqueta `<a>` con atributo `href` crea hipervínculos.',
        'pro_tip' => 'Los enlaces son la base de la web — de ahí "HyperText".',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'web-css',
    'order' => 2,
    'title' => 'CSS moderno',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Estilos, Flexbox, Grid y variables CSS.',
    'concepts' => 
    array (
      0 => 'css',
      1 => 'flexbox',
      2 => 'grid',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Selectores y propiedades',
        'body' => 'CSS aplica estilos: `color`, `background`, `padding`. Seleccionas por etiqueta, clase (`.clase`) o id (`#id`).',
        'code' => '.card {
  color: #fff;
  padding: 1rem;
}',
      ),
      1 => 
      array (
        'heading' => 'Flexbox',
        'body' => '`display: flex` alinea elementos en fila o columna. Es la base del layout moderno.',
        'code' => 'console.log(\'Practica: web-css\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué propiedad activa Flexbox?',
        'options' => 
        array (
          0 => 'display: flex',
          1 => 'position: flex',
          2 => 'layout: flex',
        ),
        'answer' => 'display: flex',
        'explanation' => '`display: flex` convierte un contenedor en flexible.',
        'pro_tip' => 'Flexbox para una dimensión (fila o columna); Grid para dos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo seleccionas un elemento por su clase en CSS?',
        'options' => 
        array (
          0 => '.miClase',
          1 => '#miClase',
          2 => '@miClase',
        ),
        'answer' => '.miClase',
        'explanation' => 'El punto `.` selecciona por clase; `#` por id.',
        'pro_tip' => 'Prefiere clases sobre ids para estilos reutilizables.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'web-js',
    'order' => 3,
    'title' => 'JavaScript en el navegador',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Variables, funciones, console.log y manipular el DOM.',
    'concepts' => 
    array (
      0 => 'javascript',
      1 => 'dom',
      2 => 'console',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'JS da vida a la web',
        'body' => 'JavaScript corre **en el navegador**. Reacciona a clics, valida formularios y consume APIs.',
        'code' => 'console.log(\'Hola JS\')',
      ),
      1 => 
      array (
        'heading' => 'console.log',
        'body' => 'Para mostrar valores usas `console.log()`. Aquí ejecutamos tu JS de verdad en el navegador.',
        'code' => 'console.log(\'Hola JavaScript\')',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'js',
        'question' => 'Escribe código que imprima exactamente: Hola JS',
        'starter' => 'console.log(',
        'expected_output' => 'Hola JS',
        'hint' => 'console.log(\'Hola JS\')',
        'explanation' => '¡Ejecutaste JavaScript real en tu navegador! Así funciona el frontend.',
        'pro_tip' => 'console.log es tu mejor amigo para depurar. Ábrelo con F12 en cualquier web.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Suma: declara let a = 5, let b = 7 e imprime a + b',
        'expected_output' => '12',
        'hint' => 'let a = 5;
let b = 7;
console.log(a + b);',
        'explanation' => 'Variables con let y operaciones — la base de toda lógica JS.',
        'pro_tip' => 'Usa `let` y `const`, evita `var` (obsoleto).',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'web-forms',
    'order' => 4,
    'title' => 'Formularios y validación',
    'level' => 'Intermedio',
    'minutes' => 25,
    'summary' => 'Inputs, labels, accesibilidad y validación en el cliente.',
    'concepts' => 
    array (
      0 => 'forms',
      1 => 'validation',
      2 => 'a11y',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Formularios HTML',
        'body' => '`<form>`, `<input>`, `<label>` y `required` conectan al usuario con tu app.',
        'code' => '<label for="email">Email</label>
<input id="email" type="email" required>',
      ),
      1 => 
      array (
        'heading' => 'Validación JS',
        'body' => 'Antes de enviar, valida en JavaScript: longitud, formato email, contraseñas coincidentes.',
        'code' => 'console.log(\'Practica: web-forms\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué atributo HTML marca un campo obligatorio?',
        'options' => 
        array (
          0 => 'required',
          1 => 'mandatory',
          2 => 'must',
        ),
        'answer' => 'required',
        'explanation' => 'required activa validación nativa del navegador.',
        'pro_tip' => 'Siempre asocia label con for/id — accesibilidad básica.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué type de input es para correo electrónico?',
        'options' => 
        array (
          0 => 'email',
          1 => 'text',
          2 => 'mail',
        ),
        'answer' => 'email',
        'explanation' => 'type="email" valida formato básico en móviles y desktop.',
        'pro_tip' => 'La validación del servidor sigue siendo obligatoria.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'web-grid',
    'order' => 5,
    'title' => 'CSS Grid y layouts',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Grid de dos dimensiones, áreas nombradas y responsive.',
    'concepts' => 
    array (
      0 => 'grid',
      1 => 'layout',
      2 => 'responsive',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CSS Grid',
        'body' => '`display: grid` define filas y columnas. Ideal para dashboards y layouts complejos.',
        'code' => '.layout {
  display: grid;
  grid-template-columns: 1fr 3fr;
  gap: 1rem;
}',
      ),
      1 => 
      array (
        'heading' => 'Responsive',
        'body' => 'Con `grid-template-columns: repeat(auto-fit, minmax(200px, 1fr))` las tarjetas se adaptan solas.',
        'code' => 'display: grid;
gap: 1rem;',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué propiedad activa CSS Grid?',
        'options' => 
        array (
          0 => 'display: grid',
          1 => 'display: flex',
          2 => 'layout: grid',
        ),
        'answer' => 'display: grid',
        'explanation' => 'Grid controla filas y columnas a la vez.',
        'pro_tip' => 'Flexbox para barras de navegación; Grid para la página entera.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe una regla CSS con display: grid y gap: 1rem',
        'must_contain' => 
        array (
          0 => 'display: grid',
          1 => 'gap',
        ),
        'hint' => 'display: grid;
gap: 1rem;',
        'explanation' => 'gap separa celdas sin márgenes hacky.',
        'pro_tip' => 'fr es la unidad flexible de Grid — reparte espacio libre.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'web-dom',
    'order' => 6,
    'title' => 'Manipular el DOM',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'querySelector, eventos y actualizar la UI sin frameworks.',
    'concepts' => 
    array (
      0 => 'dom',
      1 => 'events',
      2 => 'querySelector',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'El DOM',
        'body' => 'El navegador convierte HTML en un árbol de nodos. JavaScript puede leerlo y modificarlo.',
        'code' => 'const btn = document.querySelector(\'#miBtn\');
btn.addEventListener(\'click\', () => console.log(\'clic\'));',
      ),
      1 => 
      array (
        'heading' => 'Eventos',
        'body' => 'click, submit, input — reaccionas a acciones del usuario sin recargar la página.',
        'code' => 'const el = { textContent: "Hola" };\\nconsole.log(el.textContent);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'js',
        'question' => 'Simula selección: const el = { textContent: "Hola" }; console.log(el.textContent)',
        'expected_output' => 'Hola',
        'hint' => 'const el = { textContent: "Hola" };\\nconsole.log(el.textContent);',
        'explanation' => 'textContent es cómo lees/escribes texto en un nodo.',
        'pro_tip' => 'En el navegador real: document.querySelector("#id").textContent',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué método registra un listener de eventos?',
        'options' => 
        array (
          0 => 'addEventListener',
          1 => 'onEvent',
          2 => 'listen',
        ),
        'answer' => 'addEventListener',
        'explanation' => 'addEventListener es el estándar moderno para eventos.',
        'pro_tip' => 'Usa event delegation en listas largas para mejor rendimiento.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'web-fetch',
    'order' => 7,
    'title' => 'Fetch y APIs REST',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Consumir JSON desde tu backend PHP, Python o Node.',
    'concepts' => 
    array (
      0 => 'fetch',
      1 => 'json',
      2 => 'api',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'fetch()',
        'body' => 'La API **fetch** pide datos HTTP de forma asíncrona. Las SPAs y Astro islands dependen de esto.',
        'code' => 'fetch(\'/api/users\')
  .then(r => r.json())
  .then(data => console.log(data));',
      ),
      1 => 
      array (
        'heading' => 'JSON',
        'body' => 'Las APIs modernas devuelven JSON. `response.json()` lo parsea a objetos JavaScript.',
        'code' => 'const data = JSON.parse(\'{"ok":true}\');\\nconsole.log(data.ok);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'js',
        'question' => 'Parsea JSON: const data = JSON.parse(\'{"ok":true}\'); console.log(data.ok)',
        'expected_output' => 'true',
        'hint' => 'const data = JSON.parse(\'{"ok":true}\');\\nconsole.log(data.ok);',
        'explanation' => 'JSON.parse convierte string JSON en objeto JS.',
        'pro_tip' => 'fetch + json es el puente frontend ↔ backend.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué método convierte la respuesta HTTP a objeto JS?',
        'options' => 
        array (
          0 => 'response.json()',
          1 => 'response.text()',
          2 => 'response.html()',
        ),
        'answer' => 'response.json()',
        'explanation' => '.json() parsea el cuerpo como JSON.',
        'pro_tip' => 'Siempre verifica response.ok antes de parsear.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'web-async',
    'order' => 8,
    'title' => 'Async/await y Promesas',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Código asíncrono legible: Promises, async/await y errores.',
    'concepts' => 
    array (
      0 => 'async',
      1 => 'promise',
      2 => 'await',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Promesas',
        'body' => 'Una **Promise** representa un valor futuro: éxito (resolve) o error (reject).',
        'code' => 'Promise.resolve(42).then(n => console.log(n));',
      ),
      1 => 
      array (
        'heading' => 'async/await',
        'body' => 'Sintaxis azucarada sobre promesas — código que parece síncrono.',
        'code' => 'async function cargar() {
  const r = await fetch(\'/api\');
  return r.json();
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'js',
        'question' => 'Promesa resuelta: Promise.resolve(42).then(n => console.log(n))',
        'expected_output' => '42',
        'hint' => 'Promise.resolve(42).then(n => console.log(n));',
        'explanation' => 'Las promesas encadenan operaciones asíncronas.',
        'pro_tip' => 'async/await + try/catch maneja errores de red limpiamente.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué palabra clave espera una Promise dentro de async?',
        'options' => 
        array (
          0 => 'await',
          1 => 'wait',
          2 => 'then',
        ),
        'answer' => 'await',
        'explanation' => 'await pausa hasta que la promesa se resuelve.',
        'pro_tip' => 'No abuses de await en serie — Promise.all paraleliza.',
      ),
    ),
  ),
);
