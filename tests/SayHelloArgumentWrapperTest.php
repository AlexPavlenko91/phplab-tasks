<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);
        sayHelloArgumentWrapper([1,2,3]);
        sayHelloArgumentWrapper([1,2,['first', 'second']]);
        sayHelloArgumentWrapper((object)[1,2,3]);
    }
}