<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'fa-routing',
    'order' => 1,
    'title' => 'Routing avanzado',
    'level' => 'Fundamentos',
    'minutes' => 30,
    'summary' => 'Path params, query, body y métodos HTTP.',
    'concepts' => 
    array (
      0 => 'routing',
      1 => 'path-param',
      2 => 'query',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Tipos en rutas',
        'body' => 'FastAPI valida tipos automáticamente desde anotaciones Python.',
        'code' => '@app.get(\'/users/{user_id}\')
def get_user(user_id: int):
    return {\'id\': user_id}',
      ),
      1 => 
      array (
        'heading' => 'Query y body',
        'body' => 'Parámetros de función = query string. Pydantic model = JSON body en POST.',
        'code' => '@app.get(\'/items/{item_id}\')',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo FastAPI sabe que user_id es entero?',
        'options' => 
        array (
          0 => 'Anotación de tipo Python',
          1 => 'Comentario SQL',
          2 => 'Archivo .ini',
        ),
        'answer' => 'Anotación de tipo Python',
        'explanation' => 'int en la firma → validación y docs automáticas.',
        'pro_tip' => 'Abre /docs — OpenAPI generado sin esfuerzo.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe @app.get con path /items/{item_id}',
        'must_contain' => 
        array (
          0 => '@app.get',
          1 => 'item_id',
        ),
        'hint' => '@app.get(\'/items/{item_id}\')',
        'explanation' => 'Llaves en path definen parámetros dinámicos.',
        'pro_tip' => 'Path(..., description="...") para metadata en docs.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'fa-pydantic',
    'order' => 2,
    'title' => 'Pydantic y validación',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'BaseModel, Field, validators y response models.',
    'concepts' => 
    array (
      0 => 'pydantic',
      1 => 'validation',
      2 => 'basemodel',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'BaseModel',
        'body' => 'Defines esquema de datos con tipos — FastAPI valida request y serializa response.',
        'code' => 'class UserCreate(BaseModel):
    email: str
    age: int = Field(ge=18)',
      ),
      1 => 
      array (
        'heading' => 'Response model',
        'body' => 'response_model=UserOut filtra campos — nunca expongas password_hash.',
        'code' => 'class Item(BaseModel):
    name: str',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué pasa si el JSON no cumple el modelo Pydantic?',
        'options' => 
        array (
          0 => 'HTTP 422 Unprocessable Entity',
          1 => 'Se ignora',
          2 => 'Crash del servidor',
        ),
        'answer' => 'HTTP 422 Unprocessable Entity',
        'explanation' => 'Validación automática con detalle de errores por campo.',
        'pro_tip' => 'Pydantic v2 usa model_validate — más rápido.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe class Item(BaseModel): con name: str',
        'must_contain' => 
        array (
          0 => 'class Item',
          1 => 'BaseModel',
          2 => 'name: str',
        ),
        'hint' => 'class Item(BaseModel):
    name: str',
        'explanation' => 'BaseModel es la base de todos los schemas FastAPI.',
        'pro_tip' => 'EmailStr, HttpUrl son tipos Pydantic listos.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'fa-deps',
    'order' => 3,
    'title' => 'Dependency Injection',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Depends(), sesiones de BD y auth reutilizable.',
    'concepts' => 
    array (
      0 => 'depends',
      1 => 'di',
      2 => 'reuse',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Depends',
        'body' => 'Inyectas dependencias en endpoints — BD, usuario actual, config.',
        'code' => 'def get_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()

@app.get(\'/\')
def read(db: Session = Depends(get_db)): ...',
      ),
      1 => 
      array (
        'heading' => 'Ventaja',
        'body' => 'Misma lógica de auth/BD en 50 endpoints sin copiar-pegar.',
        'code' => 'db: Session = Depends(get_db)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo inyectas una dependencia en FastAPI?',
        'options' => 
        array (
          0 => 'Depends(funcion)',
          1 => 'import global',
          2 => 'new Service()',
        ),
        'answer' => 'Depends(funcion)',
        'explanation' => 'FastAPI resuelve Depends en cada request.',
        'pro_tip' => 'yield en get_db cierra conexión automáticamente.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe Depends(get_db) en un parámetro',
        'must_contain' => 
        array (
          0 => 'Depends',
        ),
        'hint' => 'db: Session = Depends(get_db)',
        'explanation' => 'Patrón estándar para sesiones SQLAlchemy.',
        'pro_tip' => 'Dependencies anidadas para permisos compuestos.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'fa-db',
    'order' => 4,
    'title' => 'SQLAlchemy y persistencia',
    'level' => 'Datos',
    'minutes' => 40,
    'summary' => 'Models, sessions, queries y relaciones.',
    'concepts' => 
    array (
      0 => 'sqlalchemy',
      1 => 'orm',
      2 => 'session',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SQLAlchemy ORM',
        'body' => 'Modelos Python ↔ tablas SQL. Similar a Eloquent en Laravel.',
        'code' => 'class User(Base):
    __tablename__ = \'users\'
    id = Column(Integer, primary_key=True)',
      ),
      1 => 
      array (
        'heading' => 'CRUD',
        'body' => 'db.add(), db.commit(), db.query(User).filter(...).first()',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'fa-db\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué ORM usa típicamente FastAPI?',
        'options' => 
        array (
          0 => 'SQLAlchemy',
          1 => 'Eloquent',
          2 => 'Mongoose',
        ),
        'answer' => 'SQLAlchemy',
        'explanation' => 'SQLAlchemy 2.0 con async es el estándar moderno.',
        'pro_tip' => 'Tortoise ORM y SQLModel son alternativas tipadas.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuándo persistes cambios en SQLAlchemy?',
        'options' => 
        array (
          0 => 'db.commit()',
          1 => 'db.save()',
          2 => 'Automático siempre',
        ),
        'answer' => 'db.commit()',
        'explanation' => 'add() prepara; commit() escribe en BD.',
        'pro_tip' => 'Alembic migra esquema — como artisan migrate.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'fa-auth',
    'order' => 5,
    'title' => 'OAuth2 y JWT',
    'level' => 'Seguridad',
    'minutes' => 35,
    'summary' => 'Tokens, password hashing y rutas protegidas.',
    'concepts' => 
    array (
      0 => 'jwt',
      1 => 'oauth2',
      2 => 'bcrypt',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'OAuth2PasswordBearer',
        'body' => 'FastAPI incluye utilidades para login con username/password y tokens JWT.',
        'code' => 'oauth2 = OAuth2PasswordBearer(tokenUrl=\'token\')

def get_current_user(token: str = Depends(oauth2)): ...',
      ),
      1 => 
      array (
        'heading' => 'Hashing',
        'body' => 'passlib + bcrypt para passwords — nunca guardes texto plano.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'fa-auth\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Dónde deben ir las contraseñas en la BD?',
        'options' => 
        array (
          0 => 'Hash bcrypt/argon2',
          1 => 'Texto plano',
          2 => 'Base64',
        ),
        'answer' => 'Hash bcrypt/argon2',
        'explanation' => 'Hash irreversible — verify compara sin desencriptar.',
        'pro_tip' => 'Curso seguridad web profundiza hashing.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué header lleva el JWT del cliente?',
        'options' => 
        array (
          0 => 'Authorization: Bearer <token>',
          1 => 'X-JWT',
          2 => 'Cookie solo',
        ),
        'answer' => 'Authorization: Bearer <token>',
        'explanation' => 'Estándar para APIs stateless.',
        'pro_tip' => 'Tokens cortos + refresh tokens en apps serias.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'fa-testing',
    'order' => 6,
    'title' => 'Tests y deploy',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'TestClient, Docker y variables de entorno.',
    'concepts' => 
    array (
      0 => 'testclient',
      1 => 'docker',
      2 => 'env',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'TestClient',
        'body' => 'from fastapi.testclient import TestClient — pruebas HTTP sin levantar servidor.',
        'code' => 'client = TestClient(app)
response = client.get(\'/\')
assert response.status_code == 200',
      ),
      1 => 
      array (
        'heading' => 'Deploy',
        'body' => 'Docker + uvicorn/gunicorn + .env. Mismo patrón que Python deploy del curso base.',
        'code' => 'client = TestClient(app)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Cómo pruebas endpoints FastAPI en pytest?',
        'options' => 
        array (
          0 => 'TestClient',
          1 => 'curl manual solo',
          2 => 'Postman obligatorio',
        ),
        'answer' => 'TestClient',
        'explanation' => 'TestClient simula requests en memoria — rápido en CI.',
        'pro_tip' => 'override_dependencies mockea BD en tests.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe TestClient(app)',
        'must_contain' => 
        array (
          0 => 'TestClient',
        ),
        'hint' => 'client = TestClient(app)',
        'explanation' => 'Una línea y ya tienes cliente HTTP de test.',
        'pro_tip' => 'Integra en GitHub Actions del curso CI/CD.',
      ),
    ),
  ),
  array (
    'slug' => 'fa-background',
    'order' => 7,
    'title' => 'Background tasks y WebSockets',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Tasks async, websockets y streaming.',
    'concepts' => 
    array (
      0 => 'background',
      1 => 'websocket',
      2 => 'streaming',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'BackgroundTasks',
        'body' => 'Envía email después de response — no bloquees al cliente. Para heavy work usa Celery/RQ.',
        'code' => 'from fastapi import BackgroundTasks

def send_email(to: str):
    ...

@app.post("/signup")
async def signup(bg: BackgroundTasks):
    bg.add_task(send_email, "user@test.com")
    return {"ok": True}',
      ),
      1 => 
      array (
        'heading' => 'WebSockets',
        'body' => '@app.websocket("/ws") — chat, live updates — curso websockets-realtime profundiza.',
        'code' => '@app.websocket("/ws")
async def websocket_endpoint(websocket: WebSocket):
    await websocket.accept()
    await websocket.send_json({"msg": "connected"})',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿BackgroundTasks vs Celery?',
        'options' => 
        array (
          0 => 'BG light same process; Celery distributed heavy',
          1 => 'Same always',
          2 => 'BG for ML only',
        ),
        'answer' => 'BG light same process; Celery distributed heavy',
        'explanation' => 'Choose by scale and retry needs.',
        'pro_tip' => 'Curso mensajeria-colas patterns.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe BackgroundTasks',
        'must_contain' => 
        array (
          0 => 'BackgroundTasks',
        ),
        'hint' => 'bg: BackgroundTasks',
        'explanation' => 'Injected by FastAPI DI.',
        'pro_tip' => 'StreamingResponse for SSE LLM tokens.',
      ),
    ),
  ),
  array (
    'slug' => 'fa-openapi',
    'order' => 8,
    'title' => 'OpenAPI y documentación',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Swagger auto, tags y export spec.',
    'concepts' => 
    array (
      0 => 'openapi',
      1 => 'swagger',
      2 => 'tags',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Auto docs',
        'body' => 'FastAPI genera OpenAPI 3 y Swagger UI en /docs — response_model tipa salida JSON.',
        'code' => 'app = FastAPI(title="Mi API", version="1.0.0")

@app.get("/users", tags=["users"], response_model=list[UserOut])
async def list_users():
    ...',
      ),
      1 => 
      array (
        'heading' => 'Export',
        'body' => 'app.openapi() JSON — commit openapi.json CI — curso openapi-documentacion profundiza contract-first.',
        'code' => 'import json
spec = app.openapi()
open("openapi.json", "w").write(json.dumps(spec, indent=2))',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿FastAPI docs URL default?',
        'options' => 
        array (
          0 => '/docs',
          1 => '/swagger only manual',
          2 => '/api/doc',
        ),
        'answer' => '/docs',
        'explanation' => 'Swagger UI interactive.',
        'pro_tip' => 'Disable /docs in prod or auth protect.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿response_model purpose?',
        'options' => 
        array (
          0 => 'Validate filter serialize response',
          1 => 'CSS only',
          2 => 'Database model',
        ),
        'answer' => 'Validate filter serialize response',
        'explanation' => 'Hide internal fields from API.',
        'pro_tip' => 'Pydantic v2 model_config from_attributes ORM.',
      ),
    ),
  ),
);
