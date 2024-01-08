<?php

namespace App\Http\Controllers;
use App\Models\DanhGia;
use Illuminate\Http\Request;

class DanhGiaController extends Controller
{
    public function danhSach()
    {
        $dsDanhGia = DanhGia::all();
        return view('Admin/DanhGia/DanhSach', compact('dsDanhGia'));
    }

    public function capNhat($id)
    {
        $danhgia = DanhGia::find($id);
        if (empty(  $danhgia)) {
            return "Dang gia khong ton tai";
        }
        return view('Admin/DanhGia/CapNhat', compact('danhgia'));
    }

    public function xulyCapNhat(Request $request, $id)
    {
        $danhgia = DanhGia::find($id);
        if (empty($donhang)) {
            return "Danh gia khong ton tai";
        } else {
            $danhgia->id  = $request->id;
            $danhgia->nguoi_dung_id = $request->nguoi_dung_id ;
            $danhgia->san_pham_id = $request->san_pham_id;
            $danhgia->danh_gia = $request->danh_gia;
            $danhgia->binh_luan = $request->binh_luan;
            $danhgia->save();
            $dsDanhGia = DanhGia::all();
            return redirect()->route('danh-gia.danh-sach');
        }
    }
    public function xoa($id)
    {
        // Lay thong tin san pham  theo id
        $danhgia =DanhGia::find($id);
        if (empty( $danhgia)) {
            return "Don hang khong ton tai";
        }

        $danhgia->delete();

        return redirect()->route('danh-gia.danh-sach');
    }
}
