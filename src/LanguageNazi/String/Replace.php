<?php

namespace LanguageNazi\String;

use LanguageNazi\LanguageNazi;

final class Replace extends LanguageNazi
{
    protected $regex;
    protected $replace;

    public function __construct($regex, $replace)
    {
        $this->regex = (string) $regex;
        $this->replace = (string) $replace;
    }

    public function handle($text)
    {
        return preg_replace($this->regex, $this->replace, $text);
    }
}
