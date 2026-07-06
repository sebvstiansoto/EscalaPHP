<?php

declare(strict_types=1);

return [
    ['slug' => 'wc-intro', 'order' => 1, 'title' => 'WebRTC intro', 'level' => 'Conceptos', 'minutes' => 30, 'summary' => 'P2P, media streams y casos de uso.', 'concepts' => ['webrtc', 'p2p', 'realtime'], 'sections' => [
        ['heading' => 'WebRTC', 'body' => '**WebRTC** — audio/video **peer-to-peer** en browser — videollamadas, screen share, gaming.'],
        ['heading' => 'Componentes', 'body' => 'getUserMedia, RTCPeerConnection, RTCDataChannel.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿WebRTC transporte media?', 'options' => ['UDP principalmente (SRTP)', 'Solo HTTP polling', 'Email'], 'answer' => 'UDP principalmente (SRTP)', 'explanation' => 'Baja latencia realtime.', 'pro_tip' => 'Curso WebSockets compare signaling.'],
        ['type' => 'choice', 'question' => '¿getUserMedia?', 'options' => ['Acceso cámara/micrófono', 'Download file', 'SQL query'], 'answer' => 'Acceso cámara/micrófono', 'explanation' => 'Permisos browser required.', 'pro_tip' => 'HTTPS obligatorio except localhost.'],
    ]],
    ['slug' => 'wc-signaling', 'order' => 2, 'title' => 'Signaling server', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'SDP, offer/answer vía WebSocket.', 'concepts' => ['signaling', 'sdp', 'offer'], 'sections' => [
        ['heading' => 'Signaling', 'body' => 'WebRTC no define signaling — tú intercambias SDP offer/answer vía WebSocket/HTTP.'],
        ['heading' => 'Flujo', 'body' => 'A createOffer → send SDP → B setRemoteDescription → createAnswer → ICE candidates exchange.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿SDP contiene...?', 'options' => ['Codecs, media capabilities', 'Video pixels', 'User password'], 'answer' => 'Codecs, media capabilities', 'explanation' => 'Session Description Protocol.', 'pro_tip' => 'Curso websockets-realtime signaling.'],
        ['type' => 'choice', 'question' => '¿Signaling server almacena video?', 'options' => ['No — solo metadata P2P setup', 'Sí siempre', 'Solo audio'], 'answer' => 'No — solo metadata P2P setup', 'explanation' => 'Media va direct P2P ideally.', 'pro_tip' => 'SFU si P2P falla NAT.'],
    ]],
    ['slug' => 'wc-peer', 'order' => 3, 'title' => 'RTCPeerConnection', 'level' => 'Práctica', 'minutes' => 40, 'summary' => 'ICE, STUN y TURN.', 'concepts' => ['ice', 'stun', 'turn'], 'sections' => [
        ['heading' => 'ICE', 'body' => 'Interactive Connectivity Establishment — encuentra ruta P2P entre NATs.'],
        ['heading' => 'STUN/TURN', 'body' => 'STUN descubre IP pública; TURN relay cuando P2P imposible (~8% calls).'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿TURN necesario cuando...?', 'options' => ['NAT simétrico bloquea P2P', 'Siempre', 'Nunca LAN'], 'answer' => 'NAT simétrico bloquea P2P', 'explanation' => 'Relay cost bandwidth.', 'pro_tip' => 'coturn server self-host.'],
        ['type' => 'choice', 'question' => '¿ICE candidate?', 'options' => ['Posible ruta conexión IP:port', 'User vote', 'CSS class'], 'answer' => 'Posible ruta conexión IP:port', 'explanation' => 'Trickle ICE envía incremental.', 'pro_tip' => 'iceConnectionState monitoring.'],
    ]],
    ['slug' => 'wc-media', 'order' => 4, 'title' => 'Media streams y DataChannel', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Tracks, screen share y data P2P.', 'concepts' => ['track', 'datachannel', 'screenshare'], 'sections' => [
        ['heading' => 'Tracks', 'body' => 'pc.addTrack(videoTrack, stream) — mute/unmute sin renegociar siempre.'],
        ['heading' => 'DataChannel', 'body' => 'Arbitrary data P2P — gaming state, chat binary — baja latencia.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿getDisplayMedia?', 'options' => ['Screen share capture', 'Camera only', 'File upload'], 'answer' => 'Screen share capture', 'explanation' => 'User permission prompt.', 'pro_tip' => 'Replace track renegotiation.'],
        ['type' => 'choice', 'question' => '¿DataChannel vs WebSocket?', 'options' => ['DataChannel P2P direct; WS via server', 'Iguales', 'WS faster always'], 'answer' => 'DataChannel P2P direct; WS via server', 'explanation' => 'Use case dependent.', 'pro_tip' => 'Ordered/unordered modes.'],
    ]],
    ['slug' => 'wc-servers', 'order' => 5, 'title' => 'SFU y servicios managed', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'Mediasoup, LiveKit, Daily.', 'concepts' => ['sfu', 'mcu', 'livekit'], 'sections' => [
        ['heading' => 'SFU', 'body' => 'Selective Forwarding Unit — server reenvía streams — escala group calls vs mesh P2P.'],
        ['heading' => 'Managed', 'body' => 'LiveKit, Twilio, Daily — infra WebRTC sin operar TURN/SFU propio.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿SFU vs MCU?', 'options' => ['SFU forward streams; MCU mix video', 'Igual', 'SFU mix audio'], 'answer' => 'SFU forward streams; MCU mix video', 'explanation' => 'SFU más común moderno.', 'pro_tip' => 'Mesh P2P max ~4 peers practical.'],
        ['type' => 'choice', 'question' => '¿Group call 50 users?', 'options' => ['SFU architecture required', 'Mesh P2P fine', 'HTTP polling'], 'answer' => 'SFU architecture required', 'explanation' => 'N*(N-1) mesh explodes.', 'pro_tip' => 'Simulcast layers quality adapt.'],
    ]],
    ['slug' => 'wc-prod', 'order' => 6, 'title' => 'Producción y calidad', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Codec, bandwidth y monitoring.', 'concepts' => ['codec', 'bandwidth', 'stats'], 'sections' => [
        ['heading' => 'Codecs', 'body' => 'VP8/VP9/H.264 video, Opus audio — negotiate SDP.'],
        ['heading' => 'getStats', 'body' => 'RTCPeerConnection.getStats() — packet loss, jitter, bitrate — debug quality.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Opus codec?', 'options' => ['Audio WebRTC standard', 'Video only', 'Image format'], 'answer' => 'Audio WebRTC standard', 'explanation' => 'Adaptive bitrate audio.', 'pro_tip' => 'E2E encryption DTLS-SRTP default.'],
        ['type' => 'choice', 'question' => '¿High packet loss fix?', 'options' => ['Lower resolution, FEC, TURN closer', 'More bandwidth only', 'Ignore'], 'answer' => 'Lower resolution, FEC, TURN closer', 'explanation' => 'Adaptive bitrate.', 'pro_tip' => 'Curso observabilidad metrics calls.'],
    ]],
];
