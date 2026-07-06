<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'wp-intro',
    'order' => 1,
    'title' => 'WordPress para developers',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'CMS #1, PHP y ecosistema.',
    'concepts' => 
    array (
      0 => 'wordpress',
      1 => 'cms',
      2 => 'php',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'WordPress',
        'body' => '**43% web** usa WordPress — CMS PHP extensible themes/plugins. Headless WP + React posible.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-intro\';',
      ),
      1 => 
      array (
        'heading' => 'Stack',
        'body' => 'PHP + MySQL + Apache/Nginx — local: Local WP, Docker, Laravel Valet.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿WordPress core lenguaje?',
        'options' => 
        array (
          0 => 'PHP',
          1 => 'Ruby',
          2 => 'Node only',
        ),
        'answer' => 'PHP',
        'explanation' => 'Curso PHP fundamentos base.',
        'pro_tip' => 'wordpress.org vs .com difference.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿wp-config.php?',
        'options' => 
        array (
          0 => 'DB credentials y salts',
          1 => 'Theme file',
          2 => 'Plugin only',
        ),
        'answer' => 'DB credentials y salts',
        'explanation' => 'Never commit production wp-config.',
        'pro_tip' => 'WP_DEBUG false en prod.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'wp-theme',
    'order' => 2,
    'title' => 'Themes y template hierarchy',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'index.php, single.php, blocks.',
    'concepts' => 
    array (
      0 => 'theme',
      1 => 'template',
      2 => 'hierarchy',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Hierarchy',
        'body' => 'single-post.php → single.php → singular.php → index.php — WordPress busca template match.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-theme\';',
      ),
      1 => 
      array (
        'heading' => 'Block themes',
        'body' => 'FSE Full Site Editing — theme.json + blocks — moderno vs classic PHP templates.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-theme\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Template single post?',
        'options' => 
        array (
          0 => 'single.php o single-{post-type}.php',
          1 => 'always index only',
          2 => 'header.php',
        ),
        'answer' => 'single.php o single-{post-type}.php',
        'explanation' => 'Hierarchy specificity.',
        'pro_tip' => 'get_template_part DRY.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿the_loop?',
        'options' => 
        array (
          0 => 'while have_posts the_post',
          1 => 'foreach SQL',
          2 => 'React map',
        ),
        'answer' => 'while have_posts the_post',
        'explanation' => 'Core WP query loop.',
        'pro_tip' => 'WP_Query custom queries.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'wp-plugins',
    'order' => 3,
    'title' => 'Plugin development',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Hooks, activation y structure.',
    'concepts' => 
    array (
      0 => 'plugin',
      1 => 'activation',
      2 => 'hook',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Plugin',
        'body' => 'wp-content/plugins/my-plugin/my-plugin.php — Plugin header comment.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-plugins\';',
      ),
      1 => 
      array (
        'heading' => 'Activation',
        'body' => 'register_activation_hook — create tables, flush rewrite rules.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-plugins\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Plugin main file header?',
        'options' => 
        array (
          0 => 'Plugin Name: comment block',
          1 => 'package.json',
          2 => 'composer only optional',
        ),
        'answer' => 'Plugin Name: comment block',
        'explanation' => 'WP reads metadata comment.',
        'pro_tip' => 'Composer autoload PSR-4 modern plugins.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Namespace plugins?',
        'options' => 
        array (
          0 => 'Evita colisiones funciones',
          1 => 'Prohibido WP',
          2 => 'Solo themes',
        ),
        'answer' => 'Evita colisiones funciones',
        'explanation' => 'Prefix or namespace always.',
        'pro_tip' => 'Curso PHP enterprise patterns.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'wp-hooks',
    'order' => 4,
    'title' => 'Actions y filters',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Hook system — corazón WP.',
    'concepts' => 
    array (
      0 => 'action',
      1 => 'filter',
      2 => 'priority',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Actions',
        'body' => 'add_action("init", "my_function") — ejecuta en punto lifecycle.',
        'code' => 'add_action(\'init\', \'callback\');',
      ),
      1 => 
      array (
        'heading' => 'Filters',
        'body' => 'add_filter("the_title", fn($t) => $t) — modifica datos passthrough.',
        'code' => 'add_action(\'wp_enqueue_scripts\', function() {
  wp_enqueue_style(\'my-style\', get_stylesheet_uri());
});',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Filter vs action?',
        'options' => 
        array (
          0 => 'Filter modifica valor; action evento sin return',
          1 => 'Iguales',
          2 => 'Action modifica',
        ),
        'answer' => 'Filter modifica valor; action evento sin return',
        'explanation' => 'apply_filters vs do_action.',
        'pro_tip' => 'Priority 10 default — order matters.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe add_action',
        'must_contain' => 
        array (
          0 => 'add_action',
        ),
        'hint' => 'add_action(\'init\', \'callback\');',
        'explanation' => 'Register hook.',
        'pro_tip' => 'remove_action cleanup.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'wp-rest',
    'order' => 5,
    'title' => 'REST API y headless',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'wp-json, custom endpoints, Next.js.',
    'concepts' => 
    array (
      0 => 'rest',
      1 => 'headless',
      2 => 'jwt',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'REST API',
        'body' => '/wp-json/wp/v2/posts — JSON público por default posts.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-rest\';',
      ),
      1 => 
      array (
        'heading' => 'Headless',
        'body' => 'WP admin content → Next.js frontend fetch WP REST — decouple.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-rest\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿register_rest_route?',
        'options' => 
        array (
          0 => 'Custom API endpoint WP',
          1 => 'Nginx config',
          2 => 'MySQL',
        ),
        'answer' => 'Custom API endpoint WP',
        'explanation' => 'Extend REST API.',
        'pro_tip' => 'Curso Next.js consume headless.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Headless ventaja?',
        'options' => 
        array (
          0 => 'Frontend moderno separado CMS',
          1 => 'Sin CMS',
          2 => 'Más lento siempre',
        ),
        'answer' => 'Frontend moderno separado CMS',
        'explanation' => 'Editors WP, devs React.',
        'pro_tip' => 'GraphQL WPGraphQL plugin alt.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'wp-prod',
    'order' => 6,
    'title' => 'Seguridad y performance WP',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Updates, caching y hardening.',
    'concepts' => 
    array (
      0 => 'security',
      1 => 'cache',
      2 => 'hardening',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Security',
        'body' => 'Auto updates minor, limit login attempts, disable file edit, least privilege users.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-prod\';',
      ),
      1 => 
      array (
        'heading' => 'Performance',
        'body' => 'Object cache Redis, page cache Cloudflare, optimize images — evita plugin bloat.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: wp-prod\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿DISALLOW_FILE_EDIT?',
        'options' => 
        array (
          0 => 'wp-config bloquea editor plugins/themes prod',
          1 => 'Speed boost',
          2 => 'SEO',
        ),
        'answer' => 'wp-config bloquea editor plugins/themes prod',
        'explanation' => 'Reduce RCE surface.',
        'pro_tip' => 'Curso seguridad web OWASP.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿WP transients?',
        'options' => 
        array (
          0 => 'Cache key-value TTL built-in',
          1 => 'Payment method',
          2 => 'Theme name',
        ),
        'answer' => 'Cache key-value TTL built-in',
        'explanation' => 'Redis object cache persistent.',
        'pro_tip' => 'Curso Redis cache complementa.',
      ),
    ),
  ),
);
