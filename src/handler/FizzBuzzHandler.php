<?php

namespace Kata\Handler;

abstract class FizzBuzzHandler
{
    private ?FizzBuzzHandler $successor;

    public function __construct(?FizzBuzzHandler $nextHandler = null)
    {
        $this->successor = $nextHandler;
    }

    final public function handle($number): ?string
    {
        $result = $this->process($number);

        if (is_null($result) && ! is_null($this->successor)) {
            $result = $this->successor->handle($number);
        }

        return $result;
    }

    abstract protected function process($number): ?string;
}