<?php

declare(strict_types=1);

function render_markdownish(string $text): string
{
    $text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $text = preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', $text) ?? $text;
    $text = preg_replace('/`([^`]+)`/', '<code>$1</code>', $text) ?? $text;

    return nl2br($text);
}
