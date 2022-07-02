@extends('layouts.app', ['count' => $cartConut])

@section('content')
<div class="container" style="margin-top: 20px;">
    <div style="margin-top: 20px;"> 
        <p class="h2"><i class='bx bx-receipt'></i> 詳細訂單</p>
    </div>


    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            商品資訊
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
                    @foreach($products as $product)
                        <tr>
                            <td scope="col"><img src="{{ $product->img }}" width="100px" height="100px"></td>
                            <td scope="col">{{ $product->name }}</td>
                            <td scope="col">{{ $product->pivot->count }}</td>
                            <td scope="col">{{ $product->price }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        
                        <td><strong>總額</strong></td>
                        <td><strong>NT ${{ $sum }}</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            訂購人資訊
        </div>
        <div class="card-body">
            <p class="card-text">姓名：{{ $name }}</p>
            <p class="card-text">地址：{{ $address }}</p>
            <p class="card-text">電話：{{ $phone }}</p>
            <p class="card-text">
                付款方式：
                @if($payment == 0)
                    ATM轉帳
                @else
                    其他
                @endif
            </p>
        </div>
    </div>

    <div class="card" style="margin-top: 20px;">
        <div class="card-header">
            訂單紀錄
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">編號</th>
                        <th scope="col">訊息</th>
                        <th scope="col">狀態</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderRecords as $orderRecord)
                        <tr>
                            <td>{{ $orderRecord->id }}</td>
                            <td>{{ $orderRecord->comment }}</td>
                            <td>{{ $orderRecord->orderStatus }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection