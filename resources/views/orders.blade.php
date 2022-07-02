@extends('layouts.app', ['count' => $cartConut])

@section('content')

<div class="container" style="margin-top: 20px;">
    <div style="margin-top: 20px;"> 
        <p class="h2"><i class='bx bx-clipboard' ></i> 訂單紀錄</p>
    </div>
    @if(session()->has('orders'))
        <div class="alert alert-success">
            {{ session()->get('orders') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>訂單編號</th>
                <th>收件地址</th>
                <th>收件人</th>
                <th>付款狀態</th>
                <th>建立時間</th>
                <th>總額</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($records as $orders)
            <tr>
                <td>{{ $orders['id'] }}</td>
                <td>{{ $orders['address'] }}</td>
                <td>{{ $orders['name'] }}</td>
                <td>
                    @if($orders['paymentStatus'] == 0)
                        <i class='bx bx-x text-danger'></i>未付款
                    @else
                        <i class='bx bx-check text-success'></i>已付款
                    @endif
                </td>
                <td>{{ date('Y-m-d H:m:s', strtotime($orders['created_at'])) }}</td>
                <td>NT ${{ $orders['totalPrice'] }}</td>
                <td>
                    <a href="/order/{{ $orders['id'] }}">
                        <button class="btn btn-sm btn-primary">
                            訂單明細
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection