<?php

namespace Rupokify\SSLCommerz;

use Illuminate\Support\ServiceProvider;
use Rupokify\SSLCommerz\Services\SSLCommerz;

class SSLCommerzServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('sslcommerz', function () {
            return new SSLCommerz();
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
