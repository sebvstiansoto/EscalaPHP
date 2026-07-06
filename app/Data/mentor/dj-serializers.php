<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Serializers',
    'body' => 'ModelSerializer, validación y nested data. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🎸',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Serializer](/glosario#serializer) · [Validation](/glosario#validation) · [ModelSerializer](/glosario#modelserializer)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Serializer',
    'body' => 'Convierte modelos Django ↔ JSON. Valida input como Pydantic en FastAPI.',
    'code' => 'class UserSerializer(serializers.ModelSerializer):
    class Meta:
        model = User
        fields = [\'id\', \'email\', \'name\']',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Validación',
    'body' => 'validate_email(), is_valid(), errors — rechaza datos malos con 400.',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** ModelSerializer, validación y nested data. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **Django REST Framework**, esto aparece en code reviews, incidentes y entregas diarias. ModelSerializer, validación y nested data. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'class UserSerializer(serializers.ModelSerializer):
    class Meta:
        model = User
        fields = [\'id\', \'email\', \'name\']',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'class UserSerializer(serializers.ModelSerializer):',
      1 => '    class Meta:',
      2 => '        model = User',
      3 => '        fields = [\'id\', \'email\', \'name\']',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** read_only_fields para id y timestamps.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Equivalente DRF a Pydantic?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**Escribe class Meta: con model y fields** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
    'body' => 'Integraste conceptos reales de Python. Sigue con el siguiente módulo o revisa el glosario si algo no quedó claro.',
    'emoji' => '🏆',
  ),
);
