@extends('layouts.app', ['count' => $cartConut])

@section('content')
<div class="container" style="margin-top: 20px;">

    <div class="checkout-nav">
        <div class="step visited">
            <span class="badge"><span class="text">1</span></span>
            <span>購物車</span>
        </div>
        <div class="step active">
            <span class="badge"><span class="text">2</span></span>
            <span>填寫資料</span>
        </div>
        <div class="step">
            <span class="badge"><span class="text">3</span></span>
            <span>訂單確認</span>
        </div>
    </div>

    <form action="/confirm" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
            訂購人資訊
            </div>
            <div class="card-body">
                <input type="hidden" id="userId" name="userId" value="">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">姓名</label>
                    <div class="col-sm-6">
                        <input type="name" class="form-control" id="name" name="name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">地址</label>
                    <div class="col-sm-6">
                        <input type="name" class="form-control" id="address" name="address" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">電話</label>
                    <div class="col-sm-6">
                        <input type="phone" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="payment" class="col-sm-3 col-form-label">付款方式</label>
                    <div class="col-sm-6">
                        <select class="form-control form-select" id="payment" name="payment">
                            <option value="0">ATM轉帳</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success" style="float: right; margin:5px;">立即結帳</button>
    </form>

    </div>
@endsection