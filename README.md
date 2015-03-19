# Extra Assertions for Mink

Get extra assertion for your Mink tests

### Installation

With Composer:
```
  composer require --dev fonsecas72/mink-extra-assertions dev-master
```

### Usage


PHPUnit Assert Facade

```php
\MinkExtra\ExtraAssertion::phpunit()->assertTrue(true);
```

Beberlei Assert Facade

```php
\MinkExtra\ExtraAssertion::beberlei()->digit('1');
```

Webmozart Assert Facade

```php
\MinkExtra\ExtraAssertion::webmozart()->startsWith('fooBar', 'foo');
```

WebAssert Wrapper

```php
\MinkExtra\ExtraAssertion::webAssert($mink)->pageTextContains('text')
```

Custom Assert

```php
\MinkExtra\ExtraAssertion::webAssert($mink)->elementIsVisible('xpath', 'xpath');

```