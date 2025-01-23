<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function checkoutPage(){
        return view('checkout');
    }
}

