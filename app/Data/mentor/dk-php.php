<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Containerizar PHP, Python o Node',
    'body' => 'Docker no es solo PHP — el mismo concepto aplica a cualquier runtime. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐳',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Multi-stack](/glosario#multi-stack) · [Runtime](/glosario#runtime)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Universal',
    'body' => 'Cambia `FROM php:8.3` por `FROM python:3.12` o `FROM node:20` — el flujo es idéntico.',
    'code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: dk-php
data:
  APP_ENV: production',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Docker no es solo PHP — el mismo concepto aplica a cualquier runtime. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Checklist de dominio',
    'body' => 'Antes de avanzar confirma: entiendes el concepto, puedes nombrar un caso real y resolviste los ejercicios sin copiar.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Docker**, esto aparece en code reviews, incidentes y entregas diarias. Docker no es solo PHP — el mismo concepto aplica a cualquier runtime. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'apiVersion: v1
kind: ConfigMap
metadata:
  name: dk-php
data:
  APP_ENV: production',
    'demo_language' => 'shell',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'apiVersion: v1',
      1 => 'kind: ConfigMap',
      2 => 'metadata:',
      3 => '  name: dk-php',
      4 => 'data:',
      5 => '  APP_ENV: production',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Por eso Docker es curso transversal en esta plataforma.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Docker sirve solo para PHP?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Cuál es la mejor siguiente acción tras completar este módulo?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
