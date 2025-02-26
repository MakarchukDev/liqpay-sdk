<?php

namespace Makarchukdev\LiqpaySdk\Facades;

use Illuminate\Support\Facades\Facade;

class LiqPayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'liqpay';  // Название, через которое можно будет обращаться к классу
    }
}
