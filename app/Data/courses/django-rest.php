<?php

declare(strict_types=1);

return [
    [
        'slug' => 'dj-intro',
        'order' => 1,
        'title' => 'Django REST Framework',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'DRF sobre Django — APIs profesionales en Python.',
        'concepts' => ['drf', 'django', 'api'],
        'sections' => [
            ['heading' => 'DRF', 'body' => '**Django REST Framework** añade serializers, viewsets y browsable API a Django.'],
            ['heading' => 'Cuándo', 'body' => 'Producto con admin Django + API móvil/SPA — un solo backend Python.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿DRF es...?', 'options' => ['Extensión de Django para APIs REST', 'Reemplazo de Django', 'ORM diferente'], 'answer' => 'Extensión de Django para APIs REST', 'explanation' => 'pip install djangorestframework', 'pro_tip' => 'FastAPI para API pura; DRF para ecosistema Django completo.'],
            ['type' => 'choice', 'question' => '¿Instalar DRF?', 'options' => ['pip install djangorestframework', 'composer require', 'npm install drf'], 'answer' => 'pip install djangorestframework', 'explanation' => 'Añadir a INSTALLED_APPS en settings.', 'pro_tip' => 'Browsable API en /api/ para debug en dev.'],
        ],
    ],
    [
        'slug' => 'dj-serializers',
        'order' => 2,
        'title' => 'Serializers',
        'level' => 'Core',
        'minutes' => 35,
        'summary' => 'ModelSerializer, validación y nested data.',
        'concepts' => ['serializer', 'validation', 'modelserializer'],
        'sections' => [
            ['heading' => 'Serializer', 'body' => 'Convierte modelos Django ↔ JSON. Valida input como Pydantic en FastAPI.', 'code' => "class UserSerializer(serializers.ModelSerializer):\n    class Meta:\n        model = User\n        fields = ['id', 'email', 'name']"],
            ['heading' => 'Validación', 'body' => 'validate_email(), is_valid(), errors — rechaza datos malos con 400.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Equivalente DRF a Pydantic?', 'options' => ['Serializer', 'Template', 'Middleware'], 'answer' => 'Serializer', 'explanation' => 'Capa de validación y serialización.', 'pro_tip' => 'read_only_fields para id y timestamps.'],
            ['type' => 'contains', 'language' => 'python', 'question' => 'Escribe class Meta: con model y fields', 'must_contain' => ['class Meta', 'model', 'fields'], 'hint' => 'class Meta:\n    model = User\n    fields = [...]', 'explanation' => 'ModelSerializer genera campos del modelo.', 'pro_tip' => 'exclude para omitir password_hash.'],
        ],
    ],
    [
        'slug' => 'dj-viewsets',
        'order' => 3,
        'title' => 'ViewSets y Routers',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'CRUD automático con ModelViewSet.',
        'concepts' => ['viewset', 'router', 'crud'],
        'sections' => [
            ['heading' => 'ViewSet', 'body' => 'class ProductViewSet(viewsets.ModelViewSet): queryset + serializer_class = CRUD completo.', 'code' => "router.register(r'products', ProductViewSet)\n# GET/POST /products/, GET/PUT/DELETE /products/{id}/"],
            ['heading' => 'Router', 'body' => 'DefaultRouter genera URLs REST estándar — menos boilerplate.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿ModelViewSet proporciona...?', 'options' => ['list, create, retrieve, update, destroy', 'Solo HTML', 'Solo admin'], 'answer' => 'list, create, retrieve, update, destroy', 'explanation' => 'CRUD HTTP completo.', 'pro_tip' => 'permission_classes en ViewSet controla acceso.'],
            ['type' => 'choice', 'question' => '¿Router.register hace...?', 'options' => ['Registra rutas REST para el ViewSet', 'Crea migración', 'Compila Python'], 'answer' => 'Registra rutas REST para el ViewSet', 'explanation' => 'urlpatterns += router.urls', 'pro_tip' => 'basename único por recurso.'],
        ],
    ],
    [
        'slug' => 'dj-auth',
        'order' => 4,
        'title' => 'Autenticación API',
        'level' => 'Seguridad',
        'minutes' => 30,
        'summary' => 'Token, Session y JWT con DRF.',
        'concepts' => ['token', 'authentication', 'permission'],
        'sections' => [
            ['heading' => 'Auth', 'body' => 'TokenAuthentication, SessionAuthentication, JWT (simplejwt).'],
            ['heading' => 'Permissions', 'body' => 'IsAuthenticated, IsAdminUser, custom BasePermission.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Header típico Token auth DRF?', 'options' => ['Authorization: Token <key>', 'X-PHP-Auth', 'Cookie only'], 'answer' => 'Authorization: Token <key>', 'explanation' => 'Token en DB o JWT según paquete.', 'pro_tip' => 'JWT mejor para SPAs stateless.'],
            ['type' => 'choice', 'question' => '¿Permission exige usuario logueado?', 'options' => ['IsAuthenticated', 'AllowAny', 'IsAnonymous'], 'answer' => 'IsAuthenticated', 'explanation' => 'AllowAny es público — cuidado en prod.', 'pro_tip' => 'Object-level permissions para "solo dueño edita".'],
        ],
    ],
    [
        'slug' => 'dj-filters',
        'order' => 5,
        'title' => 'Filtros, paginación y búsqueda',
        'level' => 'API',
        'minutes' => 30,
        'summary' => 'django-filter, PageNumberPagination.',
        'concepts' => ['filter', 'pagination', 'search'],
        'sections' => [
            ['heading' => 'Filtros', 'body' => '?category=books&ordering=-price — django-filter backends.'],
            ['heading' => 'Paginación', 'body' => 'DEFAULT_PAGINATION_CLASS evita devolver 100k filas de golpe.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Por qué paginar APIs?', 'options' => ['Rendimiento y UX — no cargar todo', 'Obligatorio por HTTP', 'Solo decoración'], 'answer' => 'Rendimiento y UX — no cargar todo', 'explanation' => '?page=2&page_size=20 patrón estándar.', 'pro_tip' => 'Cursor pagination para feeds infinitos.'],
            ['type' => 'choice', 'question' => '¿Paquete filtros avanzados DRF?', 'options' => ['django-filter', 'react-filter', 'sql-filter'], 'answer' => 'django-filter', 'explanation' => 'FilterSet declara campos filtrables.', 'pro_tip' => 'search_fields para ?search= texto.'],
        ],
    ],
    [
        'slug' => 'dj-deploy',
        'order' => 6,
        'title' => 'Deploy Django + DRF',
        'level' => 'DevOps',
        'minutes' => 30,
        'summary' => 'Gunicorn, Nginx, static files y CORS.',
        'concepts' => ['gunicorn', 'cors', 'static'],
        'sections' => [
            ['heading' => 'Stack', 'body' => 'Gunicorn (WSGI) + Nginx proxy_pass — igual que PHP-FPM pero para Django.'],
            ['heading' => 'CORS', 'body' => 'django-cors-headers permite que React en otro dominio consuma tu API.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Servidor WSGI común Django?', 'options' => ['Gunicorn', 'uvicorn solo', 'php-fpm'], 'answer' => 'Gunicorn', 'explanation' => 'uvicorn para ASGI/async Django 4+.', 'pro_tip' => 'collectstatic antes de deploy.'],
            ['type' => 'choice', 'question' => '¿CORS necesario cuando...?', 'options' => ['Frontend en otro dominio que la API', 'Mismo dominio siempre', 'Solo mobile'], 'answer' => 'Frontend en otro dominio que la API', 'explanation' => 'Browser bloquea cross-origin sin headers.', 'pro_tip' => 'CORS no reemplaza autenticación.'],
        ],
    ],
];
