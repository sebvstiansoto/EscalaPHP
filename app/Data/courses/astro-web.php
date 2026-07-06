<?php

declare(strict_types=1);

return [
    [
        'slug' => 'as-intro',
        'order' => 1,
        'title' => 'Introducción a Astro',
        'level' => 'Fundamentos',
        'minutes' => 20,
        'summary' => 'SSG, archivos .astro y por qué es más rápido que una SPA pura.',
        'concepts' => ['astro', 'ssg', 'static'],
        'sections' => [
            ['heading' => '¿Qué es Astro?', 'body' => 'Astro genera **HTML estático** en build time. Carga casi cero JavaScript por defecto — ideal para blogs, landings y docs.'],
            ['heading' => 'Un archivo .astro', 'body' => 'Mezcla HTML, CSS y un bloque frontmatter con `---`.', 'code' => "---\nconst titulo = 'Hola Astro';\n---\n<h1>{titulo}</h1>"],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Cuándo brilla Astro?',
                'options' => ['Sitios con mucho contenido estático', 'Solo apps con estado complejo', 'Bases de datos SQL'],
                'answer' => 'Sitios con mucho contenido estático',
                'explanation' => 'Astro optimiza contenido que no cambia en cada visita.',
                'pro_tip' => 'Blogs, portfolios y docs son el sweet spot de Astro.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Qué extensión usan los componentes Astro?',
                'options' => ['.astro', '.jsx', '.vue'],
                'answer' => '.astro',
                'explanation' => 'Los archivos `.astro` son la unidad básica del framework.',
                'pro_tip' => 'Puedes mezclar React/Vue/Svelte dentro de Astro cuando haga falta.',
            ],
        ],
    ],
    [
        'slug' => 'as-islands',
        'order' => 2,
        'title' => 'Islands architecture',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Interactividad solo donde la necesitas — React como isla.',
        'concepts' => ['islands', 'hydration', 'client:load'],
        'sections' => [
            ['heading' => 'Islas de interactividad', 'body' => 'El 95% de la página es HTML estático. Solo un **botón**, un **carrusel** o un **formulario** llevan JS — son las "islas".'],
            ['heading' => 'Integrar React', 'body' => 'Importas un componente React y lo hidratas con una directiva.', 'code' => "import Contador from '../components/Contador.jsx';\n<Contador client:load />"],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué es una "isla" en Astro?',
                'options' => ['Componente interactivo aislado en página estática', 'Un servidor en la nube', 'Un tipo de base de datos'],
                'answer' => 'Componente interactivo aislado en página estática',
                'explanation' => 'Las islas evitan enviar JS innecesario al navegador.',
                'pro_tip' => 'client:load hidrata al cargar; client:visible solo cuando entra en viewport.',
            ],
            [
                'type' => 'js',
                'question' => 'Simula un contador: let n = 0; n++; console.log(n)',
                'expected_output' => '1',
                'hint' => "let n = 0;\nn++;\nconsole.log(n);",
                'explanation' => 'Así funciona el estado detrás de un componente React en una isla.',
                'pro_tip' => 'En Astro real, ese contador sería un componente React con useState.',
            ],
        ],
    ],
    [
        'slug' => 'as-deploy',
        'order' => 3,
        'title' => 'Deploy en Vercel o Netlify',
        'level' => 'DevOps',
        'minutes' => 25,
        'summary' => 'Build estático, edge y variables de entorno.',
        'concepts' => ['deploy', 'vercel', 'netlify', 'ssg'],
        'sections' => [
            ['heading' => 'Build estático', 'body' => '`npm run build` genera la carpeta `dist/` con HTML/CSS/JS listo para CDN.'],
            ['heading' => 'Deploy', 'body' => 'Conectas tu repo a **Vercel** o **Netlify**. Cada push a `main` despliega automáticamente.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué comando genera el sitio estático de Astro?',
                'options' => ['npm run build', 'docker compose up', 'composer install'],
                'answer' => 'npm run build',
                'explanation' => 'El build compila .astro a HTML estático en `dist/`.',
                'pro_tip' => 'Vercel detecta Astro automáticamente — cero config en muchos casos.',
            ],
            [
                'type' => 'choice',
                'question' => '¿Por qué Astro es rápido en producción?',
                'options' => ['Envía poco JS y sirve HTML estático', 'Usa más JavaScript que React', 'Requiere servidor PHP'],
                'answer' => 'Envía poco JS y sirve HTML estático',
                'explanation' => 'Menos JS = menos parseo en el navegador = mejor Core Web Vitals.',
                'pro_tip' => 'Ideal para SEO: el HTML ya viene renderizado.',
            ],
        ],
    ],
    [
        'slug' => 'as-routing',
        'order' => 4,
        'title' => 'Rutas y páginas dinámicas',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'File-based routing y parámetros [slug].',
        'concepts' => ['routing', 'dynamic', 'pages'],
        'sections' => [
            ['heading' => 'File-based routing', 'body' => 'Cada archivo en `src/pages/` es una ruta. `blog/[slug].astro` genera páginas dinámicas.'],
            ['heading' => 'getStaticPaths', 'body' => 'Declaras qué slugs pre-renderizar en build time.', 'code' => "export function getStaticPaths() {\n  return [{ params: { slug: 'hola' } }];\n}"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde viven las rutas en Astro?', 'options' => ['src/pages/', 'public/routes/', 'routes.php'], 'answer' => 'src/pages/', 'explanation' => 'Convención similar a Next.js pages router.', 'pro_tip' => '[id].astro captura segmentos dinámicos.'],
            ['type' => 'choice', 'question' => '¿Qué función define rutas estáticas dinámicas?', 'options' => ['getStaticPaths', 'useRouter', 'Route::get'], 'answer' => 'getStaticPaths', 'explanation' => 'Lista los params a pre-generar en build.', 'pro_tip' => 'Para SSR usa output: server y endpoints.'],
        ],
    ],
    [
        'slug' => 'as-content',
        'order' => 5,
        'title' => 'Content Collections',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Markdown tipado, frontmatter y blogs.',
        'concepts' => ['content-collections', 'markdown', 'schema'],
        'sections' => [
            ['heading' => 'Content Collections', 'body' => 'Organizas posts en `src/content/blog/` con esquema Zod — títulos, fechas y tags validados.'],
            ['heading' => 'Markdown + Astro', 'body' => 'Escribes en `.md`, Astro renderiza HTML estático ultrarrápido.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Ventaja de Content Collections?', 'options' => ['Markdown tipado y validado en build', 'Solo para PHP', 'Requiere base de datos'], 'answer' => 'Markdown tipado y validado en build', 'explanation' => 'Errores de frontmatter se detectan antes de deploy.', 'pro_tip' => 'Ideal para docs técnicas y blogs de dev.'],
            ['type' => 'choice', 'question' => '¿Qué formato usan los posts?', 'options' => ['Markdown (.md / .mdx)', 'Solo HTML puro', 'SQL'], 'answer' => 'Markdown (.md / .mdx)', 'explanation' => 'MDX permite componentes React dentro del markdown.', 'pro_tip' => 'getCollection("blog") lista todos los posts.'],
        ],
    ],
    [
        'slug' => 'as-seo',
        'order' => 6,
        'title' => 'SEO y performance',
        'level' => 'Avanzado',
        'minutes' => 25,
        'summary' => 'Meta tags, Open Graph y Core Web Vitals.',
        'concepts' => ['seo', 'og', 'performance'],
        'sections' => [
            ['heading' => 'Meta y OG', 'body' => '`<title>`, `description`, `og:image` — cómo se ve tu link en Google y redes sociales.'],
            ['heading' => 'Performance', 'body' => 'HTML estático + poco JS = LCP y CLS excelentes sin esfuerzo heroico.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Por qué Astro ayuda al SEO?', 'options' => ['HTML completo en el primer byte', 'Solo client-side rendering', 'Sin títulos'], 'answer' => 'HTML completo en el primer byte', 'explanation' => 'Los crawlers leen contenido sin ejecutar JS.', 'pro_tip' => 'Usa @astrojs/sitemap para sitemap.xml automático.'],
            ['type' => 'contains', 'question' => 'Escribe una meta description en HTML', 'must_contain' => ['meta', 'description'], 'hint' => '<meta name="description" content="Mi sitio">', 'explanation' => 'description aparece en resultados de búsqueda.', 'pro_tip' => 'og:title y og:description para previews en Slack/Twitter.'],
        ],
    ],
];
