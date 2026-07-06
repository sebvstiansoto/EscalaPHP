<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'jv-intro',
    'order' => 1,
    'title' => 'Java moderno',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'JVM, JDK 21 y ecosistema enterprise.',
    'concepts' => 
    array (
      0 => 'jvm',
      1 => 'java',
      2 => 'enterprise',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Java hoy',
        'body' => '**Java** sigue dominando banca, telecom y grandes empresas. JVM + Spring = stack más contratado en enterprise.',
        'code' => '# Practica: jv-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Primer programa',
        'body' => 'Records, var y pattern matching — Java moderno no es el Java de 2005.',
        'code' => 'public class Main {
    public static void main(String[] args) {
        System.out.println("Hola Java");
    }
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Java corre sobre...?',
        'options' => 
        array (
          0 => 'JVM',
          1 => 'V8',
          2 => 'CPython',
        ),
        'answer' => 'JVM',
        'explanation' => 'Bytecode portable — write once, run anywhere.',
        'pro_tip' => 'Kotlin también corre en JVM.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Framework Java #1 para APIs?',
        'options' => 
        array (
          0 => 'Spring Boot',
          1 => 'Laravel',
          2 => 'Django only',
        ),
        'answer' => 'Spring Boot',
        'explanation' => 'Autoconfiguración y ecosistema enorme.',
        'pro_tip' => 'start.spring.io genera proyecto.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'jv-spring',
    'order' => 2,
    'title' => 'Spring Boot essentials',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Starters, @SpringBootApplication y config.',
    'concepts' => 
    array (
      0 => 'spring-boot',
      1 => 'starter',
      2 => 'autoconfig',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Spring Boot',
        'body' => 'Convención sobre configuración — embedded Tomcat, health checks, métricas out of the box.',
        'code' => '@RestController public class UserController',
      ),
      1 => 
      array (
        'heading' => 'application.properties',
        'body' => 'spring.datasource.url, server.port — externaliza config como .env en otros stacks.',
        'code' => '@RestController public class UserController',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Anotación clase principal Spring?',
        'options' => 
        array (
          0 => '@SpringBootApplication',
          1 => '@Controller only',
          2 => '@Java',
        ),
        'answer' => '@SpringBootApplication',
        'explanation' => 'Combina @Configuration, @EnableAutoConfiguration, @ComponentScan.',
        'pro_tip' => 'spring-boot-starter-web para REST.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe @RestController',
        'must_contain' => 
        array (
          0 => 'RestController',
        ),
        'hint' => '@RestController public class UserController',
        'explanation' => 'Expone endpoints HTTP JSON.',
        'pro_tip' => '@Controller + @ResponseBody = equivalente antiguo.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'jv-rest',
    'order' => 3,
    'title' => 'REST controllers',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'CRUD, DTOs y validación.',
    'concepts' => 
    array (
      0 => 'restcontroller',
      1 => 'dto',
      2 => 'validation',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'CRUD REST',
        'body' => '@GetMapping, @PostMapping, @PathVariable, @RequestBody — mapping HTTP estándar.',
        'code' => '@GetMapping("/users/{id}")
public User getUser(@PathVariable Long id) {
    return userService.findById(id);
}',
      ),
      1 => 
      array (
        'heading' => 'Validación',
        'body' => '@Valid + @NotBlank, @Email en DTOs — Bean Validation (JSR-380).',
        'code' => '# Practica: jv-rest
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Leer ID de URL en Spring?',
        'options' => 
        array (
          0 => '@PathVariable',
          1 => '@QueryParam only',
          2 => '$_GET',
        ),
        'answer' => '@PathVariable',
        'explanation' => 'Vincula segmento de ruta a parámetro.',
        'pro_tip' => '@RequestParam para query ?page=1.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Body JSON POST?',
        'options' => 
        array (
          0 => '@RequestBody',
          1 => '@ResponseBody',
          2 => '@Entity',
        ),
        'answer' => '@RequestBody',
        'explanation' => 'Deserializa JSON a objeto Java.',
        'pro_tip' => 'ResponseEntity para status codes custom.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'jv-jpa',
    'order' => 4,
    'title' => 'JPA y Spring Data',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Entidades, repositorios y relaciones.',
    'concepts' => 
    array (
      0 => 'jpa',
      1 => 'entity',
      2 => 'repository',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '@Entity',
        'body' => '@Entity class User { @Id @GeneratedValue Long id; } — mapeo objeto-relacional.',
        'code' => '# Practica: jv-jpa
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Spring Data JPA',
        'body' => 'interface UserRepository extends JpaRepository<User, Long> — findByEmail sin SQL manual.',
        'code' => '# Practica: jv-jpa
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Método derivado findByEmail?',
        'options' => 
        array (
          0 => 'Spring genera query automático',
          1 => 'SQL manual obligatorio',
          2 => 'No existe',
        ),
        'answer' => 'Spring genera query automático',
        'explanation' => 'Naming convention → query.',
        'pro_tip' => '@Query para JPQL custom.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Lazy vs Eager loading?',
        'options' => 
        array (
          0 => 'Lazy carga relación bajo demanda',
          1 => 'Eager siempre más rápido',
          2 => 'Igual',
        ),
        'answer' => 'Lazy carga relación bajo demanda',
        'explanation' => 'Evita N+1 con @EntityGraph o fetch join.',
        'pro_tip' => 'Curso PostgreSQL complementa índices.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'jv-security',
    'order' => 5,
    'title' => 'Spring Security',
    'level' => 'Seguridad',
    'minutes' => 35,
    'summary' => 'Auth, JWT y roles.',
    'concepts' => 
    array (
      0 => 'spring-security',
      1 => 'jwt',
      2 => 'rbac',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Spring Security',
        'body' => 'Filter chain — autenticación antes de llegar al controller.',
        'code' => '# Practica: jv-security
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'JWT',
        'body' => 'Stateless APIs: login → token → Authorization: Bearer en cada request.',
        'code' => '# Practica: jv-security
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Anotación requiere rol ADMIN?',
        'options' => 
        array (
          0 => '@PreAuthorize("hasRole(\'ADMIN\')")',
          1 => '@Public',
          2 => '@SkipAuth',
        ),
        'answer' => '@PreAuthorize("hasRole(\'ADMIN\')")',
        'explanation' => 'Method-level security.',
        'pro_tip' => 'Curso OAuth profundiza OIDC.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿BCrypt en Spring?',
        'options' => 
        array (
          0 => 'PasswordEncoder para hashes',
          1 => 'Cifrado simétrico JWT',
          2 => 'Solo MD5',
        ),
        'answer' => 'PasswordEncoder para hashes',
        'explanation' => 'Nunca guardes passwords en claro.',
        'pro_tip' => 'Igual concepto que password_hash en PHP.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'jv-prod',
    'order' => 6,
    'title' => 'Tests y producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'JUnit, MockMvc y Docker.',
    'concepts' => 
    array (
      0 => 'junit',
      1 => 'mockmvc',
      2 => 'actuator',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tests',
        'body' => '@SpringBootTest + MockMvc — prueba endpoints sin levantar browser.',
        'code' => '# Practica: jv-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Actuator',
        'body' => '/actuator/health — readiness para Kubernetes y load balancers.',
        'code' => '# Practica: jv-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Health check Spring Boot?',
        'options' => 
        array (
          0 => '/actuator/health',
          1 => '/phpinfo',
          2 => '/admin only',
        ),
        'answer' => '/actuator/health',
        'explanation' => 'Spring Boot Actuator expone métricas.',
        'pro_tip' => 'Protege actuator en prod con auth.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿JUnit es para...?',
        'options' => 
        array (
          0 => 'Tests unitarios Java',
          1 => 'Deploy',
          2 => 'CSS',
        ),
        'answer' => 'Tests unitarios Java',
        'explanation' => 'Estándar de testing en JVM.',
        'pro_tip' => 'Testcontainers para integration con Postgres real.',
      ),
    ),
  ),
);
