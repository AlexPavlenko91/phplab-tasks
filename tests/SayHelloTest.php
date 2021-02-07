<?php

use PHPUnit\Framework\TestCase;

class SayHelloTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     * @param $expected
     */
    public function testPositive($expected)
    {
        $this->assertEquals($expected, sayHello());
    }

    public function positiveDataProvider(): array
    {
        return [
            ['Hello'],
            ['Hello', ''],
            ['Hello', 'tryingToPassArgs'],
            ['Hello', 1],
        ];
    }
}