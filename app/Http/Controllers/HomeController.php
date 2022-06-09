<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Traits\CartTrait;

class HomeController extends Controller
{

    use CartTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = $this->getCartCount();
        $result = [
            'cartConut' => $count,
        ];

        return view('welcome', $result);
    }

    public function cart()
    {
        $count = $this->getCartCount();

        $userId = Auth::user()->id;
        $cart = User::find($userId)->cart()->get()->toArray();
        $sum = 0;


        foreach ($cart as $key => $value) {
            $sum += $cart[$key]['price']*$cart[$key]['pivot']['count'];
        }

        $result = [
            'cartConut' => $count,
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
    
     /**
     * 訂單-付款方式
     */
    public function payment(Request $request)
    {
        $userId = Auth::user()->id;

        $count = $this->getCartCount();
        $result = [
            'cartConut' => $count,
            'userId' => $userId,
        ];
        
        return view('payment', $result);
    }
    /**
     * 訂單-訂單確認
     */
    public function confirm(Request $request)
    {
        $userId = Auth::user()->id;
        $cart = User::find($userId)->cart()->get()->toArray();
        $sum = 0;
        foreach ($cart as $key => $value) {
            $sum += $cart[$key]['price']*$cart[$key]['pivot']['count'];
        }

        $totalPrice = 0;
        $orderRecord = [
            'id' => 1,
            'orderStatus' => '已配送',
            'comment' => '您購買的商品已經寄出，請留意配送包裹'
        ];

        $order = [
            'userId' => $userId,
            'product' => json_encode($cart),
            'name' => $request['name'],
            'phone' => $request['phone'],
            'payment' => $request['payment'],
            'paymentStatus' => 0,
            'address' => $request['address'],
            'totalPrice' => $totalPrice,
            'orderRecord' => json_encode($orderRecord)
        ];

        // Order::create($order);
        // User::find($userId)->cart()->delete();


        $order['product'] = $cart;
        $order['orderRecord'] = $orderRecord;

        $count = $this->getCartCount();
        $result = [
            'orders' => $order,
            'cartConut' => $count,
            'sum' => $sum,
        ];
        // dd($result);
        return view('confirm', $result);
    }
    
}
