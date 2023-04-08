<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function index(Request $return)
    {
        return view('FrendEnd.checkout');
    }

}
