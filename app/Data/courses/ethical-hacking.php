<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'eh-legal',
    'order' => 1,
    'title' => 'Ética y marco legal',
    'level' => 'Obligatorio',
    'minutes' => 30,
    'summary' => 'Solo sistemas autorizados — ley y scope.',
    'concepts' => 
    array (
      0 => 'authorization',
      1 => 'scope',
      2 => 'law',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Regla de oro',
        'body' => '**Nunca** pruebes vulnerabilidades en sistemas sin **permiso escrito** explícito. Es ilegal y puede ser delito.',
        'code' => '# Practica: eh-legal
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Scope',
        'body' => 'Bug bounty y pentest definen dominios/IPs permitidos, técnicas prohibidas y ventana de tiempo.',
        'code' => '# Practica: eh-legal
echo "Listo"
# Reemplaza con tu comando',
      ),
      2 => 
      array (
        'heading' => 'Entornos legales',
        'body' => 'Labs propios (DVWA, HackTheBox), programas bug bounty, contratos pentest empresa, CTFs.',
        'code' => '# Practica: eh-legal
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Puedes escanear puertos de un banco sin permiso?',
        'options' => 
        array (
          0 => 'No — ilegal',
          1 => 'Sí si es educativo',
          2 => 'Sí en fines de semana',
        ),
        'answer' => 'No — ilegal',
        'explanation' => 'Autorización escrita siempre.',
        'pro_tip' => 'Esta plataforma es defensiva + labs éticos solamente.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Qué es scope en bug bounty?',
        'options' => 
        array (
          0 => 'Lista de assets donde puedes reportar bugs',
          1 => 'Tu salario',
          2 => 'Versión PHP',
        ),
        'answer' => 'Lista de assets donde puedes reportar bugs',
        'explanation' => 'Fuera de scope = no tocar.',
        'pro_tip' => 'Lee policy de HackerOne/Intigriti antes.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'eh-mindset',
    'order' => 2,
    'title' => 'Mentalidad del ethical hacker',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Pensar como atacante para defender mejor.',
    'concepts' => 
    array (
      0 => 'threat-model',
      1 => 'attacker',
      2 => 'defender',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Ethical hacking',
        'body' => 'Usas técnicas ofensivas con **permiso** para encontrar fallos antes que criminales.',
        'code' => '# Practica: eh-mindset
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Threat modeling',
        'body' => '¿Qué activos proteges? ¿Quién atacaría? ¿Cómo entrarían? — STRIDE, attack trees.',
        'code' => '# Practica: eh-mindset
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Objetivo ethical hacking?',
        'options' => 
        array (
          0 => 'Mejorar seguridad reportando vulnerabilidades',
          1 => 'Robar datos',
          2 => 'Caer sitios',
        ),
        'answer' => 'Mejorar seguridad reportando vulnerabilidades',
        'explanation' => 'Red team con reglas vs black hat.',
        'pro_tip' => 'Curso seguridad-web es la base defensiva.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Threat modeling primero define...?',
        'options' => 
        array (
          0 => 'Activos y amenazas',
          1 => 'Color de la web',
          2 => 'Framework JS',
        ),
        'answer' => 'Activos y amenazas',
        'explanation' => 'No pruebas al azar — priorizas riesgo.',
        'pro_tip' => 'DREAD o CVSS priorizan hallazgos.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'eh-recon',
    'order' => 3,
    'title' => 'Reconocimiento pasivo y activo',
    'level' => 'Técnicas',
    'minutes' => 35,
    'summary' => 'OSINT, DNS, subdominios y fingerprinting.',
    'concepts' => 
    array (
      0 => 'recon',
      1 => 'osint',
      2 => 'dns',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Recon pasivo',
        'body' => 'Información pública: WHOIS, DNS records, crt.sh certificados, Wayback Machine — sin tocar el servidor directamente.',
        'code' => '# Practica: eh-recon
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Recon activo',
        'body' => 'Solo en scope: ping, nmap puertos, enumerar subdominios — genera logs en el objetivo.',
        'code' => '# Practica: eh-recon
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Recon pasivo...?',
        'options' => 
        array (
          0 => 'Usa fuentes públicas sin interactuar con target',
          1 => 'Explota SQL day 1',
          2 => 'Borra logs',
        ),
        'answer' => 'Usa fuentes públicas sin interactuar con target',
        'explanation' => 'OSINT = Open Source Intelligence.',
        'pro_tip' => 'whois, dig, nslookup en tu lab local.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿DNS A record contiene...?',
        'options' => 
        array (
          0 => 'IP del dominio',
          1 => 'Contraseña admin',
          2 => 'Código PHP',
        ),
        'answer' => 'IP del dominio',
        'explanation' => 'dig ejemplo.com A',
        'pro_tip' => 'Subdomain takeover si CNAME apunta a servicio abandonado.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'eh-scanning',
    'order' => 4,
    'title' => 'Escaneo y enumeración',
    'level' => 'Técnicas',
    'minutes' => 35,
    'summary' => 'Puertos, servicios y versiones — solo en lab.',
    'concepts' => 
    array (
      0 => 'nmap',
      1 => 'enumeration',
      2 => 'service',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Nmap conceptos',
        'body' => 'Descubre puertos abiertos y servicios — `-sV` versiones. **Solo en máquinas tuyas o labs autorizados.**',
        'code' => '# Practica: eh-scanning
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Enumeración',
        'body' => 'Tras encontrar HTTP/SSH/FTP — profundiza: directorios, usuarios, banners.',
        'code' => '# Practica: eh-scanning
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Puerto HTTPS por defecto?',
        'options' => 
        array (
          0 => '443',
          1 => '80',
          2 => '22',
        ),
        'answer' => '443',
        'explanation' => '22=SSH, 80=HTTP.',
        'pro_tip' => 'Practica nmap en localhost o HTB VPN.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Enumerar directorios web sirve para...?',
        'options' => 
        array (
          0 => 'Encontrar rutas ocultas (/admin, /backup)',
          1 => 'Acelerar CSS',
          2 => 'SEO',
        ),
        'answer' => 'Encontrar rutas ocultas (/admin, /backup)',
        'explanation' => 'gobuster/ffuf en labs — nunca sin permiso.',
        'pro_tip' => 'robots.txt y sitemap a veces filtran rutas.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'eh-web',
    'order' => 5,
    'title' => 'Explotación web (teoría defensiva)',
    'level' => 'OWASP',
    'minutes' => 40,
    'summary' => 'Cómo piensa un atacante: XSS, SQLi, IDOR.',
    'concepts' => 
    array (
      0 => 'xss',
      1 => 'sqli',
      2 => 'idor',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'SQLi ofensiva',
        'body' => 'Atacante prueba `\' OR 1=1--` en login — por eso **prepared statements** son obligatorios.',
        'code' => '\' OR 1=1--',
      ),
      1 => 
      array (
        'heading' => 'XSS ofensiva',
        'body' => 'Inyecta script que roba cookie — defensa: escape + CSP + httpOnly cookies.',
        'code' => '\' OR 1=1--',
      ),
      2 => 
      array (
        'heading' => 'IDOR',
        'body' => 'Cambiar `/api/users/1` a `/api/users/2` sin autorización — defensa: policies y checks de ownership.',
        'code' => '\' OR 1=1--',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿IDOR significa...?',
        'options' => 
        array (
          0 => 'Acceder recurso de otro usuario cambiando ID',
          1 => 'Tipo de CSS',
          2 => 'Protocolo email',
        ),
        'answer' => 'Acceder recurso de otro usuario cambiando ID',
        'explanation' => 'Insecure Direct Object Reference.',
        'pro_tip' => 'Autoriza en servidor, no confíes en UI oculta.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe OR 1=1 como ejemplo SQLi (teoría)',
        'must_contain' => 
        array (
          0 => '1=1',
        ),
        'hint' => '\' OR 1=1--',
        'explanation' => 'Entender ataque para defender — no usar en prod ajena.',
        'pro_tip' => 'DVWA tiene módulo SQLi en modo legal.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'eh-tools',
    'order' => 6,
    'title' => 'Herramientas del oficio',
    'level' => 'Práctica',
    'minutes' => 30,
    'summary' => 'Burp Suite, OWASP ZAP y labs legales.',
    'concepts' => 
    array (
      0 => 'burp',
      1 => 'zap',
      2 => 'proxy',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Burp Suite',
        'body' => 'Proxy intercepta HTTP — modificas requests para probar vulnerabilidades en **apps de lab**.',
        'code' => '# Practica: eh-tools
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'OWASP ZAP',
        'body' => 'Alternativa open source — scanner y proxy.',
        'code' => '# Practica: eh-tools
echo "Listo"
# Reemplaza con tu comando',
      ),
      2 => 
      array (
        'heading' => 'Labs',
        'body' => 'DVWA, WebGoat, PortSwigger Academy, HackTheBox — entornos diseñados para aprender.',
        'code' => '# Practica: eh-tools
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Burp Suite como proxy...?',
        'options' => 
        array (
          0 => 'Intercepta y modifica tráfico HTTP',
          1 => 'Compila React',
          2 => 'Gestiona DNS',
        ),
        'answer' => 'Intercepta y modifica tráfico HTTP',
        'explanation' => 'Repeater reenvía requests modificados.',
        'pro_tip' => 'PortSwigger Academy es gratis y excelente.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿DVWA es...?',
        'options' => 
        array (
          0 => 'App vulnerable para practicar en local',
          1 => 'Banco real',
          2 => 'Framework PHP prod',
        ),
        'answer' => 'App vulnerable para practicar en local',
        'explanation' => 'Damn Vulnerable Web Application — docker run local.',
        'pro_tip' => 'Nunca despliegues DVWA en internet público.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'eh-report',
    'order' => 7,
    'title' => 'Reportes y bug bounty',
    'level' => 'Profesional',
    'minutes' => 30,
    'summary' => 'CVSS, PoC y carrera en seguridad.',
    'concepts' => 
    array (
      0 => 'report',
      1 => 'cvss',
      2 => 'bounty',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Reporte',
        'body' => 'Título claro, severidad (CVSS), pasos reproducibles, impacto, recomendación de fix, PoC sanitizado.',
        'code' => '# Practica: eh-report
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Bug bounty',
        'body' => 'Plataformas conectan empresas y researchers — pago por vulnerabilidades válidas en scope.',
        'code' => '# Practica: eh-report
echo "Listo"
# Reemplaza con tu comando',
      ),
      2 => 
      array (
        'heading' => 'Carrera',
        'body' => 'CEH, OSCP, PNPT — certificaciones. Pentester, SOC analyst, security engineer.',
        'code' => '# Practica: eh-report
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Buen reporte incluye...?',
        'options' => 
        array (
          0 => 'Pasos reproducibles y impacto',
          1 => 'Solo screenshot sin texto',
          2 => 'Insultos',
        ),
        'answer' => 'Pasos reproducibles y impacto',
        'explanation' => 'El dev debe poder reproducir el bug.',
        'pro_tip' => 'Responsible disclosure — no publiques antes de fix.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿CVSS mide...?',
        'options' => 
        array (
          0 => 'Severidad de vulnerabilidad',
          1 => 'Velocidad internet',
          2 => 'Líneas de código',
        ),
        'answer' => 'Severidad de vulnerabilidad',
        'explanation' => 'Critical/High/Medium/Low.',
        'pro_tip' => 'Combina con curso seguridad-web para defensa completa.',
      ),
    ),
  ),
);
