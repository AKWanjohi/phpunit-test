<?php

use App\Calculate;
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{
    public function testAddition()
    {
        $calculate = new Calculate();

        $this->assertEquals(2, $calculate->add(1, 1));
    }

    public function testSubtraction()
    {
        $calculate = new Calculate();

        $this->assertEquals(0, $calculate->subtract(1, 1));
    }

    public function testMultiplication()
    {
        $calculate = new Calculate();

        $this->assertEquals(1, $calculate->multiply(1, 1));
    }
}
