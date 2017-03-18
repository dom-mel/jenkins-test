<?php

use PHPUnit\Framework\TestCase;
include __DIR__ . '/../vendor/autoload.php';

class HelloTest extends TestCase
{
    public function testHello() {
        $hello = new Hello();
        $this->assertEquals("Hello World", $hello->sayHello("World"));
    }
}