<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'wc-intro',
    'order' => 1,
    'title' => 'WebRTC intro',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'P2P, media streams y casos de uso.',
    'concepts' => 
    array (
      0 => 'webrtc',
      1 => 'p2p',
      2 => 'realtime',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'WebRTC',
        'body' => '**WebRTC** — audio/video **peer-to-peer** en browser — videollamadas, screen share, gaming.',
        'code' => 'console.log(\'Practica: wc-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Componentes',
        'body' => 'getUserMedia, RTCPeerConnection, RTCDataChannel.',
        'code' => 'function App() {
  return <h1>Hola React</h1>;
}
export default App;',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿WebRTC transporte media?',
        'options' => 
        array (
          0 => 'UDP principalmente (SRTP)',
          1 => 'Solo HTTP polling',
          2 => 'Email',
        ),
        'answer' => 'UDP principalmente (SRTP)',
        'explanation' => 'Baja latencia realtime.',
        'pro_tip' => 'Curso WebSockets compare signaling.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿getUserMedia?',
        'options' => 
        array (
          0 => 'Acceso cámara/micrófono',
          1 => 'Download file',
          2 => 'SQL query',
        ),
        'answer' => 'Acceso cámara/micrófono',
        'explanation' => 'Permisos browser required.',
        'pro_tip' => 'HTTPS obligatorio except localhost.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'wc-signaling',
    'order' => 2,
    'title' => 'Signaling server',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'SDP, offer/answer vía WebSocket.',
    'concepts' => 
    array (
      0 => 'signaling',
      1 => 'sdp',
      2 => 'offer',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Signaling',
        'body' => 'WebRTC no define signaling — tú intercambias SDP offer/answer vía WebSocket/HTTP.',
        'code' => 'console.log(\'Practica: wc-signaling\');',
      ),
      1 => 
      array (
        'heading' => 'Flujo',
        'body' => 'A createOffer → send SDP → B setRemoteDescription → createAnswer → ICE candidates exchange.',
        'code' => 'console.log(\'Practica: wc-signaling\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿SDP contiene...?',
        'options' => 
        array (
          0 => 'Codecs, media capabilities',
          1 => 'Video pixels',
          2 => 'User password',
        ),
        'answer' => 'Codecs, media capabilities',
        'explanation' => 'Session Description Protocol.',
        'pro_tip' => 'Curso websockets-realtime signaling.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Signaling server almacena video?',
        'options' => 
        array (
          0 => 'No — solo metadata P2P setup',
          1 => 'Sí siempre',
          2 => 'Solo audio',
        ),
        'answer' => 'No — solo metadata P2P setup',
        'explanation' => 'Media va direct P2P ideally.',
        'pro_tip' => 'SFU si P2P falla NAT.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'wc-peer',
    'order' => 3,
    'title' => 'RTCPeerConnection',
    'level' => 'Práctica',
    'minutes' => 40,
    'summary' => 'ICE, STUN y TURN.',
    'concepts' => 
    array (
      0 => 'ice',
      1 => 'stun',
      2 => 'turn',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'ICE',
        'body' => 'Interactive Connectivity Establishment — encuentra ruta P2P entre NATs.',
        'code' => 'console.log(\'Practica: wc-peer\');',
      ),
      1 => 
      array (
        'heading' => 'STUN/TURN',
        'body' => 'STUN descubre IP pública; TURN relay cuando P2P imposible (~8% calls).',
        'code' => 'console.log(\'Practica: wc-peer\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿TURN necesario cuando...?',
        'options' => 
        array (
          0 => 'NAT simétrico bloquea P2P',
          1 => 'Siempre',
          2 => 'Nunca LAN',
        ),
        'answer' => 'NAT simétrico bloquea P2P',
        'explanation' => 'Relay cost bandwidth.',
        'pro_tip' => 'coturn server self-host.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ICE candidate?',
        'options' => 
        array (
          0 => 'Posible ruta conexión IP:port',
          1 => 'User vote',
          2 => 'CSS class',
        ),
        'answer' => 'Posible ruta conexión IP:port',
        'explanation' => 'Trickle ICE envía incremental.',
        'pro_tip' => 'iceConnectionState monitoring.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'wc-media',
    'order' => 4,
    'title' => 'Media streams y DataChannel',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Tracks, screen share y data P2P.',
    'concepts' => 
    array (
      0 => 'track',
      1 => 'datachannel',
      2 => 'screenshare',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tracks',
        'body' => 'pc.addTrack(videoTrack, stream) — mute/unmute sin renegociar siempre.',
        'code' => 'console.log(\'Practica: wc-media\');',
      ),
      1 => 
      array (
        'heading' => 'DataChannel',
        'body' => 'Arbitrary data P2P — gaming state, chat binary — baja latencia.',
        'code' => 'console.log(\'Practica: wc-media\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿getDisplayMedia?',
        'options' => 
        array (
          0 => 'Screen share capture',
          1 => 'Camera only',
          2 => 'File upload',
        ),
        'answer' => 'Screen share capture',
        'explanation' => 'User permission prompt.',
        'pro_tip' => 'Replace track renegotiation.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿DataChannel vs WebSocket?',
        'options' => 
        array (
          0 => 'DataChannel P2P direct; WS via server',
          1 => 'Iguales',
          2 => 'WS faster always',
        ),
        'answer' => 'DataChannel P2P direct; WS via server',
        'explanation' => 'Use case dependent.',
        'pro_tip' => 'Ordered/unordered modes.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'wc-servers',
    'order' => 5,
    'title' => 'SFU y servicios managed',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Mediasoup, LiveKit, Daily.',
    'concepts' => 
    array (
      0 => 'sfu',
      1 => 'mcu',
      2 => 'livekit',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SFU',
        'body' => 'Selective Forwarding Unit — server reenvía streams — escala group calls vs mesh P2P.',
        'code' => 'console.log(\'Practica: wc-servers\');',
      ),
      1 => 
      array (
        'heading' => 'Managed',
        'body' => 'LiveKit, Twilio, Daily — infra WebRTC sin operar TURN/SFU propio.',
        'code' => 'console.log(\'Practica: wc-servers\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿SFU vs MCU?',
        'options' => 
        array (
          0 => 'SFU forward streams; MCU mix video',
          1 => 'Igual',
          2 => 'SFU mix audio',
        ),
        'answer' => 'SFU forward streams; MCU mix video',
        'explanation' => 'SFU más común moderno.',
        'pro_tip' => 'Mesh P2P max ~4 peers practical.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Group call 50 users?',
        'options' => 
        array (
          0 => 'SFU architecture required',
          1 => 'Mesh P2P fine',
          2 => 'HTTP polling',
        ),
        'answer' => 'SFU architecture required',
        'explanation' => 'N*(N-1) mesh explodes.',
        'pro_tip' => 'Simulcast layers quality adapt.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'wc-prod',
    'order' => 6,
    'title' => 'Producción y calidad',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Codec, bandwidth y monitoring.',
    'concepts' => 
    array (
      0 => 'codec',
      1 => 'bandwidth',
      2 => 'stats',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Codecs',
        'body' => 'VP8/VP9/H.264 video, Opus audio — negotiate SDP.',
        'code' => 'console.log(\'Practica: wc-prod\');',
      ),
      1 => 
      array (
        'heading' => 'getStats',
        'body' => 'RTCPeerConnection.getStats() — packet loss, jitter, bitrate — debug quality.',
        'code' => 'console.log(\'Practica: wc-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Opus codec?',
        'options' => 
        array (
          0 => 'Audio WebRTC standard',
          1 => 'Video only',
          2 => 'Image format',
        ),
        'answer' => 'Audio WebRTC standard',
        'explanation' => 'Adaptive bitrate audio.',
        'pro_tip' => 'E2E encryption DTLS-SRTP default.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿High packet loss fix?',
        'options' => 
        array (
          0 => 'Lower resolution, FEC, TURN closer',
          1 => 'More bandwidth only',
          2 => 'Ignore',
        ),
        'answer' => 'Lower resolution, FEC, TURN closer',
        'explanation' => 'Adaptive bitrate.',
        'pro_tip' => 'Curso observabilidad metrics calls.',
      ),
    ),
  ),
);
