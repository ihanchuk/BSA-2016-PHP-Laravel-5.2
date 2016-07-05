<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Bit', function ($app) {
            return new \GabrielKaputa\Bitly\Bitly();
        });
    }
}
