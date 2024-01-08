<?php

namespace App\Http\Controllers;
use App\Models\Sach;
use App\Models\HinhAnhSanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{


    public function danhSach()
    {
        $dsSanPham = Sach::all();
        $productImages=HinhAnhSanPham::all();
        return view('Admin/SanPham/ListSach', compact('dsSanPham', 'productImages'));
    }
    public function themMoi()
    {
        return view("Admin/SanPham/ThemMoi");
    }
    public function xulyThemMoi(Request $request)
    {
        $sanpham = new Sach();
        $sanpham->ten_san_pham = $request->ten;
        $sanpham->mo_ta  = $request->mo_ta;
        $sanpham->url_ebook  = $request->url_ebook;
        $sanpham->gia  = $request->gia;
        $sanpham->so_luong_ton = $request->so_luong_ton;
        $sanpham->loai_san_pham= $request->loai_san_pham;
        $sanpham->save();
        $dsSanPham = Sach::all();
        /* return "Them moi san pham thanh cong"; */
        return redirect()->route('san-pham.danh-sach')->with('thong-bao','Sản Phẩm Được Tạo Thành Công');

    }
    public function capNhat($id)
    {
        $sanPham = Sach::find($id);
        if (empty($sanPham)) {
            return "San pham khong ton tai";
        }
        return view('Admin/SanPham/CapNhat', compact('sanPham'));
    }

    public function xulyCapNhat(Request $request, $id)
    {
        $sanPham = Sach::find($id);
        if (empty($sanPham)) {
            return "San pham khong ton tai";
        } else {
            $sanPham->id  = $request->id;
            $sanPham->ten_san_pham  = $request->ten;
            $sanPham->url_ebook  = $request->url_ebook;
            $sanPham->mo_ta  = $request->mo_ta;
            $sanPham->gia = $request->gia;
            $sanPham->so_luong_ton =$request->so_luong_ton;
            $sanPham->loai_san_pham = $request->loai_san_pham;
            $sanPham->save();
            $dsSanPham = Sach::all();
            return redirect()->route('san-pham.danh-sach');
        }
    }
    public function xoa($id)
    {
        // Lay thong tin san pham  theo id
        $sanPham = Sach::find($id);
        if (empty($sanPham)) {
            return "san pham khong ton tai";
        }

        $sanPham->delete();

        return redirect()->route('san-pham.danh-sach');
    }

}
