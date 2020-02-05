<?php

namespace Kata\Handler;

class SameNumberHandler extends FizzBuzzHandler
{
    protected function process($number, $predecessorResult = ''): ?string
    {
        return empty($predecessorResult)?(string)$number:'';
    }
}