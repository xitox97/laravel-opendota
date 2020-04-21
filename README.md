# Laravel-OpenDota

[![Latest Version on Packagist](https://img.shields.io/packagist/v/xitox97/laravel-opendota.svg?style=flat-square)](https://packagist.org/packages/xitox97/laravel-opendota)
[![Total Downloads](https://img.shields.io/packagist/dt/xitox97/laravel-opendota.svg?style=flat-square)](https://packagist.org/packages/xitox97/laravel-opendota)

Unofficial Laravel PHP Facade/Wrapper for the OpenDota API

`(This package is still under development)`

## Installation

You can install the package via composer:

```bash
composer require xitox97/laravel-opendota
```

## Usage
Every function are return an instance of `Illuminate\Http\Client\Response`, Therefore you can use variety of method provided by [Laravel HTTP Client](https://laravel.com/docs/master/http-client)

*Get Player Info*
``` php
$player = Opendota::getPlayer($playerID);
$player->json();
$response->body();
```


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


## Credits

- [Muhammad Farhan Abdul Hadi](https://github.com/xitox97)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
