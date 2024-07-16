<?php

namespace TargobankPayment;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class TargobankPaymentRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('targobank', 'TargobankPayment\Controllers\PaymentController@showForm');
    }
}
