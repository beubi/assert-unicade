<?php

namespace UnicadeAssert;

use Behat\Mink\WebAssert;

class CustomAssert extends WebAssert
{
    /**
     * Checks that specific element exists and is visible on the current page.
     *
     * @param string  $selectorType element selector type (css, xpath)
     * @param string  $selector     element selector
     * @param Element $container    document to check against
     *
     * @return \Behat\Mink\Element\NodeElement
     *
     * @throws ElementNotVisible
     */
    public function elementIsVisible($selectorType, $selector, Element $container = null)
    {
        $node = $this->elementExists($selectorType, $selector, $container);

        if (true !== $node->isVisible()) {
            throw new \LogicException('Element is not visible - selector: '.$selector);
        }

        return $node;
    }
    /**
     * Checks that specific field exists on the current page.
     *
     * @param string $field field id|name|label|value
     * @param Element $container    document to check against
     *
     * @return \Behat\Mink\Element\NodeElement
     *
     * @throws ElementNotVisible
     */
    public function fieldIsVisible($field, Element $container = null)
    {
        $node = $this->fieldExists($field, $container = null);

        if (true !== $node->isVisible()) {
            throw new \Exception('Field is not visible - field: '.$field);
        }

        return $node;
    }
}
