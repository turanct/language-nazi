<?php

namespace LanguageNazi\Formatting\Html;

use LanguageNazi\LanguageNazi;

final class Underline extends LanguageNazi
{
    public function handle($text)
    {
        $text = '<u>' . $text . '</u>';

        return $text;
    }
}
