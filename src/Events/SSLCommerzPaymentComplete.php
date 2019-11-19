<?php

namespace Rupokify\SSLCommerz\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class SSLCommerzPaymentComplete
{
    use Dispatchable, SerializesModels;

    public $paymentdata;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($paymentdata)
    {
        $this->paymentdata = $paymentdata;
    }

}
