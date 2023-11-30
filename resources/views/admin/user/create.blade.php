@extends('admin.layout.master')

@section('title','Create User')

@section('body')
        
        <div class="details details2">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Tạo tài khoản</h2>
                </div>
                <form class="formProduct" method="POST" action="admin/user/store" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-7">
                        @if(session('success'))
                        <div class="alert alert-success d-flex justify-content-between" role="alert">
                            <strong>{{session('success')}}</strong>
                            <a href="./admin/user">Xem danh sách nhân viên</a>
                        </div>
                        @endif
                            <div class="row">
                                <div class="col-7">
                                    <div class="form-group ">
                                        <label for="userAvatar">Hình</label>
                                        <input class="form-control" type="file" id="userAvatar" name="image" onchange="previewImg(this,'user-avatar')">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <img id="user-avatar" class="userAvatar" src="./admin/assets/img/no_avatar.png" alt="User Avatar">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userFullName">Tên
                                    <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="text" name="fullname" placeholder="Tên" value="{{ old('fullname') }}" id="userFullName" required>
                                <div class="invalid-feedback">Please type full name</div>
                                @error('fullname')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Số điện thoại
                                    <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="number" name="phonenumber" value="{{ old('phonenumber')}}" placeholder="Số điện thoại" id="phoneNumber" required>
                                <div class="invalid-feedback">Please type phone number</div>
                                @error('phonenumber')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="userGender">Giới tính
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" name="gender" id="userGender" required>
                                    <option disabled selected value="">--- Chọn giới tính ---</option>
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                                <div class="invalid-feedback">vui lòng chọn giới tính</div>
                            </div>
                            <div class="form-group">
                                <label for="userEmail">Email
                                    <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email" id="userEmail" required>
                                <div class="invalid-feedback">Vui lòng nhập một địa chỉ email hợp lệ</div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="userAddress">Địa chỉ
                                    <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="text" name="address" value="{{ old('address') }}" placeholder="Địa chỉ" id="userAddress" required>
                                <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
                            </div>
                            <div class="form-group">
                                <label for="userPassword">Mật khẩu
                                    <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="password" name="password" placeholder="Mật khẩu" id="userPassword" required>
                                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="userConfirmPassword">Xác nhận mật khẩu
                                    <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" id="userConfirmPassword" required>
                                <div class="invalid-feedback">Please type re-password</div>
                            </div>
                            <div class="form-group">
                                <label for="userLevel">Level
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" name="level" id="userLevel" required>
                                    <option disabled selected value="">--- Chọn Level ---</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Nhân viên</option> 
                                </select>
                                <div class="invalid-feedback">Please choose a level</div>
                            </div>
                            <button type="submit" class="btn btnAdd btnSaveProfile">Tạo</button>
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
            
@endsection
