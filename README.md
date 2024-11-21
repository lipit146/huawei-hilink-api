# Huawei Hilink API Support

API to interact with the Huawei routers that support the Hilink XML API.

This package provides the function of reading SMS messages from Hilink Huawei. If you need more control or want to want to implement more Huawei API endpoints have a look at our [Laravel wrapper for Huawei routers](https://github.com/lipit146/huawei-hilink-api) which is also used by this packages.

## Requirements

- PHP >= 8.0
- Laravel >= 9.0

## Installation

To start using the package, you need to install it via Composer:

```sh
composer require lipit146/huawei-hilink-api
```

### Laravel version compatibility

| Laravel version | Laravel Cloudflare version |
| :-------------- | :------------------------- |
| 8.x             | 1.x                        |

### Service Provider

Add the package service provider in your `config/app.php`

```php
'providers' => [
    // ...
    Lipit146\HuaweiHilinkApi\HuaweiHilinkApiServiceProvider::class,
];
```

## Publish package assets

Publish the package asset files using this `php artisan` command

```sh
$ php artisan vendor:publish --provider="Lipit146\HuaweiHilinkApi\HuaweiHilinkApiServiceProvider"
```

## Security Vulnerabilities

If you discover a security vulnerability within this project, please email me via [songviytuong@gmail.com](mailto:songviytuong@gmail.com).
