@extends('admin.layout.master')

@section('title','Product Detail')

@section('body')

    @include('admin.component.alert')
    <div class="details details2">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Thông tin sản phẩm #{{$product->id}}</h2>
            </div>
            <div class="row formProduct justify-content-center">
                <div class="col-7" style="font-size: 20px;">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Hình ảnh sản phẩm:</label>
                            </div>
                            <div class="col-8">
                                <div>
                                    <img class="product-detail-img" 
                                    src="{{$product->image_1?? '/storage/uploads/product/no_image.jpg'}}"  alt="{{$product->slug}}">
                                    <img class="product-detail-img" src="{{$product->image_2 ?? '/storage/uploads/product/no_image.jpg'}}" alt="{{$product->slug}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Thông tin chi tiết sản phẩm:</label>
                            </div>
                            <div class="col-8">
                                <a class="btn" href="admin/product/{{$product->id}}/detail">Quản lý chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Tên sản phẩm:</label>
                            </div>
                            <div class="col-8">
                                <div >{{$product->productname}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Loại:</label>
                            </div>
                            <div class="col-8">
                                <div >{{$product->category->categoryname}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Thương hiệu:</label>
                            </div>
                            <div class="col-8">
                                <div >{{$product->brand->brandname}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Gía:</label>
                            </div>
                            <div class="col-8">
                                <div>${{$product->price}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Gía Sale:</label>
                            </div>
                            <div class="col-8">
                                <div>${{$product->price_sale}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Số lượng:</label>
                            </div>
                            <div class="col-8">
                                <div >{{$product->quantity}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>SKU:</label>
                            </div>
                            <div class="col-8">
                                <div >{{$product->sku}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Đặc sắc:</label>
                            </div>
                            <div class="col-8">
                                <div >{{note($product->featured)}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Xu hướng:</label>
                            </div>
                            <div class="col-8">
                                <div >{{note($product->trending)}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Hàng mới về:</label>
                            </div>
                            <div class="col-8">
                                <div >{{note($product->newarrival)}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Tạo bởi:</label>
                            </div>
                            <div class="col-8">
                                <div >{{$product->user->fullname}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Ngày tạo:</label>
                            </div>
                            <div class="col-8">
                                <div >{{$product->created_at}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 text-end">
                                <label>Miêu tả:</label>
                            </div>
                            <div class="col-8">
                                <div> {!! $product->description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
