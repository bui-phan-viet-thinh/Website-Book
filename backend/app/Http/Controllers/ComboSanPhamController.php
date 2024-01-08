<?php

namespace App\Http\Controllers;
use App\Models\Combo;
use Illuminate\Http\Request;

class ComboSanPhamController extends Controller
{
    public function danhSach()
    {
        $dsComboSP = Combo::all();
        return view('Admin/ComboSanPham/DanhSach', compact('dsComboSP'));
    }
    public function themMoi()
    {
        return view("Admin/ComboSanPham/ThemMoi");
    }
    public function xulyThemMoi(Request $request)
    {
        $comboSP = new Combo();
        $comboSP->avatar_url  = $request->avatar_url;
        $comboSP->ten = $request->ten;
        $comboSP->gia  = $request->gia;
        $comboSP->gia_khuyen_mai  = $request->gia_khuyen_mai;
        $comboSP->mo_ta  = $request->mo_ta;
        $comboSP->save();
        $dsComboSP = Combo::all();
        /* return "Them moi san pham thanh cong"; */
        return redirect()->route('combo.danh-sach')->with('thong-bao','Combo Sách Được Tạo Thành Công');

    }
    public function capNhat($id)
    {
        $comboSP = Combo::find($id);
        if (empty( $comboSP)) {
            return "Combo sach khong ton tai";
        }
        return view('Admin/ComboSanPham/CapNhat', compact('comboSP'));
    }

    public function xulyCapNhat(Request $request, $id)
    {
        $comboSP = Combo::find($id);
        if (empty($comboSP)) {
            return "Combo sach khong ton tai";
        } else {
            $comboSP->id  = $request->id;
            $comboSP->avatar_url = $request->avatar_url ;
            $comboSP->ten = $request->ten;
            $comboSP->gia = $request->gia;
            $comboSP->gia_khuyen_mai = $request->gia_khuyen_mai;
            $comboSP->mo_ta  = $request->mo_ta;
            $comboSP->save();
            $dsComboSP = Combo::all();
            return redirect()->route('combo.danh-sach');
        }
    }
    public function xoa($id)
    {
        // Lay thong tin san pham  theo id
        $comboSP =Combo::find($id);
        if (empty( $comboSP)) {
            return "Combo sach khong ton tai";
        }

        $comboSP->delete();

        return redirect()->route('combo.danh-sach');
    }
}
