<?php

declare(strict_types=1);

return [
    [
        'slug' => 'lx-intro',
        'order' => 1,
        'title' => 'La terminal y el shell',
        'level' => 'Fundamentos',
        'minutes' => 20,
        'summary' => 'Bash, comandos básicos y navegación.',
        'concepts' => ['terminal', 'bash', 'shell'],
        'sections' => [
            ['heading' => 'Terminal vs GUI', 'body' => 'La **terminal** ejecuta comandos de texto. En servidores Linux no hay escritorio — solo shell.'],
            ['heading' => 'Comandos esenciales', 'body' => 'pwd (dónde estoy), ls (listar), cd (cambiar directorio), clear (limpiar).'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué comando muestra el directorio actual?', 'options' => ['pwd', 'ls', 'cd'], 'answer' => 'pwd', 'explanation' => 'print working directory.', 'pro_tip' => 'En Windows Git Bash funciona igual que en Linux.'],
            ['type' => 'contains', 'question' => 'Escribe ls -la para listar todo con detalles', 'must_contain' => ['ls', '-la'], 'hint' => 'ls -la', 'explanation' => '-l formato largo, -a incluye archivos ocultos.', 'pro_tip' => 'll suele ser alias de ls -l en muchas distros.'],
        ],
    ],
    [
        'slug' => 'lx-files',
        'order' => 2,
        'title' => 'Archivos y directorios',
        'level' => 'Fundamentos',
        'minutes' => 25,
        'summary' => 'cp, mv, rm, mkdir y rutas relativas.',
        'concepts' => ['cp', 'mv', 'mkdir'],
        'sections' => [
            ['heading' => 'Manipular archivos', 'body' => 'cp copia, mv mueve/renombra, rm borra (¡cuidado!), mkdir crea carpetas.', 'code' => "mkdir proyecto\ncp archivo.txt proyecto/\nmv viejo.txt nuevo.txt"],
            ['heading' => 'Rutas', 'body' => '. es actual, .. es padre, / es raíz en Linux, ~ es tu home.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué comando crea un directorio?', 'options' => ['mkdir', 'touch', 'create'], 'answer' => 'mkdir', 'explanation' => 'mkdir -p crea rutas anidadas de una vez.', 'pro_tip' => 'touch crea archivo vacío o actualiza timestamp.'],
            ['type' => 'contains', 'question' => 'Escribe cp -r src/ dest/ para copiar carpeta recursiva', 'must_contain' => ['cp', '-r'], 'hint' => 'cp -r src/ dest/', 'explanation' => '-r = recursive para directorios.', 'pro_tip' => 'rm -rf es irreversible — triple check la ruta.'],
        ],
    ],
    [
        'slug' => 'lx-perms',
        'order' => 3,
        'title' => 'Permisos chmod y chown',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'rwx, usuarios, grupos y seguridad básica.',
        'concepts' => ['chmod', 'chown', 'rwx'],
        'sections' => [
            ['heading' => 'rwx', 'body' => '**r**ead, **w**rite, **e**xecute para owner, group y others. `ls -l` los muestra como drwxr-xr-x.'],
            ['heading' => 'chmod', 'body' => 'chmod 755 script.sh — el dueño ejecuta, otros solo leen.', 'code' => "chmod +x deploy.sh\n./deploy.sh"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace chmod +x archivo?', 'options' => ['Añade permiso de ejecución', 'Borra el archivo', 'Cambia el owner'], 'answer' => 'Añade permiso de ejecución', 'explanation' => 'Sin +x no puedes ejecutar ./script.sh.', 'pro_tip' => '755 es común para scripts; 644 para archivos normales.'],
            ['type' => 'choice', 'question' => '¿Quién es "owner" en permisos?', 'options' => ['El usuario que creó el archivo', 'Siempre root', 'El grupo www-data'], 'answer' => 'El usuario que creó el archivo', 'explanation' => 'chown cambia owner y grupo.', 'pro_tip' => 'En servidores web, cuidado con permisos de uploads.'],
        ],
    ],
    [
        'slug' => 'lx-grep',
        'order' => 4,
        'title' => 'Pipes, grep y find',
        'level' => 'Intermedio',
        'minutes' => 30,
        'summary' => 'Encadenar comandos y buscar en archivos.',
        'concepts' => ['pipe', 'grep', 'find'],
        'sections' => [
            ['heading' => 'Pipe |', 'body' => 'La salida de un comando alimenta el siguiente: `cat log.txt | grep ERROR`.'],
            ['heading' => 'grep y find', 'body' => 'grep busca texto en archivos. find localiza archivos por nombre o fecha.', 'code' => "grep -r 'function' app/\nfind . -name '*.php'"],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué hace el operador |?', 'options' => ['Conecta salida de un comando a entrada de otro', 'OR lógico', 'Lista archivos'], 'answer' => 'Conecta salida de un comando a entrada de otro', 'explanation' => 'Pipeline = composición de comandos pequeños.', 'pro_tip' => 'grep -i ignora mayúsculas; -n muestra número de línea.'],
            ['type' => 'contains', 'question' => 'Escribe grep -r "TODO" . para buscar recursivo', 'must_contain' => ['grep', '-r', 'TODO'], 'hint' => 'grep -r "TODO" .', 'explanation' => '-r busca en subdirectorios.', 'pro_tip' => 'rg (ripgrep) es más rápido que grep en repos grandes.'],
        ],
    ],
    [
        'slug' => 'lx-scripts',
        'order' => 5,
        'title' => 'Scripts bash',
        'level' => 'Avanzado',
        'minutes' => 35,
        'summary' => 'Shebang, variables, if y automatizar deploy.',
        'concepts' => ['shebang', 'variables', 'automation'],
        'sections' => [
            ['heading' => 'Script bash', 'body' => 'Primera línea #!/bin/bash. Variables sin $.', 'code' => "#!/bin/bash\nNAME=\"EscalaPHP\"\necho \"Deploy \$NAME\"\nif [ -f .env ]; then\n  echo \"OK\"\nfi"],
            ['heading' => 'Automatización', 'body' => 'Scripts de backup, deploy y CI local — lo que hace GitHub Actions pero en tu máquina.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Qué es el shebang #!/bin/bash?', 'options' => ['Indica qué intérprete ejecuta el script', 'Comentario decorativo', 'Variable de entorno'], 'answer' => 'Indica qué intérprete ejecuta el script', 'explanation' => 'Sin shebang debes llamar bash script.sh explícitamente.', 'pro_tip' => 'set -e hace fallar el script al primer error.'],
            ['type' => 'contains', 'question' => 'Escribe un if que compruebe -f archivo.txt', 'must_contain' => ['if', '-f', 'archivo'], 'hint' => 'if [ -f archivo.txt ]; then', 'explanation' => '-f testea si existe un archivo regular.', 'pro_tip' => 'Combina scripts con cron para tareas programadas.'],
        ],
    ],
    [
        'slug' => 'lx-ssh',
        'order' => 6,
        'title' => 'SSH y servidores remotos',
        'level' => 'DevOps',
        'minutes' => 25,
        'summary' => 'Conectar a VPS, claves y scp.',
        'concepts' => ['ssh', 'keys', 'scp'],
        'sections' => [
            ['heading' => 'SSH', 'body' => 'ssh user@servidor.com — terminal remota segura. Claves ed25519 mejor que contraseña.'],
            ['heading' => 'scp y rsync', 'body' => 'Copiar archivos al servidor: scp archivo.txt user@host:/var/www/'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Forma más segura de autenticar SSH?', 'options' => ['Clave pública/privada', 'Contraseña en texto plano', 'Sin autenticación'], 'answer' => 'Clave pública/privada', 'explanation' => 'ssh-keygen genera par de claves; la pública va en ~/.ssh/authorized_keys.', 'pro_tip' => 'Desactiva PasswordAuthentication en prod.'],
            ['type' => 'contains', 'question' => 'Escribe ssh usuario@192.168.1.10', 'must_contain' => ['ssh', '@'], 'hint' => 'ssh usuario@192.168.1.10', 'explanation' => 'user@host es la forma estándar de SSH.', 'pro_tip' => '~/.ssh/config define alias (Host mi-servidor).'],
        ],
    ],
];
