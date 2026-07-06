<?php

declare(strict_types=1);

return [
    [
        'slug' => 'rn-intro',
        'order' => 1,
        'title' => 'React Native intro',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'Un codebase, iOS y Android.',
        'concepts' => ['react-native', 'expo', 'mobile'],
        'sections' => [
            ['heading' => 'React Native', 'body' => '**React Native** usa React + componentes nativos (View, Text) — no WebView. Un equipo, dos stores.'],
            ['heading' => 'Expo', 'body' => 'Expo simplifica dev: npx create-expo-app, hot reload, builds en cloud.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿React Native renderiza...?', 'options' => ['Componentes nativos reales', 'Solo HTML en WebView', 'Swift puro'], 'answer' => 'Componentes nativos reales', 'explanation' => 'Bridge a UI nativa.', 'pro_tip' => 'Expo Go para probar en device.'],
            ['type' => 'choice', 'question' => '¿Equivalente div en RN?', 'options' => ['<View>', '<div>', '<Container>'], 'answer' => '<View>', 'explanation' => 'View es contenedor layout.', 'pro_tip' => 'Text debe envolver strings.'],
        ],
    ],
    [
        'slug' => 'rn-components',
        'order' => 2,
        'title' => 'Componentes y estilos',
        'level' => 'Fundamentos',
        'minutes' => 35,
        'summary' => 'StyleSheet, Flexbox y TouchableOpacity.',
        'concepts' => ['stylesheet', 'flexbox', 'touchable'],
        'sections' => [
            ['heading' => 'Estilos', 'body' => 'StyleSheet.create — Flexbox por defecto, no CSS completo del browser.', 'code' => "const styles = StyleSheet.create({\n  box: { flex: 1, padding: 16, backgroundColor: '#fff' }\n});"],
            ['heading' => 'Interactividad', 'body' => 'Pressable / TouchableOpacity — onPress en lugar de onClick.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Layout default RN?', 'options' => ['Flexbox column', 'Grid CSS', 'Table'], 'answer' => 'Flexbox column', 'explanation' => 'flexDirection column por defecto.', 'pro_tip' => 'flex: 1 llena espacio disponible.'],
            ['type' => 'contains', 'question' => 'Escribe StyleSheet.create', 'must_contain' => ['StyleSheet.create'], 'hint' => 'StyleSheet.create({ ... })', 'explanation' => 'Estilos optimizados RN.', 'pro_tip' => 'NativeWind = Tailwind en RN.'],
        ],
    ],
    [
        'slug' => 'rn-navigation',
        'order' => 3,
        'title' => 'React Navigation',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Stack, tabs y deep linking.',
        'concepts' => ['navigation', 'stack', 'tabs'],
        'sections' => [
            ['heading' => 'Stack Navigator', 'body' => 'Pantallas apiladas — push/pop como historial mobile.'],
            ['heading' => 'Tab Navigator', 'body' => 'Bottom tabs — patrón estándar en apps consumer.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Lib navegación estándar RN?', 'options' => ['React Navigation', 'React Router DOM', 'Vue Router'], 'answer' => 'React Navigation', 'explanation' => 'Mantenida por comunidad RN.', 'pro_tip' => 'navigation.navigate("Screen", { id: 1 }).'],
            ['type' => 'choice', 'question' => '¿Params entre pantallas?', 'options' => ['route.params', 'query string URL only', 'localStorage'], 'answer' => 'route.params', 'explanation' => 'Pasa datos al navegar.', 'pro_tip' => 'TypeScript types para params.'],
        ],
    ],
    [
        'slug' => 'rn-api',
        'order' => 4,
        'title' => 'APIs y estado',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'fetch, FlatList y loading states.',
        'concepts' => ['flatlist', 'fetch', 'loading'],
        'sections' => [
            ['heading' => 'FlatList', 'body' => 'Lista virtualizada — renderiza solo items visibles, esencial en mobile.'],
            ['heading' => 'API', 'body' => 'fetch + useEffect — mismo patrón que React web, cuidado offline.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿FlatList vs ScrollView + map?', 'options' => ['FlatList virtualiza items', 'Igual performance', 'ScrollView siempre mejor'], 'answer' => 'FlatList virtualiza items', 'explanation' => 'Crítico en listas largas.', 'pro_tip' => 'keyExtractor obligatorio.'],
            ['type' => 'choice', 'question' => '¿Pull to refresh?', 'options' => ['RefreshControl en FlatList', 'No existe en RN', 'Solo iOS native'], 'answer' => 'RefreshControl en FlatList', 'explanation' => 'UX estándar mobile.', 'pro_tip' => 'React Query maneja cache + refresh.'],
        ],
    ],
    [
        'slug' => 'rn-storage',
        'order' => 5,
        'title' => 'Storage y permisos',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'AsyncStorage, SecureStore y cámara.',
        'concepts' => ['asyncstorage', 'securestore', 'permissions'],
        'sections' => [
            ['heading' => 'AsyncStorage', 'body' => 'Key-value persistente — tokens, preferencias (no datos sensibles grandes).'],
            ['heading' => 'SecureStore', 'body' => 'Expo SecureStore — tokens en keychain/keystore del OS.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde guardar JWT en mobile?', 'options' => ['SecureStore / Keychain', 'AsyncStorage sin cifrar siempre OK', 'global variable'], 'answer' => 'SecureStore / Keychain', 'explanation' => 'Hardware-backed security.', 'pro_tip' => 'Nunca logs con tokens.'],
            ['type' => 'choice', 'question' => '¿Permiso cámara en Expo?', 'options' => ['Camera.requestPermissionsAsync()', 'Automático siempre', 'Solo Android manifest manual'], 'answer' => 'Camera.requestPermissionsAsync()', 'explanation' => 'Runtime permissions iOS/Android.', 'pro_tip' => 'Explica por qué pides permiso al usuario.'],
        ],
    ],
    [
        'slug' => 'rn-build',
        'order' => 6,
        'title' => 'Build y publicación',
        'level' => 'Producción',
        'minutes' => 35,
        'summary' => 'EAS Build, App Store y Play Store.',
        'concepts' => ['eas', 'appstore', 'playstore'],
        'sections' => [
            ['heading' => 'EAS Build', 'body' => 'eas build --platform all — compila en cloud sin Mac para Android.'],
            ['heading' => 'Stores', 'body' => 'Review guidelines, screenshots, privacy policy — proceso distinto a web deploy.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Expo EAS sirve para...?', 'options' => ['Builds cloud iOS/Android', 'Solo web', 'Reemplazar React'], 'answer' => 'Builds cloud iOS/Android', 'explanation' => 'CI/CD mobile simplificado.', 'pro_tip' => 'eas submit sube a stores.'],
            ['type' => 'choice', 'question' => '¿OTA updates sin store review?', 'options' => ['Expo Updates (JS bundle)', 'Cambiar código nativo', 'Siempre store review'], 'answer' => 'Expo Updates (JS bundle)', 'explanation' => 'Solo cambios JS, no native modules nuevos.', 'pro_tip' => 'Versionado semver en app.json.'],
        ],
    ],
];
