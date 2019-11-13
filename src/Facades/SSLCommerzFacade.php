<?php

namespace Rupokify\SSLCommerz\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SSLCommerzFacade
 * @package Rupokify\SSLCommerz
 */
class SSLCommerzFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sslcommerz';
    }
}