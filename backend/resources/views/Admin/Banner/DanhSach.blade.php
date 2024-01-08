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
                    <a href="{{ route('banner.them-moi') }}"> Thêm Mới </a>
                </button>
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                </ul>
                <div class="panel-heading">
                    BANNER
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
                                <th data-breakpoints="xs">TIÊU ĐỀ</th>
                                <th data-breakpoints="xs">URL BANNER</th>
                                <th data-breakpoints="xs sm" data-title="DOB">LINK URL</th>
                                <th data-breakpoints="xs">NGÀY BẮT ĐẦU </th>
                                <th data-breakpoints="xs sm">NGÀY KẾT THÚC</th>
                                <th data-breakpoints="xs">NGÀY TẠO </th>
                                <th data-breakpoints="xs sm">NGÀY CẬP NHẬT</th>
                                <th>THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($dsBanner as $banner)
                            <tr>
                                <td>{{ $banner->id }}</td>
                                <td>{{ $banner->tieu_de }}</td>
                                <td>{{ $banner->url_banner }}</td>
                                <td>{{ $banner->link_url }}</td>
                                <td>{{ $banner->StartDate }}</td>
                                <td>{{ $banner->EndDate }}</td>
                                <td>{{ $banner->created_at }}</td>
                                <td>{{ $banner->updated_at }}</td>
                                <td>
                                    <a href="{{ route('banner.cap-nhat', ['id' => $banner->id]) }}">Sửa</a> | <a
                                        href="{{ route('banner.xoa', ['id' => $banner->id]) }}">Xóa</a>
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
