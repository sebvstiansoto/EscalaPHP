<?php

declare(strict_types=1);

return [
    ['slug' => 'nw-intro', 'order' => 1, 'title' => 'Networking para devs', 'level' => 'Conceptos', 'minutes' => 30, 'summary' => 'OSI, TCP/IP, DNS basics.', 'concepts' => ['osi', 'tcp', 'dns'], 'sections' => [
        ['heading' => 'Layers', 'body' => 'OSI model — app HTTP, transport TCP/UDP, network IP — debug knowing layer helps.'],
        ['heading' => 'TCP vs UDP', 'body' => 'TCP reliable ordered — HTTP WebSocket — UDP fast loss OK video DNS queries.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿DNS role?', 'options' => ['Domain name to IP address', 'Encrypt traffic', 'Compile code'], 'answer' => 'Domain name to IP address', 'explanation' => 'A record CNAME TTL.', 'pro_tip' => 'dig nslookup debug.'],
        ['type' => 'choice', 'question' => '¿Port 443?', 'options' => ['HTTPS default', 'SSH', 'PostgreSQL'], 'answer' => 'HTTPS default', 'explanation' => '80 HTTP, 22 SSH, 5432 Postgres.', 'pro_tip' => 'Curso nginx-proxy ports.'],
    ]],
    ['slug' => 'nw-http', 'order' => 2, 'title' => 'HTTP deep dive', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Headers, TLS, HTTP/2/3.', 'concepts' => ['http', 'tls', 'http2'], 'sections' => [
        ['heading' => 'HTTP', 'body' => 'Request method path headers body — response status headers — keep-alive connection reuse.'],
        ['heading' => 'TLS', 'body' => 'HTTPS encrypt transport — cert chain Let\'s Encrypt — HSTS force HTTPS.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿HTTP/2 benefit?', 'options' => ['Multiplex single connection', 'No encryption', 'Replace TCP'], 'answer' => 'Multiplex single connection', 'explanation' => 'Header compression HPACK.', 'pro_tip' => 'HTTP/3 QUIC UDP based.'],
        ['type' => 'choice', 'question' => '¿curl -I?', 'options' => ['HEAD request headers only', 'DELETE all', 'Install package'], 'answer' => 'HEAD request headers only', 'explanation' => 'Debug cache headers fast.', 'pro_tip' => 'curl -v verbose TLS handshake.'],
    ]],
    ['slug' => 'nw-ip', 'order' => 3, 'title' => 'IP, subnet, routing', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'CIDR, private ranges, NAT.', 'concepts' => ['cidr', 'subnet', 'nat'], 'sections' => [
        ['heading' => 'IP addressing', 'body' => '10.0.0.0/8, 172.16/12, 192.168/16 private — CIDR notation host count.'],
        ['heading' => 'NAT', 'body' => 'Private IPs internet via NAT gateway — Docker bridge networks similar concept.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿/24 subnet?', 'options' => ['256 addresses class C style', 'One host only', 'Entire internet'], 'answer' => '256 addresses class C style', 'explanation' => '255.255.255.0 mask.', 'pro_tip' => 'VPC design non-overlapping CIDRs.'],
        ['type' => 'choice', 'question' => '¿Default gateway?', 'options' => ['Router exit subnet to other networks', 'DNS server', 'Web server'], 'answer' => 'Router exit subnet to other networks', 'explanation' => 'Route tables AWS GCP Azure.', 'pro_tip' => 'Curso docker-networking extends.'],
    ]],
    ['slug' => 'nw-tools', 'order' => 4, 'title' => 'Herramientas debug red', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'ping, traceroute, tcpdump.', 'concepts' => ['ping', 'traceroute', 'tcpdump'], 'sections' => [
        ['heading' => 'Diagnostics', 'body' => 'ping ICMP reachability — traceroute path hops — mtr continuous — telnet/nc test port open.'],
        ['heading' => 'Capture', 'body' => 'tcpdump/wireshark packets — filter host port — SSL termination see plaintext before encrypt.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Connection refused vs timeout?', 'options' => ['Refused port closed RST; timeout firewall drop', 'Same error', 'Refused DNS'], 'answer' => 'Refused port closed RST; timeout firewall drop', 'explanation' => 'Different debug paths.', 'pro_tip' => 'Security group vs service down.'],
        ['type' => 'choice', 'question' => '¿nc -zv host 5432?', 'options' => ['Test TCP port open', 'Ping ICMP', 'DNS lookup'], 'answer' => 'Test TCP port open', 'explanation' => 'DB connectivity check.', 'pro_tip' => 'Compare telnet deprecated.'],
    ]],
    ['slug' => 'nw-cloud', 'order' => 5, 'title' => 'Cloud networking', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'VPC, LB, CDN, firewalls.', 'concepts' => ['vpc', 'lb', 'cdn'], 'sections' => [
        ['heading' => 'VPC', 'body' => 'Public private subnets — NAT gateway outbound private — ALB public ingress.'],
        ['heading' => 'CDN', 'body' => 'CloudFront Cloudflare edge cache static — reduce latency origin load.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Security group vs NACL?', 'options' => ['SG stateful instance; NACL stateless subnet', 'Same', 'SG DNS only'], 'answer' => 'SG stateful instance; NACL stateless subnet', 'explanation' => 'AWS two firewall layers.', 'pro_tip' => 'Curso AWS cert VPC section.'],
        ['type' => 'choice', 'question' => '¿Health check LB?', 'options' => ['Remove unhealthy targets routing', 'Encrypt traffic', 'DNS only'], 'answer' => 'Remove unhealthy targets routing', 'explanation' => '/health endpoint app.', 'pro_tip' => 'Curso kubernetes ingress LB.'],
    ]],
    ['slug' => 'nw-prod', 'order' => 6, 'title' => 'Networking producción', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Zero-length, DNS failover, zero trust.', 'concepts' => ['mtu', 'failover', 'zero-trust'], 'sections' => [
        ['heading' => 'MTU issues', 'body' => 'PMTUD black hole — MSS clamp VPN — mysterious large payload failures.'],
        ['heading' => 'Zero trust', 'body' => 'No flat network trust — mTLS service mesh — VPN not enough alone modern.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Split horizon DNS?', 'options' => ['Different answers internal vs external', 'DNS broken', 'CDN feature'], 'answer' => 'Different answers internal vs external', 'explanation' => 'Private hosted zone AWS.', 'pro_tip' => 'Internal ALB private DNS.'],
        ['type' => 'choice', 'question' => '¿First debug slow API?', 'options' => ['DNS? TLS? DB? Trace waterfall', 'Rewrite all code', 'Buy bigger server only'], 'answer' => 'DNS? TLS? DB? Trace waterfall', 'explanation' => 'Systematic layer check.', 'pro_tip' => 'Curso observabilidad traces.'],
    ]],
];
