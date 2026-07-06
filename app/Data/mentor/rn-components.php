<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Componentes y estilos',
    'body' => 'StyleSheet, Flexbox y TouchableOpacity. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📱',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [stylesheet](/glosario#stylesheet) · [Flexbox](/glosario#flexbox) · [touchable](/glosario#touchable)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Estilos',
    'body' => 'StyleSheet.create — Flexbox por defecto, no CSS completo del browser.',
    'code' => 'const styles = StyleSheet.create({
  box: { flex: 1, padding: 16, backgroundColor: \'#fff\' }
});',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Interactividad',
    'body' => 'Pressable / TouchableOpacity — onPress en lugar de onClick.',
    'code' => 'StyleSheet.create({ ... })',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** StyleSheet, Flexbox y TouchableOpacity. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **React Native**, esto aparece en code reviews, incidentes y entregas diarias. StyleSheet, Flexbox y TouchableOpacity. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const styles = StyleSheet.create({
  box: { flex: 1, padding: 16, backgroundColor: \'#fff\' }
});',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const styles = StyleSheet.create({',
      1 => '  box: { flex: 1, padding: 16, backgroundColor: \'#fff\' }',
      2 => '});',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** flex: 1 llena espacio disponible.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Layout default RN?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe StyleSheet.create** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
