<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\ComboSanPhamController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HinhAnhSanPhamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!  ->middleware('CheckAdminLogin');
|
*/
Route::get('/', function () {
    return view('Login');
});

// Trang chủ admin
Route::get('Layout',[LayoutController::class,'hienthilayout']) -> name('layout.hien-thi')->middleware('CheckAdminLogin');

// Sản Phẩm
Route::get('Admin/SanPham/ListSach',[SanPhamController::class,'danhSach']) -> name('san-pham.danh-sach')->middleware('CheckAdminLogin');
Route::get('Admin/SanPham/ThemMoi',[SanPhamController::class,'themMoi'])->name('san-pham.them-moi')->middleware('CheckAdminLogin');
Route::post('Admin/SanPham/ThemMoi', [SanPhamController::class, 'xulyThemMoi'])->name('san-pham.xulyThemMoi');
Route::get('Admin/SanPham/CapNhat/{id}',[SanPhamController::class,'capNhat'])->name('san-pham.cap-nhat')->middleware('CheckAdminLogin');
Route::post('Admin/SanPham/CapNhat/{id}', [SanPhamController::class, 'xulyCapNhat'])->name('san-pham.xulyCapNhat');
Route::get('Admin/SanPham/xoa/{id}',[SanPhamController::class,'xoa'])->name('san-pham.xoa');

// Loại Sản Phẩm
Route::get('Admin/LoaiSanPham/DanhSach',[LoaiSanPhamController::class,'danhSach']) -> name('loai-san-pham.danh-sach')->middleware('CheckAdminLogin');
Route::get('Admin/LoaiSanPham/ThemMoi',[LoaiSanPhamController::class,'themMoi'])->name('loai-san-pham.them-moi')->middleware('CheckAdminLogin');
Route::post('Admin/LoaiSanPham/ThemMoi', [LoaiSanPhamController::class, 'xulyThemMoi'])->name('loai-san-pham.xulyThemMoi');
Route::get('Admin/LoaiSanPham/CapNhat/{id}',[LoaiSanPhamController::class,'capNhat'])->name('loai-san-pham.cap-nhat')->middleware('CheckAdminLogin');
Route::post('Admin/LoaiSanPham/CapNhat/{id}', [LoaiSanPhamController::class, 'xulyCapNhat'])->name('loai-san-pham.xulyCapNhat');
Route::get('Admin/LoaiSanPham/xoa/{id}',[LoaiSanPhamController::class,'xoa'])->name('loai-san-pham.xoa');

//Combo sản phẩm
Route::get('Admin/ComboSanPham/DanhSach',[ComboSanPhamController::class,'danhSach']) -> name('combo.danh-sach')->middleware('CheckAdminLogin');
Route::get('Admin/ComboSanPham/ThemMoi',[ComboSanPhamController::class,'themMoi'])->name('combo.them-moi')->middleware('CheckAdminLogin');
Route::post('Admin/ComboSanPham/ThemMoi', [ComboSanPhamController::class, 'xulyThemMoi'])->name('combo.xulyThemMoi');
Route::get('Admin/ComboSanPham/CapNhat/{id}',[ComboSanPhamController::class,'capNhat'])->name('combo.cap-nhat')->middleware('CheckAdminLogin');
Route::post('Admin/ComboSanPham/CapNhat/{id}', [ComboSanPhamController::class, 'xulyCapNhat'])->name('combo.xulyCapNhat');
Route::get('Admin/ComboSanPham/xoa/{id}',[ComboSanPhamController::class,'xoa'])->name('combo.xoa');

// Quản lí người dùng
Route::get('Admin/NguoiDung/DanhSach',[NguoiDungController::class,'danhSach']) -> name('nguoi-dung.danh-sach');
Route::get('Admin/NguoiDung/ThemMoi',[NguoiDungController::class,'themMoi'])->name('nguoi-dung.them-moi');
Route::post('Admin/NguoiDung/ThemMoi', [NguoiDungController::class, 'xulyThemMoi'])->name('nguoi-dung.xulyThemMoi');
Route::get('Admin/NguoiDung/CapNhat/{id}',[NguoiDungController::class,'capNhat'])->name('nguoi-dung.cap-nhat');
Route::post('Admin/NguoiDung/CapNhat/{id}', [NguoiDungController::class, 'xulyCapNhat'])->name('nguoi-dung.xulyCapNhat');
Route::get('Admin/NguoiDung/xoa/{id}',[NguoiDungController::class,'xoa'])->name('nguoi-dung.xoa');

