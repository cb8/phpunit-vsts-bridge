<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSuccess()
    {
        $this->assertTrue(true);
        $this->assertTrue(true);
        $this->assertTrue(true);
    }

    public function testFailure()
    {
        $this->assertTrue(true);
        $this->assertTrue(false);
    }

    public function testError()
    {
        0 / 0;
    }

    /**
     * @dataProvider getSamples
     */
    public function testProvider($sample)
    {
        $this->assertTrue($sample);
    }

    public function getSamples()
    {
        return [[true], [true], [false]];
    }
}
