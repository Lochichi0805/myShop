<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Traits\CartTrait;

class ProductController extends Controller
{
    use CartTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $count = $this->getCartCount();
          
        $products = Product::simplePaginate(10);
        $result = [
            'products' => $products,
            'cartConut' => $count
        ];
        return view('products',$result);
    }
    public function detail($id)
    {
        $count = $this->getCartCount();
        $products = Product::find($id);
        $result = [
            'products' => $products,
            'cartConut' => $count
        ];

        return view('product', $result);
    }

}
