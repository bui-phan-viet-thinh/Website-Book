@extends('Layout')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                @if(session('thong-bao'))
                <div class="alert alert-success" role="alert">
                    {{session('thong-bao')}}
                </div>
                @endif
                <button style="
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #1b211b; /* Màu nền */
    color: rgb(29, 26, 26)f0f; /* Màu chữ */
    border: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  " onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4caf50'">
                    <a href="{{ route('combo.them-moi') }}">Thêm Mới </a>
                </button>
                <div class="panel-heading">
                    Combo Sách
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
                                <th data-breakpoints="xs">ẢNH COMBO</th>
                                <th data-breakpoints="xs">TÊN COMBO</th>
                                <th data-breakpoints="xs sm" data-title="DOB">GIÁ</th>
                                <th data-breakpoints="xs sm" data-title="DOB">GIÁ KHUYẾN MÃI</th>
                                <th data-breakpoints="xs sm" data-title="DOB">MÔ TẢ</th>
                                <th data-breakpoints="xs sm md">NGÀY TẠO</th>
                                <th data-breakpoints="xs sm md">NGÀY CẬP NHẬT</th>
                                <th>THAO TÁC</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($dsComboSP as $comboSP)
                            <tr>
                                <td>{{ $comboSP->id }}</td>
                                <td>{{ $comboSP->avatar_url}}</td>
                                <td>{{ $comboSP->ten }}</td>
                                <td>{{ $comboSP->gia }}</td>
                                <td>{{ $comboSP->gia_khuyen_mai }}</td>
                                <td>{{ $comboSP->mo_ta }}</td>
                                <td>{{$comboSP->created_at }}</td>
                                <td>{{ $comboSP->updated_at }}</td>
                                <td>
                                    <a href="{{ route('combo.cap-nhat', ['id' => $comboSP->id]) }}">Sửa</a> | <a
                                        href="{{ route('combo.xoa', ['id' => $comboSP->id]) }}">Xóa</a>
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
