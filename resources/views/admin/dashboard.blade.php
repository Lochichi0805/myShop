@extends('admin/admin')

@section('content')
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="dashboard">儀表板</span>
    </div>
    <div class="profile-details">
      <span class="admin_name">管理者</span>
    </div>
  </nav>
  <div class="home-content">
    <div class="overview-boxes">
      <div class="box">
        <div class="right-side">
          <div class="box-topic">總訂單</div>
          <div class="number">{{ $orderCount }}</div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">總會員</div>
          <div class="number">{{ $memberCount }}</div>
        </div>
        <i class='bx bxs-cart-add cart two' ></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">總商品</div>
          <div class="number">{{ $productCount }}</div>
        </div>
        <i class='bx bx-cart cart three' ></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">總金額</div>
          <div class="number">${{ $totalPrice }}</div>
        </div>
        <i class='bx bxs-cart-download cart four' ></i>
      </div>
    </div>
    <div class="content-boxes">
      <div class="recent-content box">
        <div class="title">最近的銷售</div>   
        <div class="content-details">
        <table class="table table-striped">
          <thead>
                <tr>
                <th scope="col" data-sortable="true">日期</th>
                <th scope="col" data-sortable="true">客人</th>
                <th scope="col" data-sortable="true">價格</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($latestFiveOrders as $order)
                <tr>
                  <td>{{ date('Y-m-d', strtotime($order['created_at'])) }}</td>
                  <td>{{ $order['name'] }}</td>
                  <td>{{ $order['totalPrice'] }}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script>
$(document).ready(function() {
  $("#dashborad").addClass("active");   
});
</script>
@endsection