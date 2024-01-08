@extends('Layout')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
                <div class="panel-heading">
                    DANH SÁCH ĐƠN HÀNG
                    <ul class="nav pull-right top-menu">
                        <li>
                            <input type="text" class="form-control search" placeholder=" Search">
                        </li>
                    </ul>
                </div>

                <div>
                    <table class="table" ui-jq="footable" ui-options='{
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
                                <th data-breakpoints="xs">NGƯỜI DÙNG</th>
                                <th data-breakpoints="xs sm" data-title="DOB">NGÀY ĐẶT</th>
                                <th data-breakpoints="xs sm" data-title="DOB">TỔNG TIỀN</th>
                                <th data-breakpoints="xs">TRẠNG THÁI</th>
                                <th data-breakpoints="xs sm md">NGÀY TẠO</th>
                                <th data-breakpoints="xs sm md">NGÀY CẬP NHẬT</th>
                                <th>THAO TÁC </th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($dsDonHang as $donhang)
                            <tr>
                                <td>{{ $donhang->id }}</td>
                                <td>{{ $donhang->nguoi_dung_id}}</td>
                                <td>{{ $donhang->ngay_dat_hang }}</td>
                                <td>{{ $donhang->tong_tien }}</td>
                                <td>{{ $donhang->trang_thai }}</td>
                                <td>{{ $donhang->created_at }}</td>
                                <td>{{ $donhang->updated_at }}</td>
                                <td>
                                    <a href="{{ route('don-hang.cap-nhat', ['id' => $donhang->id]) }}">Sửa</a> | <a
                                        href="{{ route('don-hang.xoa', ['id' => $donhang->id]) }}">Xóa</a>
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
