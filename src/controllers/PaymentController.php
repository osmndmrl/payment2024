<?php

namespace TargobankPayment\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Templates\Twig;

class PaymentController extends Controller
{
    public function showForm(Twig $twig, Request $request)
    {
        return $twig->render('TargobankPayment::PaymentForm', [
            'amount' => '499.99', // Bu değer dinamik olarak ayarlanmalı
            'documentno' => 'order12345' // Bu değer dinamik olarak ayarlanmalı
        ]);
    }
}
