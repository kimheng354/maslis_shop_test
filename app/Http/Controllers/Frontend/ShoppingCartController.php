<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function shoppingcart(){
        return view('frontend.shoppingcart.shoppingcart');
    }
}
