# link-bush

This is a very simple, self-hosted alternative to linktr.ee.

## System Requirements

* PHP 7.4+
* [Composer](https://getcomposer.org/)

## Installation

See [INSTALL.md](INSTALL.md) for instructions

## Configuration

See [config.example.php](config.example.php) for a sample configuration file.

## Theming 

link-bush supports basic theming. Theme files should be written using [Laravel Blade syntax](https://github.com/jenssegers/blade).

Themes should be placed in the `themes/` directory of link-bush.

### Theme Files

Each theme needs, at a minimum, an `index.blade.php` file.

This file will receive two variables:

* `$links` - An array of links in the form used in `config.php`
* `$config` - An array of configuration values in the form used in `config.php`. Additional values can be added to this array for use in your theme.

You can use whatever build tools you want (or none at all) to handle CSS and Javascript in your theme.

The default theme is a good example of using Webpack & SCSS.

### Theme Assets/Resources

By default, link-bush will look in the `themes/<theme-name>/dist` directory for all assets.

This location can be overridden by setting the `$config['resource_path']` config value. The resource path can be either a web-accessible filesystem location _or_ a url.
