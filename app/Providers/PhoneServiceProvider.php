<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Libs\Smartphone\Iphone;
use App\Libs\Smartphone\Parts\Processor;
use App\Libs\Smartphone\Parts\Baterry;
use App\Libs\Smartphone\Parts\Screen;
use App\Libs\Smartphone\Parts\Camera;

class PhoneServiceProvider extends ServiceProvider
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
        $phone = new Iphone\Iphone4S(new Processor(), new Screen(), new Camera(), new Baterry());
        $this->app->instance('Iphone', $phone);
    }
}
