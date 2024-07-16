<?php

namespace TargobankPayment\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;

class PaymentController extends Controller
{
    public function showForm(Request $request)
    {
        return view('TargobankPayment::PaymentForm');
    }
}
