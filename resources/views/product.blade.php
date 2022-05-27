@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-bar" style="margin-top: 20px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="/" class="test-decoration-none">首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">商品</li>
            </ol>
        </nav>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-lg-5 mb-5">
                <img src="{{ $products['img'] }}" style="height: 200px;">
            </div>
            <div class="col-lg-7 mb-7">
                <div class="card-body">

                    <form action="/addCartItem/{{ $products['id'] }}" method="post">
                        @csrf
                        <h3 class="card-title">{{ $products['name'] }}</h3>
                        <p class="card-text">商品描述：<pre>{{ $products['description'] }}</pre></p>
                        <p class="card-text">商品數量：{{ $products['count'] }}</p>
                        <p style="color:#fe4c50">價格：NT ${{ $products['price'] }}</p>

                        <div class="form-group">
                            <label class="col-lg-6 mb-6" for="count">數量</label>
                            <input class="col-lg-5 mb-5" type="number" class="form-control" id="count" name="count" required="required" value="1" placeholder="請輸入商品數量">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col-lg-4 mb-4" name="type" value="cart">
                                <i class='bx bx-cart bx-xs'>放入購物車</i>
                            </button>
                            <button type="submit" class="btn btn-primary col-lg-4 mb-4" name="type" value="order">
                                <i class='bx bx-briefcase-alt bx-xs'>購買</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection