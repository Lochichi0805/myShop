@extends('layouts.app') <!--繼承layouts.app-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://diz36nn4q02zr.cloudfront.net/webapi/images/o/400/400/Activity/16883/856281fc-eab3-4146-8641-dfa154c329b9/144139" class="d-block w-100" alt="image1" style="height: 600px;">
    </div>
    <div class="carousel-item">
      <img src="https://static.popdaily.com.tw/u/202201/e14c1b8d-0b81-46e3-a77f-842c9300bc12.jpg" class="d-block w-100" alt="image2" style="height: 600px;">
    </div>
    <div class="carousel-item">
      <img src="https://pinkoi-wp-blog.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/sites/7/2021/07/14102725/01%E9%A6%96%E5%9C%96%EF%BC%9A%E7%B4%99%E8%86%A0%E5%B8%B6%E6%87%89%E7%94%A8.jpg" class="d-block w-100" alt="image3" style="height: 600px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
  </div>
</div>
<div class="container">
<div class="col-lg-12 mb-12 text-center">
    <div class="section_title" style="margin-top: 30px; margin-bottom: 30px;">
        <h2 ><b style="border-bottom: solid; border-bottom-color: #0A2558;">熱門暢銷</b></h2>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card">
      <img src="https://www.mbsc.com.tw/uploads/product/20210512142438.jpg" class="card-img-top" alt="pen">
      <div class="card-body">
        <h5 class="card-title">原子筆</h5>
        <p class="card-text">* 上班族、學生族群的最愛</br>* 書寫的好工具</br></br>價格：NT $50</p>   
     </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="https://www.9x9.tw/autopic/210062001129_01.jpg" class="card-img-top" alt="pencil">
      <div class="card-body">
        <h5 class="card-title">螢光筆</h5>
        <p class="card-text">* 筆尖：1~1.4 mm圓尖、4 mm斜尖</br>* 水性顏料 / 可繪圖、筆記 / 淡柔色系，呵護雙眼</br></br>價格：NT $80</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="https://cf.shopee.tw/file/2153ac31499f39c36be8cf5465b14544" class="card-img-top" alt="color">
      <div class="card-body">
        <h5 class="card-title">水彩</h5>
        <p class="card-text">* 英國牛頓 Cotman 學生級水彩顏料</br>* 專家學生都適用</br></br>價格：NT $250</p>
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection
