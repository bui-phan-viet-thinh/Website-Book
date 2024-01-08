@extends('Layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">THÊM MỚI HÌNH ẢNH </header>
                  <div class="panel-body">
                    <div class="position-center">
                      <form role="form" method="POST" action="{{route('hinh-anh.xulyThemMoi')}}">
                        @csrf
                        <div class="form-group">
                          <label htmlFor="exampleInputEmail1">Id sản phẩm</label>
                          <input class=" form-control" id="cname" name="san_pham_id" minlength="" type="text" required="">
                        </div>
                        <div class="form-group">
                          <label htmlFor="exampleInputFile">File input</label>
                          <input type="file" id="exampleInputFile" />
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit" name="action" value="save">Save</button>
                                <a class="btn btn-default" href="{{ route('hinh-anh.danh-sach') }}">Cancel</a>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
              </div>
            </div>
        @endsection
