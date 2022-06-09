@extends('layouts.app', ['count' => $cartConut])
@section('content')
<div class="row g-0" style="width: 100%;">
    <div class="col-lg-8 mb-8 sm-12" style="-webkit-filter:brightness(.8);height: 600px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230.207740150
        6461!2d120.34461520734025!3d22.60437899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f1
        3.1!3m3!1m2!1s0x346e1caadf10ee7f%3A0x8ba0ac91219753!2z6bOz57-K5rSL6KGM!5e0!3m2!1szh-TW!
        2stw!4v1652450402807!5m2!1szh-TW!2stw" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
    </div>
    <div class="col-lg-4 mb-4 sm-12">
        <div class="contact-info" style="padding: 50px 5%;">
            <h2>聯絡我們</h2>
            <div class="contact-address mt-50">
                <p><i class='bx bx-home'></i><span> 地址：</span> 830高雄市鳳山區五甲二路52號</p>
                <p><i class='bx bx-phone'></i><span> 電話：</span> 07-7672835</p>
                <p><i class='bx bx-envelope'></i><span> Email：</span><a href="chi_shop@shop.com">shop@shop.com</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
