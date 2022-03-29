<!DOCTYPE html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </script>
</head>
<body>


<div class="container">
    <h4 ><a href="/" style="color: #6c757d;">首頁</a> / <a href="" style="color: #6c757d;">所有商品</a></h4>
    @foreach ($products as $product)
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card">
                <img src="{{ $product['img'] }}" class="card-img-top" style="width: 100px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">{{ $product['description'] }}</p>
                    <p>價格：NT ${{ $product['price'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


</body>
</html>