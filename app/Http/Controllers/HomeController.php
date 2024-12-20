<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function productList(){
        $data['rows'] = Product::where('status', 1)
                                ->orderBy('id', 'desc')
                                ->get();
        return view('frontend.product_list', compact('data'));
    }

}
