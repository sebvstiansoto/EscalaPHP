<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'HTTP y APIs REST',
    'body' => 'net/http, handlers y JSON. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐹',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [net/http](/glosario#net/http) · [handler](/glosario#handler) · [JSON](/glosario#json)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Servidor mínimo',
    'body' => 'http.HandleFunc y http.ListenAndServe — stdlib potente sin framework.',
    'code' => 'http.HandleFunc("/health", func(w http.ResponseWriter, r *http.Request) {
    w.Write([]byte(`{"ok":true}`))
})
http.ListenAndServe(":8080", nil)',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'JSON',
    'body' => 'json.NewEncoder(w).Encode(user) — Content-Type application/json.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** net/http, handlers y JSON. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Go backend**, esto aparece en code reviews, incidentes y entregas diarias. net/http, handlers y JSON. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'http.HandleFunc("/health", func(w http.ResponseWriter, r *http.Request) {
    w.Write([]byte(`{"ok":true}`))
})
http.ListenAndServe(":8080", nil)',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'http.HandleFunc("/health", func(w http.ResponseWriter, r *http.Request) {',
      1 => '    w.Write([]byte(`{"ok":true}`))',
      2 => '})',
      3 => 'http.ListenAndServe(":8080", nil)',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Gin/Echo son routers populares encima.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Paquete HTTP estándar?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe ListenAndServe** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de terminal. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
