<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'py-bienvenida',
    'order' => 1,
    'title' => 'Tu primera línea de Python',
    'level' => 'Fundamentos',
    'minutes' => 15,
    'summary' => 'Qué es Python, print() y por qué domina backend y data.',
    'concepts' => 
    array (
      0 => 'python',
      1 => 'print',
      2 => 'interpretado',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => '¿Qué es Python?',
        'body' => 'Python es un lenguaje **interpretado**, legible y usado en backend (FastAPI, Django), data science, automatización y IA.',
        'code' => 'print(\'Aprendiendo Python\')',
      ),
      1 => 
      array (
        'heading' => 'print() — tu primer comando',
        'body' => 'En Python usas `print()` para mostrar texto. No necesitas punto y coma al final.',
        'code' => 'print(\'Hola, Python\')',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Para qué se usa print() en Python?',
        'options' => 
        array (
          0 => 'Mostrar texto en la salida',
          1 => 'Imprimir en una impresora',
          2 => 'Crear variables',
        ),
        'answer' => 'Mostrar texto en la salida',
        'explanation' => '`print()` envía texto a la consola — igual que `echo` en PHP.',
        'pro_tip' => 'FastAPI y Django son frameworks Python para construir APIs y webs a escala.',
      ),
      1 => 
      array (
        'type' => 'code',
        'language' => 'python',
        'question' => 'Escribe código que imprima exactamente: Aprendiendo Python',
        'starter' => 'print(',
        'expected_output' => 'Aprendiendo Python',
        'hint' => 'print(\'Aprendiendo Python\')',
        'explanation' => '¡Primera línea Python ejecutada! Sin `;` al final — una diferencia clave con PHP.',
        'pro_tip' => 'Python prioriza legibilidad. Por eso es ideal para equipos grandes.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'py-variables',
    'order' => 2,
    'title' => 'Variables y tipos',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'Strings, enteros, floats y booleanos sin declarar tipo.',
    'concepts' => 
    array (
      0 => 'variable',
      1 => 'str',
      2 => 'int',
      3 => 'bool',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Asignación simple',
        'body' => 'En Python: `nombre = "Ana"` y `edad = 25`. El tipo se infiere solo.',
        'code' => 'nombre = \'Ana\'
edad = 25
activo = True
print(nombre, edad)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Crea variable precio = 99 y haz print(precio)',
        'must_contain' => 
        array (
          0 => 'precio',
          1 => '99',
          2 => 'print',
        ),
        'hint' => 'precio = 99
print(precio)',
        'explanation' => 'Guardaste y mostraste un valor — el ciclo básico de cualquier programa.',
        'pro_tip' => 'Snake_case (`precio_total`) es la convención Python — no camelCase.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Cuál es un booleano válido en Python?',
        'options' => 
        array (
          0 => 'True',
          1 => 'true',
          2 => 'verdadero',
        ),
        'answer' => 'True',
        'explanation' => 'Python usa `True` y `False` con mayúscula inicial.',
        'pro_tip' => 'Igual que PHP usa `true`/`false` en minúscula — detalle a recordar entre lenguajes.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'py-condiciones',
    'order' => 3,
    'title' => 'Condiciones if/else',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'Decisiones con if, elif, else — la indentación importa.',
    'concepts' => 
    array (
      0 => 'if',
      1 => 'else',
      2 => 'indentacion',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Indentación obligatoria',
        'body' => 'Python usa **espacios** (4) en vez de `{}`. La indentación es parte de la sintaxis.',
        'code' => 'edad = 20
if edad >= 18:
    print(\'ok\')
else:
    print(\'menor\')',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'code',
        'language' => 'python',
        'question' => 'Con edad = 20, imprime "ok" si edad >= 18, si no "menor"',
        'starter' => 'edad = 20
',
        'expected_output' => 'ok',
        'hint' => 'if edad >= 18:
    print(\'ok\')
else:
    print(\'menor\')',
        'explanation' => 'Tomaste una decisión con if/else. La indentación de 4 espacios es obligatoria.',
        'pro_tip' => 'Mezclar tabs y espacios es el error #1 de principiantes en Python.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'py-bucles',
    'order' => 4,
    'title' => 'Bucles for y while',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'Recorrer listas y repetir con while.',
    'concepts' => 
    array (
      0 => 'for',
      1 => 'while',
      2 => 'range',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'for sobre listas',
        'body' => '`for item in items:` recorre cada elemento — similar a foreach en PHP.',
        'code' => 'for letra in [\'a\', \'b\', \'c\']:
    print(letra)',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'code',
        'language' => 'python',
        'question' => 'Imprime los números 1, 2, 3 cada uno en su línea usando un bucle for y range(1, 4)',
        'expected_output' => '1
2
3',
        'hint' => 'for n in range(1, 4):
    print(n)',
        'explanation' => '`range(1, 4)` genera 1, 2, 3. El 4 no se incluye.',
        'pro_tip' => 'range() es muy usado en Python — memoriza que el final es exclusivo.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'py-funciones',
    'order' => 5,
    'title' => 'Funciones con def',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'Define funciones reutilizables con def y return.',
    'concepts' => 
    array (
      0 => 'def',
      1 => 'return',
      2 => 'parametros',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'def nombre():',
        'body' => 'Las funciones se definen con `def`, indentación en el cuerpo, y `return` para devolver valores.',
        'code' => 'def duplicar(n):
    return n * 2

print(duplicar(21))',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Define def duplicar(n) que retorne n*2 y haz print(duplicar(21))',
        'must_contain' => 
        array (
          0 => 'def duplicar',
          1 => 'return',
          2 => 'print',
        ),
        'hint' => 'def duplicar(n):
    return n * 2
print(duplicar(21))',
        'explanation' => 'Función reutilizable creada. En FastAPI/Django organizarás lógica en funciones y clases.',
        'pro_tip' => 'Una función = una responsabilidad. Igual que en PHP.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'py-estructuras',
    'order' => 6,
    'title' => 'Listas y diccionarios',
    'level' => 'Datos',
    'minutes' => 25,
    'summary' => 'Las estructuras de datos más usadas en Python.',
    'concepts' => 
    array (
      0 => 'list',
      1 => 'dict',
      2 => 'json',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'list y dict',
        'body' => 'Listas: `[1, 2, 3]`. Diccionarios: `{"nombre": "Ana", "edad": 25}` — clave/valor como arrays asociativos PHP.',
        'code' => 'user = {\'nombre\': \'Ana\', \'xp\': 100}
print(user[\'nombre\'])',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'code',
        'language' => 'python',
        'question' => 'Crea d = {"lang": "python"} y print(d["lang"])',
        'expected_output' => 'python',
        'hint' => 'd = {"lang": "python"}\\nprint(d["lang"])',
        'explanation' => 'Los dicts son la base de JSON en Python — APIs usan esto constantemente.',
        'pro_tip' => 'FastAPI convierte dicts Python a JSON automáticamente.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'py-venv',
    'order' => 7,
    'title' => 'Entornos virtuales y pip',
    'level' => 'Ecosistema',
    'minutes' => 25,
    'summary' => 'venv, pip install y requirements.txt — el Composer de Python.',
    'concepts' => 
    array (
      0 => 'venv',
      1 => 'pip',
      2 => 'requirements',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'venv + pip',
        'body' => '`python -m venv .venv` crea entorno aislado. `pip install fastapi` instala paquetes. `requirements.txt` fija versiones.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'py-venv\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando instala paquetes en Python?',
        'options' => 
        array (
          0 => 'pip install',
          1 => 'npm install',
          2 => 'composer require',
        ),
        'answer' => 'pip install',
        'explanation' => '**pip** es el gestor de paquetes Python — equivalente a Composer/npm.',
        'pro_tip' => 'Siempre usa venv por proyecto. Nunca instales global sin saber.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué archivo lista dependencias Python para producción?',
        'options' => 
        array (
          0 => 'requirements.txt',
          1 => 'package.json',
          2 => 'composer.json',
        ),
        'answer' => 'requirements.txt',
        'explanation' => 'requirements.txt = lista de paquetes con versiones.',
        'pro_tip' => 'En Docker: `pip install -r requirements.txt`',
      ),
    ),
  ),
  7 => 
  array (
    'slug' => 'py-fastapi',
    'order' => 8,
    'title' => 'FastAPI: tu primera API',
    'level' => 'Framework',
    'minutes' => 35,
    'summary' => 'Rutas, JSON automático y documentación OpenAPI.',
    'concepts' => 
    array (
      0 => 'fastapi',
      1 => 'api',
      2 => 'uvicorn',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'FastAPI en 10 líneas',
        'body' => 'FastAPI es el framework Python moderno para APIs — rápido, tipado, docs automáticas en `/docs`.',
        'code' => 'from fastapi import FastAPI
app = FastAPI()

@app.get(\'/\')
def root():
    return {\'msg\': \'Hola API\'}',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué devuelve FastAPI en un endpoint típico?',
        'options' => 
        array (
          0 => 'JSON',
          1 => 'HTML obligatorio',
          2 => 'Solo XML',
        ),
        'answer' => 'JSON',
        'explanation' => 'FastAPI serializa dicts Python a JSON — igual que APIs REST en PHP.',
        'pro_tip' => 'Un frontend React consume la misma API JSON sin importar si el backend es PHP o Python.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué servidor corre apps FastAPI en desarrollo?',
        'options' => 
        array (
          0 => 'uvicorn',
          1 => 'apache',
          2 => 'nginx',
        ),
        'answer' => 'uvicorn',
        'explanation' => '**uvicorn** es el servidor ASGI estándar para FastAPI.',
        'pro_tip' => 'Comando típico: `uvicorn main:app --reload`',
      ),
    ),
  ),
  8 => 
  array (
    'slug' => 'py-django',
    'order' => 9,
    'title' => 'Django: el framework completo',
    'level' => 'Framework',
    'minutes' => 40,
    'summary' => 'Admin, ORM, migraciones y Django REST Framework.',
    'concepts' => 
    array (
      0 => 'django',
      1 => 'orm',
      2 => 'admin',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Django vs FastAPI',
        'body' => '**FastAPI** = APIs ultrarrápidas. **Django** = todo en uno (admin, auth, ORM, templates). Instagram y Pinterest usaron Django.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'py-django\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Estructura Django',
        'body' => 'Proyecto → apps → models.py, views.py, urls.py. El admin genera CRUD automático desde modelos.',
        'code' => '# models.py
class Product(models.Model):
    name = models.CharField(max_length=100)
    price = models.IntegerField()',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué incluye Django out-of-the-box que FastAPI no?',
        'options' => 
        array (
          0 => 'Admin panel y ORM completo',
          1 => 'Solo rutas HTTP',
          2 => 'Compilador de C',
        ),
        'answer' => 'Admin panel y ORM completo',
        'explanation' => 'Django trae admin, auth, ORM y migraciones — ideal para MVPs rápidos.',
        'pro_tip' => 'Muchas startups empiezan con Django y migran partes a microservicios después.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando crea un proyecto Django?',
        'options' => 
        array (
          0 => 'django-admin startproject',
          1 => 'pip install django',
          2 => 'python new django',
        ),
        'answer' => 'django-admin startproject',
        'explanation' => '**startproject** crea la estructura base del proyecto.',
        'pro_tip' => 'Luego `python manage.py startapp` para cada módulo de negocio.',
      ),
    ),
  ),
  9 => 
  array (
    'slug' => 'py-deploy',
    'order' => 10,
    'title' => 'Desplegar Python en producción',
    'level' => 'DevOps',
    'minutes' => 35,
    'summary' => 'Gunicorn, uvicorn workers, Docker y variables de entorno.',
    'concepts' => 
    array (
      0 => 'gunicorn',
      1 => 'docker',
      2 => 'production',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'De local a producción',
        'body' => 'En desarrollo usas `uvicorn --reload`. En producción: **Gunicorn** + workers, detrás de Nginx, en Docker.',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'py-deploy\'}

print(handler())',
      ),
      1 => 
      array (
        'heading' => 'Dockerfile Python',
        'body' => '```dockerfile\\nFROM python:3.12-slim\\nWORKDIR /app\\nCOPY requirements.txt .\\nRUN pip install -r requirements.txt\\nCOPY . .\\nCMD ["uvicorn", "main:app", "--host", "0.0.0.0"]\\n```',
        'code' => 'def handler():
    return {\'status\': \'ok\', \'lesson\': \'py-deploy\'}

print(handler())',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué usar Docker con Python en producción?',
        'options' => 
        array (
          0 => 'Mismo entorno en dev y prod — sin "en mi máquina funciona"',
          1 => 'Python no funciona sin Docker',
          2 => 'Solo para Kubernetes',
        ),
        'answer' => 'Mismo entorno en dev y prod — sin "en mi máquina funciona"',
        'explanation' => 'Docker empaqueta Python + dependencias + tu app en una imagen portable.',
        'pro_tip' => 'Este curso Docker de la plataforma aplica igual para apps Python.',
      ),
      1 => 
      array (
        'type' => 'min_length',
        'question' => 'Escribe tu plan: ¿FastAPI o Django para tu primer producto? (mín. 15 caracteres)',
        'min_length' => 15,
        'hint' => 'Ej: FastAPI para API + React frontend',
        'explanation' => 'Elegir stack con intención es lo que hacen seniors antes de codear.',
        'pro_tip' => 'API pura → FastAPI. Producto con admin y CRUD → Django.',
      ),
    ),
  ),
  10 => 
  array (
    'slug' => 'py-excepciones',
    'order' => 11,
    'title' => 'Excepciones y errores',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'try/except, raise y errores legibles en APIs.',
    'concepts' => 
    array (
      0 => 'exception',
      1 => 'try',
      2 => 'raise',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'try/except',
        'body' => 'Captura errores sin tumbar el programa — esencial en APIs y scripts.',
        'code' => 'try:
    n = int(\'abc\')
except ValueError:
    print(\'error\')',
      ),
      1 => 
      array (
        'heading' => 'raise',
        'body' => 'Lanzas excepciones propias cuando las reglas de negocio fallan.',
        'code' => 'try:
    print(1/0)
except ZeroDivisionError:
    print(\'div0\')',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué bloque captura excepciones en Python?',
        'options' => 
        array (
          0 => 'except',
          1 => 'catch',
          2 => 'rescue',
        ),
        'answer' => 'except',
        'explanation' => 'try/except es el equivalente a try/catch en PHP/JS.',
        'pro_tip' => 'except ValueError as e: guarda el mensaje de error.',
      ),
      1 => 
      array (
        'type' => 'code',
        'language' => 'python',
        'question' => 'try: print(1/0) except ZeroDivisionError: print("div0")',
        'expected_output' => 'div0',
        'hint' => 'try:
    print(1/0)
except ZeroDivisionError:
    print(\'div0\')',
        'explanation' => 'Capturaste división por cero sin crash.',
        'pro_tip' => 'FastAPI convierte excepciones en respuestas HTTP 4xx/5xx.',
      ),
    ),
  ),
  11 => 
  array (
    'slug' => 'py-clases',
    'order' => 12,
    'title' => 'Clases y POO',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'class, __init__, métodos y herencia.',
    'concepts' => 
    array (
      0 => 'class',
      1 => 'init',
      2 => 'oop',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Clases',
        'body' => 'Organizas datos y comportamiento. Django models y Pydantic models son clases.',
        'code' => 'class User:
    def __init__(self, name):
        self.name = name
    def greet(self):
        return f\'Hola {self.name}\'',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'code',
        'language' => 'python',
        'question' => 'class Punto: def __init__(self,x): self.x=x\\np=Punto(3)\\nprint(p.x)',
        'expected_output' => '3',
        'hint' => 'class Punto:
    def __init__(self, x):
        self.x = x
p = Punto(3)
print(p.x)',
        'explanation' => '__init__ es el constructor — como __construct en PHP.',
        'pro_tip' => 'dataclasses (@dataclass) reducen boilerplate en Python 3.7+.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es self en un método?',
        'options' => 
        array (
          0 => 'Referencia a la instancia actual',
          1 => 'Variable global',
          2 => 'Keyword reservado sin uso',
        ),
        'answer' => 'Referencia a la instancia actual',
        'explanation' => 'self es el equivalente a $this en PHP.',
        'pro_tip' => 'El primer parámetro de métodos de instancia siempre es self.',
      ),
    ),
  ),
  12 => 
  array (
    'slug' => 'py-asyncio',
    'order' => 13,
    'title' => 'Asyncio y concurrencia',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'async/await, I/O concurrente y por qué FastAPI es rápido.',
    'concepts' => 
    array (
      0 => 'async',
      1 => 'await',
      2 => 'asyncio',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'async def',
        'body' => 'Funciones asíncronas no bloquean mientras esperan I/O (red, disco). FastAPI las usa por defecto.',
        'code' => 'import asyncio
async def main():
    await asyncio.sleep(0)
    print(\'listo\')',
      ),
      1 => 
      array (
        'heading' => 'await',
        'body' => 'Esperas operaciones I/O sin congelar el servidor — miles de requests en un proceso.',
        'code' => 'async def f():\\n    await algo()',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué FastAPI es rápido con I/O?',
        'options' => 
        array (
          0 => 'async/await y ASGI',
          1 => 'Porque no usa red',
          2 => 'Solo C extensions',
        ),
        'answer' => 'async/await y ASGI',
        'explanation' => 'Mientras espera BD, atiende otras requests.',
        'pro_tip' => 'CPU-bound → multiprocessing; I/O-bound → asyncio.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe async def y await en un fragmento',
        'must_contain' => 
        array (
          0 => 'async def',
          1 => 'await',
        ),
        'hint' => 'async def f():\\n    await algo()',
        'explanation' => 'async/await es sintaxis de corrutinas en Python.',
        'pro_tip' => 'asyncio.gather() ejecuta varias corrutinas en paralelo.',
      ),
    ),
  ),
  13 => 
  array (
    'slug' => 'py-testing',
    'order' => 14,
    'title' => 'Tests con pytest',
    'level' => 'Calidad',
    'minutes' => 30,
    'summary' => 'pytest, fixtures y TDD en Python.',
    'concepts' => 
    array (
      0 => 'pytest',
      1 => 'test',
      2 => 'fixture',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'pytest',
        'body' => 'Escribes `def test_algo(): assert 1+1==2`. Sin clases obligatorias — simple y poderoso.',
        'code' => 'def test_suma():\\n    assert 2 + 2 == 4',
      ),
      1 => 
      array (
        'heading' => 'fixtures',
        'body' => '@pytest.fixture provee datos reutilizables (BD de test, cliente HTTP).',
        'code' => 'def test_suma():\\n    assert 2 + 2 == 4',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Framework de tests más usado en Python?',
        'options' => 
        array (
          0 => 'pytest',
          1 => 'phpunit',
          2 => 'jest',
        ),
        'answer' => 'pytest',
        'explanation' => 'pytest descubre tests automáticamente en test_*.py.',
        'pro_tip' => 'pytest tests/ -v para output verbose en CI.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe def test_suma(): assert 2+2==4',
        'must_contain' => 
        array (
          0 => 'def test_',
          1 => 'assert',
        ),
        'hint' => 'def test_suma():\\n    assert 2 + 2 == 4',
        'explanation' => 'assert falla el test si la condición es falsa.',
        'pro_tip' => 'TestClient de FastAPI prueba endpoints sin servidor real.',
      ),
    ),
  ),
  array (
    'slug' => 'py-typing',
    'order' => 15,
    'title' => 'Type hints y mypy',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'Tipado estático, Optional, Union y mypy.',
    'concepts' => 
    array (
      0 => 'type-hints',
      1 => 'mypy',
      2 => 'optional',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Type hints',
        'body' => 'Python 3.10+ syntax — def get_user(id: int) -> User | None — catch bugs antes de runtime.',
        'code' => 'from typing import Optional

def discount(price: float, pct: float) -> float:
    return price * (1 - pct / 100)

def find_user(email: str) -> Optional[dict]:
    return None',
      ),
      1 => 
      array (
        'heading' => 'mypy',
        'body' => 'mypy archivo.py en CI — FastAPI y Pydantic ya usan types; extiende a tu dominio.',
        'code' => '# mypy.ini
[mypy]
python_version = 3.12
strict = True',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Optional[str] significa?',
        'options' => 
        array (
          0 => 'str o None',
          1 => 'Siempre str',
          2 => 'Deprecated',
        ),
        'answer' => 'str o None',
        'explanation' => 'Equivalente str | None en 3.10+.',
        'pro_tip' => 'Curso typescript-fundamentos parallel concepts.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'language' => 'python',
        'question' => 'Escribe -> float return type',
        'must_contain' => 
        array (
          0 => '->',
          1 => 'float',
        ),
        'hint' => 'def calc() -> float:',
        'explanation' => 'Return annotation documents API.',
        'pro_tip' => 'from __future__ import annotations for forward refs.',
      ),
    ),
  ),
  array (
    'slug' => 'py-packaging',
    'order' => 16,
    'title' => 'Packaging y publicación',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'pyproject.toml, wheels y PyPI.',
    'concepts' => 
    array (
      0 => 'pyproject',
      1 => 'wheel',
      2 => 'pypi',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'pyproject.toml',
        'body' => 'Estándar moderno — reemplaza setup.py — dependencies, scripts, build backend.',
        'code' => '[project]
name = "mi-api"
version = "0.1.0"
dependencies = ["fastapi>=0.110", "uvicorn[standard]"]

[project.scripts]
serve = "mi_api.main:run"',
      ),
      1 => 
      array (
        'heading' => 'Build',
        'body' => 'python -m build genera wheel + sdist — pip install . en prod o publish PyPI privado.',
        'code' => 'pip install build
python -m build
pip install dist/mi_api-0.1.0-py3-none-any.whl',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Archivo config moderno Python?',
        'options' => 
        array (
          0 => 'pyproject.toml',
          1 => 'package.json',
          2 => 'composer.json',
        ),
        'answer' => 'pyproject.toml',
        'explanation' => 'PEP 518+ standard.',
        'pro_tip' => 'uv/poetry también leen pyproject.toml.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe [project] en pyproject',
        'must_contain' => 
        array (
          0 => '[project]',
        ),
        'hint' => '[project]\nname = "app"',
        'explanation' => 'Metadata package declarative.',
        'pro_tip' => 'Lock versions in prod requirements.txt or uv.lock.',
      ),
    ),
  ),
);
