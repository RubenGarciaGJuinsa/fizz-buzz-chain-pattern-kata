<?php

namespace Kata\Handler;

class FizzHandler extends FizzBuzzHandler
{
    const FIZZ_NUMBER = 3;

    protected function process($number): ?string
    {
        if ($number == self::FIZZ_NUMBER) {
            return 'Fizz';
        }

        return null;
    }
}