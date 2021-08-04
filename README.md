Polyfill each()
===
This package returns the legacy `each()` function which has been [removed in PHP 8.0](https://www.php.net/manual/en/migration80.incompatible.php). This can be useful when working with legacy code or with end-of-life packages which still make use of the `each()` function.

It is therefore not really a polyfill but rather a shim as it provides legacy functionality to modern-day software instead of vice versa. I have still chosen the name polyfill as this term is usually top of mind irrespective of the direction of the port.

Prerequisites
---
* PHP 5.4 or later, though the shim will only take effect in PHP 8.x

Installation
---
Installation can be easily done using Composer:

```shell
composer require christiaanbye/polyfill-each
```
