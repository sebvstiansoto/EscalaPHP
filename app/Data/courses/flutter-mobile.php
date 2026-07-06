<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'fl-intro',
    'order' => 1,
    'title' => 'Introducción a Flutter',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Dart, widgets y un solo codebase.',
    'concepts' => 
    array (
      0 => 'flutter',
      1 => 'dart',
      2 => 'widget',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Flutter',
        'body' => '**Flutter** de Google: UI con **widgets** en **Dart** — compila a nativo ARM en iOS/Android y también web/desktop.',
        'code' => 'console.log(\'Practica: fl-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Hello',
        'body' => 'Todo es widget — MaterialApp, Scaffold, Text.',
        'code' => 'void main() => runApp(MaterialApp(home: Scaffold(body: Center(child: Text(\'Hola Flutter\')))));',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Lenguaje Flutter?',
        'options' => 
        array (
          0 => 'Dart',
          1 => 'Kotlin',
          2 => 'Swift only',
        ),
        'answer' => 'Dart',
        'explanation' => 'Dart optimizado para UI.',
        'pro_tip' => 'flutter create my_app',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Unidad UI Flutter?',
        'options' => 
        array (
          0 => 'Widget',
          1 => 'Component',
          2 => 'View only',
        ),
        'answer' => 'Widget',
        'explanation' => 'Composición de widgets.',
        'pro_tip' => 'Hot reload acelera dev.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'fl-widgets',
    'order' => 2,
    'title' => 'Stateless y Stateful widgets',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Layout, Column, Row y estado.',
    'concepts' => 
    array (
      0 => 'stateless',
      1 => 'stateful',
      2 => 'layout',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Layout',
        'body' => 'Column, Row, Expanded, Padding — Flexbox-like en Flutter.',
        'code' => 'setState(() { ... })',
      ),
      1 => 
      array (
        'heading' => 'StatefulWidget',
        'body' => 'setState(() => counter++) — rebuild del subtree.',
        'code' => 'setState(() { ... })',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Estado mutable?',
        'options' => 
        array (
          0 => 'StatefulWidget + setState',
          1 => 'StatelessWidget only',
          2 => 'CSS',
        ),
        'answer' => 'StatefulWidget + setState',
        'explanation' => 'Patrón básico local state.',
        'pro_tip' => 'Provider/Riverpod para state global.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe setState',
        'must_contain' => 
        array (
          0 => 'setState',
        ),
        'hint' => 'setState(() { ... })',
        'explanation' => 'Trigger rebuild.',
        'pro_tip' => 'const constructors optimizan.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'fl-state',
    'order' => 3,
    'title' => 'Riverpod / Provider',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'State management escalable.',
    'concepts' => 
    array (
      0 => 'riverpod',
      1 => 'provider',
      2 => 'notifier',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Riverpod',
        'body' => 'Providers tipados — ref.watch(userProvider) rebuild automático.',
        'code' => 'console.log(\'Practica: fl-state\');',
      ),
      1 => 
      array (
        'heading' => 'Async',
        'body' => 'FutureProvider y AsyncValue — loading/error/data en UI.',
        'code' => 'console.log(\'Practica: fl-state\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Riverpod sobre Provider?',
        'options' => 
        array (
          0 => 'Compile-safe, sin BuildContext',
          1 => 'Sin tipos',
          2 => 'Solo web',
        ),
        'answer' => 'Compile-safe, sin BuildContext',
        'explanation' => 'Recomendado 2024+.',
        'pro_tip' => 'StateNotifier para lógica compleja.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ref.watch vs read?',
        'options' => 
        array (
          0 => 'watch rebuild; read one-shot',
          1 => 'Iguales',
          2 => 'read rebuild',
        ),
        'answer' => 'watch rebuild; read one-shot',
        'explanation' => 'read en callbacks/onPressed.',
        'pro_tip' => 'Evita watch en initState.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'fl-navigation',
    'order' => 4,
    'title' => 'Navegación',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Navigator 2.0 y go_router.',
    'concepts' => 
    array (
      0 => 'navigator',
      1 => 'gorouter',
      2 => 'routes',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'go_router',
        'body' => 'Declarativo URL-like — GoRoute(path: "/users/:id", builder: ...).',
        'code' => 'console.log(\'Practica: fl-navigation\');',
      ),
      1 => 
      array (
        'heading' => 'Deep links',
        'body' => 'Misma config para web y mobile deep linking.',
        'code' => 'console.log(\'Practica: fl-navigation\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Router declarativo popular?',
        'options' => 
        array (
          0 => 'go_router',
          1 => 'React Router',
          2 => 'nginx',
        ),
        'answer' => 'go_router',
        'explanation' => 'Oficial recomendado.',
        'pro_tip' => 'context.go("/home") imperativo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Push pantalla?',
        'options' => 
        array (
          0 => 'context.push("/detail")',
          1 => 'window.open',
          2 => 'PHP header',
        ),
        'answer' => 'context.push("/detail")',
        'explanation' => 'Stack navigation.',
        'pro_tip' => 'Pass extra via state o path params.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'fl-api',
    'order' => 5,
    'title' => 'HTTP y JSON',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'http package, dio y modelos.',
    'concepts' => 
    array (
      0 => 'http',
      1 => 'dio',
      2 => 'json',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'http',
        'body' => 'final res = await http.get(Uri.parse(url)); jsonDecode(res.body).',
        'code' => 'console.log(\'Practica: fl-api\');',
      ),
      1 => 
      array (
        'heading' => 'Dio',
        'body' => 'Interceptors, timeouts, FormData — axios-like para Dart.',
        'code' => 'console.log(\'Practica: fl-api\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Parse JSON Dart?',
        'options' => 
        array (
          0 => 'jsonDecode + fromJson factory',
          1 => 'eval',
          2 => 'XML only',
        ),
        'answer' => 'jsonDecode + fromJson factory',
        'explanation' => 'freezed/json_serializable codegen.',
        'pro_tip' => 'Never trust API sin validación.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Dio ventaja?',
        'options' => 
        array (
          0 => 'Interceptors y cancel tokens',
          1 => 'Sin async',
          2 => 'Solo GET',
        ),
        'answer' => 'Interceptors y cancel tokens',
        'explanation' => 'Auth header centralizado.',
        'pro_tip' => 'Compare http package curso Node.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'fl-build',
    'order' => 6,
    'title' => 'Build y stores',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'APK, IPA, flavors y CI.',
    'concepts' => 
    array (
      0 => 'build',
      1 => 'flavor',
      2 => 'store',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Build',
        'body' => 'flutter build apk --release, flutter build ipa — signing keys obligatorios.',
        'code' => 'console.log(\'Practica: fl-build\');',
      ),
      1 => 
      array (
        'heading' => 'Flavors',
        'body' => 'dev/staging/prod — distintos API URLs y app icons.',
        'code' => 'console.log(\'Practica: fl-build\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Release Android?',
        'options' => 
        array (
          0 => 'flutter build apk/appbundle',
          1 => 'npm run build',
          2 => 'docker only',
        ),
        'answer' => 'flutter build apk/appbundle',
        'explanation' => 'AAB requerido Play Store.',
        'pro_tip' => 'Compare React Native EAS curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Obfuscate Dart?',
        'options' => 
        array (
          0 => '--obfuscate en release',
          1 => 'Sin opción',
          2 => 'Solo iOS',
        ),
        'answer' => '--obfuscate en release',
        'explanation' => 'Dificulta reverse engineering.',
        'pro_tip' => 'Guarda symbols file para crash reports.',
      ),
    ),
  ),
);
