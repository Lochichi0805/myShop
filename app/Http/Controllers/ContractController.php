<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\CartTrait;

class ContractController extends Controller
{
    use CartTrait;
    
    public function index()
    {
        $count = $this->getCartCount();
        $result = [
            'cartConut' => $count,
        ];
        return view('contract',$result);
    }
}