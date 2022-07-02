<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'product',
        'name',
        'phone',
        'payment',
        'paymentStatus',
        'address',
        'totalPrice',
        'orderRecord',
        'userId'
    ];
}
