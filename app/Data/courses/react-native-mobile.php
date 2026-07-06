<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'rn-intro',
    'order' => 1,
    'title' => 'React Native intro',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Un codebase, iOS y Android.',
    'concepts' => 
    array (
      0 => 'react-native',
      1 => 'expo',
      2 => 'mobile',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'React Native',
        'body' => '**React Native** usa React + componentes nativos (View, Text) — no WebView. Un equipo, dos stores.',
        'code' => 'function App() {
  return <h1>Hola React</h1>;
}
export default App;',
      ),
      1 => 
      array (
        'heading' => 'Expo',
        'body' => 'Expo simplifica dev: npx create-expo-app, hot reload, builds en cloud.',
        'code' => 'console.log(\'Practica: rn-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿React Native renderiza...?',
        'options' => 
        array (
          0 => 'Componentes nativos reales',
          1 => 'Solo HTML en WebView',
          2 => 'Swift puro',
        ),
        'answer' => 'Componentes nativos reales',
        'explanation' => 'Bridge a UI nativa.',
        'pro_tip' => 'Expo Go para probar en device.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Equivalente div en RN?',
        'options' => 
        array (
          0 => '<View>',
          1 => '<div>',
          2 => '<Container>',
        ),
        'answer' => '<View>',
        'explanation' => 'View es contenedor layout.',
        'pro_tip' => 'Text debe envolver strings.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'rn-components',
    'order' => 2,
    'title' => 'Componentes y estilos',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'StyleSheet, Flexbox y TouchableOpacity.',
    'concepts' => 
    array (
      0 => 'stylesheet',
      1 => 'flexbox',
      2 => 'touchable',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Estilos',
        'body' => 'StyleSheet.create — Flexbox por defecto, no CSS completo del browser.',
        'code' => 'const styles = StyleSheet.create({
  box: { flex: 1, padding: 16, backgroundColor: \'#fff\' }
});',
      ),
      1 => 
      array (
        'heading' => 'Interactividad',
        'body' => 'Pressable / TouchableOpacity — onPress en lugar de onClick.',
        'code' => 'StyleSheet.create({ ... })',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Layout default RN?',
        'options' => 
        array (
          0 => 'Flexbox column',
          1 => 'Grid CSS',
          2 => 'Table',
        ),
        'answer' => 'Flexbox column',
        'explanation' => 'flexDirection column por defecto.',
        'pro_tip' => 'flex: 1 llena espacio disponible.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe StyleSheet.create',
        'must_contain' => 
        array (
          0 => 'StyleSheet.create',
        ),
        'hint' => 'StyleSheet.create({ ... })',
        'explanation' => 'Estilos optimizados RN.',
        'pro_tip' => 'NativeWind = Tailwind en RN.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'rn-navigation',
    'order' => 3,
    'title' => 'React Navigation',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Stack, tabs y deep linking.',
    'concepts' => 
    array (
      0 => 'navigation',
      1 => 'stack',
      2 => 'tabs',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Stack Navigator',
        'body' => 'Pantallas apiladas — push/pop como historial mobile.',
        'code' => 'console.log(\'Practica: rn-navigation\');',
      ),
      1 => 
      array (
        'heading' => 'Tab Navigator',
        'body' => 'Bottom tabs — patrón estándar en apps consumer.',
        'code' => 'console.log(\'Practica: rn-navigation\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Lib navegación estándar RN?',
        'options' => 
        array (
          0 => 'React Navigation',
          1 => 'React Router DOM',
          2 => 'Vue Router',
        ),
        'answer' => 'React Navigation',
        'explanation' => 'Mantenida por comunidad RN.',
        'pro_tip' => 'navigation.navigate("Screen", { id: 1 }).',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Params entre pantallas?',
        'options' => 
        array (
          0 => 'route.params',
          1 => 'query string URL only',
          2 => 'localStorage',
        ),
        'answer' => 'route.params',
        'explanation' => 'Pasa datos al navegar.',
        'pro_tip' => 'TypeScript types para params.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'rn-api',
    'order' => 4,
    'title' => 'APIs y estado',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'fetch, FlatList y loading states.',
    'concepts' => 
    array (
      0 => 'flatlist',
      1 => 'fetch',
      2 => 'loading',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'FlatList',
        'body' => 'Lista virtualizada — renderiza solo items visibles, esencial en mobile.',
        'code' => 'console.log(\'Practica: rn-api\');',
      ),
      1 => 
      array (
        'heading' => 'API',
        'body' => 'fetch + useEffect — mismo patrón que React web, cuidado offline.',
        'code' => 'const res = await fetch(\'/api/users\');
const data = await res.json();
console.log(data);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿FlatList vs ScrollView + map?',
        'options' => 
        array (
          0 => 'FlatList virtualiza items',
          1 => 'Igual performance',
          2 => 'ScrollView siempre mejor',
        ),
        'answer' => 'FlatList virtualiza items',
        'explanation' => 'Crítico en listas largas.',
        'pro_tip' => 'keyExtractor obligatorio.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Pull to refresh?',
        'options' => 
        array (
          0 => 'RefreshControl en FlatList',
          1 => 'No existe en RN',
          2 => 'Solo iOS native',
        ),
        'answer' => 'RefreshControl en FlatList',
        'explanation' => 'UX estándar mobile.',
        'pro_tip' => 'React Query maneja cache + refresh.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'rn-storage',
    'order' => 5,
    'title' => 'Storage y permisos',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'AsyncStorage, SecureStore y cámara.',
    'concepts' => 
    array (
      0 => 'asyncstorage',
      1 => 'securestore',
      2 => 'permissions',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'AsyncStorage',
        'body' => 'Key-value persistente — tokens, preferencias (no datos sensibles grandes).',
        'code' => 'console.log(\'Practica: rn-storage\');',
      ),
      1 => 
      array (
        'heading' => 'SecureStore',
        'body' => 'Expo SecureStore — tokens en keychain/keystore del OS.',
        'code' => 'console.log(\'Practica: rn-storage\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde guardar JWT en mobile?',
        'options' => 
        array (
          0 => 'SecureStore / Keychain',
          1 => 'AsyncStorage sin cifrar siempre OK',
          2 => 'global variable',
        ),
        'answer' => 'SecureStore / Keychain',
        'explanation' => 'Hardware-backed security.',
        'pro_tip' => 'Nunca logs con tokens.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Permiso cámara en Expo?',
        'options' => 
        array (
          0 => 'Camera.requestPermissionsAsync()',
          1 => 'Automático siempre',
          2 => 'Solo Android manifest manual',
        ),
        'answer' => 'Camera.requestPermissionsAsync()',
        'explanation' => 'Runtime permissions iOS/Android.',
        'pro_tip' => 'Explica por qué pides permiso al usuario.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'rn-build',
    'order' => 6,
    'title' => 'Build y publicación',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'EAS Build, App Store y Play Store.',
    'concepts' => 
    array (
      0 => 'eas',
      1 => 'appstore',
      2 => 'playstore',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'EAS Build',
        'body' => 'eas build --platform all — compila en cloud sin Mac para Android.',
        'code' => 'console.log(\'Practica: rn-build\');',
      ),
      1 => 
      array (
        'heading' => 'Stores',
        'body' => 'Review guidelines, screenshots, privacy policy — proceso distinto a web deploy.',
        'code' => 'console.log(\'Practica: rn-build\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Expo EAS sirve para...?',
        'options' => 
        array (
          0 => 'Builds cloud iOS/Android',
          1 => 'Solo web',
          2 => 'Reemplazar React',
        ),
        'answer' => 'Builds cloud iOS/Android',
        'explanation' => 'CI/CD mobile simplificado.',
        'pro_tip' => 'eas submit sube a stores.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿OTA updates sin store review?',
        'options' => 
        array (
          0 => 'Expo Updates (JS bundle)',
          1 => 'Cambiar código nativo',
          2 => 'Siempre store review',
        ),
        'answer' => 'Expo Updates (JS bundle)',
        'explanation' => 'Solo cambios JS, no native modules nuevos.',
        'pro_tip' => 'Versionado semver en app.json.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'rn-native-modules',
    'order' => 7,
    'title' => 'Native modules y bridge',
    'level' => 'Avanzado',
    'minutes' => 40,
    'summary' => 'Cuándo escribir código nativo y cómo exponerlo a JS.',
    'concepts' => 
    array (
      0 => 'native-module',
      1 => 'bridge',
      2 => 'turbo-module',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Native modules',
        'body' => 'Cuando necesitas SDK nativo, sensores o performance extrema, expones APIs Swift/Kotlin a JavaScript.',
        'code' => '// JavaScript side
import { NativeModules } from \'react-native\';

const { DeviceInfoModule } = NativeModules;
const model = await DeviceInfoModule.getModel();',
      ),
      1 => 
      array (
        'heading' => 'New Architecture',
        'body' => 'TurboModules y Fabric reducen overhead del bridge clásico. Expo modules simplifican casos comunes.',
        'code' => '// expo module concept
export async function getBatteryLevel(): Promise<number> {
  return await NativeBattery.getLevelAsync();
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo crear native module?',
        'options' => 
        array (
          0 => 'SDK o API nativa no disponible en JS',
          1 => 'Para todo botón',
          2 => 'Nunca',
        ),
        'answer' => 'SDK o API nativa no disponible en JS',
        'explanation' => 'Solo baja a nativo cuando JS/Expo no cubre el caso.',
        'pro_tip' => 'Primero busca librería mantenida y compatible con New Architecture.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿TurboModules mejoran qué?',
        'options' => 
        array (
          0 => 'Comunicación JS-native',
          1 => 'Base de datos SQL',
          2 => 'CSS grid',
        ),
        'answer' => 'Comunicación JS-native',
        'explanation' => 'Reducen coste del bridge clásico.',
        'pro_tip' => 'Verifica compatibilidad antes de activar New Architecture en prod.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'rn-performance',
    'order' => 8,
    'title' => 'Performance mobile',
    'level' => 'Producción',
    'minutes' => 40,
    'summary' => 'Hermes, Flipper, listas grandes y profiling.',
    'concepts' => 
    array (
      0 => 'hermes',
      1 => 'profiling',
      2 => 'flatlist',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Listas grandes',
        'body' => 'FlatList necesita keys estables, getItemLayout cuando sea posible y renderItem memoizado.',
        'code' => 'const renderItem = useCallback(({ item }) => (
  <ProductRow product={item} />
), []);

<FlatList
  data={products}
  keyExtractor={(item) => item.id}
  renderItem={renderItem}
  initialNumToRender={12}
  windowSize={7}
/>',
      ),
      1 => 
      array (
        'heading' => 'Profiling',
        'body' => 'Hermes + Flipper/React DevTools detectan renders excesivos, JS thread bloqueado y memoria.',
        'code' => '// Anti-pattern: expensive work during render
const sorted = useMemo(
  () => products.toSorted((a, b) => a.price - b.price),
  [products]
);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué memoizar renderItem?',
        'options' => 
        array (
          0 => 'Evita renders innecesarios',
          1 => 'Abre cámara',
          2 => 'Compila nativo',
        ),
        'answer' => 'Evita renders innecesarios',
        'explanation' => 'Referencias estables ayudan a FlatList y filas memoizadas.',
        'pro_tip' => 'No optimices a ciegas: mide con profiler.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Hermes es?',
        'options' => 
        array (
          0 => 'Motor JavaScript optimizado para RN',
          1 => 'Base de datos',
          2 => 'Servicio push',
        ),
        'answer' => 'Motor JavaScript optimizado para RN',
        'explanation' => 'Mejora startup y reduce memoria en muchas apps RN.',
        'pro_tip' => 'Mide startup time y memory después de activarlo.',
      ),
    ),
  ),
);
