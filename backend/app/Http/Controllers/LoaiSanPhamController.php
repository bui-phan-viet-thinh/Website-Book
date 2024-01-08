<?php

namespace App\Http\Controllers;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
    public function danhSach()
    {
        // // Kiểm tra trạng thái ddawng nhập của admin
        // $admin_login=session()->get('admin_login');
        // if(empty($admin_login)){
        //     return redirect()-> route('dang-nhap');

        // }

        $dsloaiSanPham = LoaiSanPham::all();
        return view('Admin/LoaiSanPham/DanhSach', compact('dsloaiSanPham'));
    }
    public function themMoi()
    {
        return view("Admin/LoaiSanPham/ThemMoi");
    }
    public function xulyThemMoi(Request $request)
    {
        $loaisanpham = new LoaiSanPham();
        $loaisanpham->id = $request->id;
        $loaisanpham->ten = $request->ten;
        $loaisanpham->save();
        $dsLoaiSanPham = LoaiSanPham::all();
        /* return "Them moi san pham thanh cong"; */
        return redirect()->route('loai-san-pham.danh-sach')->with('thong-bao','Loại Sản Phẩm Tạo Thành Công');
    }
    public function capNhat($id)
    {
        $loaiSanPham =LoaiSanPham::find($id);
        if (empty($loaiSanPham)) {
            return "San pham khong ton tai";
        }
        return view('Admin/LoaiSanPham/CapNhat', compact('loaiSanPham'));
    }

    public function xulyCapNhat(Request $request, $id)
    {
        $loaiSanPham =LoaisanPham::find($id);
        if (empty($loaiSanPham)) {
            return "Loai San pham khong ton tai";
        } else {
            $loaiSanPham->id  = $request->id;
            $loaiSanPham->ten  = $request->ten;
            $loaiSanPham->save();
            $dsLoaiSanPham = LoaiSanPham::all();
            return redirect()->route('loai-san-pham.danh-sach');
        }
    }
    public function xoa($id)
    {
        // Lay thong tin san pham  theo id
        $loaiSanPham =LoaiSanPham::find($id);
        if (empty($loaiSanPham)) {
            return "Loai san pham khong ton tai";
        }

        $loaiSanPham->delete();

        return redirect()->route('loai-san-pham.danh-sach');
    }
}
