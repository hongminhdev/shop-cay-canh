@extends('admin_layout')
@section('admin_content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Sản phẩm</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Quản trị</li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="far fa-check-square"></i> Cập nhật sản phẩm </h3>
                    </div>

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {!! session()->get('message') !!}
                        </div>
                    @elseif(session()->has('error'))
                        <div class="alert alert-danger">
                            {!! session()->get('error') !!}
                        </div>
                    @endif

                    <div class="card-body">
                    @foreach ($edit_product as $key => $pro)
                        <form autocomplete="off" action="{{URL::to('/update-product/'.$pro->sanpham_id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Tên sản phẩm</label>
                                    <input type="text" name="product_name" class="form-control"
                                        value="{{ $pro->sanpham_ten }}" id="inputEmail4" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Ảnh sản phẩm</label>
                                    <input type="file" name="product_image" class="form-control" id="inputEmail4" autocomplete="off">
                                    <br>
                                    <img src="{{asset('public/uploads/product/'.$pro->sanpham_anh)}}" height="100" width="100" alt="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputAddress">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="6" type="text" class="form-control"
                                    name="product_desc"> {{ $pro->sanpham_mota }}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Mô tả chi tiết</label>
                                <textarea style="resize: none" rows="6" type="text" id="ckeditor2" class="form-control"
                                    name="product_desc_detail"> {{ $pro->motachitiet }}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Giá sản phẩm</label>
                                <input type="text" name="product_price" value="{{ $pro->sanpham_gia }}" class="form-control" id="inputEmail4" autocomplete="off">
                            </div>

                            <div class="form-group">
                                    <label for="inputState">Danh mục sản phẩm</label>
                                    <select name="product_cate" id="inputState" class="form-control">
                                        @foreach ($cate_product as $key => $cate)
                                            @if ($cate->id == $pro->loaisanpham_id)
                                                <option selected value="{{ $cate->id }}">{{ $cate->loaisanpham_ten }}</option>
                                            @else
                                                <option value="{{ $cate->id }}">{{ $cate->loaisanpham_ten }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group">
                                    <label for="inputState">Đơn vị tính</label>
                                    <select name="product_unit" id="inputState" class="form-control">
                                        @foreach ($unit_product as $key => $cate)
                                            @if ($cate->id == $pro->donvitinh_id)
                                                <option selected value="{{ $cate->id }}">{{ $cate->donvitinh_ten }}</option>
                                            @else
                                                <option value="{{ $cate->id }}">{{ $cate->donvitinh_ten }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group">
                                    <label for="inputState">Hiển thị</label>
                                    <select name="product_status" id="inputState" class="form-control">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                            </div>

                            <div class="form-group">
                                    <label for="inputState">Sản phẩm mới</label>
                                    <select name="product_new" id="inputState" class="form-control">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                            </div>

                            <div class="form-group">
                                    <label for="inputState">Sản phẩm nổi bật</label>
                                    <select name="product_feature" id="inputState" class="form-control">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                            </div>
                            
                            <button type="submit" name="update_product" class="btn btn-primary">Cập nhật sản phẩm</button>

                            
                        </form>
                    @endforeach
                    </div>
                </div><!-- end card-->
            </div>
        </div>
    </div>
</div>



@endsection











