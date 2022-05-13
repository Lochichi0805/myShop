<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $products = Product::simplePaginate(10);
        $result = ['products' => $products];
        return view('products',$result);
    }
    public function detail($id)
    {
        $products = Product::find($id);
        $result = ['products' => $products];

        return view('product', $result);
    }

}
