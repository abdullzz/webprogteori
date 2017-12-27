<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\HTML;

use App\Product;

class shopController extends Controller
{
    function index()
    {
      $products = Product::all();
      return view('shop.index',[
        'products' => $products
      ]);
    }

    function about()
    {
      return view('shop.about');
    }

    function cart()
    {
      return view('shop.cart');
    }
}
