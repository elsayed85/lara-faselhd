# FaselHd Api

## Installation

You can install the package via composer:

```bash
composer require elsayed85/lara-faselhd
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lara-faselhd-config"
```

This is the contents of the published config file:

```php
return [
    "host" => "https://netcore.faselhd.pro/api/v1.0/",
    "token" => env("FASLEHD_TOKEN", $token),
];
```


## Usage

### Movies

#### Get All Movies

``` php
use Elsayed85\FaselHd\FaselHd;

$movies = FaselHd::movies()->all();
```

#### Get Movie By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$movie = FaselHd::movies()->find($id);
```


#### Get Recommended Movies By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$recommended_movies = FaselHd::movies()->recommended($id);
```

#### Download Movie By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$download_link = FaselHd::movies()->download($vid);
```

#### Watch Movie By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$watch_link = FaselHd::movies()->watch($vid);
```

#### Movie Comments By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$comments = FaselHd::movies()->comments($id);
```

<hr>

### Series

#### Get All Series

``` php
use Elsayed85\FaselHd\FaselHd;

$series = FaselHd::series()->all();
```

#### Get Series By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$serie = FaselHd::series()->find($id);
```


#### Get Recommended Series By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$recommended_series = FaselHd::series()->recommended($id);
```

#### Download Series By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$download_link = FaselHd::series()->download($vid);
```

#### Watch Series By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$watch_link = FaselHd::series()->watch($vid);
```

#### Series Comments By Id

``` php
use Elsayed85\FaselHd\FaselHd;

$comments = FaselHd::series()->comments($id);
```

<hr>

### Categories

#### Get All Categories

``` php
use Elsayed85\FaselHd\FaselHd;

$categories = FaselHd::categories()->all();
```


#### Get All Sub Categories

``` php
use Elsayed85\FaselHd\FaselHd;

$sub_categories = FaselHd::categories()->subCategories($id);
```

#### Category content load

``` php
use Elsayed85\FaselHd\FaselHd;

$content = FaselHd::categories()->load($id);
```

<hr>

### Search

#### Search 

``` php
use Elsayed85\FaselHd\FaselHd;

$search = FaselHd::search()->query($query);
```

<hr>



## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Elsayed Kamal](https://github.com/elsayed85)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
