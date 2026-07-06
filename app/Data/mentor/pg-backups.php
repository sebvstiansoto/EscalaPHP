<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Backups y restore',
    'body' => 'pg_dump, pg_restore y PITR. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐘',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [pg_dump](/glosario#pg_dump) · [restore](/glosario#restore) · [pitr](/glosario#pitr)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Backups lógicos',
    'body' => 'pg_dump exporta schema + datos — prueba restore en staging mensualmente.',
    'code' => 'pg_dump -Fc -h localhost -U app mydb > backup.dump
pg_restore -d mydb_staging backup.dump',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'PITR',
    'body' => 'Point-in-time recovery en RDS/Neon — WAL logs permiten restaurar a minuto exacto antes del incidente.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** pg_dump, pg_restore y PITR. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **PostgreSQL**, esto aparece en code reviews, incidentes y entregas diarias. pg_dump, pg_restore y PITR. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'pg_dump -Fc -h localhost -U app mydb > backup.dump
pg_restore -d mydb_staging backup.dump',
    'demo_language' => 'sql',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'pg_dump -Fc -h localhost -U app mydb > backup.dump',
      1 => 'pg_restore -d mydb_staging backup.dump',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Automatiza + alerta si backup falla.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Backup sin probar restore es...?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe pg_dump** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de SQL. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
