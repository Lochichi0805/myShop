<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function cart()
    {
        $userId = Auth::user()->id;
        $cart = User::find($userId)->cart()->get()->toArray();
        $sum = 0;


        foreach ($cart as $key => $value) {
            $sum += $cart[$key]['price']*$cart[$key]['pivot']['count'];
        }

        $result = [
            'records' => $cart,
            'sum' => $sum,
        ];

        return view('cart', $result);
    }


    public function removeCartItem($id)
    {
        
        Cart::find($id)->delete();
        return Redirect::to('/cart');

    }

    public  function addCartItem(Request $request, $productId)
    {
        
        $userId = Auth::user()->id;
        $count = $request['count'];
        $cart=Cart::where('userId','=',$userId)->where('productId','=',$productId)->first();
        $cartForm = [
            'userId' => $userId,
            'productId' => $productId,
            'count' => $count,
        ];
        

        if($cart)
        {
            $cartForm['count'] = $count + $cart->count; 
            $status = $cart->update($cartForm); 
        }
        else {
            Cart::create($cartForm);
        }

        if ($request['type'] == 'cart') {
            return Redirect::to("/product/$productId")->with('message', '加入購物車成功');
        } else {
            return Redirect::to('/cart');
        }

    }
    
}
