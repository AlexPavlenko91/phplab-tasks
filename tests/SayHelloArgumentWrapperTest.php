<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     * @param $expected
     * @param $input
     */
    public function testPositive($expected, $input)
    {
        $this->assertEquals($expected, sayHelloArgumentWrapper($input));
    }

    public function positiveDataProvider(): array
    {
        return [
            ['Hello friend', 'friend'],
            ['Hello ', ''],
            ['Hello 123', 123],
            ['Hello -1', -1]
        ];
    }
}