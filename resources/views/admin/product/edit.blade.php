@extends('admin.layout.master')

@section('title','Edit Product')

@section('body')

    <div class="details details2">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Chỉnh sửa sản phẩm #{{ $product->id}}</h2>
            </div>
            <form class="formProduct" action="/admin/product/edit/{{$product->id}}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row justify-content-center">
                    <div class="col-9">
                        <div class="form-group">
                            <label for="productName">Tên sản phẩm
                                <span class="text-danger">*</span>
                            </label>
                            <input class="form-control" value="{{ $product->productname}}" name="productname" type="text" placeholder="Name Product" id="productName" required>
                            <div class="invalid-feedback">Vui lòng nhập tên sản phẩm</div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category">Loại
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select" name="category_id" id="category" required>
                                        <option disabled value="">--- Chọn loại ---</option>
                                        <?php 
                                            showCategories($categories, 0, '', $product->category_id);
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">Vui lòng chọn loại sản phẩm</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="brand">Thương hiệu
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select" name="brand_id" id="brand" required>
                                        <option value="">--- Chọn thương hiệu ---</option>
                                        @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                            {{ $brand->brandname }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Vui lòng chọn thương hiệu</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="price">Gía
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" value="{{$product->price}}" name="price" type="number" placeholder="0" min="0" id="price" required>
                                <div class="invalid-feedback">vui lòng nhập giá</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="discount">Gía Sale</label>
                                    <input type="number" value="{{$product->price_sale}}" name="price_sale" placeholder="0" id="discount">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="price">SKU
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" value="{{$product->sku}}" name="sku" type="text" placeholder="SKU" required>
                                <div class="invalid-feedback">vui lòng nhập mã SKU</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="featured">Đặc sắc</label>
                                    <select name="featured" id="featured">
                                        <option value="0" {{ $product->featured == 0 ? 'selected' : '' }}>Không</option>
                                        <option value="1" {{ $product->featured == 1 ? 'selected' : '' }}>Có</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="trending">Xu hướng</label>
                                    <select name="trending" id="trending">
                                        <option value="0" {{ $product->trending == 0 ? 'selected' : '' }}>Không</option>
                                        <option value="1" {{ $product->trending == 1 ? 'selected' : '' }}>Có</option>
                                    </select>
                                <div class="invalid-feedback">Please type price</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="newarrival">Hàng mới về</label>
                                    <select name="newarrival" id="newarrival">
                                        <option value="0" {{ $product->newarrival == 0 ? 'selected' : '' }}>Không</option>
                                        <option value="1" {{ $product->newarrival == 1 ? 'selected' : '' }}>Có</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Miêu tả
                                <span class="text-danger">*</span>
                            </label>
                            <textarea name="description" id="description" cols="30" rows="10" >{{$product->description}}</textarea>
                            <div class="invalid-feedback">vui lòng nhập miêu tả </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Hình 1</label>
                                    <input value="{{$product->image_1}}" class="form-control" type="file" name="imageProduct_1" id="image_1" onchange="previewImg(this,'product-detail-img1')">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <img id="product-detail-img1" class="img-product-detail" src="{{$product->image_1}}" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Hình 2</label>
                                    <input value="{{$product->image_2}}" class="form-control" type="file" name="imageProduct_2" id="image_2" onchange="previewImg(this,'product-detail-img2')">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <img id="product-detail-img2" class="img-product-detail" src="{{$product->image_2}}" alt="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btnAdd" data-bs-toggle="modal" >Lưu</button>
                    </div>
                </div>
                
            </form>
        </div>

    </div>

@endsection
