<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'kt-intro',
    'order' => 1,
    'title' => 'Kotlin moderno',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'JVM, Android y backend Ktor.',
    'concepts' => 
    array (
      0 => 'kotlin',
      1 => 'jvm',
      2 => 'android',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Kotlin',
        'body' => '**Kotlin** — lenguaje oficial **Android**, interop Java, conciso. También backend con **Ktor** y Spring.',
        'code' => '# Practica: kt-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Sintaxis',
        'body' => 'val inmutable, var mutable, null safety — String? nullable.',
        'code' => 'fun main() {
    val name: String = "Ana"
    println("Hola $name")
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿val vs var?',
        'options' => 
        array (
          0 => 'val inmutable, var mutable',
          1 => 'Igual',
          2 => 'var solo Android',
        ),
        'answer' => 'val inmutable, var mutable',
        'explanation' => 'Prefer val.',
        'pro_tip' => 'data class para DTOs.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Null safety Kotlin?',
        'options' => 
        array (
          0 => 'String? y ?. safe call',
          1 => 'Null everywhere',
          2 => 'Sin tipos',
        ),
        'answer' => 'String? y ?. safe call',
        'explanation' => 'Evita NPE compile-time.',
        'pro_tip' => '!! solo si seguro no null.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'kt-syntax',
    'order' => 2,
    'title' => 'Funciones, clases y coroutines',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Extension functions y async.',
    'concepts' => 
    array (
      0 => 'coroutine',
      1 => 'extension',
      2 => 'data-class',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Coroutines',
        'body' => 'suspend fun fetchUser(): User — async sin callbacks hell.',
        'code' => 'suspend fun load() = withContext(Dispatchers.IO) {
    api.getUser()
}',
      ),
      1 => 
      array (
        'heading' => 'Extensions',
        'body' => 'fun String.isEmail() — extiende tipos sin herencia.',
        'code' => '# Practica: kt-syntax
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Coroutines vs threads?',
        'options' => 
        array (
          0 => 'Ligeras, suspend reanudables',
          1 => 'Igual OS thread',
          2 => 'Solo UI',
        ),
        'answer' => 'Ligeras, suspend reanudables',
        'explanation' => 'Structured concurrency.',
        'pro_tip' => 'Compare Go goroutines curso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿data class?',
        'options' => 
        array (
          0 => 'equals/hashCode/toString auto',
          1 => 'Sin campos',
          2 => 'Solo Java',
        ),
        'answer' => 'equals/hashCode/toString auto',
        'explanation' => 'Ideal modelos API.',
        'pro_tip' => 'copy() para inmutabilidad.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'kt-compose',
    'order' => 3,
    'title' => 'Jetpack Compose',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'UI declarativa Android.',
    'concepts' => 
    array (
      0 => 'compose',
      1 => 'composable',
      2 => 'state',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Compose',
        'body' => '@Composable fun Greeting(name: String) { Text("Hola $name") } — UI como funciones.',
        'code' => '@Composable fun MyScreen()',
      ),
      1 => 
      array (
        'heading' => 'State',
        'body' => 'remember { mutableStateOf(0) } — recompose al cambiar.',
        'code' => '@Composable fun MyScreen()',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Compose reemplaza...?',
        'options' => 
        array (
          0 => 'XML layouts tradicionales',
          1 => 'Kotlin language',
          2 => 'Gradle',
        ),
        'answer' => 'XML layouts tradicionales',
        'explanation' => 'UI declarativa oficial.',
        'pro_tip' => 'Similar filosofía React/Flutter.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe @Composable',
        'must_contain' => 
        array (
          0 => 'Composable',
        ),
        'hint' => '@Composable fun MyScreen()',
        'explanation' => 'Función UI Compose.',
        'pro_tip' => 'Material3 theming.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'kt-navigation',
    'order' => 4,
    'title' => 'Navigation Compose',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'NavHost, routes y args.',
    'concepts' => 
    array (
      0 => 'navhost',
      1 => 'route',
      2 => 'backstack',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'NavHost',
        'body' => 'NavHost(navController, startDestination = "home") { composable("detail/{id}") { ... } }',
        'code' => '# Practica: kt-navigation
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Args',
        'body' => 'navArgument("id") { type = NavType.IntType }',
        'code' => '# Practica: kt-navigation
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿NavController.navigate?',
        'options' => 
        array (
          0 => 'Push ruta en back stack',
          1 => 'HTTP request',
          2 => 'SQL',
        ),
        'answer' => 'Push ruta en back stack',
        'explanation' => 'Navegación Android.',
        'pro_tip' => 'Deep links con intent filters.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Back handling?',
        'options' => 
        array (
          0 => 'popBackStack()',
          1 => 'finish app always',
          2 => 'No back Android',
        ),
        'answer' => 'popBackStack()',
        'explanation' => 'System back button.',
        'pro_tip' => 'Predictive back Android 14+.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'kt-api',
    'order' => 5,
    'title' => 'Retrofit y Room',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'API REST y BD local.',
    'concepts' => 
    array (
      0 => 'retrofit',
      1 => 'room',
      2 => 'dao',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Retrofit',
        'body' => 'interface Api { @GET("users/{id}") suspend fun user(@Path("id") id: Int): User }',
        'code' => '# Practica: kt-api
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Room',
        'body' => '@Dao interface UserDao { @Query("SELECT * FROM users") fun all(): Flow<List<User>> }',
        'code' => '# Practica: kt-api
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Room es...?',
        'options' => 
        array (
          0 => 'SQLite ORM Android',
          1 => 'HTTP client',
          2 => 'Push notifications',
        ),
        'answer' => 'SQLite ORM Android',
        'explanation' => 'Cache offline.',
        'pro_tip' => 'Flow reactive queries.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Retrofit suspend?',
        'options' => 
        array (
          0 => 'Integra coroutines directo',
          1 => 'Solo callbacks',
          2 => 'Sync blocking UI',
        ),
        'answer' => 'Integra coroutines directo',
        'explanation' => 'suspend fun en interface.',
        'pro_tip' => 'Never network on Main thread.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'kt-prod',
    'order' => 6,
    'title' => 'Play Store y producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Gradle, ProGuard y releases.',
    'concepts' => 
    array (
      0 => 'gradle',
      1 => 'proguard',
      2 => 'playstore',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Gradle',
        'body' => 'build.gradle.kts — versionCode, signingConfig release.',
        'code' => '# Practica: kt-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'ProGuard/R8',
        'body' => 'Shrink y obfuscate — reduce APK size.',
        'code' => '# Practica: kt-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿AAB format?',
        'options' => 
        array (
          0 => 'Android App Bundle Play Store',
          1 => 'iOS only',
          2 => 'Web',
        ),
        'answer' => 'Android App Bundle Play Store',
        'explanation' => 'Google Play requiere AAB.',
        'pro_tip' => 'Compare Flutter/RN build courses.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Network security config?',
        'options' => 
        array (
          0 => 'HTTPS only, certificate pinning',
          1 => 'HTTP always OK',
          2 => 'Sin TLS',
        ),
        'answer' => 'HTTPS only, certificate pinning',
        'explanation' => 'Android cleartext blocked default.',
        'pro_tip' => 'Curso seguridad web TLS.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'kotlin-android-produccion',
    'order' => 7,
    'title' => 'Publicación en stores y CI mobile',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Publicación en stores y CI mobile — cierre avanzado de Kotlin & Android.',
    'concepts' => 
    array (
      0 => 'store',
      1 => 'ci',
      2 => 'monitoring',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Kotlin & Android a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
    'slug' => 'kotlin-android-operaciones',
    'order' => 8,
    'title' => 'Performance, crashes y monitoreo en producción',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Performance, crashes y monitoreo en producción — cierre avanzado de Kotlin & Android.',
    'concepts' => 
    array (
      0 => 'store',
      1 => 'ci',
      2 => 'monitoring',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Kotlin & Android a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
