<?php

namespace UnicadeAssert\Tests;

use UnicadeAssert\Useup;

class TestCase extends \PHPUnit_Framework_TestCase
{
    /** @var Useup */
    protected $useup;

    public function setup()
    {
        $this->useup = new Useup();
        parent::setUp();
    }
}
