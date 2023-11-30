
@extends('admin.layout.master')

@section('title', 'Statistics')

@section('body')
    <div class="details details2">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Đổi mật khẩu</h2>
            </div>
            <form action="/admin/password" method="POST">
                @csrf
                <div class="password-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            @include('admin.component.alert')
                            <div class="form-group">
                                <label for="current_password">Mật khẩu hiện tại 
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="password" id="current_password" name="current_password" placeholder="Mật khẩu hiện tại">
                                @error('current_password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @if(session('error2'))
                                    <p class="text-danger">{{ session('error2') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu mới 
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="password" id="password" name="password" placeholder="Mật khẩu mới ">
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Xác nhận mật khẩu
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Xác nhận mật khẩu">
                                @error('password_confirmation')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btnSaveProfile">Lưu mật khẩu</button>
                        </div>
                    </div>
                </div>  
            </form>
        </div>

    </div>
@endsection
            
