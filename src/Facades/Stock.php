<?php

namespace Kvostyc\PrintForgeStock\Facades;

use Illuminate\Support\Facades\Facade;

class Stock extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'printforge-stock';
    }
}