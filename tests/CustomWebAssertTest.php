<?php

namespace UnicadeAssert\Tests;

class CustomWebAssertTest extends MinkTestCase
{
    public function testMinkExists()
    {
        $this->assertInstanceOf('Behat\Mink\Mink', $this->mink);
    }
    public function testAssertWebAssert()
    {
        $this->assertInstanceOf(
            'Behat\Mink\WebAssert',
            \UnicadeAssert\Useup::webAssert($this->mink)
        );
    }
    public function testAssertCustomMethodAssert()
    {
        $this->assertTrue(in_array(
            'elementIsVisible',
            get_class_methods(\UnicadeAssert\Useup::webAssert($this->mink)))
        );
    }
}
