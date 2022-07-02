@extends('layouts.app', ['count' => $cartConut])

@section('content')
<div class="container" style="margin-top: 20px;">

    <div class="checkout-nav">
        <div class="step visited">
            <span class="badge"><span class="text">1</span></span>
            <span>購物車</span>
        </div>
        <div class="step visited">
            <span class="badge"><span class="text">2</span></span>
            <span>填寫資料</span>
        </div>
        <div class="step active">
            <span class="badge"><span class="text">3</span></span>
            <span>訂單確認</span>
        </div>
    </div>
    <form action="/saveOrder" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                購物明細
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">照片</th>
                            <th scope="col">名稱</th>
                            <th scope="col">價格</th>
                            <th scope="col">數量</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders['product'] as $product)
                            <tr>
                                <td><img src="{{ $product['img'] }}" width="100px" height="100px"></td>
                                <td>{{ $product['name'] }}</td>
                                <td>NT ${{ $product['price'] }}</td>
                                <td>{{ $product['pivot']['count'] }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td><strong>總額</strong></td>
                            <td><strong>NT  {{ $sum }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card" style="margin-top: 30px;">
            <div class="card-header">
                訂購人資訊
            </div>
            <div class="card-body">
                <p class="card-text">姓名：{{ $orders['name'] }}</p>
                <p class="card-text">地址：{{ $orders['address'] }}</p>
                <p class="card-text">電話：{{ $orders['phone'] }}</p>
                <p class="card-text">付款方式：
                    @if($orders['payment'] == 0)
                        ATM轉帳
                    @else
                        其他
                    @endif
                </p>
            </div>
        </div>
        <input type="hidden" id="name" name="name" value="{{ $orders['name'] }}">
        <input type="hidden" id="address" name="address" value="{{ $orders['address'] }}">
        <input type="hidden" id="phone" name="phone" value="{{ $orders['phone'] }}">
        <input type="hidden" id="payment" name="payment" value="{{ $orders['payment'] }}">
        <button type="submit" class="btn btn-success" style="float: right; margin:5px;">確認，送出訂單</button>
    </form>
</div>

@endsection