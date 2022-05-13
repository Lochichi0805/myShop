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
    
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-lg-5 mb-5">
                <img src="{{ $products['img'] }}" style="height: 400px;">
            </div>
            <div class="col-lg-7 mb-7">
                <div class="card-body">
                    
                    <h3 class="card-title">{{ $products['name'] }}</h3>
                    <p class="card-text">商品描述：<pre>{{ $products['description'] }}</pre></p>
                    <p class="card-text">商品數量：{{ $products['count'] }}</p>
                    <p style="color:#fe4c50">價格：NT ${{ $products['price'] }}</p>

                    <a href="#">
                        <button type="button" class="btn btn-primary">
                            <i class='bx bx-cart bx-xs'>放入購物車</i>
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection