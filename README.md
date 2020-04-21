# Laravel-OpenDota

[![Latest Version on Packagist](https://img.shields.io/packagist/v/xitox97/laravel-opendota.svg?style=flat-square)](https://packagist.org/packages/xitox97/laravel-opendota)
[![Total Downloads](https://img.shields.io/packagist/dt/xitox97/laravel-opendota.svg?style=flat-square)](https://packagist.org/packages/xitox97/laravel-opendota)

Unofficial Laravel 7 PHP Facade/Wrapper for the OpenDota API

`(This package is still under development)`

## Installation

You can install the package via composer:

```bash
composer require xitox97/laravel-opendota
```

## Usage
Every function are return an instance of `Illuminate\Http\Client\Response`, Therefore you can use variety of method provided by [Laravel HTTP Client](https://laravel.com/docs/master/http-client)

### Get player info
``` php
$player = Opendota::getPlayer($player_id);
$player->json();
$player->body();
etc...
```

### Get match details
``` php
$player = Opendota::getMatch($match_id);
```

### Get players ordered by rank/medal tier
``` php
$player = Opendota::getPlayersByRank();
```

### Get list of pro players
``` php
$player = Opendota::getProPlayers();
```

### Get list of pro matches
``` php
$player = Opendota::proMatches();
```

### Get list of randomly sampled public matches
``` php
$player = Opendota::publicMatches();
```


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


## Credits

- [Muhammad Farhan Abdul Hadi](https://github.com/xitox97)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
