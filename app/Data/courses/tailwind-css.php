<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'tw-intro',
    'order' => 1,
    'title' => 'Utility-first con Tailwind',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'Clases utilitarias vs CSS tradicional.',
    'concepts' => 
    array (
      0 => 'tailwind',
      1 => 'utility',
      2 => 'config',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tailwind CSS',
        'body' => 'En vez de escribir `.card { padding: 1rem }`, usas clases: `p-4 rounded-lg shadow`.',
        'code' => 'console.log(\'Practica: tw-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Ventajas',
        'body' => 'Diseño rápido, consistencia (escala de spacing), purge elimina CSS no usado en prod.',
        'code' => 'console.log(\'Practica: tw-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué significa utility-first?',
        'options' => 
        array (
          0 => 'Componer UI con clases pequeñas reutilizables',
          1 => 'Un solo archivo CSS gigante',
          2 => 'Solo inline styles',
        ),
        'answer' => 'Componer UI con clases pequeñas reutilizables',
        'explanation' => 'p-4, flex, text-center — bloques de LEGO.',
        'pro_tip' => 'Tailwind viene por defecto en Laravel Breeze/Jetstream.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Clase Tailwind para padding 1rem (16px)?',
        'options' => 
        array (
          0 => 'p-4',
          1 => 'padding-16',
          2 => 'p-1rem',
        ),
        'answer' => 'p-4',
        'explanation' => 'Escala: 4 = 1rem en la mayoría de configs.',
        'pro_tip' => 'Documentación en tailwindcss.com/docs.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'tw-layout',
    'order' => 2,
    'title' => 'Flexbox y spacing',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'flex, gap, margin y padding.',
    'concepts' => 
    array (
      0 => 'flex',
      1 => 'gap',
      2 => 'spacing',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Flex',
        'body' => '`flex items-center justify-between gap-4` — layout horizontal en segundos.',
        'code' => '<div class="flex items-center gap-4 p-6 bg-white rounded-xl">',
      ),
      1 => 
      array (
        'heading' => 'Spacing',
        'body' => 'm-*, p-*, mx-auto, space-y-4 — sistema consistente.',
        'code' => 'class="flex gap-4 p-4"',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Centrar verticalmente en flex?',
        'options' => 
        array (
          0 => 'items-center',
          1 => 'justify-center',
          2 => 'text-center',
        ),
        'answer' => 'items-center',
        'explanation' => 'items = eje cruzado; justify = eje principal.',
        'pro_tip' => 'flex-col para columna; flex-row por defecto.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe clases flex gap-4 p-4',
        'must_contain' => 
        array (
          0 => 'flex',
          1 => 'gap-4',
          2 => 'p-4',
        ),
        'hint' => 'class="flex gap-4 p-4"',
        'explanation' => 'Patrón contenedor de tarjetas.',
        'pro_tip' => 'max-w-7xl mx-auto centra contenido ancho.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'tw-responsive',
    'order' => 3,
    'title' => 'Diseño responsive',
    'level' => 'Intermedio',
    'minutes' => 25,
    'summary' => 'Breakpoints sm, md, lg y mobile-first.',
    'concepts' => 
    array (
      0 => 'breakpoint',
      1 => 'responsive',
      2 => 'mobile-first',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Mobile-first',
        'body' => 'Estilos base para móvil; `md:flex` aplica desde tablet.',
        'code' => 'class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"',
      ),
      1 => 
      array (
        'heading' => 'Breakpoints',
        'body' => 'sm 640px, md 768px, lg 1024px, xl 1280px — prefijo antes de la utilidad.',
        'code' => 'grid grid-cols-1 md:grid-cols-3',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace md:grid-cols-2?',
        'options' => 
        array (
          0 => '2 columnas desde breakpoint md',
          1 => '2 columnas solo en móvil',
          2 => 'Borra el grid',
        ),
        'answer' => '2 columnas desde breakpoint md',
        'explanation' => 'Prefijo = min-width media query.',
        'pro_tip' => 'hidden md:block oculta en móvil, muestra en desktop.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe grid-cols-1 md:grid-cols-3',
        'must_contain' => 
        array (
          0 => 'grid-cols-1',
          1 => 'md:grid-cols-3',
        ),
        'hint' => 'grid grid-cols-1 md:grid-cols-3',
        'explanation' => '1 col móvil, 3 cols desktop.',
        'pro_tip' => 'Prueba en DevTools responsive mode.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'tw-components',
    'order' => 4,
    'title' => 'Botones, cards y formularios',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Patrones UI comunes con utilidades.',
    'concepts' => 
    array (
      0 => 'button',
      1 => 'card',
      2 => 'form',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Botón',
        'body' => '`px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition`',
        'code' => 'hover:bg-blue-700',
      ),
      1 => 
      array (
        'heading' => 'Card',
        'body' => '`bg-white shadow-md rounded-xl p-6 border border-gray-100` — patrón dashboard.',
        'code' => 'hover:bg-blue-700',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Clase para esquinas redondeadas grandes?',
        'options' => 
        array (
          0 => 'rounded-xl',
          1 => 'round-big',
          2 => 'border-radius-xl',
        ),
        'answer' => 'rounded-xl',
        'explanation' => 'rounded-sm/md/lg/xl/2xl — escala Tailwind.',
        'pro_tip' => '@apply en CSS solo si repites mucho — prefer composición.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe hover:bg-blue-700 en un botón',
        'must_contain' => 
        array (
          0 => 'hover:bg',
        ),
        'hint' => 'hover:bg-blue-700',
        'explanation' => 'hover: aplica estilo al pasar el ratón.',
        'pro_tip' => 'focus:ring-2 para accesibilidad en teclado.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'tw-dark',
    'order' => 5,
    'title' => 'Modo oscuro',
    'level' => 'Intermedio',
    'minutes' => 25,
    'summary' => 'dark: variant y class strategy.',
    'concepts' => 
    array (
      0 => 'dark-mode',
      1 => 'theme',
      2 => 'class',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'dark:',
        'body' => '`bg-white dark:bg-gray-900 text-gray-900 dark:text-white` — toggle con class en html.',
        'code' => '<html class="dark">',
      ),
      1 => 
      array (
        'heading' => 'EscalaPHP',
        'body' => 'Esta plataforma ya tiene tema claro/oscuro — Tailwind dark: es el mismo concepto.',
        'code' => 'dark:bg-gray-900',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo activar dark mode con class strategy?',
        'options' => 
        array (
          0 => 'class="dark" en html o body',
          1 => 'Solo media query del OS',
          2 => 'No se puede',
        ),
        'answer' => 'class="dark" en html o body',
        'explanation' => 'darkMode: "class" en tailwind.config.js',
        'pro_tip' => 'darkMode: "media" sigue preferencia del sistema.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe dark:bg-gray-900',
        'must_contain' => 
        array (
          0 => 'dark:bg',
        ),
        'hint' => 'dark:bg-gray-900',
        'explanation' => 'Fondo oscuro cuando modo dark activo.',
        'pro_tip' => 'Persiste preferencia en localStorage con JS.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'tw-react',
    'order' => 6,
    'title' => 'Tailwind + React',
    'level' => 'Integración',
    'minutes' => 30,
    'summary' => 'Vite, className y componentes reutilizables.',
    'concepts' => 
    array (
      0 => 'react',
      1 => 'classname',
      2 => 'vite',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'className',
        'body' => 'En React usas `className` en vez de `class`. Mismas utilidades Tailwind.',
        'code' => 'function Button({ children }) {\\n  return <button className="px-4 py-2 bg-indigo-600 text-white rounded">{children}</button>;\\n}',
      ),
      1 => 
      array (
        'heading' => 'Vite',
        'body' => 'npm create vite@latest + tailwind postcss — stack moderno con React.',
        'code' => 'console.log(\'Practica: tw-react\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Atributo de clases en JSX?',
        'options' => 
        array (
          0 => 'className',
          1 => 'class',
          2 => 'cssClass',
        ),
        'answer' => 'className',
        'explanation' => 'class es reservado en JS — React usa className.',
        'pro_tip' => 'clsx o cn() combinan clases condicionales.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Bundler típico con React + Tailwind hoy?',
        'options' => 
        array (
          0 => 'Vite',
          1 => 'Webpack obligatorio',
          2 => 'No hace falta bundler',
        ),
        'answer' => 'Vite',
        'explanation' => 'Vite es rápido y el default en herramientas nuevas.',
        'pro_tip' => 'Laravel Mix/Vite también integra Tailwind en PHP.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'tailwind-css-produccion',
    'order' => 7,
    'title' => 'Performance, bundle y Core Web Vitals',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Performance, bundle y Core Web Vitals — cierre avanzado de Tailwind CSS.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'a11y',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Tailwind CSS a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'tailwind-css-operaciones',
    'order' => 8,
    'title' => 'Accesibilidad, SEO y checklist de release',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Accesibilidad, SEO y checklist de release — cierre avanzado de Tailwind CSS.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'a11y',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Tailwind CSS a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
);
