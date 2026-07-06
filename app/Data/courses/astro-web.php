<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'as-intro',
    'order' => 1,
    'title' => 'Introducción a Astro',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'SSG, archivos .astro y por qué es más rápido que una SPA pura.',
    'concepts' => 
    array (
      0 => 'astro',
      1 => 'ssg',
      2 => 'static',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es Astro?',
        'body' => 'Astro genera **HTML estático** en build time. Carga casi cero JavaScript por defecto — ideal para blogs, landings y docs.',
        'code' => 'console.log(\'Practica: as-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Un archivo .astro',
        'body' => 'Mezcla HTML, CSS y un bloque frontmatter con `---`.',
        'code' => '---
const titulo = \'Hola Astro\';
---
<h1>{titulo}</h1>',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo brilla Astro?',
        'options' => 
        array (
          0 => 'Sitios con mucho contenido estático',
          1 => 'Solo apps con estado complejo',
          2 => 'Bases de datos SQL',
        ),
        'answer' => 'Sitios con mucho contenido estático',
        'explanation' => 'Astro optimiza contenido que no cambia en cada visita.',
        'pro_tip' => 'Blogs, portfolios y docs son el sweet spot de Astro.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué extensión usan los componentes Astro?',
        'options' => 
        array (
          0 => '.astro',
          1 => '.jsx',
          2 => '.vue',
        ),
        'answer' => '.astro',
        'explanation' => 'Los archivos `.astro` son la unidad básica del framework.',
        'pro_tip' => 'Puedes mezclar React/Vue/Svelte dentro de Astro cuando haga falta.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'as-islands',
    'order' => 2,
    'title' => 'Islands architecture',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Interactividad solo donde la necesitas — React como isla.',
    'concepts' => 
    array (
      0 => 'islands',
      1 => 'hydration',
      2 => 'client:load',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Islas de interactividad',
        'body' => 'El 95% de la página es HTML estático. Solo un **botón**, un **carrusel** o un **formulario** llevan JS — son las "islas".',
        'code' => 'let n = 0;
n++;
console.log(n);',
      ),
      1 => 
      array (
        'heading' => 'Integrar React',
        'body' => 'Importas un componente React y lo hidratas con una directiva.',
        'code' => 'import Contador from \'../components/Contador.jsx\';
<Contador client:load />',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es una "isla" en Astro?',
        'options' => 
        array (
          0 => 'Componente interactivo aislado en página estática',
          1 => 'Un servidor en la nube',
          2 => 'Un tipo de base de datos',
        ),
        'answer' => 'Componente interactivo aislado en página estática',
        'explanation' => 'Las islas evitan enviar JS innecesario al navegador.',
        'pro_tip' => 'client:load hidrata al cargar; client:visible solo cuando entra en viewport.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Simula un contador: let n = 0; n++; console.log(n)',
        'expected_output' => '1',
        'hint' => 'let n = 0;
n++;
console.log(n);',
        'explanation' => 'Así funciona el estado detrás de un componente React en una isla.',
        'pro_tip' => 'En Astro real, ese contador sería un componente React con useState.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'as-deploy',
    'order' => 3,
    'title' => 'Deploy en Vercel o Netlify',
    'level' => 'DevOps',
    'minutes' => 25,
    'summary' => 'Build estático, edge y variables de entorno.',
    'concepts' => 
    array (
      0 => 'deploy',
      1 => 'vercel',
      2 => 'netlify',
      3 => 'ssg',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Build estático',
        'body' => '`npm run build` genera la carpeta `dist/` con HTML/CSS/JS listo para CDN.',
        'code' => 'console.log(\'Practica: as-deploy\');',
      ),
      1 => 
      array (
        'heading' => 'Deploy',
        'body' => 'Conectas tu repo a **Vercel** o **Netlify**. Cada push a `main` despliega automáticamente.',
        'code' => 'console.log(\'Practica: as-deploy\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando genera el sitio estático de Astro?',
        'options' => 
        array (
          0 => 'npm run build',
          1 => 'docker compose up',
          2 => 'composer install',
        ),
        'answer' => 'npm run build',
        'explanation' => 'El build compila .astro a HTML estático en `dist/`.',
        'pro_tip' => 'Vercel detecta Astro automáticamente — cero config en muchos casos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué Astro es rápido en producción?',
        'options' => 
        array (
          0 => 'Envía poco JS y sirve HTML estático',
          1 => 'Usa más JavaScript que React',
          2 => 'Requiere servidor PHP',
        ),
        'answer' => 'Envía poco JS y sirve HTML estático',
        'explanation' => 'Menos JS = menos parseo en el navegador = mejor Core Web Vitals.',
        'pro_tip' => 'Ideal para SEO: el HTML ya viene renderizado.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'as-routing',
    'order' => 4,
    'title' => 'Rutas y páginas dinámicas',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'File-based routing y parámetros [slug].',
    'concepts' => 
    array (
      0 => 'routing',
      1 => 'dynamic',
      2 => 'pages',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'File-based routing',
        'body' => 'Cada archivo en `src/pages/` es una ruta. `blog/[slug].astro` genera páginas dinámicas.',
        'code' => 'console.log(\'Practica: as-routing\');',
      ),
      1 => 
      array (
        'heading' => 'getStaticPaths',
        'body' => 'Declaras qué slugs pre-renderizar en build time.',
        'code' => 'export function getStaticPaths() {
  return [{ params: { slug: \'hola\' } }];
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde viven las rutas en Astro?',
        'options' => 
        array (
          0 => 'src/pages/',
          1 => 'public/routes/',
          2 => 'routes.php',
        ),
        'answer' => 'src/pages/',
        'explanation' => 'Convención similar a Next.js pages router.',
        'pro_tip' => '[id].astro captura segmentos dinámicos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué función define rutas estáticas dinámicas?',
        'options' => 
        array (
          0 => 'getStaticPaths',
          1 => 'useRouter',
          2 => 'Route::get',
        ),
        'answer' => 'getStaticPaths',
        'explanation' => 'Lista los params a pre-generar en build.',
        'pro_tip' => 'Para SSR usa output: server y endpoints.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'as-content',
    'order' => 5,
    'title' => 'Content Collections',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Markdown tipado, frontmatter y blogs.',
    'concepts' => 
    array (
      0 => 'content-collections',
      1 => 'markdown',
      2 => 'schema',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Content Collections',
        'body' => 'Organizas posts en `src/content/blog/` con esquema Zod — títulos, fechas y tags validados.',
        'code' => 'console.log(\'Practica: as-content\');',
      ),
      1 => 
      array (
        'heading' => 'Markdown + Astro',
        'body' => 'Escribes en `.md`, Astro renderiza HTML estático ultrarrápido.',
        'code' => 'console.log(\'Practica: as-content\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja de Content Collections?',
        'options' => 
        array (
          0 => 'Markdown tipado y validado en build',
          1 => 'Solo para PHP',
          2 => 'Requiere base de datos',
        ),
        'answer' => 'Markdown tipado y validado en build',
        'explanation' => 'Errores de frontmatter se detectan antes de deploy.',
        'pro_tip' => 'Ideal para docs técnicas y blogs de dev.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué formato usan los posts?',
        'options' => 
        array (
          0 => 'Markdown (.md / .mdx)',
          1 => 'Solo HTML puro',
          2 => 'SQL',
        ),
        'answer' => 'Markdown (.md / .mdx)',
        'explanation' => 'MDX permite componentes React dentro del markdown.',
        'pro_tip' => 'getCollection("blog") lista todos los posts.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'as-seo',
    'order' => 6,
    'title' => 'SEO y performance',
    'level' => 'Avanzado',
    'minutes' => 25,
    'summary' => 'Meta tags, Open Graph y Core Web Vitals.',
    'concepts' => 
    array (
      0 => 'seo',
      1 => 'og',
      2 => 'performance',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Meta y OG',
        'body' => '`<title>`, `description`, `og:image` — cómo se ve tu link en Google y redes sociales.',
        'code' => '<meta name="description" content="Mi sitio">',
      ),
      1 => 
      array (
        'heading' => 'Performance',
        'body' => 'HTML estático + poco JS = LCP y CLS excelentes sin esfuerzo heroico.',
        'code' => '<meta name="description" content="Mi sitio">',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué Astro ayuda al SEO?',
        'options' => 
        array (
          0 => 'HTML completo en el primer byte',
          1 => 'Solo client-side rendering',
          2 => 'Sin títulos',
        ),
        'answer' => 'HTML completo en el primer byte',
        'explanation' => 'Los crawlers leen contenido sin ejecutar JS.',
        'pro_tip' => 'Usa @astrojs/sitemap para sitemap.xml automático.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe una meta description en HTML',
        'must_contain' => 
        array (
          0 => 'meta',
          1 => 'description',
        ),
        'hint' => '<meta name="description" content="Mi sitio">',
        'explanation' => 'description aparece en resultados de búsqueda.',
        'pro_tip' => 'og:title y og:description para previews en Slack/Twitter.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'astro-web-produccion',
    'order' => 7,
    'title' => 'Performance, bundle y Core Web Vitals',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Performance, bundle y Core Web Vitals — cierre avanzado de Astro.',
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
        'body' => 'Aplica lo aprendido en Astro a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'astro-web-operaciones',
    'order' => 8,
    'title' => 'Accesibilidad, SEO y checklist de release',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Accesibilidad, SEO y checklist de release — cierre avanzado de Astro.',
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
        'body' => 'Aplica lo aprendido en Astro a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
