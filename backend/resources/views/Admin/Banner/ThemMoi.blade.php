@extends('Layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                THÊM MỚI SẢN PHẨM
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    <form class="cmxform form-horizontal " id="commentForm" method="POST" action="{{ route('banner.xulyThemMoi') }}" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">ID</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="id" minlength="2" type="text" required="" readonly>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Tiêu Đề</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="tieu_de" minlength="2" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile" name="url_banner">
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-3"> Link URL </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="cemail" type="email" name="link_url" required="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Ngày Bắt Đầu</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="StartDate">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Ngày Kết Thúc</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="EndDate">
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
        {{-- </section> --}}
        @endsection
