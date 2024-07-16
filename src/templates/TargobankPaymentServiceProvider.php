<?php

namespace TargobankPayment;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Payment\Contracts\PaymentRepositoryContract;

class TargobankPaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(TargobankPaymentRouteServiceProvider::class);
    }

    public function boot(PaymentRepositoryContract $paymentRepository)
    {
        // Payment method registration logic
    }
}
