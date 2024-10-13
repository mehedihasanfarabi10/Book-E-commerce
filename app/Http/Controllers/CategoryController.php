<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function ByCategoryPage()
    {
        return view('pages.product-by-category');
    }

 
}
