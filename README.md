[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This is my package laravel-gate-helper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/laravel-gate-helper.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-gate-helper)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-gate-helper/run-tests?label=tests)](https://github.com/sawirricardo/laravel-gate-helper/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-gate-helper/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sawirricardo/laravel-gate-helper/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/laravel-gate-helper.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-gate-helper)

Simply use `gate('my-ability')`

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-gate-helper.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-gate-helper)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/laravel-gate-helper
```

## Usage

```php
$response = gate('ability-name', ['argument-1', 'argument 2']);
$response->allowed();
$response->denied();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
