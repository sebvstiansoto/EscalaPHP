<?php

declare(strict_types=1);

return [
    [
        'slug' => 'ws-intro',
        'order' => 1,
        'title' => 'HTTP vs WebSockets',
        'level' => 'Conceptos',
        'minutes' => 20,
        'summary' => 'Polling, SSE y conexión bidireccional persistente.',
        'concepts' => ['websocket', 'polling', 'realtime'],
        'sections' => [
            ['heading' => 'El problema', 'body' => 'HTTP es request-response. Chat, notificaciones y juegos necesitan **push** del servidor al cliente.'],
            ['heading' => 'WebSocket', 'body' => 'Handshake HTTP → upgrade a conexión **persistente** bidireccional.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿WebSocket vs polling cada 1s?', 'options' => ['WS: una conexión, baja latencia', 'Polling siempre mejor', 'Iguales'], 'answer' => 'WS: una conexión, baja latencia', 'explanation' => 'Polling desperdicia requests y batería.', 'pro_tip' => 'SSE es unidireccional server→client, más simple.'],
            ['type' => 'choice', 'question' => '¿Casos típicos WebSocket?', 'options' => ['Chat, live scores, colaboración', 'Descargar PDF', 'Compilar PHP'], 'answer' => 'Chat, live scores, colaboración', 'explanation' => 'Tiempo real = WS o similar.', 'pro_tip' => 'Laravel Reverb / Soketi para PHP.'],
        ],
    ],
    [
        'slug' => 'ws-browser',
        'order' => 2,
        'title' => 'WebSocket en el navegador',
        'level' => 'Frontend',
        'minutes' => 30,
        'summary' => 'new WebSocket, onmessage y onopen.',
        'concepts' => ['websocket-api', 'events', 'json'],
        'sections' => [
            ['heading' => 'API nativa', 'body' => 'const ws = new WebSocket("wss://host/ws"); ws.onmessage = e => ...', 'code' => "const ws = new WebSocket('wss://ejemplo.com/ws');\nws.onopen = () => ws.send(JSON.stringify({ type: 'join' }));\nws.onmessage = (e) => console.log(JSON.parse(e.data));"],
            ['heading' => 'wss://', 'body' => 'Siempre WSS en producción — WS plano es inseguro.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Enviar datos al servidor?', 'options' => ['ws.send()', 'ws.post()', 'fetch only'], 'answer' => 'ws.send()', 'explanation' => 'send acepta string o Blob.', 'pro_tip' => 'JSON.stringify para objetos.'],
            ['type' => 'js', 'question' => 'Parsea mensaje: console.log(JSON.parse(\'{"ok":true}\').ok)', 'expected_output' => 'true', 'hint' => 'console.log(JSON.parse(\'{"ok":true}\').ok);', 'explanation' => 'Protocolo app-level sobre WS suele ser JSON.', 'pro_tip' => 'Define schema de mensajes { type, payload }.'],
        ],
    ],
    [
        'slug' => 'ws-node',
        'order' => 3,
        'title' => 'Servidor con Node.js',
        'level' => 'Backend',
        'minutes' => 35,
        'summary' => 'ws library, broadcast y rooms.',
        'concepts' => ['nodejs', 'broadcast', 'room'],
        'sections' => [
            ['heading' => 'Servidor WS', 'body' => 'Librería `ws` en Node escucha upgrades HTTP.', 'code' => "const { WebSocketServer } = require('ws');\nconst wss = new WebSocketServer({ port: 8080 });\nwss.on('connection', (ws) => {\n  ws.on('message', (data) => wss.clients.forEach(c => c.send(data)));\n});"],
            ['heading' => 'Broadcast', 'body' => 'Reenviar mensaje a todos los clientes conectados — chat básico.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Node para WebSockets porque...?', 'options' => ['Event loop maneja muchas conexiones I/O', 'No soporta HTTP', 'Es obligatorio'], 'answer' => 'Event loop maneja muchas conexiones I/O', 'explanation' => 'También PHP Ratchet, Python FastAPI websockets.', 'pro_tip' => 'Sticky sessions si usas múltiples servidores.'],
            ['type' => 'contains', 'question' => 'Escribe WebSocketServer en Node', 'must_contain' => ['WebSocketServer'], 'hint' => 'const { WebSocketServer } = require("ws");', 'explanation' => 'Patrón servidor mínimo.', 'pro_tip' => 'Redis pub/sub para broadcast multi-nodo.'],
        ],
    ],
    [
        'slug' => 'ws-php',
        'order' => 4,
        'title' => 'WebSockets en PHP (Laravel)',
        'level' => 'PHP',
        'minutes' => 30,
        'summary' => 'Reverb, Echo y broadcasting.',
        'concepts' => ['laravel-echo', 'reverb', 'broadcast'],
        'sections' => [
            ['heading' => 'Laravel Broadcasting', 'body' => 'event(new MessageSent($msg)) → canal WebSocket vía **Reverb** o Pusher.'],
            ['heading' => 'Echo cliente', 'body' => 'Laravel Echo en frontend escucha canales privados/presence.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Paquete Laravel WebSocket oficial reciente?', 'options' => ['Reverb', 'Apache', 'Blade'], 'answer' => 'Reverb', 'explanation' => 'Servidor WS first-party Laravel.', 'pro_tip' => 'BROADCAST_DRIVER=reverb en .env'],
            ['type' => 'choice', 'question' => '¿Cliente JS Laravel para WS?', 'options' => ['Laravel Echo', 'jQuery', 'Axios only'], 'answer' => 'Laravel Echo', 'explanation' => 'Echo abstrae suscripción a canales.', 'pro_tip' => 'Canal privado requiere auth HTTP previa.'],
        ],
    ],
    [
        'slug' => 'ws-scale',
        'order' => 5,
        'title' => 'Escala y Redis pub/sub',
        'level' => 'Arquitectura',
        'minutes' => 30,
        'summary' => 'Múltiples servidores WS y heartbeats.',
        'concepts' => ['redis-pubsub', 'heartbeat', 'scale'],
        'sections' => [
            ['heading' => 'Problema multi-server', 'body' => 'Usuario A en servidor 1, B en servidor 2 — Redis pub/sub sincroniza mensajes.'],
            ['heading' => 'Heartbeat', 'body' => 'Ping/pong detecta conexiones muertas — evita zombies.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Redis entre nodos WS para...?', 'options' => ['Broadcast cross-server', 'Guardar HTML', 'Compilar JS'], 'answer' => 'Broadcast cross-server', 'explanation' => 'Pub/sub canal compartido.', 'pro_tip' => 'Curso Redis cubre bases — combina ambos.'],
            ['type' => 'choice', 'question' => '¿Por qué heartbeat?', 'options' => ['Detectar conexiones caídas', 'Más ancho de banda siempre', 'SEO'], 'answer' => 'Detectar conexiones caídas', 'explanation' => 'NAT/firewall cierran idle connections.', 'pro_tip' => 'Reconectar con exponential backoff en cliente.'],
        ],
    ],
    [
        'slug' => 'ws-react',
        'order' => 6,
        'title' => 'React + WebSocket',
        'level' => 'Integración',
        'minutes' => 35,
        'summary' => 'useEffect, cleanup y estado en chat.',
        'concepts' => ['react', 'useeffect', 'chat'],
        'sections' => [
            ['heading' => 'Hook pattern', 'body' => 'useEffect abre WS al montar, return () => ws.close() al desmontar.', 'code' => "useEffect(() => {\n  const ws = new WebSocket(url);\n  ws.onmessage = (e) => setMessages(m => [...m, e.data]);\n  return () => ws.close();\n}, []);"],
            ['heading' => 'Estado', 'body' => 'messages en useState — lista que crece con cada onmessage.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Por qué ws.close() en cleanup?', 'options' => ['Evitar memory leaks y conexiones duplicadas', 'Obligatorio por React', 'Cierra el servidor'], 'answer' => 'Evitar memory leaks y conexiones duplicadas', 'explanation' => 'Strict Mode monta dos veces en dev — cuidado.', 'pro_tip' => 'useRef para instancia WS estable.'],
            ['type' => 'choice', 'question' => '¿Guardar mensajes WS en...?', 'options' => ['useState o useReducer', 'Variables globales only', 'localStorage siempre'], 'answer' => 'useState o useReducer', 'explanation' => 'Estado React dispara re-render del chat.', 'pro_tip' => 'Virtualizar lista si miles de mensajes.'],
        ],
    ],
];
