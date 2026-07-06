<?php

declare(strict_types=1);

/**
 * Adds advanced lessons to selected flagship courses.
 * Safe to re-run: existing lesson slugs are skipped.
 */

$root = dirname(__DIR__);

$additions = [
    'app/Data/courses/nextjs-fullstack.php' => [
        [
            'slug' => 'next-middleware',
            'order' => 7,
            'title' => 'Middleware, edge y seguridad',
            'level' => 'Producción',
            'minutes' => 35,
            'summary' => 'Middleware en Next.js, Edge Runtime, headers y rate limiting.',
            'concepts' => ['middleware', 'edge', 'security'],
            'sections' => [
                [
                    'heading' => 'Middleware',
                    'body' => 'Middleware corre antes de la ruta: auth redirects, i18n, experimentos A/B, headers de seguridad.',
                    'code' => <<<'CODE'
import { NextResponse } from 'next/server';
import type { NextRequest } from 'next/server';

export function middleware(request: NextRequest) {
  const token = request.cookies.get('session');
  if (!token && request.nextUrl.pathname.startsWith('/dashboard')) {
    return NextResponse.redirect(new URL('/login', request.url));
  }
  return NextResponse.next();
}

export const config = { matcher: ['/dashboard/:path*'] };
CODE,
                ],
                [
                    'heading' => 'Security headers',
                    'body' => 'CSP, HSTS, X-Frame-Options y rate limiting en edge reducen riesgo antes de tocar tu backend.',
                    'code' => <<<'CODE'
const res = NextResponse.next();
res.headers.set('Strict-Transport-Security', 'max-age=63072000; includeSubDomains; preload');
res.headers.set('X-Frame-Options', 'DENY');
return res;
CODE,
                ],
            ],
            'exercises' => [
                [
                    'type' => 'choice',
                    'question' => '¿Dónde corre Next.js middleware?',
                    'options' => ['Antes de resolver la ruta', 'Solo en el navegador', 'Después del render final'],
                    'answer' => 'Antes de resolver la ruta',
                    'explanation' => 'Permite redirigir, autenticar o añadir headers antes de ejecutar la página.',
                    'pro_tip' => 'Mantén middleware liviano: no hagas queries pesadas desde edge.',
                ],
                [
                    'type' => 'contains',
                    'question' => 'Escribe un matcher para /dashboard/:path*',
                    'must_contain' => ['matcher', '/dashboard/:path*'],
                    'hint' => "export const config = { matcher: ['/dashboard/:path*'] };",
                    'explanation' => 'El matcher limita dónde aplica el middleware.',
                    'pro_tip' => 'Sin matcher puedes afectar assets o rutas públicas accidentalmente.',
                ],
            ],
        ],
        [
            'slug' => 'next-performance',
            'order' => 8,
            'title' => 'Performance y observabilidad',
            'level' => 'Avanzado',
            'minutes' => 40,
            'summary' => 'Core Web Vitals, bundle analysis, caching y tracing.',
            'concepts' => ['performance', 'web-vitals', 'tracing'],
            'sections' => [
                [
                    'heading' => 'Bundle analysis',
                    'body' => 'Analiza el bundle para detectar librerías pesadas, duplicados y componentes cliente innecesarios.',
                    'code' => <<<'CODE'
// next.config.js
const withBundleAnalyzer = require('@next/bundle-analyzer')({
  enabled: process.env.ANALYZE === 'true',
});

module.exports = withBundleAnalyzer({});
CODE,
                ],
                [
                    'heading' => 'Web Vitals',
                    'body' => 'LCP, INP y CLS deben medirse en usuarios reales. Enviar métricas a analytics o APM cierra el ciclo.',
                    'code' => <<<'CODE'
export function reportWebVitals(metric) {
  navigator.sendBeacon('/api/vitals', JSON.stringify(metric));
}
CODE,
                ],
            ],
            'exercises' => [
                [
                    'type' => 'choice',
                    'question' => '¿Qué mide LCP?',
                    'options' => ['Carga del contenido principal', 'Errores JavaScript', 'Tamaño de la base de datos'],
                    'answer' => 'Carga del contenido principal',
                    'explanation' => 'Largest Contentful Paint estima cuándo el usuario ve el contenido clave.',
                    'pro_tip' => 'Optimiza imágenes, streaming y rutas críticas para mejorar LCP.',
                ],
                [
                    'type' => 'choice',
                    'question' => '¿Por qué reducir componentes client?',
                    'options' => ['Menos JavaScript al navegador', 'Más SQL', 'No afecta performance'],
                    'answer' => 'Menos JavaScript al navegador',
                    'explanation' => 'Server Components reducen bundle e hidratación.',
                    'pro_tip' => 'Usa "use client" solo donde hay estado, eventos o APIs del navegador.',
                ],
            ],
        ],
    ],
    'app/Data/courses/redis-cache.php' => [
        [
            'slug' => 'rd-streams',
            'order' => 7,
            'title' => 'Redis Streams',
            'level' => 'Avanzado',
            'minutes' => 35,
            'summary' => 'Streams, consumer groups y procesamiento durable.',
            'concepts' => ['streams', 'consumer-group', 'queue'],
            'sections' => [
                [
                    'heading' => 'Streams',
                    'body' => 'Redis Streams guarda eventos ordenados con IDs. Es útil para colas ligeras y event logs pequeños.',
                    'code' => <<<'CODE'
XADD orders * type created order_id 123 user_id 42
XREAD COUNT 10 STREAMS orders 0
CODE,
                ],
                [
                    'heading' => 'Consumer groups',
                    'body' => 'Consumer groups reparten mensajes entre workers y permiten reintentos con pending entries.',
                    'code' => <<<'CODE'
XGROUP CREATE orders workers $ MKSTREAM
XREADGROUP GROUP workers worker-1 COUNT 10 STREAMS orders >
XACK orders workers 1690000000000-0
CODE,
                ],
            ],
            'exercises' => [
                [
                    'type' => 'choice',
                    'question' => '¿Qué comando añade eventos a un Stream?',
                    'options' => ['XADD', 'LPUSH', 'SET'],
                    'answer' => 'XADD',
                    'explanation' => 'XADD inserta un evento con ID ordenado.',
                    'pro_tip' => 'Usa MAXLEN aproximado para evitar streams infinitos.',
                ],
                [
                    'type' => 'contains',
                    'question' => 'Escribe XREADGROUP',
                    'must_contain' => ['XREADGROUP'],
                    'hint' => 'XREADGROUP GROUP workers worker-1 STREAMS orders >',
                    'explanation' => 'Consumer groups son clave para procesar con varios workers.',
                    'pro_tip' => 'Monitorea XPENDING para detectar mensajes atascados.',
                ],
            ],
        ],
        [
            'slug' => 'rd-cluster',
            'order' => 8,
            'title' => 'Redis en cluster y HA',
            'level' => 'Producción',
            'minutes' => 40,
            'summary' => 'Replication, Sentinel, Cluster mode y failover.',
            'concepts' => ['replication', 'sentinel', 'cluster'],
            'sections' => [
                [
                    'heading' => 'Alta disponibilidad',
                    'body' => 'Redis replica datos a followers. Sentinel detecta fallos y promueve replica a primary.',
                    'code' => <<<'CODE'
replicaof redis-primary 6379
sentinel monitor mymaster redis-primary 6379 2
sentinel down-after-milliseconds mymaster 5000
CODE,
                ],
                [
                    'heading' => 'Cluster mode',
                    'body' => 'Redis Cluster divide keyspace en 16384 slots. Escala horizontal, pero limita operaciones multi-key.',
                    'code' => <<<'CODE'
redis-cli --cluster create \
  10.0.0.1:6379 10.0.0.2:6379 10.0.0.3:6379 \
  --cluster-replicas 1
CODE,
                ],
            ],
            'exercises' => [
                [
                    'type' => 'choice',
                    'question' => '¿Qué hace Redis Sentinel?',
                    'options' => ['Failover automático', 'Compilar PHP', 'Crear índices SQL'],
                    'answer' => 'Failover automático',
                    'explanation' => 'Sentinel observa primaries y promueve replicas si fallan.',
                    'pro_tip' => 'Managed Redis suele ocultar Sentinel, pero el concepto importa.',
                ],
                [
                    'type' => 'choice',
                    'question' => '¿Redis Cluster usa slots cuántos?',
                    'options' => ['16384', '256', '1 por DB'],
                    'answer' => '16384',
                    'explanation' => 'Cada key cae en un hash slot distribuido entre nodos.',
                    'pro_tip' => 'Usa hash tags {user:42}:a y {user:42}:b para multi-key mismo slot.',
                ],
            ],
        ],
    ],
    'app/Data/courses/kafka-eventos.php' => [
        [
            'slug' => 'kf-schema',
            'order' => 7,
            'title' => 'Schema Registry y contratos',
            'level' => 'Avanzado',
            'minutes' => 40,
            'summary' => 'Avro/Protobuf, compatibilidad y evolución de eventos.',
            'concepts' => ['schema-registry', 'avro', 'compatibility'],
            'sections' => [
                [
                    'heading' => 'Schema Registry',
                    'body' => 'Centraliza schemas de eventos para que producers y consumers evolucionen sin romperse.',
                    'code' => <<<'CODE'
{
  "type": "record",
  "name": "OrderCreated",
  "fields": [
    { "name": "order_id", "type": "string" },
    { "name": "total", "type": "double" }
  ]
}
CODE,
                ],
                [
                    'heading' => 'Compatibilidad',
                    'body' => 'BACKWARD permite consumidores nuevos leer eventos viejos. Añade campos con default, no renombres sin versionar.',
                    'code' => <<<'CODE'
{ "name": "currency", "type": "string", "default": "USD" }
CODE,
                ],
            ],
            'exercises' => [
                [
                    'type' => 'choice',
                    'question' => '¿Por qué usar Schema Registry?',
                    'options' => ['Evitar romper consumers al cambiar eventos', 'Hacer CSS', 'Eliminar Kafka'],
                    'answer' => 'Evitar romper consumers al cambiar eventos',
                    'explanation' => 'Los schemas versionados protegen contratos entre equipos.',
                    'pro_tip' => 'Schema evolution es parte de gobernanza de eventos.',
                ],
                [
                    'type' => 'choice',
                    'question' => '¿Cambio seguro en Avro?',
                    'options' => ['Añadir campo con default', 'Renombrar campo sin avisar', 'Cambiar string a int'],
                    'answer' => 'Añadir campo con default',
                    'explanation' => 'El default permite leer eventos antiguos.',
                    'pro_tip' => 'Romper contrato debe ser nuevo topic o nueva versión explícita.',
                ],
            ],
        ],
        [
            'slug' => 'kf-connect',
            'order' => 8,
            'title' => 'Kafka Connect y CDC',
            'level' => 'Producción',
            'minutes' => 40,
            'summary' => 'Connectors, Debezium y sincronización de datos.',
            'concepts' => ['kafka-connect', 'cdc', 'debezium'],
            'sections' => [
                [
                    'heading' => 'Kafka Connect',
                    'body' => 'Framework para mover datos hacia/desde Kafka sin escribir producers a mano.',
                    'code' => <<<'CODE'
{
  "name": "postgres-orders-source",
  "config": {
    "connector.class": "io.debezium.connector.postgresql.PostgresConnector",
    "database.hostname": "postgres",
    "topic.prefix": "dbserver1"
  }
}
CODE,
                ],
                [
                    'heading' => 'CDC',
                    'body' => 'Change Data Capture convierte cambios de BD en eventos. Útil para materialized views, search index y analytics.',
                    'code' => <<<'CODE'
orders table INSERT
  -> debezium event
  -> kafka topic dbserver1.public.orders
  -> elasticsearch sink connector
CODE,
                ],
            ],
            'exercises' => [
                [
                    'type' => 'choice',
                    'question' => '¿Qué resuelve Debezium?',
                    'options' => ['CDC desde bases de datos', 'Frontend CSS', 'Login OAuth'],
                    'answer' => 'CDC desde bases de datos',
                    'explanation' => 'Lee el log de cambios de la BD y emite eventos Kafka.',
                    'pro_tip' => 'CDC evita dual writes frágiles app -> DB + app -> Kafka.',
                ],
                [
                    'type' => 'choice',
                    'question' => '¿Sink connector típico?',
                    'options' => ['Kafka hacia Elasticsearch/S3/DB', 'Browser hacia CSS', 'Dockerfile hacia Pod'],
                    'answer' => 'Kafka hacia Elasticsearch/S3/DB',
                    'explanation' => 'Los sinks consumen topics y escriben a sistemas destino.',
                    'pro_tip' => 'Observa lag y errores DLQ de connectors en producción.',
                ],
            ],
        ],
    ],
    'app/Data/courses/react-native-mobile.php' => [
        [
            'slug' => 'rn-native-modules',
            'order' => 7,
            'title' => 'Native modules y bridge',
            'level' => 'Avanzado',
            'minutes' => 40,
            'summary' => 'Cuándo escribir código nativo y cómo exponerlo a JS.',
            'concepts' => ['native-module', 'bridge', 'turbo-module'],
            'sections' => [
                [
                    'heading' => 'Native modules',
                    'body' => 'Cuando necesitas SDK nativo, sensores o performance extrema, expones APIs Swift/Kotlin a JavaScript.',
                    'code' => <<<'CODE'
// JavaScript side
import { NativeModules } from 'react-native';

const { DeviceInfoModule } = NativeModules;
const model = await DeviceInfoModule.getModel();
CODE,
                ],
                [
                    'heading' => 'New Architecture',
                    'body' => 'TurboModules y Fabric reducen overhead del bridge clásico. Expo modules simplifican casos comunes.',
                    'code' => <<<'CODE'
// expo module concept
export async function getBatteryLevel(): Promise<number> {
  return await NativeBattery.getLevelAsync();
}
CODE,
                ],
            ],
            'exercises' => [
                [
                    'type' => 'choice',
                    'question' => '¿Cuándo crear native module?',
                    'options' => ['SDK o API nativa no disponible en JS', 'Para todo botón', 'Nunca'],
                    'answer' => 'SDK o API nativa no disponible en JS',
                    'explanation' => 'Solo baja a nativo cuando JS/Expo no cubre el caso.',
                    'pro_tip' => 'Primero busca librería mantenida y compatible con New Architecture.',
                ],
                [
                    'type' => 'choice',
                    'question' => '¿TurboModules mejoran qué?',
                    'options' => ['Comunicación JS-native', 'Base de datos SQL', 'CSS grid'],
                    'answer' => 'Comunicación JS-native',
                    'explanation' => 'Reducen coste del bridge clásico.',
                    'pro_tip' => 'Verifica compatibilidad antes de activar New Architecture en prod.',
                ],
            ],
        ],
        [
            'slug' => 'rn-performance',
            'order' => 8,
            'title' => 'Performance mobile',
            'level' => 'Producción',
            'minutes' => 40,
            'summary' => 'Hermes, Flipper, listas grandes y profiling.',
            'concepts' => ['hermes', 'profiling', 'flatlist'],
            'sections' => [
                [
                    'heading' => 'Listas grandes',
                    'body' => 'FlatList necesita keys estables, getItemLayout cuando sea posible y renderItem memoizado.',
                    'code' => <<<'CODE'
const renderItem = useCallback(({ item }) => (
  <ProductRow product={item} />
), []);

<FlatList
  data={products}
  keyExtractor={(item) => item.id}
  renderItem={renderItem}
  initialNumToRender={12}
  windowSize={7}
/>
CODE,
                ],
                [
                    'heading' => 'Profiling',
                    'body' => 'Hermes + Flipper/React DevTools detectan renders excesivos, JS thread bloqueado y memoria.',
                    'code' => <<<'CODE'
// Anti-pattern: expensive work during render
const sorted = useMemo(
  () => products.toSorted((a, b) => a.price - b.price),
  [products]
);
CODE,
                ],
            ],
            'exercises' => [
                [
                    'type' => 'choice',
                    'question' => '¿Por qué memoizar renderItem?',
                    'options' => ['Evita renders innecesarios', 'Abre cámara', 'Compila nativo'],
                    'answer' => 'Evita renders innecesarios',
                    'explanation' => 'Referencias estables ayudan a FlatList y filas memoizadas.',
                    'pro_tip' => 'No optimices a ciegas: mide con profiler.',
                ],
                [
                    'type' => 'choice',
                    'question' => '¿Hermes es?',
                    'options' => ['Motor JavaScript optimizado para RN', 'Base de datos', 'Servicio push'],
                    'answer' => 'Motor JavaScript optimizado para RN',
                    'explanation' => 'Mejora startup y reduce memoria en muchas apps RN.',
                    'pro_tip' => 'Mide startup time y memory después de activarlo.',
                ],
            ],
        ],
    ],
];

$added = 0;
foreach ($additions as $relativeFile => $lessonsToAdd) {
    $file = $root . '/' . $relativeFile;
    /** @var list<array<string, mixed>> $lessons */
    $lessons = require $file;
    $existing = array_column($lessons, 'slug');

    foreach ($lessonsToAdd as $lesson) {
        if (in_array($lesson['slug'], $existing, true)) {
            continue;
        }
        $lessons[] = $lesson;
        $existing[] = $lesson['slug'];
        $added++;
    }

    file_put_contents($file, "<?php\n\ndeclare(strict_types=1);\n\nreturn " . var_export($lessons, true) . ";\n");
}

echo "Added {$added} flagship lessons.\n";
