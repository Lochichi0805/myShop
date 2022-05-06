<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
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
        return view('Admin/dashboard');
    }   

    public function products(Request $request)
    {
        $products = Product::all()->toArray();
        $result = ['records' => $products];

        return view('Admin/products', $result);
    }  

    public function createProduct()
    {        
        return view('Admin/createProduct');
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

        return view('/Admin/updateProduct', $result);
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

        return view('/Admin/members', $result);
    }
    public function createMember()
    {        
        return view('Admin/createMember');
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

        return view('/Admin/updateMember', $result);
    }

    public function updateMember(Request $request, $id)
    {
        $members = User::find($id);
        $result = $members->update($request->toArray());

        return Redirect::to('/admin/members');
    }
}
