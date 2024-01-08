@extends('Layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                THÔNG TIN BANNER
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    <form class="cmxform form-horizontal "  method="POST" action="{{ route('banner.xulyCapNhat', ['id' => $banner->id])}}" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">ID</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="id" minlength="2" type="text" required="" readonly value="{{$banner->id}}" >
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Tiêu Đề</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="tieu_de" minlength="2" type="text" required="" value="{{$banner->tieu_de}}">
                            </div>
                        </div>
                        <div class="position-center">
                        <div class="form-group">
                            <label htmlFor="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile" name="url_banner" value="{{$banner->url_banner}}">
                          </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-3"> Link URL </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="cemail" type="email" name="link_url" required=""  value="{{$banner->link_url}}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Ngày Bắt Đầu</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="StartDate" value="{{$banner->StartDate}}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Ngày Kết Thúc</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="EndDate" value="{{$banner->EndDate}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit" name="action" value="save">Save</button>
                                <a class="btn btn-default" href="{{ route('banner.danh-sach') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        @endsection
