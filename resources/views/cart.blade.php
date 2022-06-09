@extends('layouts.app')

@section('content')
<div class="container">

    <div style="margin-top: 20px;">
        <p class="h2">購物車</p>
    </div>
        @if (count($records))
            <table class="table table-striped" style="text-align:center;">
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
                        <td valign="middle"><img src="{{ $product['img'] }}" width="100px" height="100px"></td>
                        <td valign="middle">{{ $product['name'] }}</td>
                        <td valign="middle">NT ${{ $product['price'] }}</td>
                        <td valign="middle">{{ $product['pivot']['count'] }}</td>
                        <td valign="middle">
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
            <button class="btn btn-success float-right">付款</button>
        @else
            <p>你的購物車沒有商品</p>
        @endif
    </div>
@endsection