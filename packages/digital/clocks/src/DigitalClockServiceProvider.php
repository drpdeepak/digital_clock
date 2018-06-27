<?php

namespace Digital\Clock;

use Illuminate\Support\ServiceProvider;

class DigitalClockServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Digital\Clock\DigitalClockController');

    }
}
