<?php

namespace spec;

use movieCollection;
use PhpSpec\ObjectBehavior;

class movieCollectionSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(movieCollection::class);
    }
    public function it_is_killable()
    {
        $this->kill()->shouldReturn([]);
    }
}
