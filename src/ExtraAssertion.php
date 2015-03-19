<?php

namespace MinkExtra;

use Behat\Mink\Mink;

class ExtraAssertion
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
