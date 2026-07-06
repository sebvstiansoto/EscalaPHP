<?php

declare(strict_types=1);

return [
    [
        'slug' => 'tw-intro',
        'order' => 1,
        'title' => 'Utility-first con Tailwind',
        'level' => 'Fundamentos',
        'minutes' => 20,
        'summary' => 'Clases utilitarias vs CSS tradicional.',
        'concepts' => ['tailwind', 'utility', 'config'],
        'sections' => [
            ['heading' => 'Tailwind CSS', 'body' => 'En vez de escribir `.card { padding: 1rem }`, usas clases: `p-4 rounded-lg shadow`.'],
            ['heading' => 'Ventajas', 'body' => 'Diseño rápido, consistencia (escala de spacing), purge elimina CSS no usado en prod.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué significa utility-first?', 'options' => ['Componer UI con clases pequeñas reutilizables', 'Un solo archivo CSS gigante', 'Solo inline styles'], 'answer' => 'Componer UI con clases pequeñas reutilizables', 'explanation' => 'p-4, flex, text-center — bloques de LEGO.', 'pro_tip' => 'Tailwind viene por defecto en Laravel Breeze/Jetstream.'],
            ['type' => 'choice', 'question' => '¿Clase Tailwind para padding 1rem (16px)?', 'options' => ['p-4', 'padding-16', 'p-1rem'], 'answer' => 'p-4', 'explanation' => 'Escala: 4 = 1rem en la mayoría de configs.', 'pro_tip' => 'Documentación en tailwindcss.com/docs.'],
        ],
    ],
    [
        'slug' => 'tw-layout',
        'order' => 2,
        'title' => 'Flexbox y spacing',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'flex, gap, margin y padding.',
        'concepts' => ['flex', 'gap', 'spacing'],
        'sections' => [
            ['heading' => 'Flex', 'body' => '`flex items-center justify-between gap-4` — layout horizontal en segundos.', 'code' => '<div class="flex items-center gap-4 p-6 bg-white rounded-xl">'],
            ['heading' => 'Spacing', 'body' => 'm-*, p-*, mx-auto, space-y-4 — sistema consistente.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Centrar verticalmente en flex?', 'options' => ['items-center', 'justify-center', 'text-center'], 'answer' => 'items-center', 'explanation' => 'items = eje cruzado; justify = eje principal.', 'pro_tip' => 'flex-col para columna; flex-row por defecto.'],
            ['type' => 'contains', 'question' => 'Escribe clases flex gap-4 p-4', 'must_contain' => ['flex', 'gap-4', 'p-4'], 'hint' => 'class="flex gap-4 p-4"', 'explanation' => 'Patrón contenedor de tarjetas.', 'pro_tip' => 'max-w-7xl mx-auto centra contenido ancho.'],
        ],
    ],
    [
        'slug' => 'tw-responsive',
        'order' => 3,
        'title' => 'Diseño responsive',
        'level' => 'Intermedio',
        'minutes' => 25,
        'summary' => 'Breakpoints sm, md, lg y mobile-first.',
        'concepts' => ['breakpoint', 'responsive', 'mobile-first'],
        'sections' => [
            ['heading' => 'Mobile-first', 'body' => 'Estilos base para móvil; `md:flex` aplica desde tablet.', 'code' => 'class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"'],
            ['heading' => 'Breakpoints', 'body' => 'sm 640px, md 768px, lg 1024px, xl 1280px — prefijo antes de la utilidad.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace md:grid-cols-2?', 'options' => ['2 columnas desde breakpoint md', '2 columnas solo en móvil', 'Borra el grid'], 'answer' => '2 columnas desde breakpoint md', 'explanation' => 'Prefijo = min-width media query.', 'pro_tip' => 'hidden md:block oculta en móvil, muestra en desktop.'],
            ['type' => 'contains', 'question' => 'Escribe grid-cols-1 md:grid-cols-3', 'must_contain' => ['grid-cols-1', 'md:grid-cols-3'], 'hint' => 'grid grid-cols-1 md:grid-cols-3', 'explanation' => '1 col móvil, 3 cols desktop.', 'pro_tip' => 'Prueba en DevTools responsive mode.'],
        ],
    ],
    [
        'slug' => 'tw-components',
        'order' => 4,
        'title' => 'Botones, cards y formularios',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Patrones UI comunes con utilidades.',
        'concepts' => ['button', 'card', 'form'],
        'sections' => [
            ['heading' => 'Botón', 'body' => '`px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition`'],
            ['heading' => 'Card', 'body' => '`bg-white shadow-md rounded-xl p-6 border border-gray-100` — patrón dashboard.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Clase para esquinas redondeadas grandes?', 'options' => ['rounded-xl', 'round-big', 'border-radius-xl'], 'answer' => 'rounded-xl', 'explanation' => 'rounded-sm/md/lg/xl/2xl — escala Tailwind.', 'pro_tip' => '@apply en CSS solo si repites mucho — prefer composición.'],
            ['type' => 'contains', 'question' => 'Escribe hover:bg-blue-700 en un botón', 'must_contain' => ['hover:bg'], 'hint' => 'hover:bg-blue-700', 'explanation' => 'hover: aplica estilo al pasar el ratón.', 'pro_tip' => 'focus:ring-2 para accesibilidad en teclado.'],
        ],
    ],
    [
        'slug' => 'tw-dark',
        'order' => 5,
        'title' => 'Modo oscuro',
        'level' => 'Intermedio',
        'minutes' => 25,
        'summary' => 'dark: variant y class strategy.',
        'concepts' => ['dark-mode', 'theme', 'class'],
        'sections' => [
            ['heading' => 'dark:', 'body' => '`bg-white dark:bg-gray-900 text-gray-900 dark:text-white` — toggle con class en html.', 'code' => '<html class="dark">'],
            ['heading' => 'EscalaPHP', 'body' => 'Esta plataforma ya tiene tema claro/oscuro — Tailwind dark: es el mismo concepto.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo activar dark mode con class strategy?', 'options' => ['class="dark" en html o body', 'Solo media query del OS', 'No se puede'], 'answer' => 'class="dark" en html o body', 'explanation' => 'darkMode: "class" en tailwind.config.js', 'pro_tip' => 'darkMode: "media" sigue preferencia del sistema.'],
            ['type' => 'contains', 'question' => 'Escribe dark:bg-gray-900', 'must_contain' => ['dark:bg'], 'hint' => 'dark:bg-gray-900', 'explanation' => 'Fondo oscuro cuando modo dark activo.', 'pro_tip' => 'Persiste preferencia en localStorage con JS.'],
        ],
    ],
    [
        'slug' => 'tw-react',
        'order' => 6,
        'title' => 'Tailwind + React',
        'level' => 'Integración',
        'minutes' => 30,
        'summary' => 'Vite, className y componentes reutilizables.',
        'concepts' => ['react', 'classname', 'vite'],
        'sections' => [
            ['heading' => 'className', 'body' => 'En React usas `className` en vez de `class`. Mismas utilidades Tailwind.', 'code' => 'function Button({ children }) {\n  return <button className="px-4 py-2 bg-indigo-600 text-white rounded">{children}</button>;\n}'],
            ['heading' => 'Vite', 'body' => 'npm create vite@latest + tailwind postcss — stack moderno con React.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Atributo de clases en JSX?', 'options' => ['className', 'class', 'cssClass'], 'answer' => 'className', 'explanation' => 'class es reservado en JS — React usa className.', 'pro_tip' => 'clsx o cn() combinan clases condicionales.'],
            ['type' => 'choice', 'question' => '¿Bundler típico con React + Tailwind hoy?', 'options' => ['Vite', 'Webpack obligatorio', 'No hace falta bundler'], 'answer' => 'Vite', 'explanation' => 'Vite es rápido y el default en herramientas nuevas.', 'pro_tip' => 'Laravel Mix/Vite también integra Tailwind en PHP.'],
        ],
    ],
];
