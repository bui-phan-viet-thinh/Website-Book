@extends('Layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                THÔNG TIN NGƯỜI DÙNG
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    <form class="cmxform form-horizontal "  method="POST" action="{{ route('nguoi-dung.xulyThemMoi')}}" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Tên người dùng</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="ten" minlength="2" type="text" required="" >
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-3"> Mật khẩu </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="cemail" type="email" name="mat_khau"  required="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Email</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="email" >
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Loại người dùng</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="loai_nguoi_dung">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit" name="action" value="save">Save</button>
                                <a class="btn btn-default" href="{{route('nguoi-dung.danh-sach') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        @endsection
