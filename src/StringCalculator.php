<?php

class StringCalculator
{

    const MAX_NUMBER_ALLOWED = 1000;
    public function add($numbers)
    {
        $numbers = $this->parseNumbers($numbers);
        $solution = 0;
        foreach ($numbers as $number) {
            if ($number < 0) {
                throw new InvalidArgumentException("Invalid number provided: $number");
            }
            if ($number >= self::MAX_NUMBER_ALLOWED) {
                continue;
            }

            $solution += $number;
        }
        return $solution;
    }
    private function parseNumbers($numbers)
    {
        return array_map('intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
    }
}
