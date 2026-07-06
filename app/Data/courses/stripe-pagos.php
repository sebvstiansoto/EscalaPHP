<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'st-intro',
    'order' => 1,
    'title' => 'Pagos online con Stripe',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'PCI, modelos Stripe y dashboard.',
    'concepts' => 
    array (
      0 => 'stripe',
      1 => 'pci',
      2 => 'payment',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Stripe',
        'body' => '**Stripe** procesa tarjetas, suscripciones y payouts — tú nunca tocas PAN (PCI scope reducido con Elements/Checkout).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-intro\';',
      ),
      1 => 
      array (
        'heading' => 'Modos',
        'body' => 'Test keys pk_test_ / sk_test_ — tarjetas de prueba 4242... sin cargo real.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-intro\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿PCI scope mínimo con Stripe?',
        'options' => 
        array (
          0 => 'Stripe.js/Checkout tokeniza — no PAN en tu server',
          1 => 'Guardar tarjetas en BD plain',
          2 => 'Logs con CVV',
        ),
        'answer' => 'Stripe.js/Checkout tokeniza — no PAN en tu server',
        'explanation' => 'SAQ A más simple.',
        'pro_tip' => 'Nunca loguees payment_method details.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Tarjeta test Stripe?',
        'options' => 
        array (
          0 => '4242424242424242',
          1 => '1234567890123456',
          2 => '0000000000000000 real',
        ),
        'answer' => '4242424242424242',
        'explanation' => 'Visa test success.',
        'pro_tip' => '4000... cards simulan errores.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'st-checkout',
    'order' => 2,
    'title' => 'Stripe Checkout',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Hosted checkout y sessions.',
    'concepts' => 
    array (
      0 => 'checkout',
      1 => 'session',
      2 => 'redirect',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Checkout Session',
        'body' => 'Backend crea Session con line_items → redirect URL hosted Stripe → success/cancel URLs.',
        'code' => '$session = \\Stripe\\Checkout\\Session::create([
  \'mode\' => \'payment\',
  \'line_items\' => [[\'price\' => \'price_xxx\', \'quantity\' => 1]],
  \'success_url\' => \'https://app.com/success\',
  \'cancel_url\' => \'https://app.com/cancel\',
]);',
      ),
      1 => 
      array (
        'heading' => 'Ventaja',
        'body' => 'UI pagos mantenida por Stripe — SCA/3DS incluido en Europa.',
        'code' => '\'success_url\' => \'https://...\'',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Checkout Session mode payment?',
        'options' => 
        array (
          0 => 'Pago único',
          1 => 'Suscripción only',
          2 => 'Transferencia banco',
        ),
        'answer' => 'Pago único',
        'explanation' => 'mode subscription para recurring.',
        'pro_tip' => 'success_url incluye session_id query.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe success_url en session',
        'must_contain' => 
        array (
          0 => 'success_url',
        ),
        'hint' => '\'success_url\' => \'https://...\'',
        'explanation' => 'Redirect post-pago.',
        'pro_tip' => 'Verifica session en success handler.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'st-webhooks',
    'order' => 3,
    'title' => 'Webhooks y eventos',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'checkout.session.completed, firma y idempotencia.',
    'concepts' => 
    array (
      0 => 'webhook',
      1 => 'signature',
      2 => 'idempotent',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Webhooks',
        'body' => 'Stripe POST eventos a tu endpoint — **fuente de verdad** para fulfillment (no solo success_url).',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-webhooks\';',
      ),
      1 => 
      array (
        'heading' => 'Verificación',
        'body' => 'Stripe-Signature header + webhook secret — rechaza payloads falsos.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-webhooks\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Por qué webhook vs solo success_url?',
        'options' => 
        array (
          0 => 'Usuario puede cerrar browser antes redirect',
          1 => 'Webhook más lento',
          2 => 'success_url ilegal',
        ),
        'answer' => 'Usuario puede cerrar browser antes redirect',
        'explanation' => 'Webhook garantiza procesamiento async.',
        'pro_tip' => 'Idempotency: guarda event.id procesado.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Evento pago completado checkout?',
        'options' => 
        array (
          0 => 'checkout.session.completed',
          1 => 'payment_intent.created only',
          2 => 'customer.deleted',
        ),
        'answer' => 'checkout.session.completed',
        'explanation' => 'Activa acceso producto aquí.',
        'pro_tip' => 'stripe listen CLI en dev.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'st-subscriptions',
    'order' => 4,
    'title' => 'Suscripciones y billing',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Products, prices, customer portal.',
    'concepts' => 
    array (
      0 => 'subscription',
      1 => 'price',
      2 => 'portal',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Modelo',
        'body' => 'Product → Price (recurring monthly/yearly) → Subscription ligada a Customer.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-subscriptions\';',
      ),
      1 => 
      array (
        'heading' => 'Customer Portal',
        'body' => 'Stripe hosted — usuario cambia tarjeta, cancela plan — menos código tuyo.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-subscriptions\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Entitlement tras subscribe?',
        'options' => 
        array (
          0 => 'Webhook customer.subscription.updated/active',
          1 => 'Solo UI botón',
          2 => 'Email manual',
        ),
        'answer' => 'Webhook customer.subscription.updated/active',
        'explanation' => 'Sync estado BD con Stripe.',
        'pro_tip' => 'Guarda stripe_customer_id en users.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Trial period?',
        'options' => 
        array (
          0 => 'trial_period_days en subscription create',
          1 => 'Imposible Stripe',
          2 => 'Solo anual',
        ),
        'answer' => 'trial_period_days en subscription create',
        'explanation' => 'Free trial nativo.',
        'pro_tip' => 'Proration en upgrade/downgrade.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'st-connect',
    'order' => 5,
    'title' => 'Stripe Connect marketplace',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Split payments y onboarding vendedores.',
    'concepts' => 
    array (
      0 => 'connect',
      1 => 'marketplace',
      2 => 'transfer',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Connect',
        'body' => 'Marketplace: comprador paga → plataforma fee → transfer a Connected Account vendedor.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-connect\';',
      ),
      1 => 
      array (
        'heading' => 'Onboarding',
        'body' => 'Account Links — KYC vendedores hosted Stripe — compliance simplificado.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-connect\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Connect use case?',
        'options' => 
        array (
          0 => 'Marketplace tipo Etsy/Uber',
          1 => 'Blog estático',
          2 => 'Login OAuth',
        ),
        'answer' => 'Marketplace tipo Etsy/Uber',
        'explanation' => 'Multi-party payments.',
        'pro_tip' => 'Express vs Standard accounts trade-offs.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Application fee?',
        'options' => 
        array (
          0 => 'Comisión plataforma en PaymentIntent',
          1 => 'Impuesto gobierno auto',
          2 => 'Webhook fee',
        ),
        'answer' => 'Comisión plataforma en PaymentIntent',
        'explanation' => 'application_fee_amount.',
        'pro_tip' => 'Separate charges and transfers pattern.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'st-prod',
    'order' => 6,
    'title' => 'Producción, disputas y compliance',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Radar, SCA, reconciliación.',
    'concepts' => 
    array (
      0 => 'radar',
      1 => 'sca',
      2 => 'dispute',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Radar',
        'body' => 'Fraud detection ML Stripe — rules custom block high-risk.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-prod\';',
      ),
      1 => 
      array (
        'heading' => 'Disputes',
        'body' => 'charge.dispute.created — responde evidencia en plazo — rate alto = cuenta restringida.',
        'code' => '<?php
declare(strict_types=1);

echo \'Practica: st-prod\';',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿SCA Europa?',
        'options' => 
        array (
          0 => '3D Secure autenticación reforzada',
          1 => 'Sin auth tarjeta',
          2 => 'Solo PayPal',
        ),
        'answer' => '3D Secure autenticación reforzada',
        'explanation' => 'PSD2 compliance.',
        'pro_tip' => 'Checkout maneja SCA flow.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Reconciliar pagos?',
        'options' => 
        array (
          0 => 'Dashboard + exports vs orders BD',
          1 => 'Ignorar Stripe',
          2 => 'Solo webhooks sin BD',
        ),
        'answer' => 'Dashboard + exports vs orders BD',
        'explanation' => 'Accounting y debugging.',
        'pro_tip' => 'Metadata order_id en PaymentIntent.',
      ),
    ),
  ),
  6 => 
  array (
    'slug' => 'stripe-pagos-produccion',
    'order' => 7,
    'title' => 'Patrones de producción y resiliencia',
    'level' => 'Producción',
    'minutes' => 35,
    'summary' => 'Patrones de producción y resiliencia — cierre avanzado de Stripe & pagos.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Stripe & pagos a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — stripe-pagos
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — stripe-pagos
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
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
    'slug' => 'stripe-pagos-operaciones',
    'order' => 8,
    'title' => 'Observabilidad, debugging y checklist de deploy',
    'level' => 'Avanzado',
    'minutes' => 35,
    'summary' => 'Observabilidad, debugging y checklist de deploy — cierre avanzado de Stripe & pagos.',
    'concepts' => 
    array (
      0 => 'production',
      1 => 'resilience',
      2 => 'ops',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Patrones en producción',
        'body' => 'Aplica lo aprendido en Stripe & pagos a un entorno real: límites, fallos parciales, idempotencia y métricas que importan en producción.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — stripe-pagos
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
      ),
      1 => 
      array (
        'heading' => 'Operación continua',
        'body' => 'Documenta runbooks, define SLOs, automatiza verificaciones post-deploy y revisa alertas antes de que los usuarios las reporten.',
        'code' => '<?php
declare(strict_types=1);

// Checklist post-deploy — stripe-pagos
$checks = [
    \'health\' => file_get_contents(\'https://app.test/health\') !== false,
    \'migrations\' => true,
    \'cache_warm\' => true,
];',
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
