# FakeNIK Laravel

[![Latest Stable Version](https://img.shields.io/packagist/v/lalusahibul/fakenik.svg?style=flat-square)](https://packagist.org/packages/lalusahibul/fakenik)
[![Total Downloads](https://img.shields.io/packagist/dt/lalusahibul/fakenik.svg?style=flat-square)](https://packagist.org/packages/lalusahibul/fakenik)
[![License](https://img.shields.io/packagist/l/lalusahibul/fakenik.svg?style=flat-square)](https://packagist.org/packages/lalusahibul/fakenik)

FakeNIK is a Laravel library that generates random Indonesian National Identity Numbers (NIK). This library is very useful for dummy data purposes during application development or testing.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Examples](#examples)
- [License](#license)

## Requirements

- PHP ^8.0
- Laravel ^9.0|^10.0|^11.0 (or the versions you support in your `composer.json`)

## Installation

You can install this package via Composer. Run the following command in your terminal:

```bash
composer require lalusahibul/fakenik
```
## Configuration

The package works out-of-the-box with sensible defaults. However, if you wish to customize these default values, you can easily publish the configuration file.

This allows you to change the default region codes (province, regency, district) and the default birth year range used when generating a NIK.

To publish the configuration file, run the following Artisan command in your terminal:
```bash
php artisan vendor:publish --tag=lalusahibul-fakenik
```
After that you can change default value in folder config/fakenik.php
```php
//config/fakenik.php
'default_code' => [
        'province' => '52', // Example: Nusa Tenggara Barat
        'regency'  => '05', // Example: Kabupaten Dompu
        'district' => '06', // Example: Kecamatan Pekat
    ],
    'birth_year_range' => [
        'min' => 1970,
        'max' => 2010,
    ],
```
## Usage

To get started, add the following `use` statements to your PHP file:
```php
use Fakenik\Generator;
use Fakenik\DateOfBirth;
```
## Examples

```php
use Illuminate\Support\Facades\Route;
use Fakenik\Generator;
use Fakenik\DateOfBirth;

Route::get('/example', function () {
    // Generate a complete NIK using default settings.
    // The birth year range and default region codes are pulled from the `fakenik.php` config file.
    // To customize these values, you can publish the configuration file.
    $tahunLahir = DateOfBirth::generateBirthYear();
    $bulanLahir = DateOfBirth::generateBirthMonth();
    $tanggalLahir = DateOfBirth::generateBirthDay($bulanLahir, $tahunLahir);
    $nik = Generator::generate($tanggalLahir, $bulanLahir, $tahunLahir);
    return response()->json([
        'nik_tergenerate' => $nik,
        'detail_tanggal_lahir' => [
            'tanggal' => $tanggalLahir,
            'bulan' => $bulanLahir,
            'tahun' => $tahunLahir,
        ]
    ]);
```
## License

[**License**](LICENSE.md)