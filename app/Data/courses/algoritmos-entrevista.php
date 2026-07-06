<?php

declare(strict_types=1);

return [
    [
        'slug' => 'al-complejidad',
        'order' => 1,
        'title' => 'Complejidad Big O',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'O(1), O(n), O(n²) y por qué importa en entrevistas.',
        'concepts' => ['big-o', 'complexity', 'performance'],
        'sections' => [
            ['heading' => 'Big O', 'body' => 'Describe cómo crece el tiempo **en el peor caso** cuando aumentan los datos. No es segundos exactos — es tendencia.'],
            ['heading' => 'Comunes', 'body' => 'O(1) acceso hash map. O(n) recorrer array. O(n²) bucles anidados. O(log n) búsqueda binaria.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Complejidad de recorrer un array de n elementos?', 'options' => ['O(n)', 'O(1)', 'O(n²)'], 'answer' => 'O(n)', 'explanation' => 'Un bucle = lineal.', 'pro_tip' => 'En entrevistas explica primero brute force, luego optimiza.'],
            ['type' => 'choice', 'question' => '¿Dos bucles anidados sobre n?', 'options' => ['O(n²)', 'O(n)', 'O(log n)'], 'answer' => 'O(n²)', 'explanation' => 'Cuadrático — evítalo en datasets grandes.', 'pro_tip' => 'Hash map suele bajar O(n²) a O(n).'],
        ],
    ],
    [
        'slug' => 'al-arrays',
        'order' => 2,
        'title' => 'Arrays y hash maps',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'Two sum, contadores y búsqueda O(1).',
        'concepts' => ['array', 'hashmap', 'two-sum'],
        'sections' => [
            ['heading' => 'Hash map', 'body' => 'Objeto/array asociativo: guardas `valor → índice` y buscas complementos en O(1).', 'code' => "// Two Sum: busca par que sume target\nconst seen = {};\nfor (let i = 0; i < nums.length; i++) {\n  const need = target - nums[i];\n  if (seen[need] !== undefined) return [seen[need], i];\n  seen[nums[i]] = i;\n}"],
            ['heading' => 'Patrón', 'body' => '¿Necesitas "¿ya vi este valor?" → hash map.'],
        ],
        'exercises' => [
            ['type' => 'js', 'question' => 'Cuenta frecuencias: const m={}; m["a"]=1; m["a"]++; console.log(m["a"])', 'expected_output' => '2', 'hint' => 'const m = {};\nm["a"] = 1;\nm["a"]++;\nconsole.log(m["a"]);', 'explanation' => 'Mapa frecuencia — patrón clásico.', 'pro_tip' => 'En PHP: $counts[$key] = ($counts[$key] ?? 0) + 1'],
            ['type' => 'choice', 'question' => '¿Two Sum optimizado usa...?', 'options' => ['Hash map', 'Ordenar siempre', 'Recursión infinita'], 'answer' => 'Hash map', 'explanation' => 'O(n) tiempo, O(n) espacio.', 'pro_tip' => 'Problema #1 en LeetCode — domínialo.'],
        ],
    ],
    [
        'slug' => 'al-punteros',
        'order' => 3,
        'title' => 'Two pointers y sliding window',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Subarrays, palíndromos y ventanas.',
        'concepts' => ['two-pointers', 'sliding-window'],
        'sections' => [
            ['heading' => 'Two pointers', 'body' => 'Izquierda y derecha en array ordenado — suma objetivo sin O(n²).'],
            ['heading' => 'Sliding window', 'body' => 'Ventana [L,R] que crece/decrece — subcadena más larga, máximo suma k elementos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Two pointers requiere array...?', 'options' => ['Ordenado (a menudo)', 'Siempre vacío', 'De 1000 elementos'], 'answer' => 'Ordenado (a menudo)', 'explanation' => 'En sorted array mueves L/R según suma vs target.', 'pro_tip' => 'Sliding window no siempre necesita orden.'],
            ['type' => 'js', 'question' => 'Palíndromo simple: const s="aba"; console.log(s===s.split("").reverse().join(""))', 'expected_output' => 'true', 'hint' => 'console.log("aba" === "aba".split("").reverse().join(""));', 'explanation' => 'Two pointers en string es más eficiente — practica después.', 'pro_tip' => 'Ignora espacios y mayúsculas en variantes reales.'],
        ],
    ],
    [
        'slug' => 'al-recursion',
        'order' => 4,
        'title' => 'Recursión y divide & conquer',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Base case, call stack y merge sort concepto.',
        'concepts' => ['recursion', 'divide-conquer', 'stack'],
        'sections' => [
            ['heading' => 'Recursión', 'body' => 'Función que se llama a sí misma con **caso base** que para.', 'code' => "function factorial(n) {\n  if (n <= 1) return 1;\n  return n * factorial(n - 1);\n}"],
            ['heading' => 'Divide & conquer', 'body' => 'Parte problema en mitades (merge sort, binary search) — O(log n) o O(n log n).'],
        ],
        'exercises' => [
            ['type' => 'js', 'question' => 'factorial(4): function f(n){return n<=1?1:n*f(n-1)} console.log(f(4))', 'expected_output' => '24', 'hint' => 'function f(n){return n<=1?1:n*f(n-1);}\nconsole.log(f(4));', 'explanation' => '4*3*2*1 = 24. Caso base n<=1.', 'pro_tip' => 'Stack overflow si falta caso base.'],
            ['type' => 'choice', 'question' => '¿Búsqueda binaria complejidad?', 'options' => ['O(log n)', 'O(n)', 'O(n²)'], 'answer' => 'O(log n)', 'explanation' => 'Divide espacio de búsqueda a la mitad cada paso.', 'pro_tip' => 'Requiere array ordenado.'],
        ],
    ],
    [
        'slug' => 'al-arboles',
        'order' => 5,
        'title' => 'Árboles y BFS/DFS',
        'level' => 'Avanzado',
        'minutes' => 35,
        'summary' => 'Recorridos, profundidad y colas.',
        'concepts' => ['tree', 'bfs', 'dfs'],
        'sections' => [
            ['heading' => 'Árbol', 'body' => 'Nodo raíz, hijos, sin ciclos. DOM, JSON anidado, carpetas — árboles everywhere.'],
            ['heading' => 'BFS vs DFS', 'body' => 'BFS = cola, nivel por nivel. DFS = pila/recursión, profundidad primero.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿BFS usa estructura...?', 'options' => ['Cola (queue)', 'Solo recursión', 'Hash map only'], 'answer' => 'Cola (queue)', 'explanation' => 'FIFO — explora vecinos antes de profundizar.', 'pro_tip' => 'BFS encuentra camino más corto en grafos no ponderados.'],
            ['type' => 'choice', 'question' => '¿DFS natural en código?', 'options' => ['Recursión', 'Solo SQL', 'CSS'], 'answer' => 'Recursión', 'explanation' => 'Visita nodo, recursión en hijos, backtrack.', 'pro_tip' => 'Iterativo con stack explícito evita stack overflow.'],
        ],
    ],
    [
        'slug' => 'al-entrevista',
        'order' => 6,
        'title' => 'Estrategia en entrevistas',
        'level' => 'Soft skills',
        'minutes' => 25,
        'summary' => 'Comunicar, probar edge cases y complejidad.',
        'concepts' => ['interview', 'edge-case', 'communication'],
        'sections' => [
            ['heading' => 'Framework', 'body' => '1) Entiende problema. 2) Ejemplos. 3) Brute force. 4) Optimiza. 5) Código. 6) Testea.'],
            ['heading' => 'Edge cases', 'body' => 'Array vacío, un elemento, duplicados, negativos, null — menciónalos en voz alta.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Primero en entrevista técnica?', 'options' => ['Clarificar el problema con ejemplos', 'Escribir código inmediato', 'Pedir la respuesta'], 'answer' => 'Clarificar el problema con ejemplos', 'explanation' => 'Comunicación > velocidad de teclear.', 'pro_tip' => 'Di complejidad antes y después de optimizar.'],
            ['type' => 'choice', 'question' => '¿Si te bloqueas?', 'options' => ['Habla en voz alta, pide pista, empieza brute force', 'Callar 10 minutos', 'Rendirse'], 'answer' => 'Habla en voz alta, pide pista, empieza brute force', 'explanation' => 'El entrevistador evalúa proceso, no solo AC.', 'pro_tip' => 'Practica en /entrevista de esta plataforma.'],
        ],
    ],
];
