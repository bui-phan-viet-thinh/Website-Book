@extends('Layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                THÔNG TIN COMBO SÁCH
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                 </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    <form class="cmxform form-horizontal "  method="POST" action="{{ route('don-hang.xulyCapNhat', ['id' => $donhang->id])}}" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Id</label>
                            <div class="col-lg-6">
                                <input readonly class=" form-control" id="cname" name="id" minlength="2" type="text" required="" value="{{ $donhang->id}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-3">id người dùng</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="nguoi_dung_id" minlength="2" type="text" required="" value="{{$donhang->nguoi_dung_id}}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-3"> Ngày đặt hàng </label>
                            <div class="col-lg-6">
                                <input class="form-control " id="cemail" type="email" name="ngay_dat_hang" value="{{$donhang->ngay_dat_hang}}" required="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Tổng tiền</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="tong_tien" value="{{$donhang->tong_tien}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Trạng thái</label>
                            <div class="col-lg-6">
                                <select class="form-control m-bot15" name="trang_thai">
                                    <option>Đã đặt</option>
                                    <option>Đã xác nhận</option>
                                    <option>Đang giao</option>
                                    <option>Đã Giao</option>
                                    <option>Đã hủy</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit" name="action" value="save">Save</button>
                                <a class="btn btn-default" href="{{route('don-hang.danh-sach') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        @endsection
