@extends('admin/admin')

@section('content')
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="products">會員</span>
    </div>
    <div class="profile-details">
      <span class="admin_name">管理者</span>
    </div>
  </nav>
  <div class="home-content">
    <div class="content-boxes">
      <div class="recent-content box">
        <a type="button" class="btn btn-success float-right" href="{{ url('/admin/createMember/') }}">
          <i class='bx bx-plus'></i><span data-feather="plus"></span> 新增
        </a>
        <table id="table" data-toggle="table" data-search="true" data-pagination="true" data-page-list="[5, 10, 50, 100, 200, All]">
          <thead>
              <tr>
              <th scope="col" data-sortable="true">#</th>
              <th scope="col" data-sortable="true">名字</th>
              <th scope="col" data-sortable="true">Email</th>
              <th scope="col" data-sortable="true">註冊時間</th>
              <th scope="col">操作</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($records as $member)
              <tr>
                <th scope="row">{{ $member['id'] }}</th>
                <td>{{ $member['name'] }}</td>
                <td>{{ $member['email'] }}</td>
                <td>{{ $member['created_at'] }}</td>
                <td>
                  <a type="button" class="btn btn-primary" data-method="put"
                      href="/admin/showUpdateMember/{{ $member['id'] }}" >
                      <i class='bx bx-edit'></i><span data-feather="edit-2"></span>  修改
                  </a>
                  <a type="button" class="btn btn-danger" data-method="delete"
                      href="/admin/deleteMember/{{ $member['id'] }}" >
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