<?php

namespace spec\LanguageNazi\Grammar;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FirstCharacterOfSentenceShouldBeUppercaseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LanguageNazi\Grammar\FirstCharacterOfSentenceShouldBeUppercase');
        $this->shouldImplement('LanguageNazi\LanguageNazi');
    }

    function it_should_make_first_character_of_every_sentence_uppercase()
    {
        $this->handle('test')->shouldReturn('Test');
        $this->handle('this is a sentence. this is another sentence.')->shouldReturn('This is a sentence. This is another sentence.');
    }
}
