# LaravelGUI

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

admin dashboard for laravel, free version of the laravel nova.
supports PSR-4.


## Install

Via Composer

```bash
$ composer require Sarps/Galaxy
```

Once Laravel GUI is installed, you need to register a Laravel service provider, in your config/app.php:

```php
    'providers' => [
		...
		Sarps\Galaxy\ArtisanGUIServiceProvider::class,
	]
```

Then publish Laravel GUI's assets(Enter this in the command-line):

```bash
    php artisan vendor:publish
```

## Usage

That's it, simply navigate to www.yoursite.com/galaxy

Examples: 
```bash
127.0.0.1:8000/galaxy
localhost:8000/galaxy
```


``` php
$skeleton = new Sarps\LaravelGUI();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email esarpong51@gmail.com instead of using the issue tracker.

## Credits

- [Emmanuel Sarpong][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Sarps/LaravelGUI.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Sarps/LaravelGUI/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Sarps/LaravelGUI.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Sarps/LaravelGUI.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Sarps/LaravelGUI.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Sarps/LaravelGUI
[link-travis]: https://travis-ci.org/Sarps/LaravelGUI
[link-scrutinizer]: https://scrutinizer-ci.com/g/Sarps/LaravelGUI/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Sarps/LaravelGUI
[link-downloads]: https://packagist.org/packages/Sarps/LaravelGUI
[link-author]: https://github.com/Sarps
[link-contributors]: ../../contributors
