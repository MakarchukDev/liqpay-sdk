<?php

namespace Makarchukdev\LiqpaySdk\Providers;

use Illuminate\Support\ServiceProvider;
use Makarchukdev\LiqpaySdk\LiqPay;

class LiqPayServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Регистрация LiqPay в контейнере
        $this->app->singleton('liqpay', function () {
            return new LiqPay(config('liqpay.public_key'), config('liqpay.private_key'));
        });

        // Регистрация конфигурации
        $this->mergeConfigFrom(
            __DIR__.'/../../config/liqpay.php', 'liqpay'
        );
    }

    public function boot()
    {
        // Публикация конфигурации
        $this->publishes([
            __DIR__.'/../../config/liqpay.php' => config_path('liqpay.php'),
        ]);
    }
}
