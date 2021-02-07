<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsWrapperTest extends TestCase
{
    /**
     * @dataProvider exceptionDataProvider
     * @param $input
     */

    public function testException(...$input)
    {
        $this->expectException(InvalidArgumentException::class);
        countArgumentsWrapper($input);
    }

    public function exceptionDataProvider(): array
    {
        return [
            [],
            ['first', 'second', [1, 2]],
            [(object)['first', 'second']]
        ];
    }
}