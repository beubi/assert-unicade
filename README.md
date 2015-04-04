# Single Interface for assertions

One single way to call assertions

[![Build Status](https://travis-ci.org/fonsecas72/assert-unicade.svg?branch=master)](https://travis-ci.org/fonsecas72/assert-unicade)  [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fonsecas72/assert-unicade/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fonsecas72/assert-unicade/?branch=master)   [![Dependency Status](https://www.versioneye.com/user/projects/550aea814996ebdd3500047f/badge.svg?style=flat)](https://www.versioneye.com/user/projects/550aea814996ebdd3500047f)

[![Latest Stable Version](https://poser.pugx.org/fonsecas72/assert-unicade/v/stable.svg)](https://packagist.org/packages/fonsecas72/assert-unicade) [![Total Downloads](https://poser.pugx.org/fonsecas72/assert-unicade/downloads.svg)](https://packagist.org/packages/fonsecas72/assert-unicade) [![Latest Unstable Version](https://poser.pugx.org/fonsecas72/assert-unicade/v/unstable.svg)](https://packagist.org/packages/fonsecas72/assert-unicade) [![License](https://poser.pugx.org/fonsecas72/assert-unicade/license.svg)](https://packagist.org/packages/fonsecas72/assert-unicade)

### Installation

```
  composer require --dev fonsecas72/assert-unicade dev-master
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
