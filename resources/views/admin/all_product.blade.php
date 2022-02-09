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
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fas fa-user-friends"></i> Liệt kê sản phẩm </h3>
                        
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
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Mô tả sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Danh mục sản phẩm</th>
                                        <th>Đơn vị tính</th>
                                        <th>Ngày thêm</th>
                                        <th>Hiển thị</th>
                                        <th>Sản phẩm mới</th>
                                        <th>Sản phẩm nổi bật</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_product as $key => $pro)
                                    <tr>
                                        <td>{{ $pro->sanpham_ten }}</td>
                                        <td><img src="public/uploads/product/{{ $pro->sanpham_anh }}" height="100" width="100" ></td>
                                        <td>{!! $pro->sanpham_mota !!}</td>
                                        <td>{{ $pro->sanpham_gia }}</td>
                                        <td>{{ $pro->loaisanpham_ten }}</td>
                                        <td>{{ $pro->donvitinh_ten }}</td>
                                        <td>{{ $pro->ngaythem }}</td>
                                        <td>
                                            <?php
                                                if($pro->sanpham_hienthi == 0){
                                                ?>
                                                    <a href="{{URL::to('/active-product/'.$pro->sanpham_id)}}"><span style="margin-left: 30px;" class="fas fa-lock"></span></a>
                                                <?php
                                                }else{ 
                                                ?>
                                                    <a href="{{URL::to('/unactive-product/'.$pro->sanpham_id)}}"><span style="padding-left: 30px;" class="fas fa-lock-open"></span></a>
                                                <?php
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if($pro->sanpham_moi == 0){
                                                ?>
                                                    <a href="{{URL::to('/active-product-new/'.$pro->sanpham_id)}}"><span style="margin-left: 30px;" class="fas fa-lock"></span></a>
                                                <?php
                                                }else{ 
                                                ?>
                                                    <a href="{{URL::to('/unactive-product-new/'.$pro->sanpham_id)}}"><span style="padding-left: 30px;" class="fas fa-lock-open"></span></a>
                                                <?php
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if($pro->sanpham_noibat == 0){
                                                ?>
                                                    <a href="{{URL::to('/active-product-feature/'.$pro->sanpham_id)}}"><span style="margin-left: 30px;" class="fas fa-lock"></span></a>
                                                <?php
                                                }else{ 
                                                ?>
                                                    <a href="{{URL::to('/unactive-product-feature/'.$pro->sanpham_id)}}"><span style="padding-left: 30px;" class="fas fa-lock-open"></span></a>
                                                <?php
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="{{URL::to('/edit-product/'.$pro->sanpham_id)}}"><span class="fa fa-edit" style="margin-left: 28%;"></span></a>
                                            <a href="{{URL::to('/delete-product/'.$pro->sanpham_id)}}"><span class="fa fa-trash" style="margin-left: 30%;"></span></a>
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



