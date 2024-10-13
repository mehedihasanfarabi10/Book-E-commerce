<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        return view('pages.product-list');
    }
    public function productDetail()
    {
        return view('pages.product-details');
    }
}
