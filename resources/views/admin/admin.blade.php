<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="zh-TW">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- bootstrap CDN Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- bootstrap-tabl CDN Link -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.20.0/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-store'></i>
      <span class="logo_name">管理後臺</span>
    </div>
      <ul class="nav-links">
        <li>
          <a id="dashborad" href="/admin">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">儀表板</span>
          </a>
        </li>
        <li>
          <a id="products" href="/admin/products">
            <i class='bx bx-box' ></i>
            <span class="links_name">商品</span>
          </a>
        </li>
        <li>
          <a id="orders" href="/admin/orders">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">訂單</span>
          </a>
        </li>
        <li>
          <a id="members" href="/admin/members">
            <i class='bx bx-user' ></i>
            <span class="links_name">會員</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">登出</span>
          </a>
        </li>
      </ul>
  </div>
  @yield('content')
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      } else {
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>
  <!-- bootstrap-table CDN Link -->
  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-table@1.20.0/dist/bootstrap-table.min.js"></script> 
  @yield('js')
</body>
</html>