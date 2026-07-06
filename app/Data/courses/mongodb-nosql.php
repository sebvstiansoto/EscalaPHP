<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'mg-intro',
    'order' => 1,
    'title' => 'NoSQL y MongoDB',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Documentos vs tablas, cuándo usar MongoDB.',
    'concepts' => 
    array (
      0 => 'nosql',
      1 => 'document',
      2 => 'bson',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Document DB',
        'body' => '**MongoDB** guarda **documentos JSON/BSON** flexibles — ideal para catálogos, logs, contenido variable.',
        'code' => 'console.log(\'Practica: mg-intro\');',
      ),
      1 => 
      array (
        'heading' => 'SQL vs NoSQL',
        'body' => 'Postgres para transacciones y relaciones fuertes; Mongo para esquema flexible y escala horizontal de lectura.',
        'code' => 'console.log(\'Practica: mg-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Unidad básica en MongoDB?',
        'options' => 
        array (
          0 => 'Documento',
          1 => 'Tabla fija',
          2 => 'Solo CSV',
        ),
        'answer' => 'Documento',
        'explanation' => 'Colección de documentos similares.',
        'pro_tip' => 'Un documento ≈ fila JSON con anidación.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo Mongo sobre Postgres?',
        'options' => 
        array (
          0 => 'Esquema muy variable o nested docs',
          1 => 'Transacciones bancarias estrictas',
          2 => 'Solo reportes SQL',
        ),
        'answer' => 'Esquema muy variable o nested docs',
        'explanation' => 'Polyglot persistence: ambos en prod.',
        'pro_tip' => 'Mongo soporta multi-doc transactions desde 4.0.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'mg-crud',
    'order' => 2,
    'title' => 'CRUD básico',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'insertOne, find, updateOne, deleteOne.',
    'concepts' => 
    array (
      0 => 'crud',
      1 => 'collection',
      2 => 'filter',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Operaciones',
        'body' => 'db.users.insertOne({ name: "Ana", email: "a@test.com" })',
        'code' => 'db.products.find({ price: { $gte: 100 } })
db.products.updateOne({ _id: 1 }, { $set: { stock: 50 } })',
      ),
      1 => 
      array (
        'heading' => 'Filtros',
        'body' => 'Operadores: $gt, $in, $regex — query language rica en documentos.',
        'code' => 'db.users.insertOne({ name: "Ana" })',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Buscar email exacto?',
        'options' => 
        array (
          0 => 'find({ email: "x@y.com" })',
          1 => 'SELECT * FROM',
          2 => 'grep email',
        ),
        'answer' => 'find({ email: "x@y.com" })',
        'explanation' => 'Filtro como objeto JSON.',
        'pro_tip' => '_id es ObjectId por defecto.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe insertOne',
        'must_contain' => 
        array (
          0 => 'insertOne',
        ),
        'hint' => 'db.users.insertOne({ name: "Ana" })',
        'explanation' => 'Inserta un documento.',
        'pro_tip' => 'insertMany para batch.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'mg-schema',
    'order' => 3,
    'title' => 'Modelado y Mongoose',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Schemas en Node, validación y refs.',
    'concepts' => 
    array (
      0 => 'mongoose',
      1 => 'schema',
      2 => 'ref',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Mongoose',
        'body' => 'ODM para Node — Schema define tipos y validación aunque Mongo sea schemaless.',
        'code' => 'const userSchema = new Schema({
  email: { type: String, required: true, unique: true },
  posts: [{ type: ObjectId, ref: \'Post\' }]
});',
      ),
      1 => 
      array (
        'heading' => 'Refs',
        'body' => 'populate("posts") — simula join cuando necesitas relaciones.',
        'code' => 'console.log(\'Practica: mg-schema\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Mongoose es...?',
        'options' => 
        array (
          0 => 'ODM para Node.js',
          1 => 'ORM PHP',
          2 => 'Solo CLI',
        ),
        'answer' => 'ODM para Node.js',
        'explanation' => 'Object Document Mapper.',
        'pro_tip' => 'Combina con curso Node.js backend.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿populate() hace...?',
        'options' => 
        array (
          0 => 'Resuelve referencias como join',
          1 => 'Borra colección',
          2 => 'Indexa solo',
        ),
        'answer' => 'Resuelve referencias como join',
        'explanation' => 'Trae documentos referenciados.',
        'pro_tip' => '$lookup en aggregation es join nativo.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'mg-aggregation',
    'order' => 4,
    'title' => 'Aggregation pipeline',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => '$match, $group, $lookup y analytics.',
    'concepts' => 
    array (
      0 => 'aggregation',
      1 => 'pipeline',
      2 => 'group',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pipeline',
        'body' => 'Stages encadenados: $match → $group → $sort — como SQL GROUP BY pero en documentos.',
        'code' => 'console.log(\'Practica: mg-aggregation\');',
      ),
      1 => 
      array (
        'heading' => '$lookup',
        'body' => 'Join entre colecciones en el pipeline — poderoso para reportes.',
        'code' => 'console.log(\'Practica: mg-aggregation\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Equivalente WHERE en pipeline?',
        'options' => 
        array (
          0 => '$match',
          1 => '$where only',
          2 => '$filter SQL',
        ),
        'answer' => '$match',
        'explanation' => 'Primer stage típico — reduce documentos.',
        'pro_tip' => 'Índices en campos de $match.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿$group agrupa por...?',
        'options' => 
        array (
          0 => '_id field',
          1 => 'Solo _id automático',
          2 => 'No agrupa',
        ),
        'answer' => '_id field',
        'explanation' => '_id: "$category" agrupa por categoría.',
        'pro_tip' => '$sum, $avg en acumuladores.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'mg-indexes',
    'order' => 5,
    'title' => 'Índices y rendimiento',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'createIndex, compound indexes y explain.',
    'concepts' => 
    array (
      0 => 'index',
      1 => 'compound',
      2 => 'explain',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Índices',
        'body' => 'db.users.createIndex({ email: 1 }, { unique: true }) — sin índice, collection scan lento.',
        'code' => 'console.log(\'Practica: mg-indexes\');',
      ),
      1 => 
      array (
        'heading' => 'Explain',
        'body' => 'db.users.find({ email: "x" }).explain("executionStats") — IXSCAN vs COLLSCAN.',
        'code' => 'console.log(\'Practica: mg-indexes\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿COLLSCAN significa...?',
        'options' => 
        array (
          0 => 'Escaneo completo de colección',
          1 => 'Índice usado',
          2 => 'Cache hit',
        ),
        'answer' => 'Escaneo completo de colección',
        'explanation' => 'Malo en colecciones grandes.',
        'pro_tip' => 'Compound index: { a: 1, b: 1 }.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Índice único?',
        'options' => 
        array (
          0 => 'unique: true en createIndex',
          1 => 'Solo en SQL',
          2 => 'Imposible',
        ),
        'answer' => 'unique: true en createIndex',
        'explanation' => 'Como UNIQUE constraint.',
        'pro_tip' => 'TTL index para expirar documentos.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'mg-prod',
    'order' => 6,
    'title' => 'Replica sets y Atlas',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Alta disponibilidad, backups y seguridad.',
    'concepts' => 
    array (
      0 => 'replica-set',
      1 => 'atlas',
      2 => 'backup',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Replica set',
        'body' => 'Primary + secondaries — failover automático si primary cae.',
        'code' => 'console.log(\'Practica: mg-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Atlas',
        'body' => 'MongoDB managed en cloud — similar a RDS para documentos.',
        'code' => 'console.log(\'Practica: mg-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Replica set para qué?',
        'options' => 
        array (
          0 => 'Alta disponibilidad y backups',
          1 => 'Solo dev local',
          2 => 'Reemplazar Redis',
        ),
        'answer' => 'Alta disponibilidad y backups',
        'explanation' => 'Producción siempre con réplicas.',
        'pro_tip' => 'Read preference secondary para analytics.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Auth Mongo en prod?',
        'options' => 
        array (
          0 => 'Usuario + password + TLS',
          1 => 'Sin auth en LAN',
          2 => 'Solo IP',
        ),
        'answer' => 'Usuario + password + TLS',
        'explanation' => 'Nunca Mongo expuesto sin auth.',
        'pro_tip' => 'Network isolation en VPC.',
      ),
    ),
  ),
);
