<?php

use Illuminate\Support\Facades\Route;

//不需登入
Route::get('/', 'HomeController@index');
Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@detail');
Route::get('/contract', 'ContractController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // 購物車(需登入)
    // TO DO: 先做存在資料庫，後續可改成存 session
    Route::get('/cart', 'HomeController@cart');
    Route::get('/removeCartItem/{productId}', 'HomeController@removeCartItem');
    Route::post('/addCartItem/{productId}', 'HomeController@addCartItem');
    //訂單
    Route::get('/payment', 'HomeController@payment');
    Route::post('/confirm', 'HomeController@confirm'); 
    Route::post('/saveOrder', 'HomeController@saveOrder');
    //訂單紀錄
    Route::get('/orders', 'HomeController@orders');
    Route::get('/order/{orderId}', 'HomeController@order');
    //會員中心
    Route::get('/account', 'HomeController@account');

Route::prefix('admin')->middleware('can:admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index');
    
    //商品
    Route::get('/products', 'Admin\AdminController@products');
    Route::get('/createProduct', 'Admin\AdminController@createProduct');
    Route::post('/saveProduct', 'Admin\adminController@saveProduct');
    Route::get('/deleteProduct/{id}', 'Admin\AdminController@deleteProduct');
    Route::get('/showUpdateProduct/{id}', 'Admin\AdminController@showUpdateProduct');
    Route::post('/updateProduct/{id}', 'Admin\AdminController@updateProduct');
    
    //會員
    Route::get('/members', 'Admin\AdminController@members');
    Route::get('/createMember', 'Admin\AdminController@createMember');
    Route::post('/saveMember', 'Admin\adminController@saveMember');  
    Route::get('/deleteMember/{id}', 'Admin\AdminController@deleteMember');
    Route::get('/showUpdateMember/{id}', 'Admin\AdminController@showUpdateMember');
    Route::post('/updateMember/{id}', 'Admin\AdminController@updateMember');
    
});
