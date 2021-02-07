<?php

use PHPUnit\Framework\TestCase;


class SayHelloArgumentWrapperTest extends TestCase
{
    /**
     * @dataProvider exceptionDataProvider
     * @param $input
     */

    public function testException($input)
    {
        $this->expectException(InvalidArgumentException::class);
        sayHelloArgumentWrapper($input);
    }

    public function exceptionDataProvider(): array
    {
        return [
            [null],
            [[1, 2, ['first', 'second']]],
            [(object)[1, 2, 3]]
        ];
    }
}