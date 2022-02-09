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
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="far fa-check-square"></i> Cập nhật danh mục sản phẩm </h3>
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
                    
                    @foreach($edit_category_product as $key => $edit_value)
                    <div class="card-body">

                        <form autocomplete="off" action="{{URL::to('/update-category-product/'.$edit_value->id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Tên danh mục</label>
                                    <input type="text" value="{{ $edit_value->loaisanpham_ten }}"
                                    name="category_product_name" class="form-control" id="inputEmail4" placeholder="Nhập tên danh mục" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="6" type="text" id="city-column" class="form-control"
                                    name="category_product_desc"> {{ $edit_value->loaisanpham_mo_ta }}
                                </textarea>
                            </div>
                            
                            <button type="submit" name="update_category_product" class="btn btn-primary">Cập nhật danh mục</button>

                            
                        </form>

                    </div>
                    @endforeach
                </div><!-- end card-->
            </div>
        </div>
    </div>
</div>



@endsection


<!-- <div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Cập nhật danh mục sản phẩm</h3>
            <p class="text-subtitle text-muted"> Cập nhật danh mục sản phẩm </p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Quản trị</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cập nhật danh mục</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh mục sản phẩm</h4>
                </div>
                <div class="card-content">
                    @foreach($edit_category_product as $key => $edit_value)
                    <div class="card-body">
                        <form class="form" action="{{URL::to('/update-category-product/'.$edit_value->id)}}" method="post"> 
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Tên danh mục</label>
                                        <input type="text" value="{{ $edit_value->loaisanpham_ten }}" name="category_product_name" class="form-control"
                                            placeholder="Nhập tên danh mục">
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Mô tả danh mục</label>
                                        <textarea style="resize: none" rows="6" type="text" id="city-column" class="form-control"
                                            value="{{ $edit_value->loaisanpham_mo_ta }}"  name="category_product_desc">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" name="update_category_product"
                                        class="btn btn-primary me-1 mb-1">Cập nhật danh mục</button>
                                </div>
                                
                                
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> -->



























