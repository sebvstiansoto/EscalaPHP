<?php

declare(strict_types=1);

return [
    ['slug' => 'kt-intro', 'order' => 1, 'title' => 'Kotlin moderno', 'level' => 'Fundamentos', 'minutes' => 25, 'summary' => 'JVM, Android y backend Ktor.', 'concepts' => ['kotlin', 'jvm', 'android'], 'sections' => [
        ['heading' => 'Kotlin', 'body' => '**Kotlin** — lenguaje oficial **Android**, interop Java, conciso. También backend con **Ktor** y Spring.'],
        ['heading' => 'Sintaxis', 'body' => 'val inmutable, var mutable, null safety — String? nullable.', 'code' => "fun main() {\n    val name: String = \"Ana\"\n    println(\"Hola \$name\")\n}"],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿val vs var?', 'options' => ['val inmutable, var mutable', 'Igual', 'var solo Android'], 'answer' => 'val inmutable, var mutable', 'explanation' => 'Prefer val.', 'pro_tip' => 'data class para DTOs.'],
        ['type' => 'choice', 'question' => '¿Null safety Kotlin?', 'options' => ['String? y ?. safe call', 'Null everywhere', 'Sin tipos'], 'answer' => 'String? y ?. safe call', 'explanation' => 'Evita NPE compile-time.', 'pro_tip' => '!! solo si seguro no null.'],
    ]],
    ['slug' => 'kt-syntax', 'order' => 2, 'title' => 'Funciones, clases y coroutines', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Extension functions y async.', 'concepts' => ['coroutine', 'extension', 'data-class'], 'sections' => [
        ['heading' => 'Coroutines', 'body' => 'suspend fun fetchUser(): User — async sin callbacks hell.', 'code' => "suspend fun load() = withContext(Dispatchers.IO) {\n    api.getUser()\n}"],
        ['heading' => 'Extensions', 'body' => 'fun String.isEmail() — extiende tipos sin herencia.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Coroutines vs threads?', 'options' => ['Ligeras, suspend reanudables', 'Igual OS thread', 'Solo UI'], 'answer' => 'Ligeras, suspend reanudables', 'explanation' => 'Structured concurrency.', 'pro_tip' => 'Compare Go goroutines curso.'],
        ['type' => 'choice', 'question' => '¿data class?', 'options' => ['equals/hashCode/toString auto', 'Sin campos', 'Solo Java'], 'answer' => 'equals/hashCode/toString auto', 'explanation' => 'Ideal modelos API.', 'pro_tip' => 'copy() para inmutabilidad.'],
    ]],
    ['slug' => 'kt-compose', 'order' => 3, 'title' => 'Jetpack Compose', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'UI declarativa Android.', 'concepts' => ['compose', 'composable', 'state'], 'sections' => [
        ['heading' => 'Compose', 'body' => '@Composable fun Greeting(name: String) { Text("Hola $name") } — UI como funciones.'],
        ['heading' => 'State', 'body' => 'remember { mutableStateOf(0) } — recompose al cambiar.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Compose reemplaza...?', 'options' => ['XML layouts tradicionales', 'Kotlin language', 'Gradle'], 'answer' => 'XML layouts tradicionales', 'explanation' => 'UI declarativa oficial.', 'pro_tip' => 'Similar filosofía React/Flutter.'],
        ['type' => 'contains', 'question' => 'Escribe @Composable', 'must_contain' => ['Composable'], 'hint' => '@Composable fun MyScreen()', 'explanation' => 'Función UI Compose.', 'pro_tip' => 'Material3 theming.'],
    ]],
    ['slug' => 'kt-navigation', 'order' => 4, 'title' => 'Navigation Compose', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'NavHost, routes y args.', 'concepts' => ['navhost', 'route', 'backstack'], 'sections' => [
        ['heading' => 'NavHost', 'body' => 'NavHost(navController, startDestination = "home") { composable("detail/{id}") { ... } }'],
        ['heading' => 'Args', 'body' => 'navArgument("id") { type = NavType.IntType }'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿NavController.navigate?', 'options' => ['Push ruta en back stack', 'HTTP request', 'SQL'], 'answer' => 'Push ruta en back stack', 'explanation' => 'Navegación Android.', 'pro_tip' => 'Deep links con intent filters.'],
        ['type' => 'choice', 'question' => '¿Back handling?', 'options' => ['popBackStack()', 'finish app always', 'No back Android'], 'answer' => 'popBackStack()', 'explanation' => 'System back button.', 'pro_tip' => 'Predictive back Android 14+.'],
    ]],
    ['slug' => 'kt-api', 'order' => 5, 'title' => 'Retrofit y Room', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'API REST y BD local.', 'concepts' => ['retrofit', 'room', 'dao'], 'sections' => [
        ['heading' => 'Retrofit', 'body' => 'interface Api { @GET("users/{id}") suspend fun user(@Path("id") id: Int): User }'],
        ['heading' => 'Room', 'body' => '@Dao interface UserDao { @Query("SELECT * FROM users") fun all(): Flow<List<User>> }'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Room es...?', 'options' => ['SQLite ORM Android', 'HTTP client', 'Push notifications'], 'answer' => 'SQLite ORM Android', 'explanation' => 'Cache offline.', 'pro_tip' => 'Flow reactive queries.'],
        ['type' => 'choice', 'question' => '¿Retrofit suspend?', 'options' => ['Integra coroutines directo', 'Solo callbacks', 'Sync blocking UI'], 'answer' => 'Integra coroutines directo', 'explanation' => 'suspend fun en interface.', 'pro_tip' => 'Never network on Main thread.'],
    ]],
    ['slug' => 'kt-prod', 'order' => 6, 'title' => 'Play Store y producción', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Gradle, ProGuard y releases.', 'concepts' => ['gradle', 'proguard', 'playstore'], 'sections' => [
        ['heading' => 'Gradle', 'body' => 'build.gradle.kts — versionCode, signingConfig release.'],
        ['heading' => 'ProGuard/R8', 'body' => 'Shrink y obfuscate — reduce APK size.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿AAB format?', 'options' => ['Android App Bundle Play Store', 'iOS only', 'Web'], 'answer' => 'Android App Bundle Play Store', 'explanation' => 'Google Play requiere AAB.', 'pro_tip' => 'Compare Flutter/RN build courses.'],
        ['type' => 'choice', 'question' => '¿Network security config?', 'options' => ['HTTPS only, certificate pinning', 'HTTP always OK', 'Sin TLS'], 'answer' => 'HTTPS only, certificate pinning', 'explanation' => 'Android cleartext blocked default.', 'pro_tip' => 'Curso seguridad web TLS.'],
    ]],
];
