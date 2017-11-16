<p align="center">Laravel Phone Validator (most phone number formats)</p>

<p align="center">
<a href="https://packagist.org/packages/fixik/phone-validator"><img src="https://poser.pugx.org/fixik/phone-validator/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/fixik/phone-validator"><img src="https://poser.pugx.org/fixik/phone-validator/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/fixik/phone-validator"><img src="https://poser.pugx.org/fixik/phone-validator/license.svg" alt="License"></a>
</p>

## Introduction

Phone Validator is a simple validator phone number.

## Installation

To get started with Phone Validator, simply run:

    composer require fixik/phone-validator

Next, register the `Fixik\Validator\PhoneValidatorServiceProvider` in your `config/app.php` file:

```php
'providers' => [
    // Other service providers...

    Fixik\Validator\PhoneValidatorServiceProvider::class,
],
```

## Basic Usage

From your validator use method `phone`

## Add validation message

`resources/lang/en/validation.php`

```php
    'phone' => 'The :attribute field contains an invalid phone number'
```

## License

Phone Validator is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
