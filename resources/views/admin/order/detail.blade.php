@extends('admin.layout.master')

@section('title', 'Order Detail')

@section('body')

    <div class="details details2">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Order Detail #{{$order->id}}</h2>
            </div>
            <table class="tableCustomerDetails">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td style="width: 70%">#{{$order->id}}</td>
                    </tr>
                    <tr>
                        <td>Họ và tên</td>
                        <td>{{$order->user_fullname}}</td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>{{$order->user_phonenumber}}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>{{$order->user_address}}, {{$order->user_country}}</td>
                    </tr>
                    <tr>
                        <td>Ngày đặt hàng</td>
                        <td>{{$order->created_at}}</td>
                    </tr>
                    <tr>
                        <td>Tình trạng đặt hàng</td>
                        
                        @if($order->status == 0)
                        <td>Chưa xử lý</td>
                        @elseif($order->status == 1)
                        <td>Trong tiến trình</td>
                        @elseif($order->status == 2)
                        <td>Đã giao hàng</td>
                        @else
                        <td>Trả hàng</td>
                        @endif
                        
                    </tr>
                    <tr>
                        <td>Phương thức thanh toán</td>
                        <td class="text-uppercase">{{$order->payment}}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <td class="text-start">tên sản phẩm </td>
                        <td>Màu sắc</td>
                        <td>Size</td>
                        <td>Đơn giá</td>
                        <td>Số lượng</td>
                        <td>Giảm giá</td>
                        <td>Tổng Phụ</td>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($order->orderDetails as $orderDetail)
                    <tr>
                        <td class="d-flex align-items-center">
                            <img class="imgProduct" src="{{$orderDetail->productDetail->colorImg_1}}">
                            <strong>{{$orderDetail->productDetail->product->productname}}</strong>
                        </td>
                        <td>{{$orderDetail->productDetail->color}}</td>
                        <td>{{$orderDetail->productDetail->size}}</td>
                        <td>${{number_format($orderDetail->productDetail->product->price_sale, 2)}}</td>
                        <td>{{$orderDetail->quantity}}</td>
                        <td>{{$order->discount}}%</td>
                        <td>
                            <strong>${{$orderDetail->amount}}</strong>
                        </td>
                    </tr>
                     @endforeach

                </tbody>
            </table>
            <div class="totalPrice d-flex justify-content-between">
                <strong>Tổng:</strong>
                <strong>${{$order->total_price}}</strong>
            </div>
        </div>
    </div>

@endsection