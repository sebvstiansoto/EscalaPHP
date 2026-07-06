<?php

declare(strict_types=1);

return [
    [
        'slug' => 'ts-intro',
        'order' => 1,
        'title' => 'Introducción a TypeScript',
        'level' => 'Fundamentos',
        'minutes' => 20,
        'summary' => 'JS con tipos estáticos: por qué y cómo compilar.',
        'concepts' => ['typescript', 'types', 'tsc'],
        'sections' => [
            ['heading' => '¿Qué es TypeScript?', 'body' => 'TypeScript es JavaScript + **tipos**. El compilador `tsc` detecta errores antes de ejecutar.'],
            ['heading' => 'Ventajas', 'body' => 'Autocompletado, refactors seguros y menos bugs en producción — usado en React, Node y Angular.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace el compilador tsc?', 'options' => ['Convierte TS a JS y valida tipos', 'Ejecuta PHP', 'Reemplaza npm'], 'answer' => 'Convierte TS a JS y valida tipos', 'explanation' => 'El navegador solo entiende JavaScript — tsc genera el .js.', 'pro_tip' => 'strict: true en tsconfig.json ahorra horas de debug.'],
            ['type' => 'choice', 'question' => '¿TypeScript corre en el navegador directamente?', 'options' => ['No, se compila a JavaScript', 'Sí, nativo', 'Solo en Node'], 'answer' => 'No, se compila a JavaScript', 'explanation' => 'Los tipos desaparecen en compile time.', 'pro_tip' => 'Vite y Astro compilan TS automáticamente.'],
        ],
    ],
    [
        'slug' => 'ts-types',
        'order' => 2,
        'title' => 'Tipos básicos y anotaciones',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'string, number, boolean, arrays y type inference.',
        'concepts' => ['string', 'number', 'inference'],
        'sections' => [
            ['heading' => 'Anotaciones', 'body' => 'Declaras tipos en variables, parámetros y retornos.', 'code' => "let nombre: string = 'Ana';\nlet edad: number = 25;\nfunction suma(a: number, b: number): number {\n  return a + b;\n}"],
            ['heading' => 'Inferencia', 'body' => 'TypeScript infiere tipos cuando asignas un valor — no siempre hace falta anotar.'],
        ],
        'exercises' => [
            ['type' => 'js', 'question' => 'Simula tipos: const x: number = 10; console.log(typeof 10)', 'expected_output' => 'number', 'hint' => 'console.log(typeof 10);', 'explanation' => 'typeof en runtime confirma el tipo del valor.', 'pro_tip' => 'En TS real, x: number evita asignar "texto" por error.'],
            ['type' => 'choice', 'question' => '¿Tipo de un array de strings?', 'options' => ['string[]', 'array<string>', 'Ambas válidas en TS'], 'answer' => 'Ambas válidas en TS', 'explanation' => 'string[] y Array<string> son equivalentes.', 'pro_tip' => 'readonly string[] para arrays inmutables.'],
        ],
    ],
    [
        'slug' => 'ts-interfaces',
        'order' => 3,
        'title' => 'Interfaces y type aliases',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Modelar objetos, props de componentes y contratos de API.',
        'concepts' => ['interface', 'type', 'object'],
        'sections' => [
            ['heading' => 'interface', 'body' => 'Define la forma de un objeto — ideal para respuestas JSON y props React.', 'code' => "interface User {\n  id: number;\n  name: string;\n  email?: string;\n}"],
            ['heading' => 'type vs interface', 'body' => 'Ambos modelan formas. `type` también sirve para uniones: `type ID = string | number`.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué significa email?: string?', 'options' => ['Propiedad opcional', 'Email obligatorio', 'Email es null siempre'], 'answer' => 'Propiedad opcional', 'explanation' => '? marca el campo como opcional.', 'pro_tip' => 'Partial<User> hace todos los campos opcionales.'],
            ['type' => 'contains', 'question' => 'Escribe interface Product con id: number y name: string', 'must_contain' => ['interface Product', 'id:', 'name:'], 'hint' => "interface Product {\n  id: number;\n  name: string;\n}", 'explanation' => 'Interfaces documentan contratos de datos.', 'pro_tip' => 'Extiende con extends Product { price: number }'],
        ],
    ],
    [
        'slug' => 'ts-generics',
        'order' => 4,
        'title' => 'Genéricos',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Funciones y tipos reutilizables con <T>.',
        'concepts' => ['generics', 'T', 'reusable'],
        'sections' => [
            ['heading' => 'Genéricos', 'body' => 'Escribes código que funciona con **cualquier** tipo manteniendo type safety.', 'code' => "function primero<T>(arr: T[]): T {\n  return arr[0];\n}"],
            ['heading' => 'En la práctica', 'body' => 'fetch<User>("/api/user"), useState<number>(0), Promise<string> — genéricos everywhere.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Para qué sirven los genéricos <T>?', 'options' => ['Reutilizar lógica sin perder tipos', 'Solo decoración', 'Reemplazar any'], 'answer' => 'Reutilizar lógica sin perder tipos', 'explanation' => 'Una función, muchos tipos — sin duplicar código.', 'pro_tip' => 'Evita any — pierdes el beneficio de TS.'],
            ['type' => 'contains', 'question' => 'Escribe function id<T>(x: T): T', 'must_contain' => ['function id', '<T>', ': T'], 'hint' => 'function id<T>(x: T): T { return x; }', 'explanation' => 'Función identidad genérica — patrón base.', 'pro_tip' => 'Constraints: <T extends { id: number }>'],
        ],
    ],
    [
        'slug' => 'ts-react',
        'order' => 5,
        'title' => 'TypeScript en React',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Props tipadas, useState y eventos.',
        'concepts' => ['react', 'props', 'useState'],
        'sections' => [
            ['heading' => 'Props tipadas', 'body' => 'interface ButtonProps { label: string; onClick: () => void; }', 'code' => "function Button({ label, onClick }: ButtonProps) {\n  return <button onClick={onClick}>{label}</button>;\n}"],
            ['heading' => 'useState genérico', 'body' => 'useState<User | null>(null) — el estado sabe qué forma tiene.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo tipas props de un componente?', 'options' => ['interface + destructuring en parámetros', 'Solo PropTypes', 'No se puede'], 'answer' => 'interface + destructuring en parámetros', 'explanation' => 'Patrón estándar en React + TS moderno.', 'pro_tip' => 'React.FC está menos de moda — props directas.'],
            ['type' => 'choice', 'question' => '¿Tipo del evento click en botón?', 'options' => ['React.MouseEvent<HTMLButtonElement>', 'Event', 'any'], 'answer' => 'React.MouseEvent<HTMLButtonElement>', 'explanation' => 'React exporta tipos de eventos del DOM.', 'pro_tip' => 'ChangeEvent<HTMLInputElement> para inputs.'],
        ],
    ],
    [
        'slug' => 'ts-node',
        'order' => 6,
        'title' => 'TypeScript en Node.js',
        'level' => 'Avanzado',
        'minutes' => 30,
        'summary' => 'tsconfig, módulos ESM y tipar Express.',
        'concepts' => ['node', 'tsconfig', 'express-types'],
        'sections' => [
            ['heading' => 'tsconfig.json', 'body' => 'module, target, outDir, strict — configura cómo compila tu backend.'],
            ['heading' => '@types', 'body' => 'npm install -D @types/node @types/express — tipos para librerías JS.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿De dónde vienen tipos para Express?', 'options' => ['@types/express', 'Express los incluye siempre', 'No existen'], 'answer' => '@types/express', 'explanation' => 'DefinitelyTyped publica @types/* para libs JS.', 'pro_tip' => 'tsx o ts-node ejecutan TS sin compilar manualmente en dev.'],
            ['type' => 'contains', 'question' => 'Escribe "strict": true en tsconfig', 'must_contain' => ['strict', 'true'], 'hint' => '"strict": true', 'explanation' => 'strict activa el máximo chequeo de tipos.', 'pro_tip' => 'noImplicitAny evita any silencioso.'],
        ],
    ],
];
