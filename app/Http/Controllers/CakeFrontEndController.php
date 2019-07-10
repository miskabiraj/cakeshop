<?php

namespace App\Http\Controllers;

use App\Category;
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


    public function PackageCatagoryList($catagory)
    {
        $catagories = Category::where('category', $catagory)->first();
        if (!empty($catagories)) {
            // $Additineries = Multicategory::where('category_id',$catagories->id)->paginate(9);
            return view('cake.cart', compact('catagories'));
        } else {
            return redirect('/package');
        }
    }
}
