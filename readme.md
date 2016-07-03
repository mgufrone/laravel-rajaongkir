# Rajaongkir.com API for Laravel

This is a particular package that make Rajaongkir.com can be used in Laravel 5. This package is a wrapper of [`steevenz/rajaongkir`](https://github.com/steevenz/rajaongkir) package.

## Installation

Just run this on your laravel app

```bash
  composer require gufy/laravel-rajaongkir:~1
```

Then, add this service provider to `config/app.php`

```php
Gufy\LaravelRajaongkir\LaravelRajaongkirServiceProvider::class
```

also, add this facade class to your facade section

```php
'Rajaongkir' => Gufy\LaravelRajaongkir\RajaongkirFacade::class
```

Then, run this command

```bash
php artisan vendor:publish
```

It will publish configuration file on `config/rajaongkir.php`

## Configuration

There are two ways to do this:
- Directly edit configuration file on `config/rajaongkir.php`
- Add configuration on `.env` file

If you're using the second option, then this is the things you need to do, add this code to your `.env` file

```
RAJAONGKIR_API_KEY=your_api_key
RAJAONGKIR_ACCOUNT_TYPE=starter (or basic or advance)
```

## Usage
You go to here for how to use the package: https://github.com/steevenz/rajaongkir#penggunaan
