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
        $this->registerSSLCommerz();
    }

    /**
     * Register SSLCommerz.
     *
     * @return void
     */
    protected function registerSSLCommerz()
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
        $this->bootSSLCommerz();
    }

    /**
     * Bootstrap SSLCommerz.
     *
     * @return void
     */
    protected function bootSSLCommerz()
    {
        $this->publishes([
            __DIR__.'/config/sslcommerz.php' => config_path('sslcommerz.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__.'/config/sslcommerz.php', 'sslcommerz'
        );
        $this->loadViewsFrom(
            __DIR__.'/views', 'sslcommerz'
        );
    }

    /**
     * Get the service provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'sslcommerz'
        ];
    }
}
