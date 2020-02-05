<?php
namespace Test;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function
    pass_one_get_one()
    {
        $fizzBuzz = new FizzBuzz();
        $response = $fizzBuzz->print(1);
        $this->assertEquals('1', $response);
    }
}