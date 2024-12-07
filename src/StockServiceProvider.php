<?php

namespace Kvostyc\PrintForgeStock;

use Illuminate\Support\ServiceProvider;

class StockServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/printforge-stock.php' => config_path('printforge-stock.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('printforge-stock', function ($app) {
            return new StockService(
                config('printforge-stock.api_url'),
                config('printforge-stock.api_key')
            );
        });
    }
}
