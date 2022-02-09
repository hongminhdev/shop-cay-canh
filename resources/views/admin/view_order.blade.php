@extends('admin_layout')
@section('admin_content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Đơn hàng</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Quản trị</li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Thông tin chi tiết -->
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fas fa-user-friends"></i> Liệt kê chi tiết đơn hàng </h3>
                        
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($chitiet as $key => $cc)
                                    <tr>
                                        <td>{{ $cc->sanpham_ten }}</td>
                                        <td>{{ $cc->sanpham_soluong }}</td>
                                        <td>{{ $cc->sanpham_thanhtien }}</td>
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

                <!-- Thông tin người mua -->
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fas fa-user-friends"></i> Thông tin người mua hàng </h3>
                        
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <!-- <th>Email</th> -->
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>{{$khten}}</td>
                                        <td>{{$khsdt}}</td>
                                        <td>{{$khdc}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive-->

                    </div>
                    <!-- end card-body-->
                </div>
                <!-- end card-->
            </div>

                        <!-- Thông tin vận chuyển -->
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fas fa-user-friends"></i> Thông tin vận chuyển </h3>
                        
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Tỉnh / Thành phố</th>
                                        <th>Số điện thoại</th>
                                        <th>Ngày giao hàng</th>
                                        <th>Thời gian giao hàng</th>
                                        <th>Phí vận chuyển</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>{{ $s_name }}</td>
                                        <td>{{ $s_address }}</td>
                                        <td>{{ $s_city }}</td>
                                        <td>{{ $s_phone }}</td>
                                        <td>{{ $s_date }}</td>
                                        <td>{{ $s_time }}</td>
                                        <td>{{ $fee }}</td>
                                    </tr>
                                    
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



