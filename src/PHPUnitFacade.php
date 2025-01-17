<?php

namespace UnicadeAssert;

class PHPUnitFacade extends \PHPUnit\Framework\Assert
{
    protected function fire($methodName, $args)
    {
        if (method_exists(__CLASS__, $methodName)) {
            return call_user_func_array(array(__CLASS__, $methodName), $args);
        }

        throw new \BadMethodCallException();
    }

    public static function __callStatic($methodName, array $args)
    {
        return $this->fire($methodName, $args);
    }
}
