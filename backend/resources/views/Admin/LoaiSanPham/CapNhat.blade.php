@extends('Layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                THÔNG TIN LOẠI SẢN PHẨM
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    <form class="cmxform form-horizontal "  method="POST" action="{{ route('loai-san-pham.xulyCapNhat', ['id' => $loaiSanPham->id])}}" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Id</label>
                            <div class="col-lg-6">
                                <input readonly class=" form-control" id="cname" name="id" minlength="2" type="text" required="" value="{{$loaiSanPham->id}}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Tên loại sản phẩm</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="ten" minlength="2" type="text" required="" value="{{$loaiSanPham->ten}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit" name="action" value="save">Save</button>
                                <a class="btn btn-default" href="{{route('loai-san-pham.danh-sach') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
