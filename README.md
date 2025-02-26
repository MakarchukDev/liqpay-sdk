
# Liqpay SDK для PHP / Liqpay SDK for PHP

## Опис / Description

Liqpay SDK для інтеграції з платіжною системою Liqpay. За допомогою цього SDK ви можете легко інтегрувати платіжну систему Liqpay у ваше PHP-додаток.  
Liqpay SDK for integration with the Liqpay payment system. With this SDK, you can easily integrate the Liqpay payment system into your PHP application.

## Встановлення / Installation

Ви можете встановити бібліотеку за допомогою [Composer](https://getcomposer.org/), який є стандартним інструментом для керування залежностями у PHP.  
You can install the library using [Composer](https://getcomposer.org/), which is the standard dependency management tool for PHP.

1. Склонуйте репозиторій або додайте його як залежність у ваш проект:  
   Clone the repository or add it as a dependency in your project:

   ```bash
   composer require barry/liqpay-sdk
   ```

2. Після успішного встановлення бібліотеки підключіть автозавантажувач Composer у вашому проекті:  
   After successfully installing the library, include the Composer autoloader in your project:

   ```php
   require 'vendor/autoload.php';
   ```

## Використання / Usage

### Ініціалізація / Initialization

Для початку роботи з Liqpay SDK, створіть об'єкт класу `LiqPay`:  
To start using Liqpay SDK, create an object of the `LiqPay` class:

```php
use Barry\LiqpaySdk\LiqPay;

$public_key = 'your_public_key';
$private_key = 'your_private_key';

$liqpay = new LiqPay($public_key, $private_key);
```

### Надсилання запиту до API / Sending API Request

Для виконання запитів до API використовуйте метод `api`:  
To make API requests, use the `api` method:

```php
$response = $liqpay->api('some/endpoint', ['param1' => 'value1', 'param2' => 'value2']);
```

### Генерація форми для платежу / Generating a Payment Form

Щоб створити форму для здійснення платежу, використовуйте метод `cnb_form`:  
To generate a payment form, use the `cnb_form` method:

```php
$form = $liqpay->cnb_form([
    'amount' => 100,
    'currency' => 'UAH',
    'description' => 'Test Payment',
    'language' => 'uk',
    // Інші параметри платежу / Other payment parameters
]);
echo $form;
```

## Документація Liqpay / Liqpay Documentation

Для більш детальної інформації про доступні API та інші функції Liqpay, будь ласка, ознайомтесь з [офіційною документацією Liqpay](https://www.liqpay.ua/documentation/en).  
For more detailed information about the available API and other features of Liqpay, please refer to the [official Liqpay documentation](https://www.liqpay.ua/documentation/en).

