<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    public function danhSach()
    {
        $dsnguoiDung =Users::all();
        return view('Admin/NguoiDung/DanhSach', compact('dsnguoiDung'));
    }
    public function themMoi()
    {
        return view("Admin/NguoiDung/ThemMoi");
    }
    public function xulyThemMoi(Request $request)
    {
        $nguoidung = new Users();
        $nguoidung ->ten = $request->ten;
        $nguoidung ->mat_khau = $request->mat_khau;
        $nguoidung ->email = $request->email;
        $nguoidung ->loai_nguoi_dung = $request->loai_nguoi_dung;
        $nguoidung ->save();
        $dsnguoidung = Users::all();
        /* return "Them moi nguoi dung thanh cong"; */
        return redirect()->route('nguoi-dung.danh-sach')->with('thong-bao','Tài Khoản Đã Tạo Thành Công');
    }
    public function capNhat($id)
    {
        $nguoiDung =Users::find($id);
        if (empty($nguoiDung)) {
            return "Nguoi dung khong ton tai";
        }
        return view('Admin/NguoiDung/CapNhat', compact('nguoiDung'));
    }

    public function xulyCapNhat(Request $request, $id)
    {
        $nguoiDung =Users::find($id);
        if (empty($nguoiDung)) {
            return "Nguoi dung khong ton tai";
        } else {
            $nguoiDung->id  = $request->id;
            $nguoiDung->ten  = $request->ten;
            $nguoiDung->mat_khau  = $request->mat_khau;
            $nguoiDung->email  = $request->email;
            $nguoiDung->loai_nguoi_dung  = $request->loai_nguoi_dung;
            $nguoiDung->save();
            $dsnguoiDung = Users::all();
            return redirect()->route('nguoi-dung.danh-sach');
        }
    }
    public function xoa($id)
    {
        // Lay thong tin nguoi dung  theo id
        $nguoiDung =Users::find($id);
        if (empty($nguoiDung)) {
            return "Nguoi dung khong ton tai";
        }

        $nguoiDung->delete();

        return redirect()->route('nguoi-dung.danh-sach');
    }
}


