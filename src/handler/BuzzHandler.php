<?php

namespace Kata\Handler;

class BuzzHandler extends FizzBuzzHandler
{
    const BUZZ_NUMBER = 5;

    protected function process($number, $predecessorResult = ''): ?string
    {
        if ($this->isDivisibleByBuzzNumber($number)) {
            return 'Buzz';
        }

        return null;
    }

    /**
     * @param $number
     * @return bool
     */
    protected function isDivisibleByBuzzNumber($number): bool
    {
        return $number % self::BUZZ_NUMBER == 0;
    }
}