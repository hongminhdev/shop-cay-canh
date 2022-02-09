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
            <div class="col-12">
                <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fas fa-user-friends"></i> Liệt kê danh mục sản phẩm </h3>
                    
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

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Tên danh mục</th>
                                    <th>Mô tả</th>
                                    <th>Ngày thêm</th>
                                    <th>Hiển thị</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_category_product as $key => $cate_pro)
                                <tr>
                                    <td>{{ $cate_pro->loaisanpham_ten }}</td>
                                    <td>{{ $cate_pro->loaisanpham_mo_ta }}</td>
                                    <td>{{ $cate_pro->loaisanpham_thoigian }}</td>
                                    <td>
                                        <?php
                                            if($cate_pro->loaisanpham_hienthi == 0){
                                            ?>
                                                <a href="{{URL::to('/active-category-product/'.$cate_pro->id)}}"><span style="margin-left: 75px;" class="fas fa-lock"></span></a>
                                            <?php
                                            }else{ 
                                            ?>
                                                <a href="{{URL::to('/unactive-category-product/'.$cate_pro->id)}}"><span style="margin-left: 75px;" class="fas fa-lock-open"></span></a>
                                            <?php
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="{{URL::to('/edit-category-product/'.$cate_pro->id)}}"><span class="fa fa-edit" style="margin-left: 20%;"></span></a>
                                        <a href="{{URL::to('/delete-category-product/'.$cate_pro->id)}}"><span class="fa fa-trash" style="margin-left: 30%;"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive-->

                </div>
                <!-- end card-body-->
            </div>
    <!-- end card-->
        </div>

        </div>
    </div>
</div>



@endsection



