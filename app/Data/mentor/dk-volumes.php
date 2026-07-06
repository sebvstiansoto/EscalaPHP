<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Volúmenes y persistencia',
    'body' => 'Datos que sobreviven al reinicio del contenedor. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐳',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Volume](/glosario#volume) · [Bind mount](/glosario#bind-mount) · [Persistencia](/glosario#persistence)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Volúmenes',
    'body' => 'Los contenedores son efímeros. **Volumes** guardan BD, uploads y logs fuera del filesystem del contenedor.',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Bind mount',
    'body' => 'Montas una carpeta del host en el contenedor — ideal para desarrollo en vivo.',
    'code' => 'volumes:
  - ./data:/var/lib/postgresql/data',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Datos que sobreviven al reinicio del contenedor. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Docker**, esto aparece en code reviews, incidentes y entregas diarias. Datos que sobreviven al reinicio del contenedor. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'volumes:
  - ./data:/var/lib/postgresql/data',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'volumes:',
      1 => '  - ./data:/var/lib/postgresql/data',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Named volumes son más portables que bind mounts en prod.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Dónde persisten los datos de PostgreSQL en Docker?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe un volumen en compose: ./app:/var/www/html** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de DevOps. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
