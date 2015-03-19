# Extra Assertions for Mink

Get extra assertion for your Mink tests

### Installation

```
  composer require --dev fonsecas72/mink-extra-assertions dev-master
```

### Usage


PHPUnit Facade

```php
\MinkExtra\ExtraAssertion::phpunit()->assertTrue(true);
```

WebAssert Wrapper

```php
\MinkExtra\ExtraAssertion::webAssert($mink)->pageTextContains('text')
```

Custom Asserts

```php
\MinkExtra\ExtraAssertion::webAssert($mink)->elementIsVisible('xpath', 'xpath');

```
