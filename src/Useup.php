<?php

namespace UnicadeAssert;

class Useup
{
    /**
     * @return \PHPUnit_Framework_Assert
     */
    public static function phpunit()
    {
        return new PHPUnitFacade();
    }
    /**
     * @return \Assert\Assertion
     */
    public static function beberlei()
    {
        return new BeberleiFacade();
    }
    /**
     * @return \Webmozart\Assert\Assert
     */
    public static function webmozart()
    {
        return new WebmozartFacade();
    }
    /**
     * @return CustomAssert
     */
    public static function webAssert(\Behat\Mink\Mink $minkContext)
    {
        return new CustomAssert($minkContext->getSession());
    }
}
