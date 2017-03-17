<?php

use PHPUnit\Framework\TestCase;
include '../vendor/autoload.php';

class HelloTest extends TestCase
{
    public function testHello() {
        $hello = new Hello();
        $this->assertEquals("Hello World", $hello->sayHello("World"));
    }
}