<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'dj-intro',
    'order' => 1,
    'title' => 'Django REST Framework',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'DRF sobre Django — APIs profesionales en Python.',
    'concepts' => 
    array (
      0 => 'drf',
      1 => 'django',
      2 => 'api',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'DRF',
        'body' => '**Django REST Framework** añade serializers, viewsets y browsable API a Django.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-intro\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Cuándo',
        'body' => 'Producto con admin Django + API móvil/SPA — un solo backend Python.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-intro\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿DRF es...?',
        'options' => 
        array (
          0 => 'Extensión de Django para APIs REST',
          1 => 'Reemplazo de Django',
          2 => 'ORM diferente',
        ),
        'answer' => 'Extensión de Django para APIs REST',
        'explanation' => 'pip install djangorestframework',
        'pro_tip' => 'FastAPI para API pura; DRF para ecosistema Django completo.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Instalar DRF?',
        'options' => 
        array (
          0 => 'pip install djangorestframework',
          1 => 'composer require',
          2 => 'npm install drf',
        ),
        'answer' => 'pip install djangorestframework',
        'explanation' => 'Añadir a INSTALLED_APPS en settings.',
        'pro_tip' => 'Browsable API en /api/ para debug en dev.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'dj-serializers',
    'order' => 2,
    'title' => 'Serializers',
    'level' => 'Core',
    'minutes' => 35,
    'summary' => 'ModelSerializer, validación y nested data.',
    'concepts' => 
    array (
      0 => 'serializer',
      1 => 'validation',
      2 => 'modelserializer',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Serializer',
        'body' => 'Convierte modelos Django ↔ JSON. Valida input como Pydantic en FastAPI.',
        'code' => 'class UserSerializer(serializers.ModelSerializer):
    class Meta:
        model = User
        fields = [\'id\', \'email\', \'name\']',
      ),
      1 => 
      array (
        'heading' => 'Validación',
        'body' => 'validate_email(), is_valid(), errors — rechaza datos malos con 400.',
        'code' => 'class Meta:\\n    model = User\\n    fields = [...]',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Equivalente DRF a Pydantic?',
        'options' => 
        array (
          0 => 'Serializer',
          1 => 'Template',
          2 => 'Middleware',
        ),
        'answer' => 'Serializer',
        'explanation' => 'Capa de validación y serialización.',
        'pro_tip' => 'read_only_fields para id y timestamps.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe class Meta: con model y fields',
        'must_contain' => 
        array (
          0 => 'class Meta',
          1 => 'model',
          2 => 'fields',
        ),
        'hint' => 'class Meta:\\n    model = User\\n    fields = [...]',
        'explanation' => 'ModelSerializer genera campos del modelo.',
        'pro_tip' => 'exclude para omitir password_hash.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'dj-viewsets',
    'order' => 3,
    'title' => 'ViewSets y Routers',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'CRUD automático con ModelViewSet.',
    'concepts' => 
    array (
      0 => 'viewset',
      1 => 'router',
      2 => 'crud',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'ViewSet',
        'body' => 'class ProductViewSet(viewsets.ModelViewSet): queryset + serializer_class = CRUD completo.',
        'code' => 'router.register(r\'products\', ProductViewSet)
# GET/POST /products/, GET/PUT/DELETE /products/{id}/',
      ),
      1 => 
      array (
        'heading' => 'Router',
        'body' => 'DefaultRouter genera URLs REST estándar — menos boilerplate.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-viewsets\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿ModelViewSet proporciona...?',
        'options' => 
        array (
          0 => 'list, create, retrieve, update, destroy',
          1 => 'Solo HTML',
          2 => 'Solo admin',
        ),
        'answer' => 'list, create, retrieve, update, destroy',
        'explanation' => 'CRUD HTTP completo.',
        'pro_tip' => 'permission_classes en ViewSet controla acceso.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Router.register hace...?',
        'options' => 
        array (
          0 => 'Registra rutas REST para el ViewSet',
          1 => 'Crea migración',
          2 => 'Compila Python',
        ),
        'answer' => 'Registra rutas REST para el ViewSet',
        'explanation' => 'urlpatterns += router.urls',
        'pro_tip' => 'basename único por recurso.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'dj-auth',
    'order' => 4,
    'title' => 'Autenticación API',
    'level' => 'Seguridad',
    'minutes' => 30,
    'summary' => 'Token, Session y JWT con DRF.',
    'concepts' => 
    array (
      0 => 'token',
      1 => 'authentication',
      2 => 'permission',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Auth',
        'body' => 'TokenAuthentication, SessionAuthentication, JWT (simplejwt).',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-auth\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Permissions',
        'body' => 'IsAuthenticated, IsAdminUser, custom BasePermission.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-auth\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Header típico Token auth DRF?',
        'options' => 
        array (
          0 => 'Authorization: Token <key>',
          1 => 'X-PHP-Auth',
          2 => 'Cookie only',
        ),
        'answer' => 'Authorization: Token <key>',
        'explanation' => 'Token en DB o JWT según paquete.',
        'pro_tip' => 'JWT mejor para SPAs stateless.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Permission exige usuario logueado?',
        'options' => 
        array (
          0 => 'IsAuthenticated',
          1 => 'AllowAny',
          2 => 'IsAnonymous',
        ),
        'answer' => 'IsAuthenticated',
        'explanation' => 'AllowAny es público — cuidado en prod.',
        'pro_tip' => 'Object-level permissions para "solo dueño edita".',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'dj-filters',
    'order' => 5,
    'title' => 'Filtros, paginación y búsqueda',
    'level' => 'API',
    'minutes' => 30,
    'summary' => 'django-filter, PageNumberPagination.',
    'concepts' => 
    array (
      0 => 'filter',
      1 => 'pagination',
      2 => 'search',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Filtros',
        'body' => '?category=books&ordering=-price — django-filter backends.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-filters\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Paginación',
        'body' => 'DEFAULT_PAGINATION_CLASS evita devolver 100k filas de golpe.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-filters\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué paginar APIs?',
        'options' => 
        array (
          0 => 'Rendimiento y UX — no cargar todo',
          1 => 'Obligatorio por HTTP',
          2 => 'Solo decoración',
        ),
        'answer' => 'Rendimiento y UX — no cargar todo',
        'explanation' => '?page=2&page_size=20 patrón estándar.',
        'pro_tip' => 'Cursor pagination para feeds infinitos.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Paquete filtros avanzados DRF?',
        'options' => 
        array (
          0 => 'django-filter',
          1 => 'react-filter',
          2 => 'sql-filter',
        ),
        'answer' => 'django-filter',
        'explanation' => 'FilterSet declara campos filtrables.',
        'pro_tip' => 'search_fields para ?search= texto.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'dj-deploy',
    'order' => 6,
    'title' => 'Deploy Django + DRF',
    'level' => 'DevOps',
    'minutes' => 30,
    'summary' => 'Gunicorn, Nginx, static files y CORS.',
    'concepts' => 
    array (
      0 => 'gunicorn',
      1 => 'cors',
      2 => 'static',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Stack',
        'body' => 'Gunicorn (WSGI) + Nginx proxy_pass — igual que PHP-FPM pero para Django.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-deploy\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'CORS',
        'body' => 'django-cors-headers permite que React en otro dominio consuma tu API.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'dj-deploy\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Servidor WSGI común Django?',
        'options' => 
        array (
          0 => 'Gunicorn',
          1 => 'uvicorn solo',
          2 => 'php-fpm',
        ),
        'answer' => 'Gunicorn',
        'explanation' => 'uvicorn para ASGI/async Django 4+.',
        'pro_tip' => 'collectstatic antes de deploy.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿CORS necesario cuando...?',
        'options' => 
        array (
          0 => 'Frontend en otro dominio que la API',
          1 => 'Mismo dominio siempre',
          2 => 'Solo mobile',
        ),
        'answer' => 'Frontend en otro dominio que la API',
        'explanation' => 'Browser bloquea cross-origin sin headers.',
        'pro_tip' => 'CORS no reemplaza autenticación.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'django-rest-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de Django REST Framework.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Django REST Framework a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '# Circuit breaker simplificado con tenacity / retry
from tenacity import retry, stop_after_attempt, wait_exponential

@retry(stop=stop_after_attempt(3), wait=wait_exponential(multiplier=0.5))
async def call_payment_api(payload: dict) -> dict:
    async with httpx.AsyncClient(timeout=5.0) as client:
        r = await client.post("/charge", json=payload)
        r.raise_for_status()
        return r.json()',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '# Health check listo para Kubernetes
from fastapi import FastAPI

app = FastAPI()

@app.get("/health")
def health() -> dict:
    return {"status": "ok", "checks": {"db": True, "cache": True}}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'django-rest-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Django REST Framework.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Django REST Framework a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '# Health check listo para Kubernetes
from fastapi import FastAPI

app = FastAPI()

@app.get("/health")
def health() -> dict:
    return {"status": "ok", "checks": {"db": True, "cache": True}}',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '# Health check listo para Kubernetes
from fastapi import FastAPI

app = FastAPI()

@app.get("/health")
def health() -> dict:
    return {"status": "ok", "checks": {"db": True, "cache": True}}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué revisar antes de un deploy a producción?',
        'options' => 
        array (
          0 => 'Health checks, migraciones y rollback plan',
          1 => 'Solo el color del botón',
          2 => 'Nada si compila',
        ),
        'answer' => 'Health checks, migraciones y rollback plan',
        'explanation' => 'Un checklist de deploy evita incidentes evitables.',
        'pro_tip' => 'Automatiza el checklist en CI/CD cuando sea posible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Señal de que necesitas observabilidad mejor?',
        'options' => 
        array (
          0 => 'Descubres fallos por tweets de usuarios',
          1 => 'Todo funciona en local',
          2 => 'Tienes logs estructurados',
        ),
        'answer' => 'Descubres fallos por tweets de usuarios',
        'explanation' => 'Si no tienes métricas/trazas, operas a ciegas.',
        'pro_tip' => 'Define SLI/SLO antes de escalar el equipo.',
      ),
    ),
  ),
);
