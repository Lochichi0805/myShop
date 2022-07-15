<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productCount = Product::count();
        $orderCount = Order::count();
        $memberCount = User::count();
        $totalPrice = Order::sum('totalPrice');
        $latestFiveOrders = Order::latest()->take(5)->get();
        
        $result = [
            'productCount' => $productCount,
            'orderCount' => $orderCount,
            'memberCount' => $memberCount,
            'totalPrice' => $totalPrice,
            'latestFiveOrders' => $latestFiveOrders

        ];
        
        return view('admin/dashboard',$result);
    }   

    public function products(Request $request)
    {
        $products = Product::all()->toArray();
        $result = ['records' => $products];

        return view('admin/products', $result);
    }  

    public function createProduct()
    {        
        return view('admin/createProduct');
    }

    public function saveProduct(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'img' => 'required|string',
            'price' => 'required|numeric|min:0',
            'count' => 'required|numeric|min:0',
        ]);
        $status = Product::create($validatedData);

        return Redirect::to('/admin/products');
    }
    
    public function deleteProduct($id)
    {
        Product::find($id)->delete();

        return Redirect::to('/admin/products');
    }

    public function showUpdateProduct($id)
    {
        $products = Product::find($id)->toArray();
        $result = ['records' => $products];

        return view('/admin/updateProduct', $result);
    }

    public function updateProduct(Request $request, $id)
    {
        $products = Product::find($id);
        $result = $products->update($request->toArray());

        return Redirect::to('/admin/products');
    }

    public function members(Request $request)
    {
        $members = User::all()->toArray();
        $result = ['records' => $members];

        return view('/admin/members', $result);
    }
    public function createMember()
    {        
        return view('admin/createMember');
    }

    public function saveMember(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $status = User::create($validatedData);

        return Redirect::to('/admin/members');
    }
    public function deleteMember($id)
    {
        User::find($id)->delete();

        return Redirect::to('/admin/members');
    }
    public function showUpdateMember($id)
    {
        $members = User::find($id)->toArray();
        $result = ['records' => $members];

        return view('/admin/updateMember', $result);
    }

    public function updateMember(Request $request, $id)
    {
        $members = User::find($id);
        $result = $members->update($request->toArray());

        return Redirect::to('/admin/members');
    }

    public function orders(Request $request)
    {
        $orders = Order::all()->toArray();
        $result = ['records' => $orders];

        return view('/admin/orders', $result);
    } 

}
