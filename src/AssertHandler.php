<?php

namespace AssertHandler;

use Behat\Mink\Mink;

class AssertHandler
{
    /**
     * @return \PHPUnit_Framework_Assert
     */
    public static function phpunit()
    {
        return new PHPUnitFacade();
    }
    /**
     * @return CustomAssert
     */
    public static function webAssert(Mink $minkContext)
    {
        return new CustomAssert($minkContext->getSession());
    }
}
