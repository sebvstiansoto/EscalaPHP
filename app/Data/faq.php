<?php

declare(strict_types=1);

return [
    'php-fundamentos' => [
        ['q' => '¿Puedo saltarme las lecciones bloqueadas?', 'a' => 'No. Debes completar los requisitos del curso en orden.'],
        ['q' => '¿El laboratorio ejecuta código real?', 'a' => 'Sí. PHP y Python en servidor; JavaScript en tu navegador.'],
        ['q' => '¿Cómo obtengo el certificado?', 'a' => 'Completa todos los módulos y visita /certificado.'],
    ],
    'python-backend' => [
        ['q' => '¿Necesito instalar Python?', 'a' => 'El curso incluye ejemplos ejecutables en la plataforma.'],
        ['q' => '¿FastAPI o Django?', 'a' => 'El curso cubre ambos enfoques según el módulo.'],
    ],
    'docker' => [
        ['q' => '¿Necesito Docker Desktop?', 'a' => 'Opcional. Puedes aprender la sintaxis sin ejecutar localmente.'],
        ['q' => '¿DOCKER_RUNNER activa contenedores?', 'a' => 'Sí, si tienes Docker y DOCKER_RUNNER=true en .env.'],
    ],
    'react-frontend' => [
        ['q' => '¿Los ejercicios JS corren en el navegador?', 'a' => 'Sí, sin servidor adicional.'],
    ],
];
