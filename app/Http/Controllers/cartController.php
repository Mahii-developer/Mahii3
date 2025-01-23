<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller
{
    public function HomePage(){
        return view('web.index');
    }
}

