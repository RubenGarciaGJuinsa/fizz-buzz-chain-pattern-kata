<?php


namespace Kata;


use Kata\Handler\FizzHandler;
use Kata\Handler\SameNumberHandler;

class FizzBuzz
{
    public function print($number)
    {
        if ($number % 5 == 0) {
            return 'Buzz';
        }
        $handler = new FizzHandler(
            new SameNumberHandler()
        );

        return $handler->handle($number);
    }
}