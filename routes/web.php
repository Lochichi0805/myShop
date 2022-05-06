<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', 'ProductController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('can:admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index');
    

    Route::get('/products', 'Admin\AdminController@products');
    Route::get('/createProduct', 'Admin\AdminController@createProduct');
    Route::post('/saveProduct', 'Admin\adminController@saveProduct');
    Route::get('/deleteProduct/{id}', 'Admin\AdminController@deleteProduct');
    Route::get('/showUpdateProduct/{id}', 'Admin\AdminController@showUpdateProduct');
    Route::post('/updateProduct/{id}', 'Admin\AdminController@updateProduct');
    
    Route::get('/members', 'Admin\AdminController@members');
    Route::get('/createMember', 'Admin\AdminController@createMember');
    Route::post('/saveMember', 'Admin\adminController@saveMember');  
    Route::get('/deleteMember/{id}', 'Admin\AdminController@deleteMember');
    Route::get('/showUpdateMember/{id}', 'Admin\AdminController@showUpdateMember');
    Route::post('/updateMember/{id}', 'Admin\AdminController@updateMember');
    
});
