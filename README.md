# Blade MLS Icons

A package to easily make use of MLS logos in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg).

## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require matthewhallcom/blade-mls-icons
```

## MLS Icons

Blade MLS Icons uses official MLS logos.

## Configuration

Blade MLS Icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-mls-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-mls-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-mls-vancouver-whitecaps/>
```

You can also pass classes to your icon components:

```blade
<x-mls-vancouver-whitecaps class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-mls-vancouver-whitecaps style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-mls-vancouver-whitecaps/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-mls-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-mls-icons/vancouver-whitecaps.svg') }}" width="10" height="10"/>
```

## Maintainers

Blade mlsicons is developed and maintained by Matthew Hall.

## License

Blade mlsicons is open-sourced software licensed under [the MIT license](LICENSE.md).
