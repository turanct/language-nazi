<?php

namespace spec\LanguageNazi\Formatting\Html;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UnderlineSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LanguageNazi\Formatting\Html\Underline');
        $this->shouldImplement('LanguageNazi\LanguageNazi');
    }

    function it_should_return_html_underlined_text()
    {
        $this->handle('test')->shouldReturn('<u>test</u>');
        $this->handle('this is a sentence. this is another sentence.')->shouldReturn('<u>this is a sentence. this is another sentence.</u>');
    }
}
