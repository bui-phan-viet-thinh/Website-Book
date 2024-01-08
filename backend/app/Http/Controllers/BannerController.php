<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function danhSach()
    {
        $dsBanner = Banner::all();
        return view('Admin/Banner/DanhSach', compact('dsBanner'));
    }
    public function themMoi()
    {
        return view("Admin/Banner/ThemMoi");
    }
    public function xulyThemMoi(Request $request)
    {
       $banner = new Banner();
       $banner->tieu_de  = $request->tieu_de;
       $banner->url_banner  = $request->url_banner;
       $banner->link_url  = $request->link_url;
       $banner->StartDate = $request->StartDate;
       $banner->EndDate= $request->EndDate;
       $banner->save();
       $dsBanner = Banner::all();
        /* return "Them moi san pham thanh cong"; */
        return redirect()->route('banner.danh-sach')->with('thong-bao','Banner Được Tạo Thành Công');

    }
    public function capNhat($id)
    {
       $banner = Banner::find($id);
        if (empty($banner)) {
            return "Banner khong ton tai";
        }
        return view('Admin/Banner/CapNhat', compact('banner'));
    }

    public function xulyCapNhat(Request $request, $id)
    {
       $banner = Banner::find($id);
        if (empty($banner)) {
            return "Banner khong ton tai";
        } else {
           $banner->id  = $request->id;
           $banner->tieu_de  = $request->tieu_de;
           $banner->url_banner  = $request->url_banner;
           $banner->link_url  = $request->link_url;
           $banner->save();
            $dsBanner = Banner::all();
            return redirect()->route('banner.danh-sach');
        }
    }
    public function xoa($id)
    {
        // Lay thong tin san pham  theo id
       $banner = Banner::find($id);
        if (empty($banner)) {
            return "banner khong ton tai";
        }

       $banner->delete();

        return redirect()->route('banner.danh-sach');
    }

}
