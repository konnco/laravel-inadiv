# Indonesian Administrative Division ( Pembagian Administratif Indonesia, Provinsi, Kota, Kelurahan ) For Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/konnco/laravel-inadiv.svg?style=flat-square)](https://packagist.org/packages/konnco/laravel-inadiv)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/konnco/laravel-inadiv/run-tests?label=tests)](https://github.com/konnco/laravel-inadiv/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/konnco/laravel-inadiv/Check%20&%20fix%20styling?label=code%20style)](https://github.com/konnco/laravel-inadiv/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/konnco/laravel-inadiv.svg?style=flat-square)](https://packagist.org/packages/konnco/laravel-inadiv)

This is package helper for Indonesian Administrative Division Area.

## Installation

You can install the package via composer:

```bash
composer require konnco/laravel-inadiv
```

You need to migrate the files via:

```bash
php artisan migrate
```

## Usage

the usage is same as common Laravel Model, in this package there's 4 Models that you can use.

* `Konnco\Inadiv\Models\Province`
* `Konnco\Inadiv\Models\City`
* `Konnco\Inadiv\Models\District`
* `Konnco\Inadiv\Models\Subdisctict`

So if you have another function that need to included in this model, just Extend into another class.

```php
use Konnco\Inadiv\Models\Province as BaseProvinceModel;

class Province extends BaseProvinceModel {
    public function yourCustomFunctionHere() {

    }
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Franky So](https://github.com/konnco)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
