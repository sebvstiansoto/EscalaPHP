<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'al-complejidad',
    'order' => 1,
    'title' => 'Complejidad Big O',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'O(1), O(n), O(n²) y por qué importa en entrevistas.',
    'concepts' => 
    array (
      0 => 'big-o',
      1 => 'complexity',
      2 => 'performance',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Big O',
        'body' => 'Describe cómo crece el tiempo **en el peor caso** cuando aumentan los datos. No es segundos exactos — es tendencia.',
        'code' => 'console.log(\'Practica: al-complejidad\');',
      ),
      1 => 
      array (
        'heading' => 'Comunes',
        'body' => 'O(1) acceso hash map. O(n) recorrer array. O(n²) bucles anidados. O(log n) búsqueda binaria.',
        'code' => 'console.log(\'Practica: al-complejidad\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Complejidad de recorrer un array de n elementos?',
        'options' => 
        array (
          0 => 'O(n)',
          1 => 'O(1)',
          2 => 'O(n²)',
        ),
        'answer' => 'O(n)',
        'explanation' => 'Un bucle = lineal.',
        'pro_tip' => 'En entrevistas explica primero brute force, luego optimiza.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Dos bucles anidados sobre n?',
        'options' => 
        array (
          0 => 'O(n²)',
          1 => 'O(n)',
          2 => 'O(log n)',
        ),
        'answer' => 'O(n²)',
        'explanation' => 'Cuadrático — evítalo en datasets grandes.',
        'pro_tip' => 'Hash map suele bajar O(n²) a O(n).',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'al-arrays',
    'order' => 2,
    'title' => 'Arrays y hash maps',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Two sum, contadores y búsqueda O(1).',
    'concepts' => 
    array (
      0 => 'array',
      1 => 'hashmap',
      2 => 'two-sum',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Hash map',
        'body' => 'Objeto/array asociativo: guardas `valor → índice` y buscas complementos en O(1).',
        'code' => '// Two Sum: busca par que sume target
const seen = {};
for (let i = 0; i < nums.length; i++) {
  const need = target - nums[i];
  if (seen[need] !== undefined) return [seen[need], i];
  seen[nums[i]] = i;
}',
      ),
      1 => 
      array (
        'heading' => 'Patrón',
        'body' => '¿Necesitas "¿ya vi este valor?" → hash map.',
        'code' => 'const m = {};\\nm["a"] = 1;\\nm["a"]++;\\nconsole.log(m["a"]);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'js',
        'question' => 'Cuenta frecuencias: const m={}; m["a"]=1; m["a"]++; console.log(m["a"])',
        'expected_output' => '2',
        'hint' => 'const m = {};\\nm["a"] = 1;\\nm["a"]++;\\nconsole.log(m["a"]);',
        'explanation' => 'Mapa frecuencia — patrón clásico.',
        'pro_tip' => 'En PHP: $counts[$key] = ($counts[$key] ?? 0) + 1',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Two Sum optimizado usa...?',
        'options' => 
        array (
          0 => 'Hash map',
          1 => 'Ordenar siempre',
          2 => 'Recursión infinita',
        ),
        'answer' => 'Hash map',
        'explanation' => 'O(n) tiempo, O(n) espacio.',
        'pro_tip' => 'Problema #1 en LeetCode — domínialo.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'al-punteros',
    'order' => 3,
    'title' => 'Two pointers y sliding window',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Subarrays, palíndromos y ventanas.',
    'concepts' => 
    array (
      0 => 'two-pointers',
      1 => 'sliding-window',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Two pointers',
        'body' => 'Izquierda y derecha en array ordenado — suma objetivo sin O(n²).',
        'code' => 'console.log("aba" === "aba".split("").reverse().join(""));',
      ),
      1 => 
      array (
        'heading' => 'Sliding window',
        'body' => 'Ventana [L,R] que crece/decrece — subcadena más larga, máximo suma k elementos.',
        'code' => 'console.log("aba" === "aba".split("").reverse().join(""));',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Two pointers requiere array...?',
        'options' => 
        array (
          0 => 'Ordenado (a menudo)',
          1 => 'Siempre vacío',
          2 => 'De 1000 elementos',
        ),
        'answer' => 'Ordenado (a menudo)',
        'explanation' => 'En sorted array mueves L/R según suma vs target.',
        'pro_tip' => 'Sliding window no siempre necesita orden.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Palíndromo simple: const s="aba"; console.log(s===s.split("").reverse().join(""))',
        'expected_output' => 'true',
        'hint' => 'console.log("aba" === "aba".split("").reverse().join(""));',
        'explanation' => 'Two pointers en string es más eficiente — practica después.',
        'pro_tip' => 'Ignora espacios y mayúsculas en variantes reales.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'al-recursion',
    'order' => 4,
    'title' => 'Recursión y divide & conquer',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Base case, call stack y merge sort concepto.',
    'concepts' => 
    array (
      0 => 'recursion',
      1 => 'divide-conquer',
      2 => 'stack',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Recursión',
        'body' => 'Función que se llama a sí misma con **caso base** que para.',
        'code' => 'function factorial(n) {
  if (n <= 1) return 1;
  return n * factorial(n - 1);
}',
      ),
      1 => 
      array (
        'heading' => 'Divide & conquer',
        'body' => 'Parte problema en mitades (merge sort, binary search) — O(log n) o O(n log n).',
        'code' => 'function f(n){return n<=1?1:n*f(n-1);}\\nconsole.log(f(4));',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'js',
        'question' => 'factorial(4): function f(n){return n<=1?1:n*f(n-1)} console.log(f(4))',
        'expected_output' => '24',
        'hint' => 'function f(n){return n<=1?1:n*f(n-1);}\\nconsole.log(f(4));',
        'explanation' => '4*3*2*1 = 24. Caso base n<=1.',
        'pro_tip' => 'Stack overflow si falta caso base.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Búsqueda binaria complejidad?',
        'options' => 
        array (
          0 => 'O(log n)',
          1 => 'O(n)',
          2 => 'O(n²)',
        ),
        'answer' => 'O(log n)',
        'explanation' => 'Divide espacio de búsqueda a la mitad cada paso.',
        'pro_tip' => 'Requiere array ordenado.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'al-arboles',
    'order' => 5,
    'title' => 'Árboles y BFS/DFS',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Recorridos, profundidad y colas.',
    'concepts' => 
    array (
      0 => 'tree',
      1 => 'bfs',
      2 => 'dfs',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Árbol',
        'body' => 'Nodo raíz, hijos, sin ciclos. DOM, JSON anidado, carpetas — árboles everywhere.',
        'code' => 'console.log(\'Practica: al-arboles\');',
      ),
      1 => 
      array (
        'heading' => 'BFS vs DFS',
        'body' => 'BFS = cola, nivel por nivel. DFS = pila/recursión, profundidad primero.',
        'code' => 'console.log(\'Practica: al-arboles\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿BFS usa estructura...?',
        'options' => 
        array (
          0 => 'Cola (queue)',
          1 => 'Solo recursión',
          2 => 'Hash map only',
        ),
        'answer' => 'Cola (queue)',
        'explanation' => 'FIFO — explora vecinos antes de profundizar.',
        'pro_tip' => 'BFS encuentra camino más corto en grafos no ponderados.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿DFS natural en código?',
        'options' => 
        array (
          0 => 'Recursión',
          1 => 'Solo SQL',
          2 => 'CSS',
        ),
        'answer' => 'Recursión',
        'explanation' => 'Visita nodo, recursión en hijos, backtrack.',
        'pro_tip' => 'Iterativo con stack explícito evita stack overflow.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'al-entrevista',
    'order' => 6,
    'title' => 'Estrategia en entrevistas',
    'level' => 'Soft skills',
    'minutes' => 25,
    'summary' => 'Comunicar, probar edge cases y complejidad.',
    'concepts' => 
    array (
      0 => 'interview',
      1 => 'edge-case',
      2 => 'communication',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Framework',
        'body' => '1) Entiende problema. 2) Ejemplos. 3) Brute force. 4) Optimiza. 5) Código. 6) Testea.',
        'code' => 'console.log(\'Practica: al-entrevista\');',
      ),
      1 => 
      array (
        'heading' => 'Edge cases',
        'body' => 'Array vacío, un elemento, duplicados, negativos, null — menciónalos en voz alta.',
        'code' => 'console.log(\'Practica: al-entrevista\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Primero en entrevista técnica?',
        'options' => 
        array (
          0 => 'Clarificar el problema con ejemplos',
          1 => 'Escribir código inmediato',
          2 => 'Pedir la respuesta',
        ),
        'answer' => 'Clarificar el problema con ejemplos',
        'explanation' => 'Comunicación > velocidad de teclear.',
        'pro_tip' => 'Di complejidad antes y después de optimizar.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Si te bloqueas?',
        'options' => 
        array (
          0 => 'Habla en voz alta, pide pista, empieza brute force',
          1 => 'Callar 10 minutos',
          2 => 'Rendirse',
        ),
        'answer' => 'Habla en voz alta, pide pista, empieza brute force',
        'explanation' => 'El entrevistador evalúa proceso, no solo AC.',
        'pro_tip' => 'Practica en /entrevista de esta plataforma.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'algoritmos-entrevista-produccion',
    'order' => 7,
    'title' => 'Buenas prácticas avanzadas en producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Buenas prácticas avanzadas en producción — cierre avanzado de Algoritmos para entrevistas.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Algoritmos para entrevistas a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'algoritmos-entrevista-operaciones',
    'order' => 8,
    'title' => 'Checklist profesional y próximos pasos',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Checklist profesional y próximos pasos — cierre avanzado de Algoritmos para entrevistas.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Algoritmos para entrevistas a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
