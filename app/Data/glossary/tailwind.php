<?php

declare(strict_types=1);

$cat = 'frontend';

return [
    ['slug' => 'tailwind', 'term' => 'Tailwind CSS', 'category' => $cat, 'definition' => 'Framework CSS utility-first: aplicas clases pequeñas (flex, p-4, text-lg) directamente en el HTML.'],
    ['slug' => 'utility', 'term' => 'Utility class', 'category' => $cat, 'definition' => 'Clase CSS de un solo propósito en Tailwind. Ejemplo: mt-4 para margin-top.'],
    ['slug' => 'config', 'term' => 'tailwind.config', 'category' => $cat, 'definition' => 'Archivo donde personalizas colores, fuentes, breakpoints y plugins de Tailwind.'],
    ['slug' => 'flex', 'term' => 'flex (Tailwind)', 'category' => $cat, 'definition' => 'Clase Tailwind que activa display:flex para layout flexible.'],
    ['slug' => 'gap', 'term' => 'gap', 'category' => $cat, 'definition' => 'Espacio entre elementos en flex o grid. En Tailwind: gap-2, gap-4, etc.'],
    ['slug' => 'spacing', 'term' => 'Spacing', 'category' => $cat, 'definition' => 'Sistema de márgenes y padding en Tailwind basado en escala (p-4, m-2, px-6).'],
    ['slug' => 'breakpoint', 'term' => 'Breakpoint', 'category' => $cat, 'definition' => 'Ancho de pantalla donde cambia el layout. Tailwind: sm, md, lg, xl, 2xl.'],
    ['slug' => 'mobile-first', 'term' => 'Mobile-first', 'category' => $cat, 'definition' => 'Diseñar primero para móvil y añadir estilos para pantallas grandes con prefijos (md:, lg:).'],
    ['slug' => 'button', 'term' => 'Button component', 'category' => $cat, 'definition' => 'Componente UI reutilizable para acciones del usuario, estilizado con Tailwind o CSS.'],
    ['slug' => 'card', 'term' => 'Card', 'category' => $cat, 'definition' => 'Contenedor visual con borde/sombra que agrupa información relacionada.'],
    ['slug' => 'dark-mode', 'term' => 'Dark mode', 'category' => $cat, 'definition' => 'Tema oscuro de la interfaz. Tailwind: class="dark" o prefers-color-scheme.'],
    ['slug' => 'theme', 'term' => 'Theme (tema)', 'category' => $cat, 'definition' => 'Conjunto de colores, tipografía y estilos que definen la apariencia de la app.'],
    ['slug' => 'classname', 'term' => 'className', 'category' => $cat, 'definition' => 'Prop de React equivalente al atributo class de HTML para aplicar estilos CSS.'],
    ['slug' => 'vite', 'term' => 'Vite', 'category' => $cat, 'definition' => 'Bundler y dev server ultrarrápido para proyectos frontend (React, Vue, Tailwind).'],
];
