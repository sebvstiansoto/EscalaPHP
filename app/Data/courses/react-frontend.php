<?php

declare(strict_types=1);

return [
    [
        'slug' => 'rx-jsx',
        'order' => 1,
        'title' => 'JSX y tu primer componente',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'Componentes como funciones que retornan JSX.',
        'concepts' => ['react', 'jsx', 'component'],
        'sections' => [
            ['heading' => '¿Qué es React?', 'body' => 'React construye interfaces con **componentes** reutilizables. Cada componente es una función que retorna JSX (HTML dentro de JS).'],
            ['heading' => 'Un componente', 'body' => 'Nombre en mayúscula, retorna JSX.', 'code' => "function Saludo() {\n  return <h1>Hola React</h1>;\n}"],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué retorna un componente React?',
                'options' => ['JSX', 'Solo strings', 'SQL'],
                'answer' => 'JSX',
                'explanation' => 'JSX mezcla HTML y JavaScript — se compila a llamadas de React.',
                'pro_tip' => 'Los nombres de componentes SIEMPRE empiezan en mayúscula.',
            ],
            [
                'type' => 'js',
                'question' => 'Simula un componente: crea función Saludo que retorne "Hola React" e imprímela con console.log(Saludo())',
                'expected_output' => 'Hola React',
                'hint' => "function Saludo() {\n  return 'Hola React';\n}\nconsole.log(Saludo());",
                'explanation' => 'Un componente es solo una función que devuelve algo para mostrar.',
                'pro_tip' => 'En React real retornarías JSX; aquí practicamos la lógica base.',
            ],
        ],
    ],
    [
        'slug' => 'rx-state',
        'order' => 2,
        'title' => 'Estado con useState',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'useState, props y re-render.',
        'concepts' => ['usestate', 'hook', 'props'],
        'sections' => [
            ['heading' => 'El estado', 'body' => '`useState` guarda datos que cambian. Cuando cambian, React **re-renderiza** el componente.', 'code' => "const [count, setCount] = useState(0);"],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué hook maneja estado local en React?',
                'options' => ['useState', 'useData', 'useVar'],
                'answer' => 'useState',
                'explanation' => '`useState` devuelve el valor y una función para actualizarlo.',
                'pro_tip' => 'Nunca modifiques el estado directamente — usa la función setter.',
            ],
            [
                'type' => 'js',
                'question' => 'Simula estado: let count = 0; súmale 5 e imprime count con console.log',
                'expected_output' => '5',
                'hint' => "let count = 0;\ncount = count + 5;\nconsole.log(count);",
                'explanation' => 'En React usarías setCount(count + 5); aquí ves la lógica.',
                'pro_tip' => 'setState es asíncrono en React — no confíes en el valor inmediato.',
            ],
        ],
    ],
    [
        'slug' => 'rx-router',
        'order' => 3,
        'title' => 'React Router — múltiples páginas',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'SPA con rutas sin recargar la página.',
        'concepts' => ['router', 'spa', 'route'],
        'sections' => [
            ['heading' => 'SPA', 'body' => 'Una **Single Page Application** cambia de vista sin recargar. React Router mapea URLs a componentes.'],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué es una SPA?',
                'options' => ['App que cambia vistas sin recargar', 'Un spa de relajación', 'Una base de datos'],
                'answer' => 'App que cambia vistas sin recargar',
                'explanation' => 'La SPA carga una vez y navega en el cliente — sensación instantánea.',
                'pro_tip' => 'React, Vue y Angular construyen SPAs. Astro las combina con SSG.',
            ],
        ],
    ],
    [
        'slug' => 'rx-api',
        'order' => 4,
        'title' => 'Consumir tu API backend',
        'level' => 'Integración',
        'minutes' => 35,
        'summary' => 'fetch a tu API PHP o Python desde React.',
        'concepts' => ['fetch', 'api', 'json'],
        'sections' => [
            ['heading' => 'El puente frontend-backend', 'body' => 'React usa `fetch()` para pedir datos a tu API (PHP/FastAPI). La API devuelve JSON. Así se conectan los stacks.', 'code' => "fetch('/api/users')\n  .then(r => r.json())\n  .then(data => console.log(data));"],
        ],
        'exercises' => [
            [
                'type' => 'choice',
                'question' => '¿Qué formato devuelve normalmente una API a React?',
                'options' => ['JSON', 'HTML', 'PDF'],
                'answer' => 'JSON',
                'explanation' => 'JSON es universal — React lo consume igual venga de PHP o Python.',
                'pro_tip' => 'Aquí cierras el círculo: backend (PHP/Python) + frontend (React) hablan por JSON.',
            ],
            [
                'type' => 'js',
                'question' => 'Simula parsear una respuesta: const data = JSON.parse(\'{"xp": 100}\'); imprime data.xp',
                'expected_output' => '100',
                'hint' => "const data = JSON.parse('{\"xp\": 100}');\nconsole.log(data.xp);",
                'explanation' => 'JSON.parse convierte texto JSON en objeto JS usable.',
                'pro_tip' => 'fetch().then(r => r.json()) hace esto automáticamente.',
            ],
        ],
    ],
    [
        'slug' => 'rx-effects',
        'order' => 5,
        'title' => 'useEffect y ciclo de vida',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Efectos secundarios: fetch al montar, timers y cleanup.',
        'concepts' => ['useeffect', 'lifecycle', 'cleanup'],
        'sections' => [
            ['heading' => 'useEffect', 'body' => 'Corre código **después** del render: cargar datos, suscribirse a eventos, sincronizar con APIs.', 'code' => "useEffect(() => {\n  fetch('/api/data').then(r => r.json());\n}, []);"],
            ['heading' => 'Array de dependencias', 'body' => '`[]` = solo al montar. `[userId]` = cuando userId cambia. Sin array = cada render (cuidado).'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cuándo corre useEffect con dependencias []?', 'options' => ['Solo al montar el componente', 'En cada render', 'Nunca'], 'answer' => 'Solo al montar el componente', 'explanation' => '[] = efecto de montaje — ideal para fetch inicial.', 'pro_tip' => 'Return una función cleanup para cancelar suscripciones.'],
            ['type' => 'js', 'question' => 'Simula callback: const onMount = () => console.log("mounted"); onMount()', 'expected_output' => 'mounted', 'hint' => 'const onMount = () => console.log("mounted");\nonMount();', 'explanation' => 'useEffect ejecuta lógica similar a onMount.', 'pro_tip' => 'React Strict Mode monta dos veces en dev — no es bug.'],
        ],
    ],
    [
        'slug' => 'rx-forms',
        'order' => 6,
        'title' => 'Formularios controlados',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Inputs ligados al estado, validación y submit.',
        'concepts' => ['controlled', 'forms', 'validation'],
        'sections' => [
            ['heading' => 'Controlled components', 'body' => 'El valor del input vive en `useState`. React controla cada tecla — fuente única de verdad.', 'code' => "const [email, setEmail] = useState('');\n<input value={email} onChange={e => setEmail(e.target.value)} />"],
            ['heading' => 'Submit', 'body' => 'onSubmit con preventDefault() evita recarga. Envías estado al backend con fetch POST.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué es un input controlado?', 'options' => ['Valor sincronizado con state de React', 'Input sin onChange', 'Solo HTML'], 'answer' => 'Valor sincronizado con state de React', 'explanation' => 'value + onChange = patrón controlado.', 'pro_tip' => 'react-hook-form simplifica formularios grandes.'],
            ['type' => 'js', 'question' => 'Simula onChange: let v = ""; v = "test@mail.com"; console.log(v)', 'expected_output' => 'test@mail.com', 'hint' => 'let v = "";\nv = "test@mail.com";\nconsole.log(v);', 'explanation' => 'setEmail actualiza state como esta asignación.', 'pro_tip' => 'Valida en cliente Y servidor — nunca confíes solo en JS.'],
        ],
    ],
    [
        'slug' => 'rx-context',
        'order' => 7,
        'title' => 'Context API',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Compartir estado sin prop drilling.',
        'concepts' => ['context', 'provider', 'prop-drilling'],
        'sections' => [
            ['heading' => 'Prop drilling', 'body' => 'Pasar props por 5 niveles es doloroso. **Context** comparte datos (tema, usuario, idioma) a todo el árbol.'],
            ['heading' => 'createContext + Provider', 'body' => 'Creas contexto, envuelves con Provider, consumes con useContext.', 'code' => "const ThemeContext = createContext('light');\nconst theme = useContext(ThemeContext);"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Para qué sirve React Context?', 'options' => ['Compartir estado global sin pasar props manualmente', 'Reemplazar bases de datos', 'Compilar JSX'], 'answer' => 'Compartir estado global sin pasar props manualmente', 'explanation' => 'Ideal para tema, auth user, locale.', 'pro_tip' => 'Para estado complejo considera Zustand o Redux.'],
            ['type' => 'choice', 'question' => '¿Qué hook consume un Context?', 'options' => ['useContext', 'useState', 'useFetch'], 'answer' => 'useContext', 'explanation' => 'useContext lee el valor del Provider más cercano.', 'pro_tip' => 'No abuses — solo para datos realmente globales.'],
        ],
    ],
    [
        'slug' => 'rx-hooks',
        'order' => 8,
        'title' => 'Custom hooks y useReducer',
        'level' => 'Avanzado',
        'minutes' => 35,
        'summary' => 'Extraer lógica reutilizable y estado complejo.',
        'concepts' => ['custom-hook', 'usereducer', 'reuse'],
        'sections' => [
            ['heading' => 'Custom hooks', 'body' => 'Función `useNombre()` que usa otros hooks — reutilizas lógica entre componentes.', 'code' => "function useCounter() {\n  const [n, setN] = useState(0);\n  return { n, inc: () => setN(n + 1) };\n}"],
            ['heading' => 'useReducer', 'body' => 'Como useState pero con acciones tipadas — útil para carritos, wizards y estado con muchas transiciones.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo debe empezar un custom hook?', 'options' => ['Con "use" (ej. useFetch)', 'Con "get"', 'Con "hook_"'], 'answer' => 'Con "use" (ej. useFetch)', 'explanation' => 'React exige prefijo use para aplicar reglas de hooks.', 'pro_tip' => 'useFetch encapsula loading, error y data.'],
            ['type' => 'js', 'question' => 'Reducer simple: const r = (s,a) => s + a; console.log(r(10, 5))', 'expected_output' => '15', 'hint' => 'const r = (s,a) => s + a;\nconsole.log(r(10, 5));', 'explanation' => 'Reducer recibe estado y acción, devuelve nuevo estado.', 'pro_tip' => 'useReducer({ count: 0 }, reducer) para estado objeto.'],
        ],
    ],
];
