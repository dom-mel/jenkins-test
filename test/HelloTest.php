<?php

use PHPUnit\Framework\TestCase;


class HelloTest extends TestCase
{
    public function testHello() {
        $hello = new Hello();
        $this->assertEquals("Hello World", $hello->hello("World"));
    }
}