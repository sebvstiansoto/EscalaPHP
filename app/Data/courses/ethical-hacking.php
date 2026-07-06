<?php

declare(strict_types=1);

return [
    [
        'slug' => 'eh-legal',
        'order' => 1,
        'title' => 'Ética y marco legal',
        'level' => 'Obligatorio',
        'minutes' => 30,
        'summary' => 'Solo sistemas autorizados — ley y scope.',
        'concepts' => ['authorization', 'scope', 'law'],
        'sections' => [
            ['heading' => 'Regla de oro', 'body' => '**Nunca** pruebes vulnerabilidades en sistemas sin **permiso escrito** explícito. Es ilegal y puede ser delito.'],
            ['heading' => 'Scope', 'body' => 'Bug bounty y pentest definen dominios/IPs permitidos, técnicas prohibidas y ventana de tiempo.'],
            ['heading' => 'Entornos legales', 'body' => 'Labs propios (DVWA, HackTheBox), programas bug bounty, contratos pentest empresa, CTFs.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Puedes escanear puertos de un banco sin permiso?', 'options' => ['No — ilegal', 'Sí si es educativo', 'Sí en fines de semana'], 'answer' => 'No — ilegal', 'explanation' => 'Autorización escrita siempre.', 'pro_tip' => 'Esta plataforma es defensiva + labs éticos solamente.'],
            ['type' => 'choice', 'question' => '¿Qué es scope en bug bounty?', 'options' => ['Lista de assets donde puedes reportar bugs', 'Tu salario', 'Versión PHP'], 'answer' => 'Lista de assets donde puedes reportar bugs', 'explanation' => 'Fuera de scope = no tocar.', 'pro_tip' => 'Lee policy de HackerOne/Intigriti antes.'],
        ],
    ],
    [
        'slug' => 'eh-mindset',
        'order' => 2,
        'title' => 'Mentalidad del ethical hacker',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'Pensar como atacante para defender mejor.',
        'concepts' => ['threat-model', 'attacker', 'defender'],
        'sections' => [
            ['heading' => 'Ethical hacking', 'body' => 'Usas técnicas ofensivas con **permiso** para encontrar fallos antes que criminales.'],
            ['heading' => 'Threat modeling', 'body' => '¿Qué activos proteges? ¿Quién atacaría? ¿Cómo entrarían? — STRIDE, attack trees.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Objetivo ethical hacking?', 'options' => ['Mejorar seguridad reportando vulnerabilidades', 'Robar datos', 'Caer sitios'], 'answer' => 'Mejorar seguridad reportando vulnerabilidades', 'explanation' => 'Red team con reglas vs black hat.', 'pro_tip' => 'Curso seguridad-web es la base defensiva.'],
            ['type' => 'choice', 'question' => '¿Threat modeling primero define...?', 'options' => ['Activos y amenazas', 'Color de la web', 'Framework JS'], 'answer' => 'Activos y amenazas', 'explanation' => 'No pruebas al azar — priorizas riesgo.', 'pro_tip' => 'DREAD o CVSS priorizan hallazgos.'],
        ],
    ],
    [
        'slug' => 'eh-recon',
        'order' => 3,
        'title' => 'Reconocimiento pasivo y activo',
        'level' => 'Técnicas',
        'minutes' => 35,
        'summary' => 'OSINT, DNS, subdominios y fingerprinting.',
        'concepts' => ['recon', 'osint', 'dns'],
        'sections' => [
            ['heading' => 'Recon pasivo', 'body' => 'Información pública: WHOIS, DNS records, crt.sh certificados, Wayback Machine — sin tocar el servidor directamente.'],
            ['heading' => 'Recon activo', 'body' => 'Solo en scope: ping, nmap puertos, enumerar subdominios — genera logs en el objetivo.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Recon pasivo...?', 'options' => ['Usa fuentes públicas sin interactuar con target', 'Explota SQL day 1', 'Borra logs'], 'answer' => 'Usa fuentes públicas sin interactuar con target', 'explanation' => 'OSINT = Open Source Intelligence.', 'pro_tip' => 'whois, dig, nslookup en tu lab local.'],
            ['type' => 'choice', 'question' => '¿DNS A record contiene...?', 'options' => ['IP del dominio', 'Contraseña admin', 'Código PHP'], 'answer' => 'IP del dominio', 'explanation' => 'dig ejemplo.com A', 'pro_tip' => 'Subdomain takeover si CNAME apunta a servicio abandonado.'],
        ],
    ],
    [
        'slug' => 'eh-scanning',
        'order' => 4,
        'title' => 'Escaneo y enumeración',
        'level' => 'Técnicas',
        'minutes' => 35,
        'summary' => 'Puertos, servicios y versiones — solo en lab.',
        'concepts' => ['nmap', 'enumeration', 'service'],
        'sections' => [
            ['heading' => 'Nmap conceptos', 'body' => 'Descubre puertos abiertos y servicios — `-sV` versiones. **Solo en máquinas tuyas o labs autorizados.**'],
            ['heading' => 'Enumeración', 'body' => 'Tras encontrar HTTP/SSH/FTP — profundiza: directorios, usuarios, banners.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Puerto HTTPS por defecto?', 'options' => ['443', '80', '22'], 'answer' => '443', 'explanation' => '22=SSH, 80=HTTP.', 'pro_tip' => 'Practica nmap en localhost o HTB VPN.'],
            ['type' => 'choice', 'question' => '¿Enumerar directorios web sirve para...?', 'options' => ['Encontrar rutas ocultas (/admin, /backup)', 'Acelerar CSS', 'SEO'], 'answer' => 'Encontrar rutas ocultas (/admin, /backup)', 'explanation' => 'gobuster/ffuf en labs — nunca sin permiso.', 'pro_tip' => 'robots.txt y sitemap a veces filtran rutas.'],
        ],
    ],
    [
        'slug' => 'eh-web',
        'order' => 5,
        'title' => 'Explotación web (teoría defensiva)',
        'level' => 'OWASP',
        'minutes' => 40,
        'summary' => 'Cómo piensa un atacante: XSS, SQLi, IDOR.',
        'concepts' => ['xss', 'sqli', 'idor'],
        'sections' => [
            ['heading' => 'SQLi ofensiva', 'body' => 'Atacante prueba `\' OR 1=1--` en login — por eso **prepared statements** son obligatorios.'],
            ['heading' => 'XSS ofensiva', 'body' => 'Inyecta script que roba cookie — defensa: escape + CSP + httpOnly cookies.'],
            ['heading' => 'IDOR', 'body' => 'Cambiar `/api/users/1` a `/api/users/2` sin autorización — defensa: policies y checks de ownership.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿IDOR significa...?', 'options' => ['Acceder recurso de otro usuario cambiando ID', 'Tipo de CSS', 'Protocolo email'], 'answer' => 'Acceder recurso de otro usuario cambiando ID', 'explanation' => 'Insecure Direct Object Reference.', 'pro_tip' => 'Autoriza en servidor, no confíes en UI oculta.'],
            ['type' => 'contains', 'question' => 'Escribe OR 1=1 como ejemplo SQLi (teoría)', 'must_contain' => ['1=1'], 'hint' => "' OR 1=1--", 'explanation' => 'Entender ataque para defender — no usar en prod ajena.', 'pro_tip' => 'DVWA tiene módulo SQLi en modo legal.'],
        ],
    ],
    [
        'slug' => 'eh-tools',
        'order' => 6,
        'title' => 'Herramientas del oficio',
        'level' => 'Práctica',
        'minutes' => 30,
        'summary' => 'Burp Suite, OWASP ZAP y labs legales.',
        'concepts' => ['burp', 'zap', 'proxy'],
        'sections' => [
            ['heading' => 'Burp Suite', 'body' => 'Proxy intercepta HTTP — modificas requests para probar vulnerabilidades en **apps de lab**.'],
            ['heading' => 'OWASP ZAP', 'body' => 'Alternativa open source — scanner y proxy.'],
            ['heading' => 'Labs', 'body' => 'DVWA, WebGoat, PortSwigger Academy, HackTheBox — entornos diseñados para aprender.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Burp Suite como proxy...?', 'options' => ['Intercepta y modifica tráfico HTTP', 'Compila React', 'Gestiona DNS'], 'answer' => 'Intercepta y modifica tráfico HTTP', 'explanation' => 'Repeater reenvía requests modificados.', 'pro_tip' => 'PortSwigger Academy es gratis y excelente.'],
            ['type' => 'choice', 'question' => '¿DVWA es...?', 'options' => ['App vulnerable para practicar en local', 'Banco real', 'Framework PHP prod'], 'answer' => 'App vulnerable para practicar en local', 'explanation' => 'Damn Vulnerable Web Application — docker run local.', 'pro_tip' => 'Nunca despliegues DVWA en internet público.'],
        ],
    ],
    [
        'slug' => 'eh-report',
        'order' => 7,
        'title' => 'Reportes y bug bounty',
        'level' => 'Profesional',
        'minutes' => 30,
        'summary' => 'CVSS, PoC y carrera en seguridad.',
        'concepts' => ['report', 'cvss', 'bounty'],
        'sections' => [
            ['heading' => 'Reporte', 'body' => 'Título claro, severidad (CVSS), pasos reproducibles, impacto, recomendación de fix, PoC sanitizado.'],
            ['heading' => 'Bug bounty', 'body' => 'Plataformas conectan empresas y researchers — pago por vulnerabilidades válidas en scope.'],
            ['heading' => 'Carrera', 'body' => 'CEH, OSCP, PNPT — certificaciones. Pentester, SOC analyst, security engineer.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Buen reporte incluye...?', 'options' => ['Pasos reproducibles y impacto', 'Solo screenshot sin texto', 'Insultos'], 'answer' => 'Pasos reproducibles y impacto', 'explanation' => 'El dev debe poder reproducir el bug.', 'pro_tip' => 'Responsible disclosure — no publiques antes de fix.'],
            ['type' => 'choice', 'question' => '¿CVSS mide...?', 'options' => ['Severidad de vulnerabilidad', 'Velocidad internet', 'Líneas de código'], 'answer' => 'Severidad de vulnerabilidad', 'explanation' => 'Critical/High/Medium/Low.', 'pro_tip' => 'Combina con curso seguridad-web para defensa completa.'],
        ],
    ],
];