// Login
Route::get('Login',[LoginController::class,'formlogin']) -> name('login.hien-thi-form');
Route::post('Login',[LoginController::class,'xuliDangNhap']) -> name('login.xulyDangNhap');
// Quản lí đơn hàng
Route::get('Admin/DonHang/DanhSach',[DonHangController::class,'danhSach']) -> name('don-hang.danh-sach');
Route::get('Admin/DonHang/CapNhat/{id}',[DonHangController::class,'capNhat'])->name('don-hang.cap-nhat');
Route::post('Admin/DonHang/CapNhat/{id}',[DonHangController::class, 'xulyCapNhat'])->name('don-hang.xulyCapNhat');
Route::get('Admin/DonHang/xoa/{id}',[DonHangController::class,'xoa'])->name('don-hang.xoa');

// Quản lí đánh giá bình luận
Route::get('Admin/DanhGia/DanhSach',[DanhGiaController::class,'danhSach']) -> name('danh-gia.danh-sach');
Route::get('Admin/DanhGia/CapNhat/{id}',[DanhGiaController::class,'capNhat'])->name('danh-gia.cap-nhat');
Route::post('Admin/DanhGia/CapNhat/{id}',[DanhGiaController::class, 'xulyCapNhat'])->name('danh-gia.xulyCapNhat');
Route::get('Admin/DanhGia/xoa/{id}',[DanhGiaController::class,'xoa'])->name('danh-gia.xoa');

// Search
Route::post('Admin/SanPham/search',[SanPhamController::class, 'Search'])->name('search.san-pham');

// Quan  lí banner
Route::get('Admin/Banner/DanhSach',[BannerController::class,'danhSach']) -> name('banner.danh-sach')->middleware('CheckAdminLogin');
Route::get('Admin/Banner/ThemMoi',[BannerController::class,'themMoi'])->name('banner.them-moi')->middleware('CheckAdminLogin');
Route::post('Admin/Banner/ThemMoi',[BannerController::class, 'xulyThemMoi'])->name('banner.xulyThemMoi');
Route::get('Admin/Banner/CapNhat/{id}',[BannerController::class,'capNhat'])->name('banner.cap-nhat')->middleware('CheckAdminLogin');
Route::post('Admin/Banner/CapNhat/{id}',[BannerController::class, 'xulyCapNhat'])->name('banner.xulyCapNhat');
Route::get('Admin/Banner/xoa/{id}',[BannerController::class,'xoa'])->name('banner.xoa');

// Quản lí hình ảnh sản phẩm
Route::get('Admin/HinhAnhSanPham/DanhSach',[HinhAnhSanPhamController::class,'danhSach']) -> name('hinh-anh.danh-sach')->middleware('CheckAdminLogin');
Route::get('Admin/HinhAnhSanPham/ThemMoi',[HinhAnhSanPhamController::class,'themMoi'])->name('hinh-anh.them-moi')->middleware('CheckAdminLogin');
Route::post('Admin/HinhAnhSanPham/ThemMoi', [HinhAnhSanPhamController::class, 'xulyThemMoi'])->name('hinh-anh.xulyThemMoi');
Route::get('Admin/HinhAnhSanPham/CapNhat/{id}',[HinhAnhSanPhamController::class,'capNhat'])->name('hinh-anh.cap-nhat')->middleware('CheckAdminLogin');
Route::post('Admin/HinhAnhSanPham/CapNhat/{id}', [HinhAnhSanPhamController::class, 'xulyCapNhat'])->name('hinh-anh.xulyCapNhat');
Route::get('Admin/HinhAnhSanPham/xoa/{id}',[HinhAnhSanPhamController::class,'xoa'])->name('hinh-anh.xoa');
