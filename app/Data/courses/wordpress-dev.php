<?php

declare(strict_types=1);

return [
    ['slug' => 'wp-intro', 'order' => 1, 'title' => 'WordPress para developers', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'CMS #1, PHP y ecosistema.', 'concepts' => ['wordpress', 'cms', 'php'], 'sections' => [
        ['heading' => 'WordPress', 'body' => '**43% web** usa WordPress — CMS PHP extensible themes/plugins. Headless WP + React posible.'],
        ['heading' => 'Stack', 'body' => 'PHP + MySQL + Apache/Nginx — local: Local WP, Docker, Laravel Valet.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿WordPress core lenguaje?', 'options' => ['PHP', 'Ruby', 'Node only'], 'answer' => 'PHP', 'explanation' => 'Curso PHP fundamentos base.', 'pro_tip' => 'wordpress.org vs .com difference.'],
        ['type' => 'choice', 'question' => '¿wp-config.php?', 'options' => ['DB credentials y salts', 'Theme file', 'Plugin only'], 'answer' => 'DB credentials y salts', 'explanation' => 'Never commit production wp-config.', 'pro_tip' => 'WP_DEBUG false en prod.'],
    ]],
    ['slug' => 'wp-theme', 'order' => 2, 'title' => 'Themes y template hierarchy', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'index.php, single.php, blocks.', 'concepts' => ['theme', 'template', 'hierarchy'], 'sections' => [
        ['heading' => 'Hierarchy', 'body' => 'single-post.php → single.php → singular.php → index.php — WordPress busca template match.'],
        ['heading' => 'Block themes', 'body' => 'FSE Full Site Editing — theme.json + blocks — moderno vs classic PHP templates.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Template single post?', 'options' => ['single.php o single-{post-type}.php', 'always index only', 'header.php'], 'answer' => 'single.php o single-{post-type}.php', 'explanation' => 'Hierarchy specificity.', 'pro_tip' => 'get_template_part DRY.'],
        ['type' => 'choice', 'question' => '¿the_loop?', 'options' => ['while have_posts the_post', 'foreach SQL', 'React map'], 'answer' => 'while have_posts the_post', 'explanation' => 'Core WP query loop.', 'pro_tip' => 'WP_Query custom queries.'],
    ]],
    ['slug' => 'wp-plugins', 'order' => 3, 'title' => 'Plugin development', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'Hooks, activation y structure.', 'concepts' => ['plugin', 'activation', 'hook'], 'sections' => [
        ['heading' => 'Plugin', 'body' => 'wp-content/plugins/my-plugin/my-plugin.php — Plugin header comment.'],
        ['heading' => 'Activation', 'body' => 'register_activation_hook — create tables, flush rewrite rules.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Plugin main file header?', 'options' => ['Plugin Name: comment block', 'package.json', 'composer only optional'], 'answer' => 'Plugin Name: comment block', 'explanation' => 'WP reads metadata comment.', 'pro_tip' => 'Composer autoload PSR-4 modern plugins.'],
        ['type' => 'choice', 'question' => '¿Namespace plugins?', 'options' => ['Evita colisiones funciones', 'Prohibido WP', 'Solo themes'], 'answer' => 'Evita colisiones funciones', 'explanation' => 'Prefix or namespace always.', 'pro_tip' => 'Curso PHP enterprise patterns.'],
    ]],
    ['slug' => 'wp-hooks', 'order' => 4, 'title' => 'Actions y filters', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Hook system — corazón WP.', 'concepts' => ['action', 'filter', 'priority'], 'sections' => [
        ['heading' => 'Actions', 'body' => 'add_action("init", "my_function") — ejecuta en punto lifecycle.'],
        ['heading' => 'Filters', 'body' => 'add_filter("the_title", fn($t) => $t) — modifica datos passthrough.', 'code' => "add_action('wp_enqueue_scripts', function() {\n  wp_enqueue_style('my-style', get_stylesheet_uri());\n});"],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Filter vs action?', 'options' => ['Filter modifica valor; action evento sin return', 'Iguales', 'Action modifica'], 'answer' => 'Filter modifica valor; action evento sin return', 'explanation' => 'apply_filters vs do_action.', 'pro_tip' => 'Priority 10 default — order matters.'],
        ['type' => 'contains', 'question' => 'Escribe add_action', 'must_contain' => ['add_action'], 'hint' => "add_action('init', 'callback');", 'explanation' => 'Register hook.', 'pro_tip' => 'remove_action cleanup.'],
    ]],
    ['slug' => 'wp-rest', 'order' => 5, 'title' => 'REST API y headless', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'wp-json, custom endpoints, Next.js.', 'concepts' => ['rest', 'headless', 'jwt'], 'sections' => [
        ['heading' => 'REST API', 'body' => '/wp-json/wp/v2/posts — JSON público por default posts.'],
        ['heading' => 'Headless', 'body' => 'WP admin content → Next.js frontend fetch WP REST — decouple.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿register_rest_route?', 'options' => ['Custom API endpoint WP', 'Nginx config', 'MySQL'], 'answer' => 'Custom API endpoint WP', 'explanation' => 'Extend REST API.', 'pro_tip' => 'Curso Next.js consume headless.'],
        ['type' => 'choice', 'question' => '¿Headless ventaja?', 'options' => ['Frontend moderno separado CMS', 'Sin CMS', 'Más lento siempre'], 'answer' => 'Frontend moderno separado CMS', 'explanation' => 'Editors WP, devs React.', 'pro_tip' => 'GraphQL WPGraphQL plugin alt.'],
    ]],
    ['slug' => 'wp-prod', 'order' => 6, 'title' => 'Seguridad y performance WP', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Updates, caching y hardening.', 'concepts' => ['security', 'cache', 'hardening'], 'sections' => [
        ['heading' => 'Security', 'body' => 'Auto updates minor, limit login attempts, disable file edit, least privilege users.'],
        ['heading' => 'Performance', 'body' => 'Object cache Redis, page cache Cloudflare, optimize images — evita plugin bloat.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿DISALLOW_FILE_EDIT?', 'options' => ['wp-config bloquea editor plugins/themes prod', 'Speed boost', 'SEO'], 'answer' => 'wp-config bloquea editor plugins/themes prod', 'explanation' => 'Reduce RCE surface.', 'pro_tip' => 'Curso seguridad web OWASP.'],
        ['type' => 'choice', 'question' => '¿WP transients?', 'options' => ['Cache key-value TTL built-in', 'Payment method', 'Theme name'], 'answer' => 'Cache key-value TTL built-in', 'explanation' => 'Redis object cache persistent.', 'pro_tip' => 'Curso Redis cache complementa.'],
    ]],
];
