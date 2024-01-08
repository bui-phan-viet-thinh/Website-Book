<?php

namespace App\Http\Controllers;
use App\Models\DonHang;
use Illuminate\Http\Request;

class DonHangController extends Controller
{

    public function danhSach()
    {
        $dsDonHang = DonHang::all();
        return view('Admin/DonHang/DanhSach', compact('dsDonHang'));
    }

    public function capNhat($id)
    {
        $donhang = DonHang::find($id);
        if (empty(  $donhang)) {
            return "Don hang khong ton tai";
        }
        return view('Admin/DonHang/CapNhat', compact('donhang'));
    }

    public function xulyCapNhat(Request $request, $id)
    {
        $donhang = DonHang::find($id);
        if (empty($donhang)) {
            return "Combo sach khong ton tai";
        } else {
            $donhang->id  = $request->id;
            $donhang->nguoi_dung_id = $request->nguoi_dung_id ;
            $donhang->ngay_dat_hang = $request->ngay_dat_hang;
            $donhang->tong_tien = $request->tong_tien;
            $donhang->trang_thai = $request->trang_thai;
            $donhang->save();
            $dsDonHang = DonHang::all();
            return redirect()->route('don-hang.danh-sach');
        }
    }
    public function xoa($id)
    {
        // Lay thong tin san pham  theo id
        $donhang =DonHang::find($id);
        if (empty( $donhang)) {
            return "Don hang khong ton tai";
        }

        $donhang->delete();

        return redirect()->route('don-hang.danh-sach');
    }
}
