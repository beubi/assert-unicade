<?php

namespace AssertHandler\Tests;

class MinkTest extends MinkTestCase
{
    public function testMinkExists()
    {
        $this->assertInstanceOf('Behat\Mink\Mink', $this->mink);
    }
    public function testAssertHandlerExists()
    {
        $this->assertInstanceOf('AssertHandler\AssertHandler', $this->assertHandler);
    }
    public function testAssertPhpunitFacade()
    {
        \AssertHandler\AssertHandler::phpunit()->assertTrue(true);
    }
    public function testAssertWebAssert()
    {
        $this->assertInstanceOf('Behat\Mink\WebAssert', \AssertHandler\AssertHandler::webAssert($this->mink));
    }
    public function testAssertCustomMethodAssert()
    {
        $this->assertTrue(in_array('elementIsVisible', get_class_methods(\AssertHandler\AssertHandler::webAssert($this->mink))));
    }
}
