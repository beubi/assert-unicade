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
\AssertHandler\AssertHandler::phpunit()->assertTrue(true);
```

WebAssert

```php
\AssertHandler\AssertHandler::webAssert($mink)->pageTextContains('text')
```

Custom Assert

```php
\AssertHandler\AssertHandler::webAssert($mink)->elementIsVisible('xpath', 'xpath');

```