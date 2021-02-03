<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    /**
     * @param $expected
     * @param $input
     */

    public function testPositive($expected, $input)
    {
        $this->assertEquals($expected, sayHelloArgumentWrapper($input));
    }

    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);
    }#
}