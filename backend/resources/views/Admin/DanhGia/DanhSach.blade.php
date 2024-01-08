@extends('Layout')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
                <div class="panel-heading">
                    DANH SÁCH LƯỢT BÌNH LUẬN VÀ ĐÁNH GIÁ
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
                                <th data-breakpoints="xs sm" data-title="DOB">SẢN PHẨM</th>
                                <th data-breakpoints="xs sm" data-title="DOB">ĐÁNH GIÁ </th>
                                <th data-breakpoints="xs">BÌNH LUẬN</th>
                                <th>THAO TÁC </th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($dsDanhGia as $danhgia)
                            <tr>
                                <td>{{ $danhgia->id }}</td>
                                <td>{{ $danhgia->nguoi_dung_id}}</td>
                                <td>{{ $danhgia->san_pham_id }}</td>
                                <td>{{ $danhgia->danh_gia}}</td>
                                {{-- <td>
                                    @php
                                    $rating = $danhgia->danh_gia;
                                    $fullStars = floor($rating);
                                    $halfStars = ceil($rating - $fullStars);
                                    $emptyStars = 5 - $fullStars - $halfStars;
                                @endphp

                                @for ($i = 0; $i < $fullStars; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor

                                @for ($i = 0; $i < $halfStars; $i++)
                                    <i class="fas fa-star-half-alt"></i>
                                @endfor

                                @for ($i = 0; $i < $emptyStars; $i++)
                                    <i class="far fa-star"></i>
                                @endfor</td> --}}
                                <td>{{ $danhgia->binh_luan }}</td>
                                <td>
                                    <a href="{{ route('danh-gia.cap-nhat', ['id' => $danhgia->id]) }}">Sửa</a> | <a
                                        href="{{ route('danh-gia.xoa', ['id' => $danhgia->id]) }}">Xóa</a>
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
