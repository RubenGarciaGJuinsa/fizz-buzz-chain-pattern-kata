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

    /** @test */
    public function
    pass_three_get_fizz()
    {
        $fizzBuzz = new FizzBuzz();
        $response = $fizzBuzz->print(3);
        $this->assertEquals('Fizz', $response);
    }

    /** @test */
    public function
    pass_six_get_fizz()
    {
        $fizzBuzz = new FizzBuzz();
        $response = $fizzBuzz->print(6);
        $this->assertEquals('Fizz', $response);
    }

    /** @test */
    public function
    pass_five_get_buzz()
    {
        $fizzBuzz = new FizzBuzz();
        $response = $fizzBuzz->print(5);
        $this->assertEquals('Buzz', $response);
    }

    /** @test */
    public function
    pass_fifteen_get_fizzbuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $response = $fizzBuzz->print(15);
        $this->assertEquals('FizzBuzz', $response);
    }
}