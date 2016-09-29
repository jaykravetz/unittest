<?php

use Unit\HtmlSerializer;

class HtmlSerializerTest extends \PHPUnit_Framework_TestCase
{
    public function test_that_it_serializes()
    {
        $s = new HtmlSerializer();

        $expected = '<h1>Hello</h1>';

        $actual = $s->serializeData('Hello');

        $this->assertEquals($expected, $actual, 'HtmlSerializer does not serialize as expected');
    }
}
