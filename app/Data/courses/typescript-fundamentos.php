<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ts-intro',
    'order' => 1,
    'title' => 'Introducción a TypeScript',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'JS con tipos estáticos: por qué y cómo compilar.',
    'concepts' => 
    array (
      0 => 'typescript',
      1 => 'types',
      2 => 'tsc',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es TypeScript?',
        'body' => 'TypeScript es JavaScript + **tipos**. El compilador `tsc` detecta errores antes de ejecutar.',
        'code' => 'console.log(\'Practica: ts-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Ventajas',
        'body' => 'Autocompletado, refactors seguros y menos bugs en producción — usado en React, Node y Angular.',
        'code' => 'console.log(\'Practica: ts-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace el compilador tsc?',
        'options' => 
        array (
          0 => 'Convierte TS a JS y valida tipos',
          1 => 'Ejecuta PHP',
          2 => 'Reemplaza npm',
        ),
        'answer' => 'Convierte TS a JS y valida tipos',
        'explanation' => 'El navegador solo entiende JavaScript — tsc genera el .js.',
        'pro_tip' => 'strict: true en tsconfig.json ahorra horas de debug.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿TypeScript corre en el navegador directamente?',
        'options' => 
        array (
          0 => 'No, se compila a JavaScript',
          1 => 'Sí, nativo',
          2 => 'Solo en Node',
        ),
        'answer' => 'No, se compila a JavaScript',
        'explanation' => 'Los tipos desaparecen en compile time.',
        'pro_tip' => 'Vite y Astro compilan TS automáticamente.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ts-types',
    'order' => 2,
    'title' => 'Tipos básicos y anotaciones',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'string, number, boolean, arrays y type inference.',
    'concepts' => 
    array (
      0 => 'string',
      1 => 'number',
      2 => 'inference',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Anotaciones',
        'body' => 'Declaras tipos en variables, parámetros y retornos.',
        'code' => 'let nombre: string = \'Ana\';
let edad: number = 25;
function suma(a: number, b: number): number {
  return a + b;
}',
      ),
      1 => 
      array (
        'heading' => 'Inferencia',
        'body' => 'TypeScript infiere tipos cuando asignas un valor — no siempre hace falta anotar.',
        'code' => 'console.log(typeof 10);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'js',
        'question' => 'Simula tipos: const x: number = 10; console.log(typeof 10)',
        'expected_output' => 'number',
        'hint' => 'console.log(typeof 10);',
        'explanation' => 'typeof en runtime confirma el tipo del valor.',
        'pro_tip' => 'En TS real, x: number evita asignar "texto" por error.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Tipo de un array de strings?',
        'options' => 
        array (
          0 => 'string[]',
          1 => 'array<string>',
          2 => 'Ambas válidas en TS',
        ),
        'answer' => 'Ambas válidas en TS',
        'explanation' => 'string[] y Array<string> son equivalentes.',
        'pro_tip' => 'readonly string[] para arrays inmutables.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ts-interfaces',
    'order' => 3,
    'title' => 'Interfaces y type aliases',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Modelar objetos, props de componentes y contratos de API.',
    'concepts' => 
    array (
      0 => 'interface',
      1 => 'type',
      2 => 'object',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'interface',
        'body' => 'Define la forma de un objeto — ideal para respuestas JSON y props React.',
        'code' => 'interface User {
  id: number;
  name: string;
  email?: string;
}',
      ),
      1 => 
      array (
        'heading' => 'type vs interface',
        'body' => 'Ambos modelan formas. `type` también sirve para uniones: `type ID = string | number`.',
        'code' => 'interface Product {
  id: number;
  name: string;
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué significa email?: string?',
        'options' => 
        array (
          0 => 'Propiedad opcional',
          1 => 'Email obligatorio',
          2 => 'Email es null siempre',
        ),
        'answer' => 'Propiedad opcional',
        'explanation' => '? marca el campo como opcional.',
        'pro_tip' => 'Partial<User> hace todos los campos opcionales.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe interface Product con id: number y name: string',
        'must_contain' => 
        array (
          0 => 'interface Product',
          1 => 'id:',
          2 => 'name:',
        ),
        'hint' => 'interface Product {
  id: number;
  name: string;
}',
        'explanation' => 'Interfaces documentan contratos de datos.',
        'pro_tip' => 'Extiende con extends Product { price: number }',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ts-generics',
    'order' => 4,
    'title' => 'Genéricos',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Funciones y tipos reutilizables con <T>.',
    'concepts' => 
    array (
      0 => 'generics',
      1 => 'T',
      2 => 'reusable',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Genéricos',
        'body' => 'Escribes código que funciona con **cualquier** tipo manteniendo type safety.',
        'code' => 'function primero<T>(arr: T[]): T {
  return arr[0];
}',
      ),
      1 => 
      array (
        'heading' => 'En la práctica',
        'body' => 'fetch<User>("/api/user"), useState<number>(0), Promise<string> — genéricos everywhere.',
        'code' => 'function id<T>(x: T): T { return x; }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué sirven los genéricos <T>?',
        'options' => 
        array (
          0 => 'Reutilizar lógica sin perder tipos',
          1 => 'Solo decoración',
          2 => 'Reemplazar any',
        ),
        'answer' => 'Reutilizar lógica sin perder tipos',
        'explanation' => 'Una función, muchos tipos — sin duplicar código.',
        'pro_tip' => 'Evita any — pierdes el beneficio de TS.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe function id<T>(x: T): T',
        'must_contain' => 
        array (
          0 => 'function id',
          1 => '<T>',
          2 => ': T',
        ),
        'hint' => 'function id<T>(x: T): T { return x; }',
        'explanation' => 'Función identidad genérica — patrón base.',
        'pro_tip' => 'Constraints: <T extends { id: number }>',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ts-react',
    'order' => 5,
    'title' => 'TypeScript en React',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Props tipadas, useState y eventos.',
    'concepts' => 
    array (
      0 => 'react',
      1 => 'props',
      2 => 'useState',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Props tipadas',
        'body' => 'interface ButtonProps { label: string; onClick: () => void; }',
        'code' => 'function Button({ label, onClick }: ButtonProps) {
  return <button onClick={onClick}>{label}</button>;
}',
      ),
      1 => 
      array (
        'heading' => 'useState genérico',
        'body' => 'useState<User | null>(null) — el estado sabe qué forma tiene.',
        'code' => 'console.log(\'Practica: ts-react\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo tipas props de un componente?',
        'options' => 
        array (
          0 => 'interface + destructuring en parámetros',
          1 => 'Solo PropTypes',
          2 => 'No se puede',
        ),
        'answer' => 'interface + destructuring en parámetros',
        'explanation' => 'Patrón estándar en React + TS moderno.',
        'pro_tip' => 'React.FC está menos de moda — props directas.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Tipo del evento click en botón?',
        'options' => 
        array (
          0 => 'React.MouseEvent<HTMLButtonElement>',
          1 => 'Event',
          2 => 'any',
        ),
        'answer' => 'React.MouseEvent<HTMLButtonElement>',
        'explanation' => 'React exporta tipos de eventos del DOM.',
        'pro_tip' => 'ChangeEvent<HTMLInputElement> para inputs.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ts-node',
    'order' => 6,
    'title' => 'TypeScript en Node.js',
    'level' => 'Avanzado',
    'minutes' => 30,
    'summary' => 'tsconfig, módulos ESM y tipar Express.',
    'concepts' => 
    array (
      0 => 'node',
      1 => 'tsconfig',
      2 => 'express-types',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'tsconfig.json',
        'body' => 'module, target, outDir, strict — configura cómo compila tu backend.',
        'code' => '"strict": true',
      ),
      1 => 
      array (
        'heading' => '@types',
        'body' => 'npm install -D @types/node @types/express — tipos para librerías JS.',
        'code' => '"strict": true',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿De dónde vienen tipos para Express?',
        'options' => 
        array (
          0 => '@types/express',
          1 => 'Express los incluye siempre',
          2 => 'No existen',
        ),
        'answer' => '@types/express',
        'explanation' => 'DefinitelyTyped publica @types/* para libs JS.',
        'pro_tip' => 'tsx o ts-node ejecutan TS sin compilar manualmente en dev.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe "strict": true en tsconfig',
        'must_contain' => 
        array (
          0 => 'strict',
          1 => 'true',
        ),
        'hint' => '"strict": true',
        'explanation' => 'strict activa el máximo chequeo de tipos.',
        'pro_tip' => 'noImplicitAny evita any silencioso.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'typescript-fundamentos-produccion',
    'order' => 7,
    'title' => 'Performance, bundle y Core Web Vitals',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Performance, bundle y Core Web Vitals — cierre avanzado de TypeScript.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'a11y',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en TypeScript a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
    'slug' => 'typescript-fundamentos-operaciones',
    'order' => 8,
    'title' => 'Accesibilidad, SEO y checklist de release',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Accesibilidad, SEO y checklist de release — cierre avanzado de TypeScript.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'a11y',
      2 => 'release',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en TypeScript a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
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
