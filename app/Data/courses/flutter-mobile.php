<?php

declare(strict_types=1);

return [
    ['slug' => 'fl-intro', 'order' => 1, 'title' => 'Introducción a Flutter', 'level' => 'Fundamentos', 'minutes' => 25, 'summary' => 'Dart, widgets y un solo codebase.', 'concepts' => ['flutter', 'dart', 'widget'], 'sections' => [
        ['heading' => 'Flutter', 'body' => '**Flutter** de Google: UI con **widgets** en **Dart** — compila a nativo ARM en iOS/Android y también web/desktop.'],
        ['heading' => 'Hello', 'body' => 'Todo es widget — MaterialApp, Scaffold, Text.', 'code' => "void main() => runApp(MaterialApp(home: Scaffold(body: Center(child: Text('Hola Flutter')))));"],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Lenguaje Flutter?', 'options' => ['Dart', 'Kotlin', 'Swift only'], 'answer' => 'Dart', 'explanation' => 'Dart optimizado para UI.', 'pro_tip' => 'flutter create my_app'],
        ['type' => 'choice', 'question' => '¿Unidad UI Flutter?', 'options' => ['Widget', 'Component', 'View only'], 'answer' => 'Widget', 'explanation' => 'Composición de widgets.', 'pro_tip' => 'Hot reload acelera dev.'],
    ]],
    ['slug' => 'fl-widgets', 'order' => 2, 'title' => 'Stateless y Stateful widgets', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Layout, Column, Row y estado.', 'concepts' => ['stateless', 'stateful', 'layout'], 'sections' => [
        ['heading' => 'Layout', 'body' => 'Column, Row, Expanded, Padding — Flexbox-like en Flutter.'],
        ['heading' => 'StatefulWidget', 'body' => 'setState(() => counter++) — rebuild del subtree.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Estado mutable?', 'options' => ['StatefulWidget + setState', 'StatelessWidget only', 'CSS'], 'answer' => 'StatefulWidget + setState', 'explanation' => 'Patrón básico local state.', 'pro_tip' => 'Provider/Riverpod para state global.'],
        ['type' => 'contains', 'question' => 'Escribe setState', 'must_contain' => ['setState'], 'hint' => 'setState(() { ... })', 'explanation' => 'Trigger rebuild.', 'pro_tip' => 'const constructors optimizan.'],
    ]],
    ['slug' => 'fl-state', 'order' => 3, 'title' => 'Riverpod / Provider', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'State management escalable.', 'concepts' => ['riverpod', 'provider', 'notifier'], 'sections' => [
        ['heading' => 'Riverpod', 'body' => 'Providers tipados — ref.watch(userProvider) rebuild automático.'],
        ['heading' => 'Async', 'body' => 'FutureProvider y AsyncValue — loading/error/data en UI.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Riverpod sobre Provider?', 'options' => ['Compile-safe, sin BuildContext', 'Sin tipos', 'Solo web'], 'answer' => 'Compile-safe, sin BuildContext', 'explanation' => 'Recomendado 2024+.', 'pro_tip' => 'StateNotifier para lógica compleja.'],
        ['type' => 'choice', 'question' => '¿ref.watch vs read?', 'options' => ['watch rebuild; read one-shot', 'Iguales', 'read rebuild'], 'answer' => 'watch rebuild; read one-shot', 'explanation' => 'read en callbacks/onPressed.', 'pro_tip' => 'Evita watch en initState.'],
    ]],
    ['slug' => 'fl-navigation', 'order' => 4, 'title' => 'Navegación', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'Navigator 2.0 y go_router.', 'concepts' => ['navigator', 'gorouter', 'routes'], 'sections' => [
        ['heading' => 'go_router', 'body' => 'Declarativo URL-like — GoRoute(path: "/users/:id", builder: ...).'],
        ['heading' => 'Deep links', 'body' => 'Misma config para web y mobile deep linking.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Router declarativo popular?', 'options' => ['go_router', 'React Router', 'nginx'], 'answer' => 'go_router', 'explanation' => 'Oficial recomendado.', 'pro_tip' => 'context.go("/home") imperativo.'],
        ['type' => 'choice', 'question' => '¿Push pantalla?', 'options' => ['context.push("/detail")', 'window.open', 'PHP header'], 'answer' => 'context.push("/detail")', 'explanation' => 'Stack navigation.', 'pro_tip' => 'Pass extra via state o path params.'],
    ]],
    ['slug' => 'fl-api', 'order' => 5, 'title' => 'HTTP y JSON', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'http package, dio y modelos.', 'concepts' => ['http', 'dio', 'json'], 'sections' => [
        ['heading' => 'http', 'body' => 'final res = await http.get(Uri.parse(url)); jsonDecode(res.body).'],
        ['heading' => 'Dio', 'body' => 'Interceptors, timeouts, FormData — axios-like para Dart.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Parse JSON Dart?', 'options' => ['jsonDecode + fromJson factory', 'eval', 'XML only'], 'answer' => 'jsonDecode + fromJson factory', 'explanation' => 'freezed/json_serializable codegen.', 'pro_tip' => 'Never trust API sin validación.'],
        ['type' => 'choice', 'question' => '¿Dio ventaja?', 'options' => ['Interceptors y cancel tokens', 'Sin async', 'Solo GET'], 'answer' => 'Interceptors y cancel tokens', 'explanation' => 'Auth header centralizado.', 'pro_tip' => 'Compare http package curso Node.'],
    ]],
    ['slug' => 'fl-build', 'order' => 6, 'title' => 'Build y stores', 'level' => 'Producción', 'minutes' => 35, 'summary' => 'APK, IPA, flavors y CI.', 'concepts' => ['build', 'flavor', 'store'], 'sections' => [
        ['heading' => 'Build', 'body' => 'flutter build apk --release, flutter build ipa — signing keys obligatorios.'],
        ['heading' => 'Flavors', 'body' => 'dev/staging/prod — distintos API URLs y app icons.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Release Android?', 'options' => ['flutter build apk/appbundle', 'npm run build', 'docker only'], 'answer' => 'flutter build apk/appbundle', 'explanation' => 'AAB requerido Play Store.', 'pro_tip' => 'Compare React Native EAS curso.'],
        ['type' => 'choice', 'question' => '¿Obfuscate Dart?', 'options' => ['--obfuscate en release', 'Sin opción', 'Solo iOS'], 'answer' => '--obfuscate en release', 'explanation' => 'Dificulta reverse engineering.', 'pro_tip' => 'Guarda symbols file para crash reports.'],
    ]],
];
