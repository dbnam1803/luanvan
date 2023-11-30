@extends('admin.layout.master')

@section('title','Create Category')

@section('body')
        
        <div class="details details2">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Tạo thương hiệu</h2>
                </div>
                <form class="formProduct" method="POST" action="admin/brand/store" novalidate>
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-7">
                        @if(session('success'))
                        <div class="alert alert-success d-flex justify-content-between" role="alert">
                            <strong>{{session('success')}}</strong>
                            <a href="./admin/brand">Danh sách thương hiệu</a>
                        </div>
                        @endif
                            <div class="form-group">
                                <label for="brandname">Tên
                                    <span class="text-danger">*</span>
                                </label>
                                <input class="form-control" type="text" name="brandname" placeholder="Tên thương hiệu" id="brandname" required>
                                <div class="invalid-feedback">Vui lòng nhập tên thương hiệu hợp lệ</div>
                                @error('brandname')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Miêu tả
                                    <span class="text-danger">*</span>
                                </label>
                                <textarea class="textarea-category" name="description" id="description" cols="30" rows="10"></textarea>
                                <div class="invalid-feedback">Vui lòng nhập mô tả thương hiệu</div>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="active">Trạng thái
                                    <span class="text-danger">*</span>
                                </label>
                                <select name="active" id="active" >
                                    <option selected value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                                @error('active')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btnAdd btnSaveProfile">Tạo</button>
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
            
@endsection
