<?php

namespace Tal7aouy\LaraCurrency;

use Illuminate\Support\ServiceProvider;

class LaraCurrencyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('currency', function ($app) {
            return new Currency();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
