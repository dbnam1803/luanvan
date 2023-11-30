
@extends('admin.layout.master')

@section('title','Customers List')

@section('body')
    <div class="details details2">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Danh sách khách hàng</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Tên</td>
                        <td>Số điện thoại</td>
                        <td>Địa chỉ</td>
                        <td>Email</td>
                        <td>Hành động</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>#{{$user->id}}</td>
                        <td>
                            <img class="user-img mr-10" src=" {{ $user->avatar ?? '/storage/uploads/user/no_avatar.png' }}  " alt="avatar-user">
                            <strong>{{$user->fullname}}</strong>
                        </td>
                        <td>{{$user->phonenumber}}</td>
                        <td>{{$user->address ?? 'Not available'}}</td>
                        <td>{{$user->email}}</td>
                        <td class="d-flex justify-content-end">
                            @if($user->active == 0)
                            <button type="button" class="btnToggle" id="customer_{{$user->id}}" data-active="0" data-bs-toggle="modal" data-bs-target="#customerAction-{{$user->id}}">Active</button>
                            <div class="modal fade" id="customerAction-{{$user->id}}" aria-hidden="true" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">xác nhận</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <strong>Bạn có muốn khóa khách hàng  <span class="text-danger">{{$user->fullname}}</span> </strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btnNo" data-bs-dismiss="modal">Không</button>
                                            <button type="button" class="btn btnYes" onclick="action_customer({{$user->id}})" data-bs-dismiss="modal" >Có</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <button type="button" class="btnToggle btnOff" id="customer_{{$user->id}}" data-active="1" data-bs-toggle="modal" data-bs-target="#customerAction-{{$user->id}}">Lock</button>
                            <div class="modal fade" id="customerAction-{{$user->id}}" aria-hidden="true" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Xác nhận</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <strong>Bạn có muốn mở khóa khách hàng<span class="text-danger">{{$user->fullname}}</span></strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btnNo" data-bs-dismiss="modal">Không</button>
                                            <button type="button" class="btn btnYes" onclick="action_customer({{$user->id}})" data-bs-dismiss="modal" >Có</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <a href="admin/customer/{{$user->id}}" class="btn">Chi tiết</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>

    </div>
@endsection           