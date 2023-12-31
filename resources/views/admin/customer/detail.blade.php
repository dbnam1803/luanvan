@extends('admin.layout.master')

@section('title', 'Profile Customer')

@section('body')    
    
    <div class="details details2">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Hồ sơ khách hàng #{{$user->id}}</h2> 
            </div>
            <div class="profile-wrapper">
                <div class="row">
                    <div class="col-4 position-relative border-right">
                        <div class="avatar">
                            <div class="avatar-img">
                                <img src="{{$user->avatar ?? '/storage/uploads/user/no_avatar.png'}}" alt="">
                            </div>
                            <div class="avatar-name">{{$user->fullname}}</div>
                            <div class="text-center">{{level($user->level)}}</div>
                        </div>
                        <a class="backToHome" href="admin/home">
                            <span class="icon"><ion-icon name="chevron-back-outline"></ion-icon></span>
                            <span class="title">Trở về trang chủ</span>
                        </a>
                    </div>
                    <div class="col-8">
                        <form action="admin/profile" method="POST">
                            @csrf
                            <div class="profile-details">
                                <div class="form-group">
                                    <label for="fullNameAdmin">Tên</label>
                                    <input type="text" id="fullNameAdmin" name="fullname" value="{{$user->fullname}}"disabled>
                                </div>
                                <div class="form-group">
                                    <label for="phoneNumberAdmin">Số điện thoại</label>
                                    <input type="number" id="phoneNumberAdmin" name="phonenumber" value="{{$user->phonenumber}}"disabled>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Giới tính</label>
                                    <input type="text" value="{{ $user->gender == null ? 'Không có sẵn' : gender ($user->gender)}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="addressAdmin">Địa chỉ</label>
                                    <input type="text" id="addressAdmin" name="address" value="{{$user->address ?? 'Không có sẵn'}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="text" id="email" value="{{$user->email}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <input type="text" value="{{level($user->level)}}" disabled>
                                </div>
                            </div>
                            <!-- <button type="submit" class="btn btnSaveProfile">Save Profile</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection