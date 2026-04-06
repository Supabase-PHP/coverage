<?php

namespace App\Test;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd(): void
    {
        $result = $this->calculator->add(10, 5);

        $this->assertSame(15, $result);
    }

    public function testSubtract(): void
    {
        $result = $this->calculator->subtract(10, 5);

        $this->assertSame(5, $result);
    }

    public function testMultiply(): void
    {
        $result = $this->calculator->multiply(10, 5);

        $this->assertSame(50, $result);
    }

    public function testDivide(): void
    {
        $result = $this->calculator->divide(10, 5);

        $this->assertSame(2, $result);
    }

    public function testDivideByZeroThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Division by zero is not allowed.');

        $this->calculator->divide(10, 0);
    }
}
