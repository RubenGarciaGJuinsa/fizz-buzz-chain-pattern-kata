<?php

namespace Kata\Handler;

class SameNumberHandler extends FizzBuzzHandler
{
    protected function process($number): ?string
    {
        return (string)$number;
    }
}