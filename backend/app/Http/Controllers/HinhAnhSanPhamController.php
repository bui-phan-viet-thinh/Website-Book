<?php
namespace App\Http\Controllers;
use App\Models\HinhAnhSanPham;
use Illuminate\Http\Request;
class HinhAnhSanPhamController extends Controller
{
    public function danhSach()
    {
        $dsHinhAnh = HinhAnhSanPham::all();
        return view('Admin/HinhAnhSanPham/DanhSach', compact('dsHinhAnh'));
    }
    public function themMoi()
    {
        return view("Admin/HinhAnhSanPham/ThemMoi");
    }
    public function xulyThemMoi(Request $request)
    {
        $hinhanh = new HinhAnhSanPham();
        $hinhanh->san_pham_id = $request->san_pham_id;
        $hinhanh->url_hinh_anh  = $request->url_hinh_anh;
        $hinhanh->save();
        $dsHinhAnh = HinhAnhSanPham::all();
        /* return "Them moi hinh anh thanh cong"; */
        return redirect()->route('hinh-anh.danh-sach')->with('thong-bao','Hình ảnh Được Tạo Thành Công');

    }
    public function capNhat($id)
    {
        $hinhanh = HinhAnhSanPham::find($id);
        if (empty($hinhanh)) {
            return "Hinh anh khong ton tai";
        }
        return view('Admin/HinhAnhSanPham/CapNhat', compact('hinhanh'));
    }

    public function xulyCapNhat(Request $request, $id)
    {
        $hinhanh =HinhAnhSanPham::find($id);
        if (empty($hinhanh)) {
            return "Hinh anh khong ton tai";
        } else {
            $hinhanh->id  = $request->id;
            $hinhanh->san_pham_id  = $request->san_pham_id;
            $hinhanh->url_hinh_anh  = $request->url_hinh_anh;
            $hinhanh->save();
            $dsHinhAnh = HinhAnhSanPham::all();
            return redirect()->route('hinh-anh.danh-sach');
        }
    }
    public function xoa($id)
    {
        // Lay thong tin hinh anh theo id
        $hinhanh = HinhAnhSanPham::find($id);
        if (empty($hinhanh)) {
            return "Hinh anh khong ton tai";
        }
        $hinhanh->delete();
        return redirect()->route('hinh-anh.danh-sach');
    }
}
