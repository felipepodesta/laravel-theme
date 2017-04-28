# Laravel Theme

Theme package for Laravel.

## Table Of Contents

- [Installation](#installation)
- [Changelog](#changelog)
- [Support](#support)
- [Security Vulnerabilities](#security-vulnerabilities)
- [Contributing & Protocols](#contributing-protocols)
- [Credits](#credits)
- [License](#license)

## Installation

To install in Laravel (current):

```sh
composer require felipepodesta/laravel-theme
```

Add the service provider to your `config/app.php` file:

```php
<?php
/*
    'providers' => [
        [...]
*/
        FelipePodesta\Theme\ServiceProvider::class,
/*
        [...]
    ],
*/
```

Add this to your AppServiceProvider:

```php
<?php

public function register()
{
    $this->app->view->addLocation(resource_path('themes/site'));
}

//
```

or:

```php
<?php

if ($this->app->request->is('login*', 'password*', 'register*', 'admin*')) {
    $this->app->view->addLocation(resource_path('themes/admin'));
} else {
    $this->app->view->addLocation(resource_path('themes/site'));
}

//
```

## Changelog

Refer to the [Changelog](changelog.md) for a full history of the project.

## Support

The following support channels are available at your fingertips:

- [Help on Email](email)
- [Follow on Twitter](twitter)

## Security Vulnerabilities

If you discover any security related issues, please email [Felipe Podestá][email] instead of using the issue tracker.

## Contributing & Protocols

Thank you for considering contributing to this project! The contribution guide can be found in [contributing.md](contributing.md) and [conduct.md](conduct.md).

Bug reports, feature requests, and pull requests are very welcome.

- [Versioning](contributing.md#versioning)
- [Support Policy](contributing.md#support-policy)
- [Coding Standards](contributing.md#coding-standards)
- [Pull Requests](contributing.md#pull-requests)

## Credits

- [Felipe Podestá][author]

## License

The MIT License (MIT). Please see [License File](license.md) for more information.

(c) 2017 Freela Certo, Some rights reserved.

[author]: <https://felipepodesta.com.br>
[twitter]: <https://twitter.com/felipepodesta>
[email]: <mailto:contato@felipepodesta.com>