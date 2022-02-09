@extends('admin_layout')
@section('admin_content')

<div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Danh mục sản phẩm</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Quản trị</li>
                            <li class="breadcrumb-item active">Danh mục sản phẩm</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-check-square"></i> Thêm danh mục sản phẩm </h3>
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

                            <form autocomplete="off" action="{{URL::to('/save-category-product')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Tên danh mục</label>
                                        <input type="text" name="category_product_name"
                                        data-validation="length" data-validation-length="min10" data-validation-error-msg="Vui lòng điền ít nhất 10 ký tự"
                                        class="form-control" id="inputEmail4" placeholder="Nhập tên danh mục" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Mô tả danh mục</label>
                                    <textarea style="resize: none" rows="6" type="text" id="city-column" class="form-control"
                                            placeholder="Nhập mô tả" name="category_product_desc">
                                    </textarea>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Ngày thêm</label>
                                        <input type="date" name="category_product_time" class="form-control" id="inputEm" placeholder="Nhập tên danh mục" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label for="inputState">Hiển thị</label>
                                        <select name="category_product_status" id="inputState" class="form-control">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>
                                        </select>
                                </div>
                                
                                <button type="submit" name="add_category_product" class="btn btn-primary">Thêm danh mục</button>

                                
                            </form>

                        </div>
                    </div><!-- end card-->
                </div>

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

</div>

@endsection











