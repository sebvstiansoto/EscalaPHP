<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'gq-intro',
    'order' => 1,
    'title' => 'GraphQL vs REST',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Un endpoint, queries flexibles y overfetching.',
    'concepts' => 
    array (
      0 => 'graphql',
      1 => 'rest',
      2 => 'schema',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'GraphQL',
        'body' => 'Lenguaje de consulta — el **cliente pide exactamente** los campos que necesita en un POST /graphql.',
        'code' => 'console.log(\'Practica: gq-intro\');',
      ),
      1 => 
      array (
        'heading' => 'vs REST',
        'body' => 'REST = muchos endpoints (/users, /posts). GraphQL = un schema, muchas queries.',
        'code' => 'console.log(\'Practica: gq-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Overfetching en REST?',
        'options' => 
        array (
          0 => 'Recibes más campos de los que usas',
          1 => 'No existe',
          2 => 'Solo en GraphQL',
        ),
        'answer' => 'Recibes más campos de los que usas',
        'explanation' => 'GraphQL pides solo { id, name }.',
        'pro_tip' => 'Underfetching = N+1 requests REST — GraphQL agrupa en una query.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿GraphQL es un lenguaje de...?',
        'options' => 
        array (
          0 => 'Consulta de APIs',
          1 => 'Base de datos',
          2 => 'Estilos CSS',
        ),
        'answer' => 'Consulta de APIs',
        'explanation' => 'Schema define tipos Query y Mutation.',
        'pro_tip' => 'Facebook lo creó — ahora estándar en muchas APIs.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'gq-queries',
    'order' => 2,
    'title' => 'Queries y tipos',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Schema SDL, resolvers y campos anidados.',
    'concepts' => 
    array (
      0 => 'query',
      1 => 'type',
      2 => 'resolver',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Schema',
        'body' => 'type Query { user(id: ID!): User } type User { id: ID! name: String! }',
        'code' => 'query {
  user(id: "1") {
    id
    name
    posts { title }
  }
}',
      ),
      1 => 
      array (
        'heading' => 'Resolver',
        'body' => 'Función que devuelve dato para cada campo — conecta schema con BD.',
        'code' => 'query { user { name } }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Signo ! en ID!?',
        'options' => 
        array (
          0 => 'Campo non-null obligatorio',
          1 => 'Comentario',
          2 => 'Array',
        ),
        'answer' => 'Campo non-null obligatorio',
        'explanation' => 'GraphQL valida en runtime.',
        'pro_tip' => '[User!]! = lista non-null de users non-null.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe query { user { name } }',
        'must_contain' => 
        array (
          0 => 'query',
          1 => 'user',
          2 => 'name',
        ),
        'hint' => 'query { user { name } }',
        'explanation' => 'Sintaxis mínima de consulta.',
        'pro_tip' => 'GraphiQL / Apollo Studio para probar.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'gq-mutations',
    'order' => 3,
    'title' => 'Mutations',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Crear, actualizar y borrar con GraphQL.',
    'concepts' => 
    array (
      0 => 'mutation',
      1 => 'input',
      2 => 'write',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Mutation',
        'body' => 'type Mutation { createUser(input: CreateUserInput!): User! } — escrituras explícitas.',
        'code' => 'mutation {
  createUser(input: { name: "Ana", email: "a@t.com" }) {
    id
    name
  }
}',
      ),
      1 => 
      array (
        'heading' => 'Input types',
        'body' => 'input CreateUserInput { name: String! email: String! } — agrupa argumentos.',
        'code' => 'mutation { createPost(...) { id } }',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Queries vs mutations convención?',
        'options' => 
        array (
          0 => 'Query lee, Mutation escribe',
          1 => 'Son iguales',
          2 => 'Mutation solo GET',
        ),
        'answer' => 'Query lee, Mutation escribe',
        'explanation' => 'Separación semántica — ambos POST HTTP.',
        'pro_tip' => 'Idempotencia no garantizada en mutations.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe mutation { createPost',
        'must_contain' => 
        array (
          0 => 'mutation',
          1 => 'createPost',
        ),
        'hint' => 'mutation { createPost(...) { id } }',
        'explanation' => 'Patrón crear recurso.',
        'pro_tip' => 'Devuelve campos creados para actualizar cache cliente.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'gq-apollo',
    'order' => 4,
    'title' => 'Cliente React con Apollo',
    'level' => 'Frontend',
    'minutes' => 35,
    'summary' => 'useQuery, useMutation y cache.',
    'concepts' => 
    array (
      0 => 'apollo',
      1 => 'usequery',
      2 => 'cache',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Apollo Client',
        'body' => 'useQuery(GET_USERS) — fetch, cache y loading/error states integrados.',
        'code' => 'const { data, loading, error } = useQuery(GET_USERS);
if (loading) return \'...\';
return data.users.map(u => u.name);',
      ),
      1 => 
      array (
        'heading' => 'Cache',
        'body' => 'Apollo normaliza por id — actualizar un user refresca UI automáticamente.',
        'code' => 'console.log(\'Practica: gq-apollo\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Hook Apollo para leer?',
        'options' => 
        array (
          0 => 'useQuery',
          1 => 'useFetch',
          2 => 'useREST',
        ),
        'answer' => 'useQuery',
        'explanation' => 'useMutation para escrituras.',
        'pro_tip' => 'gql tag define queries en .graphql files.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Ventaja cache Apollo?',
        'options' => 
        array (
          0 => 'Menos requests repetidos',
          1 => 'Sin red nunca',
          2 => 'Reemplaza BD',
        ),
        'answer' => 'Menos requests repetidos',
        'explanation' => 'Cache-first o network-only policies.',
        'pro_tip' => 'refetchQueries tras mutation.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'gq-server',
    'order' => 5,
    'title' => 'Servidor GraphQL en Node/PHP',
    'level' => 'Backend',
    'minutes' => 35,
    'summary' => 'Apollo Server, Lighthouse en Laravel.',
    'concepts' => 
    array (
      0 => 'apollo-server',
      1 => 'lighthouse',
      2 => 'server',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Node',
        'body' => '@apollo/server + express — resolvers en JS/TS.',
        'code' => 'console.log(\'Practica: gq-server\');',
      ),
      1 => 
      array (
        'heading' => 'Laravel',
        'body' => 'Lighthouse package — schema.graphql + directives @paginate, @auth.',
        'code' => 'console.log(\'Practica: gq-server\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿GraphQL en Laravel?',
        'options' => 
        array (
          0 => 'Lighthouse',
          1 => 'Blade only',
          2 => 'Eloquent only',
        ),
        'answer' => 'Lighthouse',
        'explanation' => 'Genera resolvers desde Eloquent models.',
        'pro_tip' => 'nuwave/lighthouse en Packagist.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿N+1 problem en GraphQL?',
        'options' => 
        array (
          0 => 'DataLoader / eager loading',
          1 => 'No existe',
          2 => 'Solo REST',
        ),
        'answer' => 'DataLoader / eager loading',
        'explanation' => 'Resolvers naive = query por cada post.user.',
        'pro_tip' => '@with en Lighthouse eager load.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'gq-prod',
    'order' => 6,
    'title' => 'GraphQL en producción',
    'level' => 'Ops',
    'minutes' => 25,
    'summary' => 'Depth limit, rate limit y cuándo NO usar GraphQL.',
    'concepts' => 
    array (
      0 => 'security',
      1 => 'complexity',
      2 => 'tradeoff',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Riesgos',
        'body' => 'Query profunda anidada puede tumbar servidor — **depth limit** y **complexity analysis**.',
        'code' => 'console.log(\'Practica: gq-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Cuándo NO',
        'body' => 'API pública simple, caching CDN agresivo, o equipo sin experiencia — REST puede bastar.',
        'code' => 'console.log(\'Practica: gq-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Ataque query muy anidada?',
        'options' => 
        array (
          0 => 'Limitar profundidad y complejidad',
          1 => 'Abrir todo',
          2 => 'Solo HTTPS',
        ),
        'answer' => 'Limitar profundidad y complejidad',
        'explanation' => 'Protección obligatoria en prod.',
        'pro_tip' => 'Persisted queries en mobile apps.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿GraphQL malo para...?',
        'options' => 
        array (
          0 => 'Cache HTTP simple de recursos estáticos',
          1 => 'Apps móviles con datos variados',
          2 => 'Dashboards con muchos tipos',
        ),
        'answer' => 'Cache HTTP simple de recursos estáticos',
        'explanation' => 'REST + CDN brilla en GET cacheable.',
        'pro_tip' => 'Híbrido REST + GraphQL es válido.',
      ),
    ),
  ),
);
