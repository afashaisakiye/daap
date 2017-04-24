DAAP
=====
[![Build Status](https://travis-ci.org/panlatent/libdaap.svg)](https://travis-ci.org/panlatent/libdaap)
[![Latest Stable Version](https://poser.pugx.org/panlatent/libdaap/v/stable.svg)](https://packagist.org/packages/panlatent/libdaap) 
[![Total Downloads](https://poser.pugx.org/panlatent/libdaap/downloads.svg)](https://packagist.org/packages/panlatent/libdaap) 
[![Latest Unstable Version](https://poser.pugx.org/panlatent/libdaap/v/unstable.svg)](https://packagist.org/packages/panlatent/libdaap) 
[![License](https://poser.pugx.org/panlatent/libdaap/license.svg)](https://packagist.org/packages/panlatent/libdaap)

Digital Audio Access Protocol library for PHP.

What's This
------------
This is a PHP OO library to share digital audio between computers on a network. The Digital Audio Access Protocol (DAAP)
is the proprietary protocol introduced by Apple in its iTunes software to share media across a local network.

Requirements
-------------
+ PHP 5.5 or later

Installation
-------------
Download the library using composer:
```bash
$ composer require panlatent/daap
```

Usage
------
Parser DAAP response:
```php
$daap = new Pnaltent\Daap\Document($httpResponseBody);
```

License
-------
The DAAP is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
