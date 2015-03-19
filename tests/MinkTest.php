<?php

namespace MinkExtra\Tests;

class MinkTest extends MinkTestCase
{
    public function testMinkExists()
    {
        $this->assertInstanceOf('Behat\Mink\Mink', $this->mink);
    }
    public function testMinkExtraAssertionExists()
    {
        $this->assertInstanceOf('MinkExtra\ExtraAssertion', $this->extraAssertion);
    }
    public function testAssertPhpunitFacade()
    {
        \MinkExtra\ExtraAssertion::phpunit()->assertTrue(true);
    }
    public function testAssertBeberleiFacade()
    {
        \MinkExtra\ExtraAssertion::beberlei()->boolean(true);
        \MinkExtra\ExtraAssertion::beberlei()->digit('1');
    }
    public function testAssertWebmozartFacade()
    {
        \MinkExtra\ExtraAssertion::webmozart()->startsWith('fooBar', 'foo');
    }
    public function testAssertWebAssert()
    {
        $this->assertInstanceOf(
            'Behat\Mink\WebAssert',
            \MinkExtra\ExtraAssertion::webAssert($this->mink)
        );
    }
    public function testAssertCustomMethodAssert()
    {
        $this->assertTrue(in_array(
            'elementIsVisible',
            get_class_methods(\MinkExtra\ExtraAssertion::webAssert($this->mink)))
        );
    }
}
