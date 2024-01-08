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
        <a href="{{ route('loai-san-pham.them-moi') }}"> Thêm Mới </a>
    </button>
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
    </ul>
    <div class="panel-heading">
     DANH SÁCH LOẠI SẢN PHẨM
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
            <th data-breakpoints="xs">ID</th>
            <th data-breakpoints="xs">TÊN LOẠI SẢN PHẨM</th>
            <th data-breakpoints="xs sm md">NGÀY TẠO</th>
            <th data-breakpoints="xs sm md">NGÀY CẬP NHẬT</th>
            <th>THAO TÁC</th>
          </tr>
        </thead>
        <tbody>
            @forelse($dsloaiSanPham as $loaiSanPham)
            <tr>
                <td>{{$loaiSanPham->id }}</td>
                <td>{{$loaiSanPham->ten }}</td>
                <td>{{$loaiSanPham->created_at }}</td>
                <td>{{$loaiSanPham->updated_at }}</td>
                <td>
                    <a href="{{ route('loai-san-pham.cap-nhat', ['id' => $loaiSanPham->id]) }}">Sửa</a> | <a
                        href="{{ route('loai-san-pham.xoa', ['id' => $loaiSanPham->id]) }}">Xóa</a>
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
</section>
@endsection
