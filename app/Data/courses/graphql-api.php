<?php

declare(strict_types=1);

return [
    [
        'slug' => 'gq-intro',
        'order' => 1,
        'title' => 'GraphQL vs REST',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'Un endpoint, queries flexibles y overfetching.',
        'concepts' => ['graphql', 'rest', 'schema'],
        'sections' => [
            ['heading' => 'GraphQL', 'body' => 'Lenguaje de consulta — el **cliente pide exactamente** los campos que necesita en un POST /graphql.'],
            ['heading' => 'vs REST', 'body' => 'REST = muchos endpoints (/users, /posts). GraphQL = un schema, muchas queries.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Overfetching en REST?', 'options' => ['Recibes más campos de los que usas', 'No existe', 'Solo en GraphQL'], 'answer' => 'Recibes más campos de los que usas', 'explanation' => 'GraphQL pides solo { id, name }.', 'pro_tip' => 'Underfetching = N+1 requests REST — GraphQL agrupa en una query.'],
            ['type' => 'choice', 'question' => '¿GraphQL es un lenguaje de...?', 'options' => ['Consulta de APIs', 'Base de datos', 'Estilos CSS'], 'answer' => 'Consulta de APIs', 'explanation' => 'Schema define tipos Query y Mutation.', 'pro_tip' => 'Facebook lo creó — ahora estándar en muchas APIs.'],
        ],
    ],
    [
        'slug' => 'gq-queries',
        'order' => 2,
        'title' => 'Queries y tipos',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'Schema SDL, resolvers y campos anidados.',
        'concepts' => ['query', 'type', 'resolver'],
        'sections' => [
            ['heading' => 'Schema', 'body' => 'type Query { user(id: ID!): User } type User { id: ID! name: String! }', 'code' => "query {\n  user(id: \"1\") {\n    id\n    name\n    posts { title }\n  }\n}"],
            ['heading' => 'Resolver', 'body' => 'Función que devuelve dato para cada campo — conecta schema con BD.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Signo ! en ID!?', 'options' => ['Campo non-null obligatorio', 'Comentario', 'Array'], 'answer' => 'Campo non-null obligatorio', 'explanation' => 'GraphQL valida en runtime.', 'pro_tip' => '[User!]! = lista non-null de users non-null.'],
            ['type' => 'contains', 'question' => 'Escribe query { user { name } }', 'must_contain' => ['query', 'user', 'name'], 'hint' => 'query { user { name } }', 'explanation' => 'Sintaxis mínima de consulta.', 'pro_tip' => 'GraphiQL / Apollo Studio para probar.'],
        ],
    ],
    [
        'slug' => 'gq-mutations',
        'order' => 3,
        'title' => 'Mutations',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'Crear, actualizar y borrar con GraphQL.',
        'concepts' => ['mutation', 'input', 'write'],
        'sections' => [
            ['heading' => 'Mutation', 'body' => 'type Mutation { createUser(input: CreateUserInput!): User! } — escrituras explícitas.', 'code' => "mutation {\n  createUser(input: { name: \"Ana\", email: \"a@t.com\" }) {\n    id\n    name\n  }\n}"],
            ['heading' => 'Input types', 'body' => 'input CreateUserInput { name: String! email: String! } — agrupa argumentos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Queries vs mutations convención?', 'options' => ['Query lee, Mutation escribe', 'Son iguales', 'Mutation solo GET'], 'answer' => 'Query lee, Mutation escribe', 'explanation' => 'Separación semántica — ambos POST HTTP.', 'pro_tip' => 'Idempotencia no garantizada en mutations.'],
            ['type' => 'contains', 'question' => 'Escribe mutation { createPost', 'must_contain' => ['mutation', 'createPost'], 'hint' => 'mutation { createPost(...) { id } }', 'explanation' => 'Patrón crear recurso.', 'pro_tip' => 'Devuelve campos creados para actualizar cache cliente.'],
        ],
    ],
    [
        'slug' => 'gq-apollo',
        'order' => 4,
        'title' => 'Cliente React con Apollo',
        'level' => 'Frontend',
        'minutes' => 35,
        'summary' => 'useQuery, useMutation y cache.',
        'concepts' => ['apollo', 'usequery', 'cache'],
        'sections' => [
            ['heading' => 'Apollo Client', 'body' => 'useQuery(GET_USERS) — fetch, cache y loading/error states integrados.', 'code' => "const { data, loading, error } = useQuery(GET_USERS);\nif (loading) return '...';\nreturn data.users.map(u => u.name);"],
            ['heading' => 'Cache', 'body' => 'Apollo normaliza por id — actualizar un user refresca UI automáticamente.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Hook Apollo para leer?', 'options' => ['useQuery', 'useFetch', 'useREST'], 'answer' => 'useQuery', 'explanation' => 'useMutation para escrituras.', 'pro_tip' => 'gql tag define queries en .graphql files.'],
            ['type' => 'choice', 'question' => '¿Ventaja cache Apollo?', 'options' => ['Menos requests repetidos', 'Sin red nunca', 'Reemplaza BD'], 'answer' => 'Menos requests repetidos', 'explanation' => 'Cache-first o network-only policies.', 'pro_tip' => 'refetchQueries tras mutation.'],
        ],
    ],
    [
        'slug' => 'gq-server',
        'order' => 5,
        'title' => 'Servidor GraphQL en Node/PHP',
        'level' => 'Backend',
        'minutes' => 35,
        'summary' => 'Apollo Server, Lighthouse en Laravel.',
        'concepts' => ['apollo-server', 'lighthouse', 'server'],
        'sections' => [
            ['heading' => 'Node', 'body' => '@apollo/server + express — resolvers en JS/TS.'],
            ['heading' => 'Laravel', 'body' => 'Lighthouse package — schema.graphql + directives @paginate, @auth.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿GraphQL en Laravel?', 'options' => ['Lighthouse', 'Blade only', 'Eloquent only'], 'answer' => 'Lighthouse', 'explanation' => 'Genera resolvers desde Eloquent models.', 'pro_tip' => 'nuwave/lighthouse en Packagist.'],
            ['type' => 'choice', 'question' => '¿N+1 problem en GraphQL?', 'options' => ['DataLoader / eager loading', 'No existe', 'Solo REST'], 'answer' => 'DataLoader / eager loading', 'explanation' => 'Resolvers naive = query por cada post.user.', 'pro_tip' => '@with en Lighthouse eager load.'],
        ],
    ],
    [
        'slug' => 'gq-prod',
        'order' => 6,
        'title' => 'GraphQL en producción',
        'level' => 'Ops',
        'minutes' => 25,
        'summary' => 'Depth limit, rate limit y cuándo NO usar GraphQL.',
        'concepts' => ['security', 'complexity', 'tradeoff'],
        'sections' => [
            ['heading' => 'Riesgos', 'body' => 'Query profunda anidada puede tumbar servidor — **depth limit** y **complexity analysis**.'],
            ['heading' => 'Cuándo NO', 'body' => 'API pública simple, caching CDN agresivo, o equipo sin experiencia — REST puede bastar.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Ataque query muy anidada?', 'options' => ['Limitar profundidad y complejidad', 'Abrir todo', 'Solo HTTPS'], 'answer' => 'Limitar profundidad y complejidad', 'explanation' => 'Protección obligatoria en prod.', 'pro_tip' => 'Persisted queries en mobile apps.'],
            ['type' => 'choice', 'question' => '¿GraphQL malo para...?', 'options' => ['Cache HTTP simple de recursos estáticos', 'Apps móviles con datos variados', 'Dashboards con muchos tipos'], 'answer' => 'Cache HTTP simple de recursos estáticos', 'explanation' => 'REST + CDN brilla en GET cacheable.', 'pro_tip' => 'Híbrido REST + GraphQL es válido.'],
        ],
    ],
];
