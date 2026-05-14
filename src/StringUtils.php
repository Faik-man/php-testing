<?php

declare(strict_types=1);

namespace App\StringUtils;

function capitalize(string $text): string {
    if (strlen($text) == 0) {
        return '';
    }

    $first = mb_strtoupper(mb_substr($text, 0, 1));
    $rest = mb_substr($text, 1);
    return "{$first}{$rest}";
}
