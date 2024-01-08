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
                        <a href="{{ route('hinh-anh.them-moi') }}"> Thêm Mới </a>
                    </button>
                    <ul class="nav pull-right top-menu">
                        <li>
                            <input type="text" class="form-control search" placeholder=" Search">
                        </li>
                    </ul>
                    <div class="panel-heading">
                       HÌNH ẢNH SẢN PHẨM
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
                                    <th data-breakpoints="xs sm" data-title="DOB"> ID SẢN PHẨM </th>
                                    <th data-breakpoints="xs">URL HÌNH ẢNH</th>
                                    <th data-breakpoints="xs sm md">NGÀY TẠO</th>
                                    <th data-breakpoints="xs sm md">NGÀY CẬP NHẬT</th>
                                    <th>THAO TÁC</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($dsHinhAnh as $hinhanh)
                                    <tr>
                                        <td>{{ $hinhanh->id }}</td>
                                        <td>{{ $hinhanh->san_pham_id}}</td>
                                        <td>{{ $hinhanh->url_hinh_anh}}</td>
                                        <td>{{ $hinhanh->created_at}}</td>
                                        <td>{{ $hinhanh->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('hinh-anh.cap-nhat', ['id' => $hinhanh->id]) }}">Sửa</a> | <a
                                                href="{{ route('hinh-anh.xoa', ['id' => $hinhanh->id]) }}">Xóa</a>
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
