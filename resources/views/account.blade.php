@extends('layouts.app', ['count' => $cartConut])

@section('content')
<div class="container" style="margin-top: 20px;">
    <h1><i class='bx bx-user'></i> 會員中心</h1>
    <div class="card" style="width: 30rem; margin-top: 20px;">
        <div class="card-header">
            我的帳戶
        </div>
        <div class="card-body">
            <a href="/member" class="btn btn-outline-dark">個人資料</a>
            
        </div> 
    </div>

    <div class="card" style="width: 30rem; margin-top: 20px;">
        <div class="card-header">
            我的訂單
        </div>
        <div class="card-body">
            <a href="/cart" class="btn btn-outline-dark">購物車</a> 
            <a href="/orders" class="btn btn-outline-dark">訂單紀錄</a>     
        </div> 
    </div>

</div>

@endsection