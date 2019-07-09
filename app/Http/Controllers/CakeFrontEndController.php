<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CakeFrontEndController extends Controller
{
    public function home(){
        return view('cake.home');
    }
    public function shop(){
        return view('cake.shop');
    }
    public function cart(){
        return view('cake.cart');
    }
    public function product(){
        return view('cake.single_product');
    }

}
