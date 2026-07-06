<?php

declare(strict_types=1);

return [
    [
        'slug' => 'jv-intro',
        'order' => 1,
        'title' => 'Java moderno',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'JVM, JDK 21 y ecosistema enterprise.',
        'concepts' => ['jvm', 'java', 'enterprise'],
        'sections' => [
            ['heading' => 'Java hoy', 'body' => '**Java** sigue dominando banca, telecom y grandes empresas. JVM + Spring = stack más contratado en enterprise.'],
            ['heading' => 'Primer programa', 'body' => 'Records, var y pattern matching — Java moderno no es el Java de 2005.', 'code' => "public class Main {\n    public static void main(String[] args) {\n        System.out.println(\"Hola Java\");\n    }\n}"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Java corre sobre...?', 'options' => ['JVM', 'V8', 'CPython'], 'answer' => 'JVM', 'explanation' => 'Bytecode portable — write once, run anywhere.', 'pro_tip' => 'Kotlin también corre en JVM.'],
            ['type' => 'choice', 'question' => '¿Framework Java #1 para APIs?', 'options' => ['Spring Boot', 'Laravel', 'Django only'], 'answer' => 'Spring Boot', 'explanation' => 'Autoconfiguración y ecosistema enorme.', 'pro_tip' => 'start.spring.io genera proyecto.'],
        ],
    ],
    [
        'slug' => 'jv-spring',
        'order' => 2,
        'title' => 'Spring Boot essentials',
        'level' => 'Fundamentos',
        'minutes' => 35,
        'summary' => 'Starters, @SpringBootApplication y config.',
        'concepts' => ['spring-boot', 'starter', 'autoconfig'],
        'sections' => [
            ['heading' => 'Spring Boot', 'body' => 'Convención sobre configuración — embedded Tomcat, health checks, métricas out of the box.'],
            ['heading' => 'application.properties', 'body' => 'spring.datasource.url, server.port — externaliza config como .env en otros stacks.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Anotación clase principal Spring?', 'options' => ['@SpringBootApplication', '@Controller only', '@Java'], 'answer' => '@SpringBootApplication', 'explanation' => 'Combina @Configuration, @EnableAutoConfiguration, @ComponentScan.', 'pro_tip' => 'spring-boot-starter-web para REST.'],
            ['type' => 'contains', 'question' => 'Escribe @RestController', 'must_contain' => ['RestController'], 'hint' => '@RestController public class UserController', 'explanation' => 'Expone endpoints HTTP JSON.', 'pro_tip' => '@Controller + @ResponseBody = equivalente antiguo.'],
        ],
    ],
    [
        'slug' => 'jv-rest',
        'order' => 3,
        'title' => 'REST controllers',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'CRUD, DTOs y validación.',
        'concepts' => ['restcontroller', 'dto', 'validation'],
        'sections' => [
            ['heading' => 'CRUD REST', 'body' => '@GetMapping, @PostMapping, @PathVariable, @RequestBody — mapping HTTP estándar.', 'code' => "@GetMapping(\"/users/{id}\")\npublic User getUser(@PathVariable Long id) {\n    return userService.findById(id);\n}"],
            ['heading' => 'Validación', 'body' => '@Valid + @NotBlank, @Email en DTOs — Bean Validation (JSR-380).'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Leer ID de URL en Spring?', 'options' => ['@PathVariable', '@QueryParam only', '$_GET'], 'answer' => '@PathVariable', 'explanation' => 'Vincula segmento de ruta a parámetro.', 'pro_tip' => '@RequestParam para query ?page=1.'],
            ['type' => 'choice', 'question' => '¿Body JSON POST?', 'options' => ['@RequestBody', '@ResponseBody', '@Entity'], 'answer' => '@RequestBody', 'explanation' => 'Deserializa JSON a objeto Java.', 'pro_tip' => 'ResponseEntity para status codes custom.'],
        ],
    ],
    [
        'slug' => 'jv-jpa',
        'order' => 4,
        'title' => 'JPA y Spring Data',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => 'Entidades, repositorios y relaciones.',
        'concepts' => ['jpa', 'entity', 'repository'],
        'sections' => [
            ['heading' => '@Entity', 'body' => '@Entity class User { @Id @GeneratedValue Long id; } — mapeo objeto-relacional.'],
            ['heading' => 'Spring Data JPA', 'body' => 'interface UserRepository extends JpaRepository<User, Long> — findByEmail sin SQL manual.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Método derivado findByEmail?', 'options' => ['Spring genera query automático', 'SQL manual obligatorio', 'No existe'], 'answer' => 'Spring genera query automático', 'explanation' => 'Naming convention → query.', 'pro_tip' => '@Query para JPQL custom.'],
            ['type' => 'choice', 'question' => '¿Lazy vs Eager loading?', 'options' => ['Lazy carga relación bajo demanda', 'Eager siempre más rápido', 'Igual'], 'answer' => 'Lazy carga relación bajo demanda', 'explanation' => 'Evita N+1 con @EntityGraph o fetch join.', 'pro_tip' => 'Curso PostgreSQL complementa índices.'],
        ],
    ],
    [
        'slug' => 'jv-security',
        'order' => 5,
        'title' => 'Spring Security',
        'level' => 'Seguridad',
        'minutes' => 35,
        'summary' => 'Auth, JWT y roles.',
        'concepts' => ['spring-security', 'jwt', 'rbac'],
        'sections' => [
            ['heading' => 'Spring Security', 'body' => 'Filter chain — autenticación antes de llegar al controller.'],
            ['heading' => 'JWT', 'body' => 'Stateless APIs: login → token → Authorization: Bearer en cada request.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Anotación requiere rol ADMIN?', 'options' => ['@PreAuthorize("hasRole(\'ADMIN\')")', '@Public', '@SkipAuth'], 'answer' => '@PreAuthorize("hasRole(\'ADMIN\')")', 'explanation' => 'Method-level security.', 'pro_tip' => 'Curso OAuth profundiza OIDC.'],
            ['type' => 'choice', 'question' => '¿BCrypt en Spring?', 'options' => ['PasswordEncoder para hashes', 'Cifrado simétrico JWT', 'Solo MD5'], 'answer' => 'PasswordEncoder para hashes', 'explanation' => 'Nunca guardes passwords en claro.', 'pro_tip' => 'Igual concepto que password_hash en PHP.'],
        ],
    ],
    [
        'slug' => 'jv-prod',
        'order' => 6,
        'title' => 'Tests y producción',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'JUnit, MockMvc y Docker.',
        'concepts' => ['junit', 'mockmvc', 'actuator'],
        'sections' => [
            ['heading' => 'Tests', 'body' => '@SpringBootTest + MockMvc — prueba endpoints sin levantar browser.'],
            ['heading' => 'Actuator', 'body' => '/actuator/health — readiness para Kubernetes y load balancers.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Health check Spring Boot?', 'options' => ['/actuator/health', '/phpinfo', '/admin only'], 'answer' => '/actuator/health', 'explanation' => 'Spring Boot Actuator expone métricas.', 'pro_tip' => 'Protege actuator en prod con auth.'],
            ['type' => 'choice', 'question' => '¿JUnit es para...?', 'options' => ['Tests unitarios Java', 'Deploy', 'CSS'], 'answer' => 'Tests unitarios Java', 'explanation' => 'Estándar de testing en JVM.', 'pro_tip' => 'Testcontainers para integration con Postgres real.'],
        ],
    ],
];
