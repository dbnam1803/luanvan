@extends('customer.layout.master')

@section('title','My Account')

@section('body')

    <section class="my-account-section section-padding">
        <div class="my-container2">
            <p class="account-welcome-text mb-30">Xin chào, Chào mừng đến với hồ sơ của bạn!</p>
            @if(session('success'))
        <div class="alert alert-success alert-block alert-dismissible fade show" role="alert">    
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
            <div class="my-account-section-inner d-flex">
                <div class="account-left-sidebar">
                    <h2 class="account-content-title h3 mb-20">Hồ sơ</h2>
                    <ul class="account-menu nav flex-column">
                        <li class="account-menu-list">
                            <a href="/my-account/profile" class="{{(request()->segment(2) == 'profile') ? 'active' : ''}}">Điều khiển</a>
                        </li>
                        <li class="account-menu-list">
                            <a href="/my-account/order" class="{{(request()->segment(2) == 'order') ? 'active' : ''}}">Đơn hàng</a>
                        </li>
                        <li class="account-menu-list">
                            <a href="/wishlist">Yêu thích</a>
                        </li>
                        <li class="account-menu-list">
                            <form action="logout" method="POST">
                                @csrf
                                <button type="submit">Đăng xuất</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="account-wrapper tab-content">
                    @yield('account_body')
                </div>
            </div>
        </div>
    </section>
    @include('customer.component.shipping_banner')

@endsection
