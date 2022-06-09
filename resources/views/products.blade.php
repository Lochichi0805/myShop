@extends('layouts.app', ['count' => $cartConut])
@section('content')
<div class="container">
    <div class="page-bar" style="margin-top: 20px;">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="/" class="test-decoration-none">首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">商品</li>
            </ol>
        </nav>
    </div>
    <div class="row">
    @foreach ($products as $product)
        <div class="col-lg-3 mb-3 sm-3">
            <div class="card">
                <a href="/product/{{ $product['id'] }}"><img src="{{ $product['img'] }}" class="card-img-top"></a>
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">{{ $product['description'] }}</p>
                    <p style="color:#fe4c50">NT ${{ $product['price'] }}</p>
                </div>
            </div>
        </div>
    @endforeach    
    </div>
</div>
@endsection