<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('front.index');
    }


}
