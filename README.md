# Liqpay SDK для PHP / Liqpay SDK for PHP

## Опис / Description
Liqpay SDK для інтеграції з платіжною системою Liqpay. За допомогою цього SDK ви можете легко інтегрувати платіжну систему Liqpay у ваше PHP-додаток.
Liqpay SDK for integration with the Liqpay payment system. With this SDK, you can easily integrate the Liqpay payment system into your PHP application.

## Встановлення / Installation
Ви можете встановити бібліотеку за допомогою Composer, який є стандартним інструментом для керування залежностями у PHP.
You can install the library using Composer, which is the standard dependency management tool for PHP.

Склонуйте репозиторій або додайте його як залежність у ваш проект:
Clone the repository or add it as a dependency in your project:

```bash
composer require makarchukdev/liqpay-sdk
```

Після успішного встановлення бібліотеки підключіть автозавантажувач Composer у вашому проекті:
After successfully installing the library, include the Composer autoloader in your project:

```php
require 'vendor/autoload.php';
```

### Для Laravel
Додайте сервіс-провайдер до масиву providers в `config/app.php`:

```php
'providers' => [
    // інші провайдери...
    Makarchukdev\LiqpaySdk\Providers\LiqpayServiceProvider::class,
],
```

Додайте фасад до масиву aliases в `config/app.php`:

```php
'aliases' => [
    // інші фасади...
    'LiqPay' => Makarchukdev\LiqpaySdk\Facades\LiqPayFacade::class,
],
```

Публікуйте конфігурацію за допомогою команди Artisan:

```bash
php artisan vendor:publish --provider="Makarchukdev\LiqpaySdk\Providers\LiqpayServiceProvider"
```

Налаштуйте ключі в файлі `.env`:

```env
LIQPAY_PUBLIC_KEY=your_public_key
LIQPAY_PRIVATE_KEY=your_private_key
```

Додайте файл конфігурації для Liqpay, якщо ще не зроблено (якщо ви використовуєте Laravel, файл конфігурації буде публікуватися автоматично):

```php
return [
    'public_key' => env('LIQPAY_PUBLIC_KEY', 'your_public_key'),
    'private_key' => env('LIQPAY_PRIVATE_KEY', 'your_private_key'),
];
```

## Використання / Usage

### Ініціалізація / Initialization
Для початку роботи з Liqpay SDK, створіть об'єкт класу `LiqPay`:

```php
use Makarchukdev\LiqpaySdk\LiqPay;

$public_key = 'your_public_key';
$private_key = 'your_private_key';

$liqpay = new LiqPay($public_key, $private_key);
```

### Надсилання запиту до API / Sending API Request
Для виконання запитів до API використовуйте метод `api`:

```php
$response = $liqpay->api('some/endpoint', ['param1' => 'value1', 'param2' => 'value2']);
```

### Генерація форми для платежу / Generating a Payment Form
Щоб створити форму для здійснення платежу, використовуйте метод `cnb_form`:

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
Для більш детальної інформації про доступні API та інші функції Liqpay, будь ласка, ознайомтесь з [офіційною документацією Liqpay](https://www.liqpay.ua/documentation).

