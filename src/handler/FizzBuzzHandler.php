<?php

namespace Kata\Handler;

abstract class FizzBuzzHandler
{
    private ?FizzBuzzHandler $successor;

    public function __construct(?FizzBuzzHandler $nextHandler = null)
    {
        $this->successor = $nextHandler;
    }

    final public function handle($number, $predecessorResult = ''): ?string
    {
        $result = $predecessorResult.$this->process($number, $predecessorResult);

        if ( ! is_null($this->successor)) {
            $result = $this->successor->handle($number, $result);
        }

        return $result;
    }

    abstract protected function process($number, $predecessorResult = ''): ?string;
}