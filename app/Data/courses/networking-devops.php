<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'nw-intro',
    'order' => 1,
    'title' => 'Networking para devs',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'OSI, TCP/IP, DNS basics.',
    'concepts' => 
    array (
      0 => 'osi',
      1 => 'tcp',
      2 => 'dns',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Layers',
        'body' => 'OSI model — app HTTP, transport TCP/UDP, network IP — debug knowing layer helps.',
        'code' => '# Practica: nw-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'TCP vs UDP',
        'body' => 'TCP reliable ordered — HTTP WebSocket — UDP fast loss OK video DNS queries.',
        'code' => '# Practica: nw-intro
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿DNS role?',
        'options' => 
        array (
          0 => 'Domain name to IP address',
          1 => 'Encrypt traffic',
          2 => 'Compile code',
        ),
        'answer' => 'Domain name to IP address',
        'explanation' => 'A record CNAME TTL.',
        'pro_tip' => 'dig nslookup debug.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Port 443?',
        'options' => 
        array (
          0 => 'HTTPS default',
          1 => 'SSH',
          2 => 'PostgreSQL',
        ),
        'answer' => 'HTTPS default',
        'explanation' => '80 HTTP, 22 SSH, 5432 Postgres.',
        'pro_tip' => 'Curso nginx-proxy ports.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'nw-http',
    'order' => 2,
    'title' => 'HTTP deep dive',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Headers, TLS, HTTP/2/3.',
    'concepts' => 
    array (
      0 => 'http',
      1 => 'tls',
      2 => 'http2',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'HTTP',
        'body' => 'Request method path headers body — response status headers — keep-alive connection reuse.',
        'code' => '# Practica: nw-http
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'TLS',
        'body' => 'HTTPS encrypt transport — cert chain Let\'s Encrypt — HSTS force HTTPS.',
        'code' => '# Practica: nw-http
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿HTTP/2 benefit?',
        'options' => 
        array (
          0 => 'Multiplex single connection',
          1 => 'No encryption',
          2 => 'Replace TCP',
        ),
        'answer' => 'Multiplex single connection',
        'explanation' => 'Header compression HPACK.',
        'pro_tip' => 'HTTP/3 QUIC UDP based.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿curl -I?',
        'options' => 
        array (
          0 => 'HEAD request headers only',
          1 => 'DELETE all',
          2 => 'Install package',
        ),
        'answer' => 'HEAD request headers only',
        'explanation' => 'Debug cache headers fast.',
        'pro_tip' => 'curl -v verbose TLS handshake.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'nw-ip',
    'order' => 3,
    'title' => 'IP, subnet, routing',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'CIDR, private ranges, NAT.',
    'concepts' => 
    array (
      0 => 'cidr',
      1 => 'subnet',
      2 => 'nat',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'IP addressing',
        'body' => '10.0.0.0/8, 172.16/12, 192.168/16 private — CIDR notation host count.',
        'code' => '# Practica: nw-ip
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'NAT',
        'body' => 'Private IPs internet via NAT gateway — Docker bridge networks similar concept.',
        'code' => '# Practica: nw-ip
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿/24 subnet?',
        'options' => 
        array (
          0 => '256 addresses class C style',
          1 => 'One host only',
          2 => 'Entire internet',
        ),
        'answer' => '256 addresses class C style',
        'explanation' => '255.255.255.0 mask.',
        'pro_tip' => 'VPC design non-overlapping CIDRs.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Default gateway?',
        'options' => 
        array (
          0 => 'Router exit subnet to other networks',
          1 => 'DNS server',
          2 => 'Web server',
        ),
        'answer' => 'Router exit subnet to other networks',
        'explanation' => 'Route tables AWS GCP Azure.',
        'pro_tip' => 'Curso docker-networking extends.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'nw-tools',
    'order' => 4,
    'title' => 'Herramientas debug red',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'ping, traceroute, tcpdump.',
    'concepts' => 
    array (
      0 => 'ping',
      1 => 'traceroute',
      2 => 'tcpdump',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Diagnostics',
        'body' => 'ping ICMP reachability — traceroute path hops — mtr continuous — telnet/nc test port open.',
        'code' => '# Practica: nw-tools
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Capture',
        'body' => 'tcpdump/wireshark packets — filter host port — SSL termination see plaintext before encrypt.',
        'code' => '# Practica: nw-tools
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Connection refused vs timeout?',
        'options' => 
        array (
          0 => 'Refused port closed RST; timeout firewall drop',
          1 => 'Same error',
          2 => 'Refused DNS',
        ),
        'answer' => 'Refused port closed RST; timeout firewall drop',
        'explanation' => 'Different debug paths.',
        'pro_tip' => 'Security group vs service down.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿nc -zv host 5432?',
        'options' => 
        array (
          0 => 'Test TCP port open',
          1 => 'Ping ICMP',
          2 => 'DNS lookup',
        ),
        'answer' => 'Test TCP port open',
        'explanation' => 'DB connectivity check.',
        'pro_tip' => 'Compare telnet deprecated.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'nw-cloud',
    'order' => 5,
    'title' => 'Cloud networking',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'VPC, LB, CDN, firewalls.',
    'concepts' => 
    array (
      0 => 'vpc',
      1 => 'lb',
      2 => 'cdn',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'VPC',
        'body' => 'Public private subnets — NAT gateway outbound private — ALB public ingress.',
        'code' => '# Practica: nw-cloud
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'CDN',
        'body' => 'CloudFront Cloudflare edge cache static — reduce latency origin load.',
        'code' => '# Practica: nw-cloud
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Security group vs NACL?',
        'options' => 
        array (
          0 => 'SG stateful instance; NACL stateless subnet',
          1 => 'Same',
          2 => 'SG DNS only',
        ),
        'answer' => 'SG stateful instance; NACL stateless subnet',
        'explanation' => 'AWS two firewall layers.',
        'pro_tip' => 'Curso AWS cert VPC section.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Health check LB?',
        'options' => 
        array (
          0 => 'Remove unhealthy targets routing',
          1 => 'Encrypt traffic',
          2 => 'DNS only',
        ),
        'answer' => 'Remove unhealthy targets routing',
        'explanation' => '/health endpoint app.',
        'pro_tip' => 'Curso kubernetes ingress LB.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'nw-prod',
    'order' => 6,
    'title' => 'Networking producción',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Zero-length, DNS failover, zero trust.',
    'concepts' => 
    array (
      0 => 'mtu',
      1 => 'failover',
      2 => 'zero-trust',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'MTU issues',
        'body' => 'PMTUD black hole — MSS clamp VPN — mysterious large payload failures.',
        'code' => '# Practica: nw-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
      1 => 
      array (
        'heading' => 'Zero trust',
        'body' => 'No flat network trust — mTLS service mesh — VPN not enough alone modern.',
        'code' => '# Practica: nw-prod
echo "Listo"
# Reemplaza con tu comando',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Split horizon DNS?',
        'options' => 
        array (
          0 => 'Different answers internal vs external',
          1 => 'DNS broken',
          2 => 'CDN feature',
        ),
        'answer' => 'Different answers internal vs external',
        'explanation' => 'Private hosted zone AWS.',
        'pro_tip' => 'Internal ALB private DNS.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿First debug slow API?',
        'options' => 
        array (
          0 => 'DNS? TLS? DB? Trace waterfall',
          1 => 'Rewrite all code',
          2 => 'Buy bigger server only',
        ),
        'answer' => 'DNS? TLS? DB? Trace waterfall',
        'explanation' => 'Systematic layer check.',
        'pro_tip' => 'Curso observabilidad traces.',
      ),
    ),
  ),
);
