<?php

declare(strict_types=1);

$cat = 'python';

return [
    ['slug' => 'python', 'term' => 'Python', 'category' => $cat, 'definition' => 'Lenguaje versátil para backend, datos, automatización y scripting. Sintaxis clara y legible.'],
    ['slug' => 'print', 'term' => 'print()', 'category' => $cat, 'definition' => 'Función Python que muestra texto en la consola o salida estándar.'],
    ['slug' => 'venv', 'term' => 'venv', 'category' => $cat, 'definition' => 'Entorno virtual Python aislado para instalar dependencias sin afectar el sistema.'],
    ['slug' => 'pip', 'term' => 'pip', 'category' => $cat, 'definition' => 'Gestor de paquetes de Python. Instala librerías desde PyPI.'],
    ['slug' => 'requirements', 'term' => 'requirements.txt', 'category' => $cat, 'definition' => 'Archivo que lista las dependencias Python y sus versiones para reproducir el entorno.'],
    ['slug' => 'fastapi', 'term' => 'FastAPI', 'category' => $cat, 'definition' => 'Framework Python moderno para APIs rápidas con validación automática y documentación OpenAPI.'],
    ['slug' => 'uvicorn', 'term' => 'Uvicorn', 'category' => $cat, 'definition' => 'Servidor ASGI que ejecuta aplicaciones FastAPI en desarrollo y producción.'],
    ['slug' => 'pydantic', 'term' => 'Pydantic', 'category' => $cat, 'definition' => 'Librería de validación de datos con tipos en Python. Base de FastAPI.'],
    ['slug' => 'basemodel', 'term' => 'BaseModel', 'category' => $cat, 'definition' => 'Clase base de Pydantic para definir esquemas de datos con validación automática.'],
    ['slug' => 'django', 'term' => 'Django', 'category' => $cat, 'definition' => 'Framework Python "batteries included": ORM, admin, auth y mucho más incluido.'],
    ['slug' => 'admin', 'term' => 'Django Admin', 'category' => $cat, 'definition' => 'Panel de administración auto-generado de Django para gestionar datos.'],
    ['slug' => 'gunicorn', 'term' => 'Gunicorn', 'category' => $cat, 'definition' => 'Servidor WSGI de producción para aplicaciones Python (Django, Flask).'],
    ['slug' => 'pytest', 'term' => 'pytest', 'category' => $cat, 'definition' => 'Framework de testing en Python. Tests simples con assert y fixtures potentes.'],
    ['slug' => 'testclient', 'term' => 'TestClient', 'category' => $cat, 'definition' => 'Cliente de prueba de FastAPI/Starlette para testear endpoints sin levantar servidor real.'],
    ['slug' => 'sqlalchemy', 'term' => 'SQLAlchemy', 'category' => $cat, 'definition' => 'ORM y toolkit SQL para Python. Usado con FastAPI para acceso a base de datos.'],
];
