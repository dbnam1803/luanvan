@extends('admin.layout.master')

@section('title', 'Orders List')

@section('body')

    <div class="details details2">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Danh sách đơn hàng</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Tên</td>
                        <td>Số điện thoai</td>
                        <td>Ngày đặt hàng</td>
                        <td>Tổng giá</td>
                        <td>Tình trạng đặt hàng</td>
                        <td class="text-center">Phương thức thanh toán</td>
                        <td>Hoạt động</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>#{{$order->id}}</td>
                        <td>
                            <a href="admin/customer/{{$order->user_id}}">
                                <img class="user-img mr-10" src="{{ $order->user->avatar ?? '/storage/uploads/user/no_avatar.png'}}" alt="">
                                <strong style="color: #ee2761">{{$order->user_fullname}}</strong>
                            </a>
                        </td>
                        <td>{{$order->user_phonenumber}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>${{$order->total_price}}</td>
                        <td id='order-{{$order->id}}'>
                            @if($order->status == 0)
                                <span class="status pending">Chưa xử lý</span>
                            @elseif($order->status == 1)
                                <span class="status inprogress">Trong tiến trình</span>
                            @elseif($order->status == 2)
                                <span class="status delivered">	Đã giao hàng</span>
                            @elseif($order->status == 3)
                                <span class="status return">Trả hàng</span>
                            @else
                                <span class="status cancel">Hủy</span>    
                            @endif
                        </td>
                        <td class="text-center text-uppercase">
                            {{$order->payment}}
                        </td>
                        <td>
                            @if($order->status == 0)
                            <button class="btn btn-confirm" data-id="{{$order->id}}">Xác nhận</button>
                            @endif
                            <a href="admin/order/{{$order->id}}" class="btn">Chi tiết</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $orders->links() }}
            
        </div>

    </div>

@endsection