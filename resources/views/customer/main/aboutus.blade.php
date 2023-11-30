@extends('customer.layout.master')

@section('title',  'About Us' )

@section('body')

    <section class="about-section section-padding">
        <div class="my-container2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb d-flex">
                        <div class="about-thumb-items">
                            <img src="/customer/assets/img/about-thumb-list1.png" alt="about-thumb">
                        </div>
                        <div class="about-thumb-items">
                            <img src="/customer/assets/img/about-thumb-list2.png" alt="about-thumb">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="about-content-title mb-20"> Tại sao chọn chúng tui</span>
                        
                        <p class="mb-20">Với tất cả sự chân thành, KENTA cảm ơn bạn đã lựa chọn sản phẩm của chúng tôi để thể hiện phong cách của mình. Chúng tôi tin rằng mỗi mũi khâu trong sản phẩm sẽ dệt nên những điều không thể tưởng tượng được, những điều sẽ vượt qua khoảng cách thế hệ, giới tính, biên giới... để giúp bạn chứng minh rằng PHONG CÁCH SỐNG của mình thật tuyệt vời biết bao.</p>
                        
                    </div>
                    <div class="about-author d-flex align-items-center">
                        <div class="about-author-left">
                            <h4>DBN</h4>
                            <span>CEO - Founder</span>
                        </div>
                        <img src="/customer/assets/img/sign.png" alt="signature">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="counterup-banner-section counterup-banner-bg">
        <div class="my-container2">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="counterup-banner-inner d-flex align-items-center justify-content-between">
                        <div class="counterup-banner-items text-center">
                            <h2 class="text-white">NĂM
                                <br>
                                THÀNH LẬP
                            </h2>
                            <span class="text-white js-counter" data-count="25">0</span>
                        </div>
                        <div class="counterup-banner-items text-center">
                            <h2 class="text-white">THÀNH VIÊN NHÓM CÓ
                                <br>
                               KỸ NĂNG
                            </h2>
                            <span class="text-white js-counter" data-count="70">0</span>
                        </div>
                        <div class="counterup-banner-items text-center">
                            <h2 class="text-white">KHÁCH HÀNG
                                <br>
                                HẠNH PHÚC
                            </h2>
                            <span class="text-white js-counter" data-count="250">0</span>
                        </div>
                        <div class="counterup-banner-items text-center">
                            <h2 class="text-white">ĐƠN HÀNG
                                <br>
                                TRÊN THÁNG
                            </h2>
                            <span class="text-white js-counter" data-count="300">0</span>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection