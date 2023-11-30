@extends('customer.layout.master')

@section('title',  'Account Register - Online Shopping' )

@section('body')  

    <section class="login-section section-padding">
        <div class="login-wrapper">
            <form method="POST" action="register" >
                @csrf
                <div class="account-login">
                    <div class="account-login-header mb-25">
                        <h2 class="account-login-header-title h3 mb-10">ĐĂNG KÝ</h2>
                        <p class="account-login-header-desc">Đăng ký tại đây nếu bạn là khách hàng mới.</p>
                    </div>
                    <div class="account-login-inner">
                        @error('fullname')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input class="account-login-input" value="{{old('fullname')}}" name="fullname" placeholder="Họ và tên" type="type">
                        @error('phonenumber')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input class="account-login-input"  value="{{old('phonenumber')}}" name="phonenumber" placeholder="Só điện thoại" type="number">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input class="account-login-input"  value="{{old('email')}}" name="email" placeholder="Địa chỉ email" type="email">
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input class="account-login-input"  name="password" placeholder="Mật khẩu" type="password">
                        @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input class="account-login-input" name="password_confirmation" placeholder="Xác nhận mật khẩu" type="password">
                        <div class="account-login-remember-forgot mb-15 d-flex justify-content-between align-items-center" >
                            <div class="account-login-remember position-relative">
                                <input class="checkout-checkbox-input" id="terms" type="checkbox">
                                <label class="checkout-checkbox-label login-remember-label" for="terms">
                                Tôi đã đọc và đồng ý với các điều khoản và điều kiện
                                </label>
                            </div>
                        </div>
                        <button class="account-login-btn primary-btn" type="submit">Đăng Ký</button>
                        <div class="account-login-divide">
                            <span class="account-login-divide-text">Hoặc</span>
                        </div>
                        <div class="account-social d-flex justify-content-center mb-15">
                            <a class="account-social-link facebook" target="_blank" href="https://www.facebook.com">Facebook</a>
                            <a class="account-social-link google" target="_blank" href="https://www.google.com">Google</a>
                            <a class="account-social-link twitter" target="_blank" href="https://twitter.com">Twitter</a>
                        </div>
                        <p class="account-login-signup-text">Bạn co săn san để tạo một tai khoản?
                            <a href="login">Đăng nhập tại đây</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection