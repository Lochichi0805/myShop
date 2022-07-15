@extends('admin/admin')

@section('content')
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="products">訂單</span>
    </div>
    <div class="profile-details">
      <span class="admin_name">管理者</span>
    </div>
  </nav>
  <div class="home-content">
    <div class="content-boxes">
      <div class="recent-content box">
        <table id="table" data-toggle="table" data-search="true" data-pagination="true" data-page-list="[5, 10, 50, 100, 200, All]">
        
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
                            <button class="btn btn-primary">
                                訂單明細
                            </button>
                        </a>
                        <a type="button" class="btn btn-danger" data-method="delete"
                            href="/admin/deleteProduct/{{ $orders['id'] }}" >
                            <i class='bx bx-trash'></i><span data-feather="trash-2"></span> 刪除
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
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