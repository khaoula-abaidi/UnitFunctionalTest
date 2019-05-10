<?php


namespace App\Tests;

use App\Util\Calculator;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}