<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'rx-jsx',
    'order' => 1,
    'title' => 'JSX y tu primer componente',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Componentes como funciones que retornan JSX.',
    'concepts' => 
    array (
      0 => 'react',
      1 => 'jsx',
      2 => 'component',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es React?',
        'body' => 'React construye interfaces con **componentes** reutilizables. Cada componente es una función que retorna JSX (HTML dentro de JS).',
        'code' => 'function Saludo() {
  return \'Hola React\';
}
console.log(Saludo());',
      ),
      1 => 
      array (
        'heading' => 'Un componente',
        'body' => 'Nombre en mayúscula, retorna JSX.',
        'code' => 'function Saludo() {
  return <h1>Hola React</h1>;
}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué retorna un componente React?',
        'options' => 
        array (
          0 => 'JSX',
          1 => 'Solo strings',
          2 => 'SQL',
        ),
        'answer' => 'JSX',
        'explanation' => 'JSX mezcla HTML y JavaScript — se compila a llamadas de React.',
        'pro_tip' => 'Los nombres de componentes SIEMPRE empiezan en mayúscula.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Simula un componente: crea función Saludo que retorne "Hola React" e imprímela con console.log(Saludo())',
        'expected_output' => 'Hola React',
        'hint' => 'function Saludo() {
  return \'Hola React\';
}
console.log(Saludo());',
        'explanation' => 'Un componente es solo una función que devuelve algo para mostrar.',
        'pro_tip' => 'En React real retornarías JSX; aquí practicamos la lógica base.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'rx-state',
    'order' => 2,
    'title' => 'Estado con useState',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'useState, props y re-render.',
    'concepts' => 
    array (
      0 => 'usestate',
      1 => 'hook',
      2 => 'props',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'El estado',
        'body' => '`useState` guarda datos que cambian. Cuando cambian, React **re-renderiza** el componente.',
        'code' => 'const [count, setCount] = useState(0);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hook maneja estado local en React?',
        'options' => 
        array (
          0 => 'useState',
          1 => 'useData',
          2 => 'useVar',
        ),
        'answer' => 'useState',
        'explanation' => '`useState` devuelve el valor y una función para actualizarlo.',
        'pro_tip' => 'Nunca modifiques el estado directamente — usa la función setter.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Simula estado: let count = 0; súmale 5 e imprime count con console.log',
        'expected_output' => '5',
        'hint' => 'let count = 0;
count = count + 5;
console.log(count);',
        'explanation' => 'En React usarías setCount(count + 5); aquí ves la lógica.',
        'pro_tip' => 'setState es asíncrono en React — no confíes en el valor inmediato.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'rx-router',
    'order' => 3,
    'title' => 'React Router — múltiples páginas',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'SPA con rutas sin recargar la página.',
    'concepts' => 
    array (
      0 => 'router',
      1 => 'spa',
      2 => 'route',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SPA',
        'body' => 'Una **Single Page Application** cambia de vista sin recargar. React Router mapea URLs a componentes.',
        'code' => 'console.log(\'Practica: rx-router\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es una SPA?',
        'options' => 
        array (
          0 => 'App que cambia vistas sin recargar',
          1 => 'Un spa de relajación',
          2 => 'Una base de datos',
        ),
        'answer' => 'App que cambia vistas sin recargar',
        'explanation' => 'La SPA carga una vez y navega en el cliente — sensación instantánea.',
        'pro_tip' => 'React, Vue y Angular construyen SPAs. Astro las combina con SSG.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'rx-api',
    'order' => 4,
    'title' => 'Consumir tu API backend',
    'level' => 'Integración',
    'minutes' => 35,
    'summary' => 'fetch a tu API PHP o Python desde React.',
    'concepts' => 
    array (
      0 => 'fetch',
      1 => 'api',
      2 => 'json',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'El puente frontend-backend',
        'body' => 'React usa `fetch()` para pedir datos a tu API (PHP/FastAPI). La API devuelve JSON. Así se conectan los stacks.',
        'code' => 'fetch(\'/api/users\')
  .then(r => r.json())
  .then(data => console.log(data));',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué formato devuelve normalmente una API a React?',
        'options' => 
        array (
          0 => 'JSON',
          1 => 'HTML',
          2 => 'PDF',
        ),
        'answer' => 'JSON',
        'explanation' => 'JSON es universal — React lo consume igual venga de PHP o Python.',
        'pro_tip' => 'Aquí cierras el círculo: backend (PHP/Python) + frontend (React) hablan por JSON.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Simula parsear una respuesta: const data = JSON.parse(\'{"xp": 100}\'); imprime data.xp',
        'expected_output' => '100',
        'hint' => 'const data = JSON.parse(\'{"xp": 100}\');
console.log(data.xp);',
        'explanation' => 'JSON.parse convierte texto JSON en objeto JS usable.',
        'pro_tip' => 'fetch().then(r => r.json()) hace esto automáticamente.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'rx-effects',
    'order' => 5,
    'title' => 'useEffect y ciclo de vida',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Efectos secundarios: fetch al montar, timers y cleanup.',
    'concepts' => 
    array (
      0 => 'useeffect',
      1 => 'lifecycle',
      2 => 'cleanup',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'useEffect',
        'body' => 'Corre código **después** del render: cargar datos, suscribirse a eventos, sincronizar con APIs.',
        'code' => 'useEffect(() => {
  fetch(\'/api/data\').then(r => r.json());
}, []);',
      ),
      1 => 
      array (
        'heading' => 'Array de dependencias',
        'body' => '`[]` = solo al montar. `[userId]` = cuando userId cambia. Sin array = cada render (cuidado).',
        'code' => 'const onMount = () => console.log("mounted");\\nonMount();',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo corre useEffect con dependencias []?',
        'options' => 
        array (
          0 => 'Solo al montar el componente',
          1 => 'En cada render',
          2 => 'Nunca',
        ),
        'answer' => 'Solo al montar el componente',
        'explanation' => '[] = efecto de montaje — ideal para fetch inicial.',
        'pro_tip' => 'Return una función cleanup para cancelar suscripciones.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Simula callback: const onMount = () => console.log("mounted"); onMount()',
        'expected_output' => 'mounted',
        'hint' => 'const onMount = () => console.log("mounted");\\nonMount();',
        'explanation' => 'useEffect ejecuta lógica similar a onMount.',
        'pro_tip' => 'React Strict Mode monta dos veces en dev — no es bug.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'rx-forms',
    'order' => 6,
    'title' => 'Formularios controlados',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Inputs ligados al estado, validación y submit.',
    'concepts' => 
    array (
      0 => 'controlled',
      1 => 'forms',
      2 => 'validation',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Controlled components',
        'body' => 'El valor del input vive en `useState`. React controla cada tecla — fuente única de verdad.',
        'code' => 'const [email, setEmail] = useState(\'\');
<input value={email} onChange={e => setEmail(e.target.value)} />',
      ),
      1 => 
      array (
        'heading' => 'Submit',
        'body' => 'onSubmit con preventDefault() evita recarga. Envías estado al backend con fetch POST.',
        'code' => 'let v = "";\\nv = "test@mail.com";\\nconsole.log(v);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es un input controlado?',
        'options' => 
        array (
          0 => 'Valor sincronizado con state de React',
          1 => 'Input sin onChange',
          2 => 'Solo HTML',
        ),
        'answer' => 'Valor sincronizado con state de React',
        'explanation' => 'value + onChange = patrón controlado.',
        'pro_tip' => 'react-hook-form simplifica formularios grandes.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Simula onChange: let v = ""; v = "test@mail.com"; console.log(v)',
        'expected_output' => 'test@mail.com',
        'hint' => 'let v = "";\\nv = "test@mail.com";\\nconsole.log(v);',
        'explanation' => 'setEmail actualiza state como esta asignación.',
        'pro_tip' => 'Valida en cliente Y servidor — nunca confíes solo en JS.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'rx-context',
    'order' => 7,
    'title' => 'Context API',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Compartir estado sin prop drilling.',
    'concepts' => 
    array (
      0 => 'context',
      1 => 'provider',
      2 => 'prop-drilling',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Prop drilling',
        'body' => 'Pasar props por 5 niveles es doloroso. **Context** comparte datos (tema, usuario, idioma) a todo el árbol.',
        'code' => 'console.log(\'Practica: rx-context\');',
      ),
      1 => 
      array (
        'heading' => 'createContext + Provider',
        'body' => 'Creas contexto, envuelves con Provider, consumes con useContext.',
        'code' => 'const ThemeContext = createContext(\'light\');
const theme = useContext(ThemeContext);',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué sirve React Context?',
        'options' => 
        array (
          0 => 'Compartir estado global sin pasar props manualmente',
          1 => 'Reemplazar bases de datos',
          2 => 'Compilar JSX',
        ),
        'answer' => 'Compartir estado global sin pasar props manualmente',
        'explanation' => 'Ideal para tema, auth user, locale.',
        'pro_tip' => 'Para estado complejo considera Zustand o Redux.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hook consume un Context?',
        'options' => 
        array (
          0 => 'useContext',
          1 => 'useState',
          2 => 'useFetch',
        ),
        'answer' => 'useContext',
        'explanation' => 'useContext lee el valor del Provider más cercano.',
        'pro_tip' => 'No abuses — solo para datos realmente globales.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'rx-hooks',
    'order' => 8,
    'title' => 'Custom hooks y useReducer',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Extraer lógica reutilizable y estado complejo.',
    'concepts' => 
    array (
      0 => 'custom-hook',
      1 => 'usereducer',
      2 => 'reuse',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Custom hooks',
        'body' => 'Función `useNombre()` que usa otros hooks — reutilizas lógica entre componentes.',
        'code' => 'function useCounter() {
  const [n, setN] = useState(0);
  return { n, inc: () => setN(n + 1) };
}',
      ),
      1 => 
      array (
        'heading' => 'useReducer',
        'body' => 'Como useState pero con acciones tipadas — útil para carritos, wizards y estado con muchas transiciones.',
        'code' => 'const r = (s,a) => s + a;\\nconsole.log(r(10, 5));',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo debe empezar un custom hook?',
        'options' => 
        array (
          0 => 'Con "use" (ej. useFetch)',
          1 => 'Con "get"',
          2 => 'Con "hook_"',
        ),
        'answer' => 'Con "use" (ej. useFetch)',
        'explanation' => 'React exige prefijo use para aplicar reglas de hooks.',
        'pro_tip' => 'useFetch encapsula loading, error y data.',
      ),
      1 => 
      array (
        'type' => 'js',
        'question' => 'Reducer simple: const r = (s,a) => s + a; console.log(r(10, 5))',
        'expected_output' => '15',
        'hint' => 'const r = (s,a) => s + a;\\nconsole.log(r(10, 5));',
        'explanation' => 'Reducer recibe estado y acción, devuelve nuevo estado.',
        'pro_tip' => 'useReducer({ count: 0 }, reducer) para estado objeto.',
      ),
    ),
  ),
);
