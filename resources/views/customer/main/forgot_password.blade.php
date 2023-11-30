@extends('customer.layout.master')

@section('title',  'Forgot Password - Online Shopping' )

@section('body')
<section class="login-section section-padding">
    <div class="login-wrapper">
        <div class="account-login">
            <div class="account-login-header mb-25">
                <h2 class="account-login-header-title h3 mb-10">ĐẶT LẠI MẬT KHẨU</h2>
                <p>Một email chứa hướng dẫn thêm sẽ được gửi đến hộp thư của bạn</p>
            </div>
            <div class="account-login-inner">
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <input class="account-login-input" name="email" placeholder="Địa chỉ email" type="email">
                <p class="text-danger mb-10" hidden style="margin-top: -15px;">
                        Không tìm thấy tài khoản nào có địa chỉ email này!</p>
                <button class="account-login-btn primary-btn getlink-btn" type="submit">Nhận liên kết</button>
            </div>
        </div>
    </div>
</section>
@endsection