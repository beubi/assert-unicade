# Extra Assertions for Mink

Get extra assertion for your Mink tests

### Installation

With Composer:
```
  composer require --dev fonsecas72/mink-extra-assertions dev-master
```

### Usage

PHPUnit Facade

```php
\MinkExtraAssertion\MinkExtraAssertion::phpunit()->assertTrue(true);
```

WebAssert

```php
\MinkExtraAssertion\MinkExtraAssertion::webAssert($mink)->pageTextContains('text')
```

Custom Assert

```php
\MinkExtraAssertion\MinkExtraAssertion::webAssert($mink)->elementIsVisible('xpath', 'xpath');

```