@extends('admin/admin')

@section('content')
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="members">會員</span>
    </div>
    <div class="profile-details">
      <span class="admin_name">管理者</span>
    </div>
  </nav>
  <div class="home-content">
    <div class="content-boxes">
      <div class="recent-content box">
        <h3>新增會員</h3>
        <form action="{{ url('/admin/saveMember') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">會員名稱</label>
              <input type="text" class="form-control" id="name" name="name" required="required" placeholder="請輸入會員名稱">
            </div>
            <div class="form-group">
              <label for="description">電子郵件</label>
              <textarea class="form-control" id="email" name="email" rows="3" required="required" placeholder="請輸入電子郵件"></textarea>
            </div>
            <div class="form-group">
              <label for="outline">密碼</label>
              <input type="text" class="form-control" id="password" name="password" required="required" placeholder="請輸入密碼">
            </div>
            <a href="/admin/members" class="btn btn-light">取消</a>
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
  $("#members").addClass("active");   
});
</script>
@endsection