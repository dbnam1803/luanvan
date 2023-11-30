<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Brand\BrandService;
use App\Models\Brand;

class BrandController extends Controller
{
    protected $brandService;

    public function __construct(BrandService $brandService){

        $this->brandService = $brandService;
    }

    public function index(){

        $brands = $this->brandService->getAll();

        return view('admin.brand.view', compact('brands'));
        
    }

    public function create(){

        return view('admin.brand.create');
    }

    public function store(Request $request){

        $this->brandService->create($request);

        return redirect('admin/brand/create') -> with('success','Thương hiệu mới đã được thêm thành công!');
    } 

    public function show(Brand $brand){

        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand){
        
        $this->brandService->update($request, $brand);
        return redirect('admin/brand') -> with('success','Thương hiệu đã được chỉnh sửa thành công!');
    }

    public function destroy($id){
        
        $result = $this->brandService->destroy($id);   

        if($result){
            return redirect('admin/brand')->with('success','Thương hiệu đã được xóa thành công!');
        }
    }
}
