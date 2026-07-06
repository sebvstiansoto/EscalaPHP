<?php

declare(strict_types=1);

return [
    [
        'slug' => 'fa-routing',
        'order' => 1,
        'title' => 'Routing avanzado',
        'level' => 'Fundamentos',
        'minutes' => 30,
        'summary' => 'Path params, query, body y métodos HTTP.',
        'concepts' => ['routing', 'path-param', 'query'],
        'sections' => [
            ['heading' => 'Tipos en rutas', 'body' => 'FastAPI valida tipos automáticamente desde anotaciones Python.', 'code' => "@app.get('/users/{user_id}')\ndef get_user(user_id: int):\n    return {'id': user_id}"],
            ['heading' => 'Query y body', 'body' => 'Parámetros de función = query string. Pydantic model = JSON body en POST.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo FastAPI sabe que user_id es entero?', 'options' => ['Anotación de tipo Python', 'Comentario SQL', 'Archivo .ini'], 'answer' => 'Anotación de tipo Python', 'explanation' => 'int en la firma → validación y docs automáticas.', 'pro_tip' => 'Abre /docs — OpenAPI generado sin esfuerzo.'],
            ['type' => 'contains', 'language' => 'python', 'question' => 'Escribe @app.get con path /items/{item_id}', 'must_contain' => ['@app.get', 'item_id'], 'hint' => "@app.get('/items/{item_id}')", 'explanation' => 'Llaves en path definen parámetros dinámicos.', 'pro_tip' => 'Path(..., description="...") para metadata en docs.'],
        ],
    ],
    [
        'slug' => 'fa-pydantic',
        'order' => 2,
        'title' => 'Pydantic y validación',
        'level' => 'Intermedio',
        'minutes' => 35,
        'summary' => 'BaseModel, Field, validators y response models.',
        'concepts' => ['pydantic', 'validation', 'basemodel'],
        'sections' => [
            ['heading' => 'BaseModel', 'body' => 'Defines esquema de datos con tipos — FastAPI valida request y serializa response.', 'code' => "class UserCreate(BaseModel):\n    email: str\n    age: int = Field(ge=18)"],
            ['heading' => 'Response model', 'body' => 'response_model=UserOut filtra campos — nunca expongas password_hash.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué pasa si el JSON no cumple el modelo Pydantic?', 'options' => ['HTTP 422 Unprocessable Entity', 'Se ignora', 'Crash del servidor'], 'answer' => 'HTTP 422 Unprocessable Entity', 'explanation' => 'Validación automática con detalle de errores por campo.', 'pro_tip' => 'Pydantic v2 usa model_validate — más rápido.'],
            ['type' => 'contains', 'language' => 'python', 'question' => 'Escribe class Item(BaseModel): con name: str', 'must_contain' => ['class Item', 'BaseModel', 'name: str'], 'hint' => "class Item(BaseModel):\n    name: str", 'explanation' => 'BaseModel es la base de todos los schemas FastAPI.', 'pro_tip' => 'EmailStr, HttpUrl son tipos Pydantic listos.'],
        ],
    ],
    [
        'slug' => 'fa-deps',
        'order' => 3,
        'title' => 'Dependency Injection',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Depends(), sesiones de BD y auth reutilizable.',
        'concepts' => ['depends', 'di', 'reuse'],
        'sections' => [
            ['heading' => 'Depends', 'body' => 'Inyectas dependencias en endpoints — BD, usuario actual, config.', 'code' => "def get_db():\n    db = SessionLocal()\n    try:\n        yield db\n    finally:\n        db.close()\n\n@app.get('/')\ndef read(db: Session = Depends(get_db)): ..."],
            ['heading' => 'Ventaja', 'body' => 'Misma lógica de auth/BD en 50 endpoints sin copiar-pegar.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo inyectas una dependencia en FastAPI?', 'options' => ['Depends(funcion)', 'import global', 'new Service()'], 'answer' => 'Depends(funcion)', 'explanation' => 'FastAPI resuelve Depends en cada request.', 'pro_tip' => 'yield en get_db cierra conexión automáticamente.'],
            ['type' => 'contains', 'language' => 'python', 'question' => 'Escribe Depends(get_db) en un parámetro', 'must_contain' => ['Depends'], 'hint' => 'db: Session = Depends(get_db)', 'explanation' => 'Patrón estándar para sesiones SQLAlchemy.', 'pro_tip' => 'Dependencies anidadas para permisos compuestos.'],
        ],
    ],
    [
        'slug' => 'fa-db',
        'order' => 4,
        'title' => 'SQLAlchemy y persistencia',
        'level' => 'Datos',
        'minutes' => 40,
        'summary' => 'Models, sessions, queries y relaciones.',
        'concepts' => ['sqlalchemy', 'orm', 'session'],
        'sections' => [
            ['heading' => 'SQLAlchemy ORM', 'body' => 'Modelos Python ↔ tablas SQL. Similar a Eloquent en Laravel.', 'code' => "class User(Base):\n    __tablename__ = 'users'\n    id = Column(Integer, primary_key=True)"],
            ['heading' => 'CRUD', 'body' => 'db.add(), db.commit(), db.query(User).filter(...).first()'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué ORM usa típicamente FastAPI?', 'options' => ['SQLAlchemy', 'Eloquent', 'Mongoose'], 'answer' => 'SQLAlchemy', 'explanation' => 'SQLAlchemy 2.0 con async es el estándar moderno.', 'pro_tip' => 'Tortoise ORM y SQLModel son alternativas tipadas.'],
            ['type' => 'choice', 'question' => '¿Cuándo persistes cambios en SQLAlchemy?', 'options' => ['db.commit()', 'db.save()', 'Automático siempre'], 'answer' => 'db.commit()', 'explanation' => 'add() prepara; commit() escribe en BD.', 'pro_tip' => 'Alembic migra esquema — como artisan migrate.'],
        ],
    ],
    [
        'slug' => 'fa-auth',
        'order' => 5,
        'title' => 'OAuth2 y JWT',
        'level' => 'Seguridad',
        'minutes' => 35,
        'summary' => 'Tokens, password hashing y rutas protegidas.',
        'concepts' => ['jwt', 'oauth2', 'bcrypt'],
        'sections' => [
            ['heading' => 'OAuth2PasswordBearer', 'body' => 'FastAPI incluye utilidades para login con username/password y tokens JWT.', 'code' => "oauth2 = OAuth2PasswordBearer(tokenUrl='token')\n\ndef get_current_user(token: str = Depends(oauth2)): ..."],
            ['heading' => 'Hashing', 'body' => 'passlib + bcrypt para passwords — nunca guardes texto plano.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Dónde deben ir las contraseñas en la BD?', 'options' => ['Hash bcrypt/argon2', 'Texto plano', 'Base64'], 'answer' => 'Hash bcrypt/argon2', 'explanation' => 'Hash irreversible — verify compara sin desencriptar.', 'pro_tip' => 'Curso seguridad web profundiza hashing.'],
            ['type' => 'choice', 'question' => '¿Qué header lleva el JWT del cliente?', 'options' => ['Authorization: Bearer <token>', 'X-JWT', 'Cookie solo'], 'answer' => 'Authorization: Bearer <token>', 'explanation' => 'Estándar para APIs stateless.', 'pro_tip' => 'Tokens cortos + refresh tokens en apps serias.'],
        ],
    ],
    [
        'slug' => 'fa-testing',
        'order' => 6,
        'title' => 'Tests y deploy',
        'level' => 'Producción',
        'minutes' => 35,
        'summary' => 'TestClient, Docker y variables de entorno.',
        'concepts' => ['testclient', 'docker', 'env'],
        'sections' => [
            ['heading' => 'TestClient', 'body' => 'from fastapi.testclient import TestClient — pruebas HTTP sin levantar servidor.', 'code' => "client = TestClient(app)\nresponse = client.get('/')\nassert response.status_code == 200"],
            ['heading' => 'Deploy', 'body' => 'Docker + uvicorn/gunicorn + .env. Mismo patrón que Python deploy del curso base.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Cómo pruebas endpoints FastAPI en pytest?', 'options' => ['TestClient', 'curl manual solo', 'Postman obligatorio'], 'answer' => 'TestClient', 'explanation' => 'TestClient simula requests en memoria — rápido en CI.', 'pro_tip' => 'override_dependencies mockea BD en tests.'],
            ['type' => 'contains', 'language' => 'python', 'question' => 'Escribe TestClient(app)', 'must_contain' => ['TestClient'], 'hint' => 'client = TestClient(app)', 'explanation' => 'Una línea y ya tienes cliente HTTP de test.', 'pro_tip' => 'Integra en GitHub Actions del curso CI/CD.'],
        ],
    ],
];
