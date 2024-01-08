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
                    <form class="cmxform form-horizontal " id="commentForm" method="POST" action="{{ route('san-pham.xulyThemMoi') }}" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Tên sản phẩm</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="ten" minlength="2" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Url Ebook</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="url_ebook" minlength="2" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="ccomment" class="control-label col-lg-3">Mô tả</label>
                            <div class="col-lg-6">
                                <textarea class="form-control " id="ccomment" name="mo_ta" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-3"> Giá </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="cemail" type="email" name="gia" required="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Số lượng tồn</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="so_luong_ton">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Loại Sản Phẩm</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="loai_san_pham">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit" name="action" value="save">Save</button>
                                <a class="btn btn-default" href="{{ route('san-pham.danh-sach') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        {{-- </section> --}}
        @endsection
