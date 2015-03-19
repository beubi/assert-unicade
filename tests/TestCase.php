<?php

namespace MinkExtra\Tests;

/**
 * @package Beubi\GeopredialBundle\Tests\View
 * @author  Ubiprism Lda. / be.ubi <contact@beubi.com>
 *
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    protected static function wasDebugModeRequested()
    {
        $cliArgs = implode(' ', $_SERVER['argv']);
        if (strpos($cliArgs, '--debug') === false) {
            return false;
        } else {
            return true;
        }
    }

    protected static function printDebugMsg($msg)
    {
        if (self::wasDebugModeRequested()) {
            echo 'DEBUG: '.$msg.PHP_EOL;
        }
    }
}
