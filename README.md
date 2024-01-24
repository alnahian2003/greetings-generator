# This is a random greetings generator. This is our very first php package!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alnahian2003/greetings-generator.svg?style=flat-square)](https://packagist.org/packages/alnahian2003/greetings-generator)
[![Tests](https://img.shields.io/github/actions/workflow/status/alnahian2003/greetings-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alnahian2003/greetings-generator/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/alnahian2003/greetings-generator.svg?style=flat-square)](https://packagist.org/packages/alnahian2003/greetings-generator)

## Installation

You can install the package via composer:

```bash
composer require alnahian2003/greetings-generator
```

## Usage

```php
$skeleton = new Alnahian2003\GreetingsGenerator();
echo $skeleton->echoPhrase('Hello, Alnahian2003!');
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

- [Al Nahian](https://github.com/alnahian2003)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
