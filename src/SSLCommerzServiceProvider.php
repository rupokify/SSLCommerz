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
            __DIR__.'/resources/views' => $this->app->resourcePath('views/vendor/rupokify/sslcommerz'),
            __DIR__.'/database/migrations' => $this->app->databasePath('/migrations')
        ]);
        $this->mergeConfigFrom(
            __DIR__.'/config/sslcommerz.php', 'sslcommerz'
        );
        $this->loadRoutesFrom(
            __DIR__.'/routes/sslcommerzroutes.php'
        );
        $this->app['router']->middleware('web', 'Rupokify\SSLCommerz\Http\Middleware\VerifyCsrfToken::class');
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
