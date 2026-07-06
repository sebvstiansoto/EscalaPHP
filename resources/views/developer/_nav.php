<?php declare(strict_types=1);

$current = $devNavCurrent ?? 'hub';
$items = [
    'hub' => ['url' => '/developer', 'label' => 'Inicio', 'icon' => '⌂'],
    'mapa' => ['url' => '/mapa-developer', 'label' => 'Mapa', 'icon' => '🗺'],
    'checklist' => ['url' => '/checklist-developer', 'label' => 'Checklist', 'icon' => '✓'],
    'conexiones' => ['url' => '/conexiones', 'label' => 'Conexiones', 'icon' => '🔗'],
    'troubleshooting' => ['url' => '/troubleshooting', 'label' => 'Errores', 'icon' => '🔧'],
    'dia-a-dia' => ['url' => '/dia-developer', 'label' => 'Día a día', 'icon' => '☀'],
    'glosario' => ['url' => '/glosario', 'label' => 'Glosario', 'icon' => '📖'],
];
?>

<nav class="dev-subnav" aria-label="Secciones de la guía del developer">
    <?php foreach ($items as $key => $item): ?>
        <a
            href="<?= htmlspecialchars($item['url']) ?>"
            class="dev-subnav-link <?= $key === $current ? 'is-active' : '' ?>"
        >
            <span aria-hidden="true"><?= htmlspecialchars($item['icon']) ?></span>
            <?= htmlspecialchars($item['label']) ?>
        </a>
    <?php endforeach; ?>
</nav>
