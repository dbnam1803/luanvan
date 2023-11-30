@extends('admin.layout.master')

@section('title', 'View Category')

@section('body')
    <div class="details details2">
    @include('admin.component.alert')
        <div class="recentOrders">
        
            <div class="cardHeader">
                <h2>Danh sách danh mục</h2>
                <a href="/admin/category/create" class="btn btn2">
                    <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                    <span class="title">Tạo danh mục</span>
                </a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Tên danh mục</td>
                        <td>Loại</td>
                        <td>Trạng thái</td>
                        <td>Cập nhật</td>
                        <td>Hành động</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $categories as $category)
                    <tr>
                        <td>#{{ $category->id }}</td>
                        <td>{{ $category->categoryname }}</td>
                        <td>{{ $category->parent_id }}</td>
                        <td>{{ active($category->active) }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td class="d-flex justify-content-end">
                            <a href="/admin/category/edit/{{$category->id}}" class="btn mr-10">Sữa</a>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteCategory-{{$category->id}}">Xóa</button>
                            <div class="modal fade" id="modalDeleteCategory-{{$category->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                                tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel">Xác nhận</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <strong>Bạn có chắc chắn muốn xóa danh mục <span class="text-danger">{{$category->categoryname}}</span></strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btnNo" data-bs-dismiss="modal">Không</button>
                                            <form action="/admin/category/delete/{{$category->id}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn">Có</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
            
@endsection