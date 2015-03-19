# Extra Assertions for Mink

Get extra assertion for your Mink tests

[![Build Status](https://travis-ci.org/fonsecas72/mink-extra-assertions.svg?branch=master)](https://travis-ci.org/fonsecas72/mink-extra-assertions)  [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fonsecas72/mink-extra-assertions/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fonsecas72/mink-extra-assertions/?branch=master)   [![Dependency Status](https://www.versioneye.com/user/projects/550aea814996ebdd3500047f/badge.svg?style=flat)](https://www.versioneye.com/user/projects/550aea814996ebdd3500047f)

[![Latest Stable Version](https://poser.pugx.org/fonsecas72/mink-extra-assertions/v/stable.svg)](https://packagist.org/packages/fonsecas72/mink-extra-assertions) [![Total Downloads](https://poser.pugx.org/fonsecas72/mink-extra-assertions/downloads.svg)](https://packagist.org/packages/fonsecas72/mink-extra-assertions) [![Latest Unstable Version](https://poser.pugx.org/fonsecas72/mink-extra-assertions/v/unstable.svg)](https://packagist.org/packages/fonsecas72/mink-extra-assertions) [![License](https://poser.pugx.org/fonsecas72/mink-extra-assertions/license.svg)](https://packagist.org/packages/fonsecas72/mink-extra-assertions)

### Installation

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

Custom Asserts

```php
\MinkExtra\ExtraAssertion::webAssert($mink)->elementIsVisible('xpath', 'xpath');

```
