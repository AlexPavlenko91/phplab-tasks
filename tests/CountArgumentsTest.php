<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     * @param $input
     * @param $expected
     */
    public function testPositive($input, $expected)
    {
        $this->assertEquals($expected, countArguments(...$input));
    }

    public function positiveDataProvider(): array
    {
        return [
            [[], ['argument_count' => 0, 'argument_values' => []]],
            [['string1'], ['argument_count' => 1, 'argument_values' => ['string1']]],
            [['string1', 'string2'], ['argument_count' => 2, 'argument_values' => ['string1', 'string2']]]
        ];
    }
}