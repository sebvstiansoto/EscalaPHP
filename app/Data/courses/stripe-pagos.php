<?php

declare(strict_types=1);

return [
    [
        'slug' => 'st-intro',
        'order' => 1,
        'title' => 'Pagos online con Stripe',
        'level' => 'Conceptos',
        'minutes' => 25,
        'summary' => 'PCI, modelos Stripe y dashboard.',
        'concepts' => ['stripe', 'pci', 'payment'],
        'sections' => [
            ['heading' => 'Stripe', 'body' => '**Stripe** procesa tarjetas, suscripciones y payouts — tú nunca tocas PAN (PCI scope reducido con Elements/Checkout).'],
            ['heading' => 'Modos', 'body' => 'Test keys pk_test_ / sk_test_ — tarjetas de prueba 4242... sin cargo real.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿PCI scope mínimo con Stripe?', 'options' => ['Stripe.js/Checkout tokeniza — no PAN en tu server', 'Guardar tarjetas en BD plain', 'Logs con CVV'], 'answer' => 'Stripe.js/Checkout tokeniza — no PAN en tu server', 'explanation' => 'SAQ A más simple.', 'pro_tip' => 'Nunca loguees payment_method details.'],
            ['type' => 'choice', 'question' => '¿Tarjeta test Stripe?', 'options' => ['4242424242424242', '1234567890123456', '0000000000000000 real'], 'answer' => '4242424242424242', 'explanation' => 'Visa test success.', 'pro_tip' => '4000... cards simulan errores.'],
        ],
    ],
    [
        'slug' => 'st-checkout',
        'order' => 2,
        'title' => 'Stripe Checkout',
        'level' => 'Práctica',
        'minutes' => 35,
        'summary' => 'Hosted checkout y sessions.',
        'concepts' => ['checkout', 'session', 'redirect'],
        'sections' => [
            ['heading' => 'Checkout Session', 'body' => 'Backend crea Session con line_items → redirect URL hosted Stripe → success/cancel URLs.', 'code' => "\$session = \\Stripe\\Checkout\\Session::create([\n  'mode' => 'payment',\n  'line_items' => [['price' => 'price_xxx', 'quantity' => 1]],\n  'success_url' => 'https://app.com/success',\n  'cancel_url' => 'https://app.com/cancel',\n]);"],
            ['heading' => 'Ventaja', 'body' => 'UI pagos mantenida por Stripe — SCA/3DS incluido en Europa.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Checkout Session mode payment?', 'options' => ['Pago único', 'Suscripción only', 'Transferencia banco'], 'answer' => 'Pago único', 'explanation' => 'mode subscription para recurring.', 'pro_tip' => 'success_url incluye session_id query.'],
            ['type' => 'contains', 'question' => 'Escribe success_url en session', 'must_contain' => ['success_url'], 'hint' => "'success_url' => 'https://...'", 'explanation' => 'Redirect post-pago.', 'pro_tip' => 'Verifica session en success handler.'],
        ],
    ],
    [
        'slug' => 'st-webhooks',
        'order' => 3,
        'title' => 'Webhooks y eventos',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => 'checkout.session.completed, firma y idempotencia.',
        'concepts' => ['webhook', 'signature', 'idempotent'],
        'sections' => [
            ['heading' => 'Webhooks', 'body' => 'Stripe POST eventos a tu endpoint — **fuente de verdad** para fulfillment (no solo success_url).'],
            ['heading' => 'Verificación', 'body' => 'Stripe-Signature header + webhook secret — rechaza payloads falsos.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Por qué webhook vs solo success_url?', 'options' => ['Usuario puede cerrar browser antes redirect', 'Webhook más lento', 'success_url ilegal'], 'answer' => 'Usuario puede cerrar browser antes redirect', 'explanation' => 'Webhook garantiza procesamiento async.', 'pro_tip' => 'Idempotency: guarda event.id procesado.'],
            ['type' => 'choice', 'question' => '¿Evento pago completado checkout?', 'options' => ['checkout.session.completed', 'payment_intent.created only', 'customer.deleted'], 'answer' => 'checkout.session.completed', 'explanation' => 'Activa acceso producto aquí.', 'pro_tip' => 'stripe listen CLI en dev.'],
        ],
    ],
    [
        'slug' => 'st-subscriptions',
        'order' => 4,
        'title' => 'Suscripciones y billing',
        'level' => 'Intermedio',
        'minutes' => 40,
        'summary' => 'Products, prices, customer portal.',
        'concepts' => ['subscription', 'price', 'portal'],
        'sections' => [
            ['heading' => 'Modelo', 'body' => 'Product → Price (recurring monthly/yearly) → Subscription ligada a Customer.'],
            ['heading' => 'Customer Portal', 'body' => 'Stripe hosted — usuario cambia tarjeta, cancela plan — menos código tuyo.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Entitlement tras subscribe?', 'options' => ['Webhook customer.subscription.updated/active', 'Solo UI botón', 'Email manual'], 'answer' => 'Webhook customer.subscription.updated/active', 'explanation' => 'Sync estado BD con Stripe.', 'pro_tip' => 'Guarda stripe_customer_id en users.'],
            ['type' => 'choice', 'question' => '¿Trial period?', 'options' => ['trial_period_days en subscription create', 'Imposible Stripe', 'Solo anual'], 'answer' => 'trial_period_days en subscription create', 'explanation' => 'Free trial nativo.', 'pro_tip' => 'Proration en upgrade/downgrade.'],
        ],
    ],
    [
        'slug' => 'st-connect',
        'order' => 5,
        'title' => 'Stripe Connect marketplace',
        'level' => 'Avanzado',
        'minutes' => 35,
        'summary' => 'Split payments y onboarding vendedores.',
        'concepts' => ['connect', 'marketplace', 'transfer'],
        'sections' => [
            ['heading' => 'Connect', 'body' => 'Marketplace: comprador paga → plataforma fee → transfer a Connected Account vendedor.'],
            ['heading' => 'Onboarding', 'body' => 'Account Links — KYC vendedores hosted Stripe — compliance simplificado.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿Connect use case?', 'options' => ['Marketplace tipo Etsy/Uber', 'Blog estático', 'Login OAuth'], 'answer' => 'Marketplace tipo Etsy/Uber', 'explanation' => 'Multi-party payments.', 'pro_tip' => 'Express vs Standard accounts trade-offs.'],
            ['type' => 'choice', 'question' => '¿Application fee?', 'options' => ['Comisión plataforma en PaymentIntent', 'Impuesto gobierno auto', 'Webhook fee'], 'answer' => 'Comisión plataforma en PaymentIntent', 'explanation' => 'application_fee_amount.', 'pro_tip' => 'Separate charges and transfers pattern.'],
        ],
    ],
    [
        'slug' => 'st-prod',
        'order' => 6,
        'title' => 'Producción, disputas y compliance',
        'level' => 'Producción',
        'minutes' => 30,
        'summary' => 'Radar, SCA, reconciliación.',
        'concepts' => ['radar', 'sca', 'dispute'],
        'sections' => [
            ['heading' => 'Radar', 'body' => 'Fraud detection ML Stripe — rules custom block high-risk.'],
            ['heading' => 'Disputes', 'body' => 'charge.dispute.created — responde evidencia en plazo — rate alto = cuenta restringida.'],
        ],
        'exercises' => [
            ['type' => 'choice', 'question' => '¿SCA Europa?', 'options' => ['3D Secure autenticación reforzada', 'Sin auth tarjeta', 'Solo PayPal'], 'answer' => '3D Secure autenticación reforzada', 'explanation' => 'PSD2 compliance.', 'pro_tip' => 'Checkout maneja SCA flow.'],
            ['type' => 'choice', 'question' => '¿Reconciliar pagos?', 'options' => ['Dashboard + exports vs orders BD', 'Ignorar Stripe', 'Solo webhooks sin BD'], 'answer' => 'Dashboard + exports vs orders BD', 'explanation' => 'Accounting y debugging.', 'pro_tip' => 'Metadata order_id en PaymentIntent.'],
        ],
    ],
];
