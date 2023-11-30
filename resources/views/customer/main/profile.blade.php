@extends('customer.layout.account')

@section('account_body')
<form action="/my-account/profile" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-7">
            <div class="info-account">
                <div class="row">
                    <div class="col-3 text-right">
                        <label for="">Email</label>
                    </div>
                    <div class="col-9 text-start text-dark">{{Auth::user()->email}}</div>
                </div>
            </div>
            <div class="info-account">
                <div class="row align-items-center">
                    <div class="col-3 text-right">
                        <label for="fullname">Tên</label>
                    </div>
                    <div class="col-9 text-start">
                        <input class="form-control" type="text" name="fullname" id="fullname" value="{{Auth::user()->fullname}}">
                    </div>
                </div>
            </div>
            <div class="info-account">
                <div class="row align-items-center">
                    <div class="col-3 text-right">
                        <label for="phonenumber">số điện thoại</label>
                    </div>
                    <div class="col-9 text-start">
                        <input class="form-control" type="text" name="phonenumber" id="phonenumber" value="{{Auth::user()->phonenumber}}">
                    </div>
                </div>
            </div>
            <div class="info-account">
                <div class="row align-items-center">
                    <div class="col-3 text-right">
                        <label for="gender">Giới tính</label>
                    </div>
                    <div class="col-9 text-start">
                        <select class="form-select" name="gender" id="gender">
                            <option {{ Auth::user()->gender == 0 ? 'selected' : '' }} value="0">Nam</option>
                            <option {{ Auth::user()->gender == 1 ? 'selected' : '' }} value="1">Nữ</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="info-account">
                <div class="row align-items-center">
                    <div class="col-3 text-right">
                        <label for="address">Địa chỉ</label>
                    </div>
                    <div class="col-9 text-start">
                        <input class="form-control" type="text" name="address" id="address" value="{{Auth::user()->address}}">
                    </div>
                </div>
            </div>
            <div class="info-account">
                <div class="row align-items-center">
                    <div class="col-3 text-right">
                        <label for="country">Quốc gia</label>
                    </div>
                    <div class="col-9 text-start">
                        <input class="form-control" type="text" name="country" id="country" value="{{Auth::user()->country}}">
                    </div>
                </div>
            </div>
            <div class="info-account">
                <div class="row align-items-center">
                    <div class="col-3 text-right">
                        <label for="postcode">Postcode</label>
                    </div>
                    <div class="col-9 text-start">
                        <input class="form-control" type="text" name="postcode" id="postcode" value="{{Auth::user()->postcode}}">
                    </div>
                </div>
            </div>
            <div class="info-account-btn text-end">
                <div class="col-9">
                    <button type="submit">Lưu</button>
                </div>
            </div>
        </div>
        <div class="col-5 d-flex align-items-center justify-content-center">
            <div class="user-avatar">
                <div class="user-avatar-img">
                    <img src="/{{ Auth::user()->avatar ?? 'storage/uploads/user/no_avatar.png'}}" id="user-avatar" alt="user-avatar">
                </div>
                <div class="user-avatar-btn">
                    <label for="avatar">Chọn hình ảnh
                        <input onchange="previewImg(this,'user-avatar')" type="file" name="image" id="avatar">
                    </label>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection