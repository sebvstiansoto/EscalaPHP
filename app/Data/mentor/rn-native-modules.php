<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'type' => 'mentor_say',
    'title' => 'Native modules y bridge',
    'body' => 'Cuándo escribir código nativo y cómo exponerlo a JS. Te guío paso a paso con teoría, práctica y validación.',
    'emoji' => '📱',
  ),
  1 => 
  array (
    'type' => 'teach',
    'title' => 'Conceptos clave de esta lección',
    'body' => 'Antes de practicar, ubica estos términos en el glosario: [native-module](/glosario#native-module) · [bridge](/glosario#bridge) · [turbo-module](/glosario#turbo-module)',
  ),
  2 => 
  array (
    'type' => 'teach',
    'title' => 'Native modules',
    'body' => 'Cuando necesitas SDK nativo, sensores o performance extrema, expones APIs Swift/Kotlin a JavaScript.',
    'code' => '// JavaScript side
import { NativeModules } from \'react-native\';

const { DeviceInfoModule } = NativeModules;
const model = await DeviceInfoModule.getModel();',
  ),
  3 => 
  array (
    'type' => 'teach',
    'title' => 'New Architecture',
    'body' => 'TurboModules y Fabric reducen overhead del bridge clásico. Expo modules simplifican casos comunes.',
    'code' => '// expo module concept
export async function getBatteryLevel(): Promise<number> {
  return await NativeBattery.getLevelAsync();
}',
  ),
  4 => 
  array (
    'type' => 'teach',
    'title' => 'Resumen ejecutivo',
    'body' => '**Objetivo:** Cuándo escribir código nativo y cómo exponerlo a JS. Al terminar este módulo deberías poder explicarlo a un compañero sin leer apuntes.',
  ),
  5 => 
  array (
    'type' => 'mentor_say',
    'title' => 'En el mundo real',
    'body' => 'En equipos que usan **React Native**, esto aparece en code reviews, incidentes y entregas diarias. Cuándo escribir código nativo y cómo exponerlo a JS. — no es teoría de manual: es lo que te van a pedir en producción.',
    'emoji' => '💼',
  ),
  6 => 
  array (
    'type' => 'live_demo',
    'title' => 'Mira cómo corre',
    'body' => 'Así se ve en ejecución. Observa la salida antes de intentarlo tú.',
    'demo_code' => '// JavaScript side
import { NativeModules } from \'react-native\';

const { DeviceInfoModule } = NativeModules;
const model = await DeviceInfoModule.getModel();',
    'demo_language' => 'javascript',
  ),
  7 => 
  array (
    'type' => 'pair',
    'title' => 'Pair programming — tu turno',
    'body' => 'Abre el **Laboratorio** y escribe estas líneas. Ejecuta y verifica la salida.',
    'lines' => 
    array (
      0 => '// JavaScript side',
      1 => 'import { NativeModules } from \'react-native\';',
      2 => 'const { DeviceInfoModule } = NativeModules;',
      3 => 'const model = await DeviceInfoModule.getModel();',
    ),
  ),
  8 => 
  array (
    'type' => 'teach',
    'title' => 'Pro tip del mentor',
    'body' => '💡 **Pro tip:** Primero busca librería mantenida y compatible con New Architecture.',
  ),
  9 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 1',
    'body' => '**¿Cuándo crear native module?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
    'exercise_index' => 0,
  ),
  10 => 
  array (
    'type' => 'exercise',
    'title' => 'Tu turno — práctica 2',
    'body' => '**¿TurboModules mejoran qué?** — resuelve con lo aprendido. Si fallas, recibes pistas adaptativas.',
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
