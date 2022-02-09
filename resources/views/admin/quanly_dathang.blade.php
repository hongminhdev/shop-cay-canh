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
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fas fa-user-friends"></i> Liệt kê đơn hàng </h3>
                        
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Ngày mua hàng</th>
                                        <th>Tình trạng đơn hàng</th>
                                        <!-- <th>Địa chỉ giao hàng</th>
                                        <th>Ghi chú</th> -->
                                        <th>Thanh toán</th>
                                        <th>Tình trạng</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_order as $key => $order)
                                    <tr>
                                        <td>{{ $order->khachhang_ten }}</td>
                                        <td>{{ $order->donhang_tongtien }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->tinhtranghd_ten }}</td>
                                        <!-- <td>{{ $order->shipping_address }}</td>
                                        <td>{{ $order->shipping_note }}</td> -->
                                        @if ($order->thanhtoan_hinhthuc == 2)
                                        <td>Nhận tiền mặt</td>
                                        @endif
                                        <td>{{ $order->thanhtoan_tinhtrang }}</td>
                                        <td>
                                            <a href="{{URL::to('/view-order/'.$order->donhang_id)}}" class="btn btn-primary btn-sm btn-block">
                                                <i class="fas fa-eye"></i> Xem chi tiết
                                            </a>
                                            @if ($order->tinhtranghd_id == 1)
                                            <a href="{{URL::to('/confirm-order/'.$order->donhang_id)}}" class="btn btn-primary btn-sm btn-block">
                                                <i class="fas fa-check"></i> Xác nhận đơn hàng
                                            </a>
                                            @endif
                                            @if ($order->tinhtranghd_id == 2)
                                            <a href="{{URL::to('/print-view-order/'.$order->donhang_id)}}" class="btn btn-primary btn-sm btn-block">
                                                <i class="fas fa-print"></i> In đơn hàng
                                            </a>
                                            @endif
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



