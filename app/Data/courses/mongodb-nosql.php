<?php

declare(strict_types=1);

return [
    [
        'slug' => 'mg-intro',
        'order' => 1,
        'title' => 'NoSQL y MongoDB',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'Documentos vs tablas, cuándo usar MongoDB.',
        'concepts' => ['nosql', 'document', 'bson'],
        'sections' => [
            ['heading' => 'Document DB', 'body' => '**MongoDB** guarda **documentos JSON/BSON** flexibles — ideal para catálogos, logs, contenido variable.'],
            ['heading' => 'SQL vs NoSQL', 'body' => 'Postgres para transacciones y relaciones fuertes; Mongo para esquema flexible y escala horizontal de lectura.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Unidad básica en MongoDB?', 'options' => ['Documento', 'Tabla fija', 'Solo CSV'], 'answer' => 'Documento', 'explanation' => 'Colección de documentos similares.', 'pro_tip' => 'Un documento ≈ fila JSON con anidación.'],
            ['type' => 'choice', 'question' => '¿Cuándo Mongo sobre Postgres?', 'options' => ['Esquema muy variable o nested docs', 'Transacciones bancarias estrictas', 'Solo reportes SQL'], 'answer' => 'Esquema muy variable o nested docs', 'explanation' => 'Polyglot persistence: ambos en prod.', 'pro_tip' => 'Mongo soporta multi-doc transactions desde 4.0.'],
        ],
    ],
    [
        'slug' => 'mg-crud',
        'order' => 2,
        'title' => 'CRUD básico',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'insertOne, find, updateOne, deleteOne.',
        'concepts' => ['crud', 'collection', 'filter'],
        'sections' => [
            ['heading' => 'Operaciones', 'body' => 'db.users.insertOne({ name: "Ana", email: "a@test.com" })', 'code' => "db.products.find({ price: { \$gte: 100 } })\ndb.products.updateOne({ _id: 1 }, { \$set: { stock: 50 } })"],
            ['heading' => 'Filtros', 'body' => 'Operadores: $gt, $in, $regex — query language rica en documentos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Buscar email exacto?', 'options' => ['find({ email: "x@y.com" })', 'SELECT * FROM', 'grep email'], 'answer' => 'find({ email: "x@y.com" })', 'explanation' => 'Filtro como objeto JSON.', 'pro_tip' => '_id es ObjectId por defecto.'],
            ['type' => 'contains', 'question' => 'Escribe insertOne', 'must_contain' => ['insertOne'], 'hint' => 'db.users.insertOne({ name: "Ana" })', 'explanation' => 'Inserta un documento.', 'pro_tip' => 'insertMany para batch.'],
        ],
    ],
    [
        'slug' => 'mg-schema',
        'order' => 3,
        'title' => 'Modelado y Mongoose',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'Schemas en Node, validación y refs.',
        'concepts' => ['mongoose', 'schema', 'ref'],
        'sections' => [
            ['heading' => 'Mongoose', 'body' => 'ODM para Node — Schema define tipos y validación aunque Mongo sea schemaless.', 'code' => "const userSchema = new Schema({\n  email: { type: String, required: true, unique: true },\n  posts: [{ type: ObjectId, ref: 'Post' }]\n});"],
            ['heading' => 'Refs', 'body' => 'populate("posts") — simula join cuando necesitas relaciones.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Mongoose es...?', 'options' => ['ODM para Node.js', 'ORM PHP', 'Solo CLI'], 'answer' => 'ODM para Node.js', 'explanation' => 'Object Document Mapper.', 'pro_tip' => 'Combina con curso Node.js backend.'],
            ['type' => 'choice', 'question' => '¿populate() hace...?', 'options' => ['Resuelve referencias como join', 'Borra colección', 'Indexa solo'], 'answer' => 'Resuelve referencias como join', 'explanation' => 'Trae documentos referenciados.', 'pro_tip' => '$lookup en aggregation es join nativo.'],
        ],
    ],
    [
        'slug' => 'mg-aggregation',
        'order' => 4,
        'title' => 'Aggregation pipeline',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => '$match, $group, $lookup y analytics.',
        'concepts' => ['aggregation', 'pipeline', 'group'],
        'sections' => [
            ['heading' => 'Pipeline', 'body' => 'Stages encadenados: $match → $group → $sort — como SQL GROUP BY pero en documentos.'],
            ['heading' => '$lookup', 'body' => 'Join entre colecciones en el pipeline — poderoso para reportes.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Equivalente WHERE en pipeline?', 'options' => ['$match', '$where only', '$filter SQL'], 'answer' => '$match', 'explanation' => 'Primer stage típico — reduce documentos.', 'pro_tip' => 'Índices en campos de $match.'],
            ['type' => 'choice', 'question' => '¿$group agrupa por...?', 'options' => ['_id field', 'Solo _id automático', 'No agrupa'], 'answer' => '_id field', 'explanation' => '_id: "$category" agrupa por categoría.', 'pro_tip' => '$sum, $avg en acumuladores.'],
        ],
    ],
    [
        'slug' => 'mg-indexes',
        'order' => 5,
        'title' => 'Índices y rendimiento',
        'level' => 'Producción',
        'minutes' => 35,
        'summary' => 'createIndex, compound indexes y explain.',
        'concepts' => ['index', 'compound', 'explain'],
        'sections' => [
            ['heading' => 'Índices', 'body' => 'db.users.createIndex({ email: 1 }, { unique: true }) — sin índice, collection scan lento.'],
            ['heading' => 'Explain', 'body' => 'db.users.find({ email: "x" }).explain("executionStats") — IXSCAN vs COLLSCAN.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿COLLSCAN significa...?', 'options' => ['Escaneo completo de colección', 'Índice usado', 'Cache hit'], 'answer' => 'Escaneo completo de colección', 'explanation' => 'Malo en colecciones grandes.', 'pro_tip' => 'Compound index: { a: 1, b: 1 }.'],
            ['type' => 'choice', 'question' => '¿Índice único?', 'options' => ['unique: true en createIndex', 'Solo en SQL', 'Imposible'], 'answer' => 'unique: true en createIndex', 'explanation' => 'Como UNIQUE constraint.', 'pro_tip' => 'TTL index para expirar documentos.'],
        ],
    ],
    [
        'slug' => 'mg-prod',
        'order' => 6,
        'title' => 'Replica sets y Atlas',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'Alta disponibilidad, backups y seguridad.',
        'concepts' => ['replica-set', 'atlas', 'backup'],
        'sections' => [
            ['heading' => 'Replica set', 'body' => 'Primary + secondaries — failover automático si primary cae.'],
            ['heading' => 'Atlas', 'body' => 'MongoDB managed en cloud — similar a RDS para documentos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Replica set para qué?', 'options' => ['Alta disponibilidad y backups', 'Solo dev local', 'Reemplazar Redis'], 'answer' => 'Alta disponibilidad y backups', 'explanation' => 'Producción siempre con réplicas.', 'pro_tip' => 'Read preference secondary para analytics.'],
            ['type' => 'choice', 'question' => '¿Auth Mongo en prod?', 'options' => ['Usuario + password + TLS', 'Sin auth en LAN', 'Solo IP'], 'answer' => 'Usuario + password + TLS', 'explanation' => 'Nunca Mongo expuesto sin auth.', 'pro_tip' => 'Network isolation en VPC.'],
        ],
    ],
];
