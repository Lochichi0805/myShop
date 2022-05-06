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
          <div class="number">6</div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">總會員</div>
          <div class="number">6</div>
        </div>
        <i class='bx bxs-cart-add cart two' ></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">總商品</div>
          <div class="number">5</div>
        </div>
        <i class='bx bx-cart cart three' ></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">總金額</div>
          <div class="number">$11,086</div>
        </div>
        <i class='bx bxs-cart-download cart four' ></i>
      </div>
    </div>
    <div class="content-boxes">
      <div class="recent-content box">
        <div class="title">最近的銷售</div>
        <div class="content-details">
          <ul class="details">
            <li class="topic">日期</li>
            <li><a href="#">2022/04/24</a></li>
            <li><a href="#">2022/04/24</a></li>
          </ul>
          <ul class="details">
          <li class="topic">客人</li>
          <li><a href="#">Alex Doe</a></li>
          <li><a href="#">David Mart</a></li>
        </ul>
        <ul class="details">
          <li class="topic">商品</li>
          <li><a href="#">Delivered</a></li>
          <li><a href="#">Pending</a></li>
        </ul>
        <ul class="details">
          <li class="topic">價格</li>
          <li><a href="#">$204.98</a></li>
          <li><a href="#">$24.55</a></li>
        </ul>
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