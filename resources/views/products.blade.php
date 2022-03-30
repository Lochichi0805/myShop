@extends('layouts.app')
@section('content')


<div class="container">
    <h4 ><a href="/" style="color: #6c757d;">首頁</a> / <a href="" style="color: #6c757d;">所有商品</a></h4>
    @foreach ($products as $product)
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card">
                <img src="{{ $product['img'] }}" class="card-img-top" style="width: 200px ;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">{{ $product['description'] }}</p>
                    <p>價格：NT ${{ $product['price'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <?php echo $products->render(); ?>
</div>



@endsection