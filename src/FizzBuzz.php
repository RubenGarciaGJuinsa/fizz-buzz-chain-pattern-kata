<?php


namespace Kata;


use Kata\Handler\BuzzHandler;
use Kata\Handler\FizzHandler;
use Kata\Handler\SameNumberHandler;

class FizzBuzz
{
    public function print($number)
    {
        $handler =
            new FizzHandler(
                new BuzzHandler(
                    new SameNumberHandler()
                )
            );

        return $handler->handle($number);
    }
}