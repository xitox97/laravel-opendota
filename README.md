# Laravel-OpenDota

[![Latest Version on Packagist](https://img.shields.io/packagist/v/xitox97/laravel-opendota.svg?style=flat-square)](https://packagist.org/packages/xitox97/laravel-opendota)
[![Total Downloads](https://img.shields.io/packagist/dt/xitox97/laravel-opendota.svg?style=flat-square)](https://packagist.org/packages/xitox97/laravel-opendota)

Unofficial Laravel 7 PHP Facade/Wrapper for the OpenDota API

## Support
  - Laravel 7+
  - OpenDota API (v18.0.0)
> All API endpoint supported except explorer and FindMatches


## Installation

You can install the package via composer:

```bash
composer require xitox97/laravel-opendota
```

## API KEY Set up (Optional)

Publish Laravel Opendota config by run below command, and replace the null value with your api-key.

```bash
php artisan vendor:publish --provider Xitox97\LaravelOpendota\LaravelOpendotaServiceProvider --tag="config"
```


## Usage
Every function are return an instance of `Illuminate\Http\Client\Response`, Therefore you can use variety of method provided by [Laravel HTTP Client](https://laravel.com/docs/master/http-client). Check more function in [LaravelOpenDota](https://github.com/xitox97/laravel-opendota/blob/master/src/LaravelOpendota.php)

### Get player info without Parameter
``` php
$player = Opendota::getPlayer($player_id);
$player->json();
$player->body();
etc...
```

### Get player win lose with Parameter
> Refer [OpenDota](https://docs.opendota.com) Documentation to know more about exact parameter supported for each endpoint
``` php
$playerWinLose = Opendota::getPlayerWL(311360822,['limit' => 1000])->json();
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
> To view more function just open the [LaravelOpenDota](https://github.com/xitox97/laravel-opendota/blob/master/src/LaravelOpendota.php) file. The function name is similar to OpenDota endpoint.

## Credits

- [Muhammad Farhan Abdul Hadi](https://github.com/xitox97)

## License
Copyright © 2020 Farhan Hadi (farhan.abdhadi@gmail.com)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.


