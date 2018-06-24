<?php

namespace spec;

use InvalidArgumentException;
use PhpSpec\ObjectBehavior;

class StringCalculatorSpec extends ObjectBehavior
{
    public function it_translates_an_empty_string_to_zero()
    {
        $this->add('')->shouldEqual(0);
    }
    public function it_finds_the_sum_of_one_number()
    {
        $this->add('5')->shouldEqual(5);
    }
    public function it_should_find_the_sum_of_two_numbers()
    {
        $this->add('1,2')->shouldEqual(3);
    }
    public function it_finds_the_sum_of_any_amount_of_numbers()
    {
        $this->add('1,2,3,4,5')->shouldEqual(15);
    }
    public function it_disallows_negative_numbers()
    {
        $this->shouldThrow(new InvalidArgumentException('Invalid number provided: -2'))->duringAdd('3,-2');
    }
    public function it_ignores_any_number_that_is_1000_or_greater()
    {
        $this->add('2,2,1000')->shouldEqual(4);
    }
    public function it_allows_for_newline_delimiters()
    {
        $this->add('2,2\n2')->shouldEqual(6);
    }
}
