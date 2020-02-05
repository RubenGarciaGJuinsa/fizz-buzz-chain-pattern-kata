<?php


namespace Kata;


use Kata\Handler\SameNumberHandler;

class FizzBuzz
{
    public function print($number)
    {
        if ($number == 3) {
            return 'Fizz';
        }

        $handler = new SameNumberHandler();

        return $handler->handle($number);
    }
}