<?php

namespace LanguageNazi\Grammar;

use LanguageNazi\LanguageNazi;

final class FirstCharacterOfSentenceShouldBeUpperCase extends LanguageNazi
{
    public function handle($text)
    {
        $sentences = preg_split('/[.!?;]+\s/i', $text);

        foreach($sentences as $sentence) {
            $text = str_replace($sentence, ucfirst($sentence), $text);
        }

        return $text;
    }
}
