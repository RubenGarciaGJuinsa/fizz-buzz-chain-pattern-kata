<?php

namespace Kata\Handler;

class FizzHandler extends FizzBuzzHandler
{
    const FIZZ_NUMBER = 3;

    protected function process($number): ?string
    {
        if ($this->isDivisibleByFizzNumber($number)) {
            return 'Fizz';
        }

        return null;
    }

    /**
     * @param $number
     * @return bool
     */
    protected function isDivisibleByFizzNumber($number): bool
    {
        return $number % self::FIZZ_NUMBER == 0;
    }
}