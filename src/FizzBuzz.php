<?php


namespace Kata;


use Kata\Handler\SameNumberHandler;

class FizzBuzz
{
    public function print($number)
    {
        $handler = new SameNumberHandler();

        return $handler->process($number);
    }
}