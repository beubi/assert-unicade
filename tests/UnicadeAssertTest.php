<?php

namespace UnicadeAssert\Tests;

class UnicadeAssertTest extends TestCase
{
    public function testAssertAssertionExists()
    {
        $this->assertInstanceOf('UnicadeAssert\Useup', $this->useup);
    }
    public function testAssertPhpunitFacade()
    {
        \UnicadeAssert\Useup::phpunit()->assertTrue(true);
        $this->useup->phpunit()->assertFalse(false);
    }
    public function testAssertBeberleiFacade()
    {
        \UnicadeAssert\Useup::beberlei()->boolean(true);
        $this->useup->beberlei()->boolean(false);
        \UnicadeAssert\Useup::beberlei()->digit('1');
        $this->useup->beberlei()->digit('2');
    }
    public function testAssertWebmozartFacade()
    {
        \UnicadeAssert\Useup::webmozart()->startsWith('fooBar', 'foo');
        $this->useup->webmozart()->startsWith('fooBar', 'foo');
    }
}
