<?php

namespace App\Traits;

use Auth;
use App\Models\User;
use App\Models\Cart;

trait CartTrait
{
    public $cartCount;

    public function getCartCount()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $count = User::find($userId)->cart()->count();
            $this->cartCount = $count;
        } else {
            $this->cartCount = 0;
        }

        return $this->cartCount;
    }
}