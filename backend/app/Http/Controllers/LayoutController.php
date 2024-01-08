<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function hienthilayout()
    {
        // // Kiểm tra trạng thái ddawng nhập của admin
        // $admin_login=session()->get('admin_login');
        // if(empty($admin_login)){
        //     return redirect()-> route('dang-nhap');

        // }

        // $dsSanPham = Sach::all();, compact('dsSanPham')
        return view('Layout');
    }
}
