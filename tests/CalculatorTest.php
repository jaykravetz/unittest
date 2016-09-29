<?php

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function test_that_it_adds_numbers_correctly()
    {
        $calc = new \Unit\Calculator(new \Unit\BaseSerializer());

        $expected = 100;

        $actual = $calc->add(50, 25, 25);

        $this->assertEquals($expected, $actual, 'Calculator did not add numbers correctly as expected');
    }
}
