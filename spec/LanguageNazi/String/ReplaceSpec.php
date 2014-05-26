<?php

namespace spec\LanguageNazi\String;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReplaceSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('/(\w+)Nazi/i', '$1Hero');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LanguageNazi\String\Replace');
        $this->shouldImplement('LanguageNazi\LanguageNazi');
    }

    function it_should_replace_text_like_described_in_construct()
    {
        $this->handle('Turanct is a LanguageNazi')->shouldReturn('Turanct is a LanguageHero');
    }
}
