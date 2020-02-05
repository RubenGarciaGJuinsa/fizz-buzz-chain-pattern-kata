<?php

namespace Kata\Handler;

class SameNumberHandler
{
    public function process($number): ?string
    {
        return (string)$number;
    }
}