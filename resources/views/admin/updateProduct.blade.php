@extends('admin/admin')

@section('content')
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="products">商品</span>
    </div>
    <div class="profile-details">
      <span class="admin_name">管理者</span>
    </div>
  </nav>
  <div class="home-content">
    <div class="content-boxes">
      <div class="recent-content box">
        <h3>修改商品</h3>
        <form action="/admin/updateProduct/{{ $records['id'] }}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">商品名稱</label>
              <input type="text" class="form-control" id="name" name="name" required="required" placeholder="請輸入商品名稱" value="{{ $records['name'] }}">
            </div>
            <div class="form-group">
              <label for="description">商品描述</label>
              <textarea class="form-control" id="description" name="description" rows="3" required="required" placeholder="請輸入商品描述">{{ $records['description'] }}</textarea>
            </div>
            <div class="form-group">
              <label for="outline">商品照片網址</label>
              <textarea class="form-control" id="img" name="img" rows="3" required="required" placeholder="請輸入商品照片網址">{{ $records['img'] }}</textarea>
            </div>
            <div class="form-group">
              <label for="price">商品售價</label>
              <input type="number" class="form-control" id="price" name="price" required="required" placeholder="請輸入商品售價" value="{{ $records['price'] }}">
            </div>
            <div class="form-group">
              <label for="count">商品數量</label>
              <input type="number" class="form-control" id="count" name="count" required="required" placeholder="請輸入商品數量" value="{{ $records['count'] }}">
            </div>
            <a href="/admin/products" class="btn btn-light">取消</a>
            <button type="submit" class="btn btn-primary">送出</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script>
$(document).ready(function() {
  $("#products").addClass("active");   
});
</script>
@endsection