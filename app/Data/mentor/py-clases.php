<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Clases y POO',
    'body' => 'class, __init__, métodos y herencia. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '🐍',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [Clase](/glosario#class) · [__init__](/glosario#init) · [POO (OOP)](/glosario#oop)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Clases',
    'body' => 'Organizas datos y comportamiento. Django models y Pydantic models son clases.',
    'code' => 'class User:
    def __init__(self, name):
        self.name = name
    def greet(self):
        return f\'Hola {self.name}\'',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** class, __init__, métodos y herencia. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
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
    'body' => 'En equipos que usan **Python backend**, esto aparece en code reviews, incidentes y entregas diarias. class, __init__, métodos y herencia. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => 'class User:
    def __init__(self, name):
        self.name = name
    def greet(self):
        return f\'Hola {self.name}\'',
    'demo_language' => 'python',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => 'class User:',
      1 => '    def __init__(self, name):',
      2 => '        self.name = name',
      3 => '    def greet(self):',
      4 => '        return f\'Hola {self.name}\'',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** dataclasses (@dataclass) reducen boilerplate en Python 3.7+.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**class Punto: def __init__(self,x): self.x=x\\np=Punto(3)\\nprint(p.x)** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿Qué es self en un método?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
