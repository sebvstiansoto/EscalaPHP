<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Solidity básico',
    'body' => 'Contracts, storage y vulnerabilities. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '⛓️',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [solidity](/glosario#solidity) · [contract](/glosario#contract) · [Vulnerabilidad](/glosario#vulnerability)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Solidity',
    'body' => 'contract Token { mapping(address => uint) balances; function transfer(...) public { } }',
    'code' => 'pragma solidity ^0.8.0;',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Vulnerabilities',
    'body' => 'Reentrancy, overflow (pre-0.8), access control — curso seguridad mindset.',
    'code' => 'pragma solidity ^0.8.0;',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Contracts, storage y vulnerabilities. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Web3 & blockchain**, esto aparece en code reviews, incidentes y entregas diarias. Contracts, storage y vulnerabilities. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'pragma solidity ^0.8.0;',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'pragma solidity ^0.8.0;',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** OpenZeppelin ReentrancyGuard.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Reentrancy attack?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe pragma solidity** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 1,
  ),
  11 => 
  array (
    'type' => 'project',
    'title' => 'Mini-proyecto',
    'body' => 'Consolida lo aprendido con un proyecto hands-on validado y XP.',
  ),
  12 => 
  array (
    'type' => 'complete',
    'title' => '¡Módulo dominado!',
    'body' => 'Integraste conceptos reales de JavaScript. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
