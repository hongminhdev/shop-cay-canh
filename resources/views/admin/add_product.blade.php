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
                        <h3><i class="far fa-check-square"></i> Thêm sản phẩm </h3>
                    </div> <br>
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

                        <form autocomplete="off" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Tên sản phẩm</label>
                                    <input type="text" name="product_name" class="form-control"
                                    data-validation="length" data-validation-length="min10" data-validation-error-msg="Vui lòng điền ít nhất 10 ký tự"
                                    id="inputEmail4" placeholder="Nhập tên sản phẩm">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Ảnh sản phẩm</label>
                                    <input type="file" name="product_image" class="form-control" id="inputEmail4" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Ngày thêm</label>
                                    <input type="date" name="product_time" class="form-control" id="inputEmail4" placeholder="Nhập tên sản phẩm" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputAddress">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="4" type="text" id="ckeditor1" class="form-control"
                                        placeholder="Nhập mô tả" name="product_desc">
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Mô tả chi tiết</label>
                                <textarea style="resize: none" rows="6" type="text" id="ckeditor2" class="form-control"
                                        placeholder="Nhập mô tả" name="product_desc_detail">
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Giá sản phẩm</label>
                                <input type="text" name="product_price"
                                data-validation="number" data-validation-error-msg="Vui lòng điền giá tiền (chỉ cho phép nhập số)"
                                placeholder="Nhập giá sản phẩm" class="form-control" id="inputEmail4" autocomplete="off">
                            </div>

                            <div class="form-group">
                                    <label for="inputState">Danh mục sản phẩm</label>
                                    <select name="product_cate" id="inputState" class="form-control">
                                        @foreach ($cate_product as $key => $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->loaisanpham_ten }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group">
                                    <label for="inputState">Đơn vị tính</label>
                                    <select name="product_unit" id="inputState" class="form-control">
                                        @foreach ($unit_product as $key => $cate)
                                            <option value="{{ $cate->donvitinh_id }}">{{ $cate->donvitinh_ten }}</option>
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
                            
                            <button type="submit" name="add_product" class="btn btn-primary">Thêm sản phẩm</button>

                            
                        </form>

                    </div>
                </div><!-- end card-->
            </div>

        </div>
    </div>
</div>


@endsection


<!-- <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Thêm sản phẩm</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Quản trị</li>
                        <li class="breadcrumb-item active">Thêm sản phẩm</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</div> -->








