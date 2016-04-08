# Laravel Currencies

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

:package_description

## Install

Via Composer

``` bash
$ composer require draperstudio/laravel-currencies
```

And then include the service provider within `app/config/app.php`.

``` php
'providers' => [
    DraperStudio\Currencies\ServiceProvider::class
];
```

To get started, you'll need to publish the vendor assets and migrate the currencies table:

```bash
php artisan vendor:publish --provider="DraperStudio\Currencies\ServiceProvider" && php artisan migrate
```

Now you can seed the currencies into the database like this.

```bash
php artisan currencies:seed
```

## Usage

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DraperStudio/laravel-currencies.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DraperStudio/Laravel-Currencies/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DraperStudio/laravel-currencies.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DraperStudio/laravel-currencies.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DraperStudio/laravel-currencies.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DraperStudio/laravel-currencies
[link-travis]: https://travis-ci.org/DraperStudio/Laravel-Currencies
[link-scrutinizer]: https://scrutinizer-ci.com/g/DraperStudio/laravel-currencies/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DraperStudio/laravel-currencies
[link-downloads]: https://packagist.org/packages/DraperStudio/laravel-currencies
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors
