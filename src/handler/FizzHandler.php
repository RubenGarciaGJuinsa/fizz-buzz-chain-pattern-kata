<?php

namespace Kata\Handler;

class FizzHandler extends FizzBuzzHandler
{
    protected function process($number): ?string
    {
        if ($number == 3) {
            return 'Fizz';
        }

        return null;
    }
}