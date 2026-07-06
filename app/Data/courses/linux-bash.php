<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'lx-intro',
    'order' => 1,
    'title' => 'La terminal y el shell',
    'level' => 'Fundamentos',
    'minutes' => 20,
    'summary' => 'Bash, comandos básicos y navegación.',
    'concepts' => 
    array (
      0 => 'terminal',
      1 => 'bash',
      2 => 'shell',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Terminal vs GUI',
        'body' => 'La **terminal** ejecuta comandos de texto. En servidores Linux no hay escritorio — solo shell.',
        'code' => '# Practica: lx-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Comandos esenciales',
        'body' => 'pwd (dónde estoy), ls (listar), cd (cambiar directorio), clear (limpiar).',
        'code' => '# Practica: lx-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando muestra el directorio actual?',
        'options' => 
        array (
          0 => 'pwd',
          1 => 'ls',
          2 => 'cd',
        ),
        'answer' => 'pwd',
        'explanation' => 'print working directory.',
        'pro_tip' => 'En Windows Git Bash funciona igual que en Linux.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe ls -la para listar todo con detalles',
        'must_contain' => 
        array (
          0 => 'ls',
          1 => '-la',
        ),
        'hint' => 'ls -la',
        'explanation' => '-l formato largo, -a incluye archivos ocultos.',
        'pro_tip' => 'll suele ser alias de ls -l en muchas distros.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'lx-files',
    'order' => 2,
    'title' => 'Archivos y directorios',
    'level' => 'Fundamentos',
    'minutes' => 25,
    'summary' => 'cp, mv, rm, mkdir y rutas relativas.',
    'concepts' => 
    array (
      0 => 'cp',
      1 => 'mv',
      2 => 'mkdir',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Manipular archivos',
        'body' => 'cp copia, mv mueve/renombra, rm borra (¡cuidado!), mkdir crea carpetas.',
        'code' => 'mkdir proyecto
cp archivo.txt proyecto/
mv viejo.txt nuevo.txt',
      ),
      1 => 
      array (
        'heading' => 'Rutas',
        'body' => '. es actual, .. es padre, / es raíz en Linux, ~ es tu home.',
        'code' => 'cp -r src/ dest/',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué comando crea un directorio?',
        'options' => 
        array (
          0 => 'mkdir',
          1 => 'touch',
          2 => 'create',
        ),
        'answer' => 'mkdir',
        'explanation' => 'mkdir -p crea rutas anidadas de una vez.',
        'pro_tip' => 'touch crea archivo vacío o actualiza timestamp.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe cp -r src/ dest/ para copiar carpeta recursiva',
        'must_contain' => 
        array (
          0 => 'cp',
          1 => '-r',
        ),
        'hint' => 'cp -r src/ dest/',
        'explanation' => '-r = recursive para directorios.',
        'pro_tip' => 'rm -rf es irreversible — triple check la ruta.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'lx-perms',
    'order' => 3,
    'title' => 'Permisos chmod y chown',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'rwx, usuarios, grupos y seguridad básica.',
    'concepts' => 
    array (
      0 => 'chmod',
      1 => 'chown',
      2 => 'rwx',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'rwx',
        'body' => '**r**ead, **w**rite, **e**xecute para owner, group y others. `ls -l` los muestra como drwxr-xr-x.',
        'code' => '# Practica: lx-perms
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'chmod',
        'body' => 'chmod 755 script.sh — el dueño ejecuta, otros solo leen.',
        'code' => 'chmod +x deploy.sh
./deploy.sh',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace chmod +x archivo?',
        'options' => 
        array (
          0 => 'Añade permiso de ejecución',
          1 => 'Borra el archivo',
          2 => 'Cambia el owner',
        ),
        'answer' => 'Añade permiso de ejecución',
        'explanation' => 'Sin +x no puedes ejecutar ./script.sh.',
        'pro_tip' => '755 es común para scripts; 644 para archivos normales.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Quién es "owner" en permisos?',
        'options' => 
        array (
          0 => 'El usuario que creó el archivo',
          1 => 'Siempre root',
          2 => 'El grupo www-data',
        ),
        'answer' => 'El usuario que creó el archivo',
        'explanation' => 'chown cambia owner y grupo.',
        'pro_tip' => 'En servidores web, cuidado con permisos de uploads.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'lx-grep',
    'order' => 4,
    'title' => 'Pipes, grep y find',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Encadenar comandos y buscar en archivos.',
    'concepts' => 
    array (
      0 => 'pipe',
      1 => 'grep',
      2 => 'find',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Pipe |',
        'body' => 'La salida de un comando alimenta el siguiente: `cat log.txt | grep ERROR`.',
        'code' => 'grep -r "TODO" .',
      ),
      1 => 
      array (
        'heading' => 'grep y find',
        'body' => 'grep busca texto en archivos. find localiza archivos por nombre o fecha.',
        'code' => 'grep -r \'function\' app/
find . -name \'*.php\'',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué hace el operador |?',
        'options' => 
        array (
          0 => 'Conecta salida de un comando a entrada de otro',
          1 => 'OR lógico',
          2 => 'Lista archivos',
        ),
        'answer' => 'Conecta salida de un comando a entrada de otro',
        'explanation' => 'Pipeline = composición de comandos pequeños.',
        'pro_tip' => 'grep -i ignora mayúsculas; -n muestra número de línea.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe grep -r "TODO" . para buscar recursivo',
        'must_contain' => 
        array (
          0 => 'grep',
          1 => '-r',
          2 => 'TODO',
        ),
        'hint' => 'grep -r "TODO" .',
        'explanation' => '-r busca en subdirectorios.',
        'pro_tip' => 'rg (ripgrep) es más rápido que grep en repos grandes.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'lx-scripts',
    'order' => 5,
    'title' => 'Scripts bash',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Shebang, variables, if y automatizar deploy.',
    'concepts' => 
    array (
      0 => 'shebang',
      1 => 'variables',
      2 => 'automation',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Script bash',
        'body' => 'Primera línea #!/bin/bash. Variables sin $.',
        'code' => '#!/bin/bash
NAME="EscalaPHP"
echo "Deploy $NAME"
if [ -f .env ]; then
  echo "OK"
fi',
      ),
      1 => 
      array (
        'heading' => 'Automatización',
        'body' => 'Scripts de backup, deploy y CI local — lo que hace GitHub Actions pero en tu máquina.',
        'code' => 'if [ -f archivo.txt ]; then',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es el shebang #!/bin/bash?',
        'options' => 
        array (
          0 => 'Indica qué intérprete ejecuta el script',
          1 => 'Comentario decorativo',
          2 => 'Variable de entorno',
        ),
        'answer' => 'Indica qué intérprete ejecuta el script',
        'explanation' => 'Sin shebang debes llamar bash script.sh explícitamente.',
        'pro_tip' => 'set -e hace fallar el script al primer error.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe un if que compruebe -f archivo.txt',
        'must_contain' => 
        array (
          0 => 'if',
          1 => '-f',
          2 => 'archivo',
        ),
        'hint' => 'if [ -f archivo.txt ]; then',
        'explanation' => '-f testea si existe un archivo regular.',
        'pro_tip' => 'Combina scripts con cron para tareas programadas.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'lx-ssh',
    'order' => 6,
    'title' => 'SSH y servidores remotos',
    'level' => 'DevOps',
    'minutes' => 25,
    'summary' => 'Conectar a VPS, claves y scp.',
    'concepts' => 
    array (
      0 => 'ssh',
      1 => 'keys',
      2 => 'scp',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SSH',
        'body' => 'ssh user@servidor.com — terminal remota segura. Claves ed25519 mejor que contraseña.',
        'code' => 'ssh usuario@192.168.1.10',
      ),
      1 => 
      array (
        'heading' => 'scp y rsync',
        'body' => 'Copiar archivos al servidor: scp archivo.txt user@host:/var/www/',
        'code' => 'ssh usuario@192.168.1.10',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Forma más segura de autenticar SSH?',
        'options' => 
        array (
          0 => 'Clave pública/privada',
          1 => 'Contraseña en texto plano',
          2 => 'Sin autenticación',
        ),
        'answer' => 'Clave pública/privada',
        'explanation' => 'ssh-keygen genera par de claves; la pública va en ~/.ssh/authorized_keys.',
        'pro_tip' => 'Desactiva PasswordAuthentication en prod.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe ssh usuario@192.168.1.10',
        'must_contain' => 
        array (
          0 => 'ssh',
          1 => '@',
        ),
        'hint' => 'ssh usuario@192.168.1.10',
        'explanation' => 'user@host es la forma estándar de SSH.',
        'pro_tip' => '~/.ssh/config define alias (Host mi-servidor).',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'linux-bash-produccion',
    'order' => 7,
    'title' => 'Buenas prácticas avanzadas en producción',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Buenas prácticas avanzadas en producción — cierre avanzado de Linux & Bash.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Linux & Bash a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
    'slug' => 'linux-bash-operaciones',
    'order' => 8,
    'title' => 'Checklist profesional y próximos pasos',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Checklist profesional y próximos pasos — cierre avanzado de Linux & Bash.',
    'concepts' => 
    array (
      0 => 'best-practices',
      1 => 'checklist',
      2 => 'career',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Linux & Bash a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '#!/usr/bin/env bash
set -euo pipefail

# Runbook: verificar servicio tras deploy
curl -fsS "https://app.example.com/health" | jq .
kubectl rollout status deployment/api -n production --timeout=120s',
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
