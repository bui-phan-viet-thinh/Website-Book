@extends('Layout')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    @if (session('thong-bao'))
                        <div class="alert alert-success" role="alert">
                            {{ session('thong-bao') }}
                        </div>
                    @endif
                    <button
                        style="
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #1b211b; /* Màu nền */
    color: rgb(29, 26, 26)f0f; /* Màu chữ */
    border: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  "
                        onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4caf50'">
                        <a href="{{ route('san-pham.them-moi') }}"> Thêm Mới </a>
                    </button>
                    <ul class="nav pull-right top-menu">
                        <li>
                            <input type="text" class="form-control search" placeholder=" Search">
                        </li>
                    </ul>
                    <div class="panel-heading">
                        SẢN PHẨM
                    </div>
                    <div>
                        <table class="table" ui-jq="footable"
                            ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th data-breakpoints="xs">TÊN SÁCH</th>
                                    <th data-breakpoints="xs sm" data-title="DOB">ẢNH SẢN PHẨM</th>
                                    <th data-breakpoints="xs">URL EBOOK</th>
                                    <th data-breakpoints="xs sm" data-title="DOB">MÔ TẢ</th>
                                    <th data-breakpoints="xs sm" data-title="DOB">GIÁ</th>
                                    <th data-breakpoints="xs">SỐ LƯỢNG TỒN</th>
                                    <th data-breakpoints="xs sm">LOẠI SẢN PHẨM</th>
                                    <th data-breakpoints="xs sm md">NGÀY TẠO</th>
                                    <th data-breakpoints="xs sm md">NGÀY CẬP NHẬT</th>
                                    <th>THAO TÁC</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse($dsSanPham as $sanPham)
                                    <tr>
                                        <td>{{ $sanPham->id }}</td>
                                        <td>{{ $sanPham->ten_san_pham }}</td>
                                        @foreach ($productImages as $productImage )
                                        @if ($productImage->san_pham_id ==$sanPham->id)
                                        <td style="width: 100px; height: 100px; overflow: hidden;"><img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset($productImage->url_hinh_anh) }}" alt=""></td>
                                        @endif
                                        @endforeach
                                        <td>{{ $sanPham->url_ebook }}</td>
                                        <td>{{ $sanPham->mo_ta }}</td>
                                        <td>{{ $sanPham->gia }}</td>
                                        <td>{{ $sanPham->so_luong_ton }}</td>
                                        <td>{{ $sanPham->loai_san_pham }}</td>
                                        <td>{{ $sanPham->created_at }}</td>
                                        <td>{{ $sanPham->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('san-pham.cap-nhat', ['id' => $sanPham->id]) }}">Sửa</a> | <a
                                                href="{{ route('san-pham.xoa', ['id' => $sanPham->id]) }}">Xóa</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>data not found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endsection
