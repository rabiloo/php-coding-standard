# php-coding-standard

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rabiloo/php-coding-standard.svg)](https://packagist.org/packages/rabiloo/php-coding-standard)
[![Tests](https://github.com/rabiloo/php-coding-standard/actions/workflows/run-tests.yml/badge.svg)](https://github.com/rabiloo/php-coding-standard/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/rabiloo/php-coding-standard.svg)](https://packagist.org/packages/rabiloo/php-coding-standard)


This is my package php-coding-standard

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require rabiloo/coding-standard --dev
```

Add it to your project `phpcs.xml` or `phpcs.xml.dist` ruleset:

```
<?xml version="1.0"?>
<ruleset>
    <arg value="p"/>
    <arg value= "s"/>
    <arg name="colors"/>

    <file>app</file>
    <file>bootstrap</file>
    <file>config</file>
    <file>database</file>
    <file>lang</file>
    <file>routes</file>
    <file>tests</file>
    <file>public</file>

    <exclude-pattern>*/*.js</exclude-pattern>
    <exclude-pattern>*/*.css</exclude-pattern>
    <exclude-pattern>*/*.xml</exclude-pattern>
    <exclude-pattern>*/*.blade.php</exclude-pattern>
    <exclude-pattern>bootstrap/cache</exclude-pattern>

    <rule ref="./vendor/rabiloo/coding-standard/ruleset.xml"/>
</ruleset>
```

### Laravel

If you use it with Laravel project, you can install by commands

```bash
composer require rabiloo/coding-standard --dev
php artisan vendor:publish --tag rabiloo-coding-standard
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Oanh Nguyen](https://github.com/oanhnn)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
