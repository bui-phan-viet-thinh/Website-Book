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
                    <form class="cmxform form-horizontal "  method="POST" action="{{ route('combo.xulyCapNhat', ['id' => $comboSP->id])}}" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Id</label>
                            <div class="col-lg-6">
                                <input readonly class=" form-control" id="cname" name="id" minlength="2" type="text" required="" value="{{$comboSP->id}}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Avatar</label>
                            <div class="col-lg-6">
                                <input type="file" id="exampleInputFile" name="url_anh"  value={{$comboSP->avatar_url}}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cname" class="control-label col-lg-3">Tên combo</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="cname" name="ten" minlength="2" type="text" required="" value="{{$comboSP->ten}}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-3"> Giá</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="cemail" type="email" name="gia" value="{{$comboSP->gia}}" required="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Giá khuyến mãi</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="curl" type="url" name="gia_khuyen_mai" value="{{$comboSP->gia_khuyen_mai}}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="ccomment" class="control-label col-lg-3">Mô tả</label>
                            <div class="col-lg-6">
                                <textarea class="form-control " id="ccomment" name="mo_ta" required="" value="{{$comboSP->mo_ta}}"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit" name="action" value="save">Save</button>
                                <a class="btn btn-default" href="{{route('combo.danh-sach') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        @endsection
