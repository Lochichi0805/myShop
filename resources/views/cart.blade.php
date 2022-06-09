@extends('layouts.app', ['count' => $cartConut])

@section('content')
<div class="container">
    <div class="checkout-nav">
        <div class="step active">
            <span class="badge"><span class="text">1</span></span>
            <span>購物車</span>
        </div>
        <div class="step">
            <span class="badge"><span class="text">2</span></span>
            <span>填寫資料</span>
        </div>
        <div class="step">
            <span class="badge"><span class="text">3</span></span>
            <span>訂單確認</span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            購物車
        </div>
        <div class="card-body">
            @if (count($records))
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">照片</th>
                            <th scope="col">名稱</th>
                            <th scope="col">價格</th>
                            <th scope="col">數量</th>
                            <th scope="col">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($records as $product)
                        <tr>
                            <td><img src="{{ $product['img'] }}" width="100px" height="100px"></td>
                            <td>{{ $product['name'] }}</td>
                            <td>NT ${{ $product['price'] }}</td>
                            <td>{{ $product['pivot']['count'] }}</td>
                            <td>
                                <a href="/removeCartItem/{{$product['pivot']['id']}}">
                                    <button class="btn btn-sm btn-danger">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>總額</strong></td>
                            <td><strong>NT ${{ $sum }}</strong></td>
                        </tr>
                    </tbody>
                </table>
                <a href="/payment">                    
                    <button type="buttom" class="btn btn-success" style="float: right; margin:5px;">結帳</button>
                </a>
                    
            @else
                <p>你的購物車沒有商品</p>
            @endif
        </div>
    </div>
</div>
@endsection