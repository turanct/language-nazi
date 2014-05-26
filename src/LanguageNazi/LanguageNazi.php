<?php

namespace LanguageNazi;

abstract class LanguageNazi
{
    /**
     * @var LanguageNazi\LanguageNazi The next class in the chain
     */
    private $next;

    /**
     * Handle the given text
     *
     * This method should be implemented by extending classes. It should take the
     * incoming text and apply the current LanguageNazi/filter on it.
     *
     * @param string $text The input text
     *
     * @return string The output text
     */
    abstract public function handle($text);

    /**
     * Process a given text
     *
     * @param string $text The text we want to process
     *
     * @return string The return string
     */
    final public function process($text)
    {
        $text = $this->handle($text);

        if ($this->next !== null) {
            $text = $this->next->process($text);
        }

        return $text;
    }

    /**
     * Set the next class in the chain
     *
     * @param LanguageNazi\LanguageNazi $next The next class in the chain
     *
     * @return LanguageNazi\LanguageNazi The next class in the chain, for chainging methods
     */
    final public function nextNazi(LanguageNazi $next)
    {
        $this->next = $next;

        return $next;
    }
}
