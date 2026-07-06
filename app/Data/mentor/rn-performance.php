<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Performance mobile',
    'body' => 'Hermes, Flipper, listas grandes y profiling. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📱',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [hermes](/glosario#hermes) · [profiling](/glosario#profiling) · [flatlist](/glosario#flatlist)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Listas grandes',
    'body' => 'FlatList necesita keys estables, getItemLayout cuando sea posible y renderItem memoizado.',
    'code' => 'const renderItem = useCallback(({ item }) => (
  <ProductRow product={item} />
), []);

<FlatList
  data={products}
  keyExtractor={(item) => item.id}
  renderItem={renderItem}
  initialNumToRender={12}
  windowSize={7}
/>',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Profiling',
    'body' => 'Hermes + Flipper/React DevTools detectan renders excesivos, JS thread bloqueado y memoria.',
    'code' => '// Anti-pattern: expensive work during render
const sorted = useMemo(
  () => products.toSorted((a, b) => a.price - b.price),
  [products]
);',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Hermes, Flipper, listas grandes y profiling. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **React Native**, esto aparece en code reviews, incidentes y entregas diarias. Hermes, Flipper, listas grandes y profiling. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'const renderItem = useCallback(({ item }) => (
  <ProductRow product={item} />
), []);

<FlatList
  data={products}
  keyExtractor={(item) => item.id}
  renderItem={renderItem}
  initialNumToRender={12}
  windowSize={7}
/>',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'const renderItem = useCallback(({ item }) => (',
      1 => '  <ProductRow product={item} />',
      2 => '), []);',
      3 => '<FlatList',
      4 => '  data={products}',
      5 => '  keyExtractor={(item) => item.id}',
      6 => '  renderItem={renderItem}',
      7 => '  initialNumToRender={12}',
      8 => '  windowSize={7}',
      9 => '/>',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** No optimices a ciegas: mide con profiler.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Por qué memoizar renderItem?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Hermes es?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
