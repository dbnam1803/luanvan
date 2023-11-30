@extends('customer.layout.master')

@section('title','Order Success - Online Shopping')

@section('body')
    <div class="empty-product section-padding bg-grey text-center">
        @if($notification)
            <div class="d-flex justify-content-center mb-10">
                <img style=" height: 80px" src="/customer/assets/img/icons-check.png" alt="">
            </div>
            <div class="empty-product-content mb-10">
                <h3 class="mb-10">Đặt hàng thành công</h3>
                <p style="font-size: 20px">{{$notification}}</p>
            </div>
        @else
        <div class="d-flex justify-content-center mb-10">
                <img style=" height: 80px" src="/customer/assets/img/cart-empty.png" alt="">
            </div>
            <div class="empty-product-content mb-10">
                <h3 class="mb-10">Không có sản phẩm!</h3>
                <p style="font-size: 20px">Mua sắm ngay bây giờ để tận hưởng những ưu đãi tuyệt vời dành riêng cho bạn.</p>
            </div>
        @endif
        
        <a class="primary-btn" href="/shop">Tiếp tục mua sắm</a>
        
    </div>
@endsection