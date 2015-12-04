# Datajet Service Provider
[![Build Status](https://img.shields.io/travis/dafiti/datajet-service-provider/master.svg?style=flat-square)](https://travis-ci.org/dafiti/datajet-service-provider)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/dafiti/datajet-service-provider/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/dafiti/datajet-service-provider/?branch=master)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/dafiti/datajet-service-provider/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/dafiti/datajet-service-provider/?branch=master)
[![HHVM](https://img.shields.io/hhvm/dafiti/datajet-service-provider.svg?style=flat-square)](https://travis-ci.org/dafiti/datajet-service-provider)
[![Latest Stable Version](https://img.shields.io/packagist/v/dafiti/datajet-service-provider.svg?style=flat-square)](https://packagist.org/packages/dafiti/datajet-service-provider)
[![Total Downloads](https://img.shields.io/packagist/dt/dafiti/datajet-service-provider.svg?style=flat-square)](https://packagist.org/packages/dafiti/datajet-service-provider)
[![License](https://img.shields.io/packagist/l/dafiti/datajet-service-provider.svg?style=flat-square)](https://packagist.org/packages/dafiti/datajet-service-provider)

A Silex Service Provider for Datajet

## Instalation
The package is available on [Packagist](http://packagist.org/packages/dafiti/datajet-service-provider).
Autoloading is [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md) compatible.
```json
{
    "require": {
        "dafiti/datajet-service-provider": "dev-master"
    }
}
```

## Usage

```php
use Silex\Application;
use Dafiti\Silex\SolariumServiceProvider;

$app = new Application();
$app->register(new DatajetServiceProvider(), [
    'datajet.config' => [
      'hawk' => [
        'import_key' => KEY_IMPORT,
        'search_key' => KEY_SEARCH,
      ],
    ],
]);

$id = 1;
$result = $app['datajet']->delete($id);

```
Please see DatajetClient docs: [https://github.com/dafiti/datajet-client/](https://github.com/dafiti/datajet-client/)

## License

MIT License
