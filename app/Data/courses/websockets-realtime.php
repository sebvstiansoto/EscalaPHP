<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'ws-intro',
    'order' => 1,
    'title' => 'HTTP vs WebSockets',
    'level' => 'Conceptos',
    'minutes' => 20,
    'summary' => 'Polling, SSE y conexión bidireccional persistente.',
    'concepts' => 
    array (
      0 => 'websocket',
      1 => 'polling',
      2 => 'realtime',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'El problema',
        'body' => 'HTTP es request-response. Chat, notificaciones y juegos necesitan **push** del servidor al cliente.',
        'code' => 'console.log(\'Practica: ws-intro\');',
      ),
      1 => 
      array (
        'heading' => 'WebSocket',
        'body' => 'Handshake HTTP → upgrade a conexión **persistente** bidireccional.',
        'code' => 'console.log(\'Practica: ws-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿WebSocket vs polling cada 1s?',
        'options' => 
        array (
          0 => 'WS: una conexión, baja latencia',
          1 => 'Polling siempre mejor',
          2 => 'Iguales',
        ),
        'answer' => 'WS: una conexión, baja latencia',
        'explanation' => 'Polling desperdicia requests y batería.',
        'pro_tip' => 'SSE es unidireccional server→client, más simple.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Casos típicos WebSocket?',
        'options' => 
        array (
          0 => 'Chat, live scores, colaboración',
          1 => 'Descargar PDF',
          2 => 'Compilar PHP',
        ),
        'answer' => 'Chat, live scores, colaboración',
        'explanation' => 'Tiempo real = WS o similar.',
        'pro_tip' => 'Laravel Reverb / Soketi para PHP.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'ws-browser',
    'order' => 2,
    'title' => 'WebSocket en el navegador',
    'level' => 'Frontend',
    'minutes' => 30,
    'summary' => 'new WebSocket, onmessage y onopen.',
    'concepts' => 
    array (
      0 => 'websocket-api',
      1 => 'events',
      2 => 'json',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'API nativa',
        'body' => 'const ws = new WebSocket("wss://host/ws"); ws.onmessage = e => ...',
        'code' => 'const ws = new WebSocket(\'wss://ejemplo.com/ws\');
ws.onopen = () => ws.send(JSON.stringify({ type: \'join\' }));
ws.onmessage = (e) => console.log(JSON.parse(e.data));',
      ),
      1 => 
      array (
        'heading' => 'wss://',
        'body' => 'Siempre WSS en producción — WS plano es inseguro.',
        'code' => 'console.log(JSON.parse(\'{"ok":true}\').ok);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Enviar datos al servidor?',
        'options' => 
        array (
          0 => 'ws.send()',
          1 => 'ws.post()',
          2 => 'fetch only',
        ),
        'answer' => 'ws.send()',
        'explanation' => 'send acepta string o Blob.',
        'pro_tip' => 'JSON.stringify para objetos.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Parsea mensaje: console.log(JSON.parse(\'{"ok":true}\').ok)',
        'expected_output' => 'true',
        'hint' => 'console.log(JSON.parse(\'{"ok":true}\').ok);',
        'explanation' => 'Protocolo app-level sobre WS suele ser JSON.',
        'pro_tip' => 'Define schema de mensajes { type, payload }.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'ws-node',
    'order' => 3,
    'title' => 'Servidor con Node.js',
    'level' => 'Backend',
    'minutes' => 35,
    'summary' => 'ws library, broadcast y rooms.',
    'concepts' => 
    array (
      0 => 'nodejs',
      1 => 'broadcast',
      2 => 'room',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Servidor WS',
        'body' => 'Librería `ws` en Node escucha upgrades HTTP.',
        'code' => 'const { WebSocketServer } = require(\'ws\');
const wss = new WebSocketServer({ port: 8080 });
wss.on(\'connection\', (ws) => {
  ws.on(\'message\', (data) => wss.clients.forEach(c => c.send(data)));
});',
      ),
      1 => 
      array (
        'heading' => 'Broadcast',
        'body' => 'Reenviar mensaje a todos los clientes conectados — chat básico.',
        'code' => 'const { WebSocketServer } = require("ws");',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Node para WebSockets porque...?',
        'options' => 
        array (
          0 => 'Event loop maneja muchas conexiones I/O',
          1 => 'No soporta HTTP',
          2 => 'Es obligatorio',
        ),
        'answer' => 'Event loop maneja muchas conexiones I/O',
        'explanation' => 'También PHP Ratchet, Python FastAPI websockets.',
        'pro_tip' => 'Sticky sessions si usas múltiples servidores.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe WebSocketServer en Node',
        'must_contain' => 
        array (
          0 => 'WebSocketServer',
        ),
        'hint' => 'const { WebSocketServer } = require("ws");',
        'explanation' => 'Patrón servidor mínimo.',
        'pro_tip' => 'Redis pub/sub para broadcast multi-nodo.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'ws-php',
    'order' => 4,
    'title' => 'WebSockets en PHP (Laravel)',
    'level' => 'PHP',
    'minutes' => 30,
    'summary' => 'Reverb, Echo y broadcasting.',
    'concepts' => 
    array (
      0 => 'laravel-echo',
      1 => 'reverb',
      2 => 'broadcast',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Laravel Broadcasting',
        'body' => 'event(new MessageSent($msg)) → canal WebSocket vía **Reverb** o Pusher.',
        'code' => 'console.log(\'Practica: ws-php\');',
      ),
      1 => 
      array (
        'heading' => 'Echo cliente',
        'body' => 'Laravel Echo en frontend escucha canales privados/presence.',
        'code' => 'console.log(\'Practica: ws-php\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Paquete Laravel WebSocket oficial reciente?',
        'options' => 
        array (
          0 => 'Reverb',
          1 => 'Apache',
          2 => 'Blade',
        ),
        'answer' => 'Reverb',
        'explanation' => 'Servidor WS first-party Laravel.',
        'pro_tip' => 'BROADCAST_DRIVER=reverb en .env',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cliente JS Laravel para WS?',
        'options' => 
        array (
          0 => 'Laravel Echo',
          1 => 'jQuery',
          2 => 'Axios only',
        ),
        'answer' => 'Laravel Echo',
        'explanation' => 'Echo abstrae suscripción a canales.',
        'pro_tip' => 'Canal privado requiere auth HTTP previa.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'ws-scale',
    'order' => 5,
    'title' => 'Escala y Redis pub/sub',
    'level' => 'Arquitectura',
    'minutes' => 30,
    'summary' => 'Múltiples servidores WS y heartbeats.',
    'concepts' => 
    array (
      0 => 'redis-pubsub',
      1 => 'heartbeat',
      2 => 'scale',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Problema multi-server',
        'body' => 'Usuario A en servidor 1, B en servidor 2 — Redis pub/sub sincroniza mensajes.',
        'code' => 'console.log(\'Practica: ws-scale\');',
      ),
      1 => 
      array (
        'heading' => 'Heartbeat',
        'body' => 'Ping/pong detecta conexiones muertas — evita zombies.',
        'code' => 'console.log(\'Practica: ws-scale\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Redis entre nodos WS para...?',
        'options' => 
        array (
          0 => 'Broadcast cross-server',
          1 => 'Guardar HTML',
          2 => 'Compilar JS',
        ),
        'answer' => 'Broadcast cross-server',
        'explanation' => 'Pub/sub canal compartido.',
        'pro_tip' => 'Curso Redis cubre bases — combina ambos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué heartbeat?',
        'options' => 
        array (
          0 => 'Detectar conexiones caídas',
          1 => 'Más ancho de banda siempre',
          2 => 'SEO',
        ),
        'answer' => 'Detectar conexiones caídas',
        'explanation' => 'NAT/firewall cierran idle connections.',
        'pro_tip' => 'Reconectar con exponential backoff en cliente.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'ws-react',
    'order' => 6,
    'title' => 'React + WebSocket',
    'level' => 'Integración',
    'minutes' => 35,
    'summary' => 'useEffect, cleanup y estado en chat.',
    'concepts' => 
    array (
      0 => 'react',
      1 => 'useeffect',
      2 => 'chat',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Hook pattern',
        'body' => 'useEffect abre WS al montar, return () => ws.close() al desmontar.',
        'code' => 'useEffect(() => {
  const ws = new WebSocket(url);
  ws.onmessage = (e) => setMessages(m => [...m, e.data]);
  return () => ws.close();
}, []);',
      ),
      1 => 
      array (
        'heading' => 'Estado',
        'body' => 'messages en useState — lista que crece con cada onmessage.',
        'code' => 'console.log(\'Practica: ws-react\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué ws.close() en cleanup?',
        'options' => 
        array (
          0 => 'Evitar memory leaks y conexiones duplicadas',
          1 => 'Obligatorio por React',
          2 => 'Cierra el servidor',
        ),
        'answer' => 'Evitar memory leaks y conexiones duplicadas',
        'explanation' => 'Strict Mode monta dos veces en dev — cuidado.',
        'pro_tip' => 'useRef para instancia WS estable.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Guardar mensajes WS en...?',
        'options' => 
        array (
          0 => 'useState o useReducer',
          1 => 'Variables globales only',
          2 => 'localStorage siempre',
        ),
        'answer' => 'useState o useReducer',
        'explanation' => 'Estado React dispara re-render del chat.',
        'pro_tip' => 'Virtualizar lista si miles de mensajes.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'websockets-realtime-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de WebSockets y tiempo real.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en WebSockets y tiempo real a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'websockets-realtime-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de WebSockets y tiempo real.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en WebSockets y tiempo real a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '// Structured logging en Node/Next
import pino from \'pino\';

export const logger = pino({
  level: process.env.LOG_LEVEL ?? \'info\',
  redact: [\'req.headers.authorization\', \'password\'],
});

logger.info({ route: \'/api/users\', ms: 42 }, \'request completed\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
);
