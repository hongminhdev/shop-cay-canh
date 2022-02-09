@extends('admin_layout')
@section('admin_content')


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Đơn hàng</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Trang chủ</li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                <div class="card mb-3">

                    <div class="card-header">
                        <span class="pull-right"><a target="blank" href="{{URL::to('/print-order/'.$code)}}" class="btn btn-primary btn-sm"><i class="fas fa-print" aria-hidden="true"></i> In đơn hàng </a></span>
                        <h3><i class="fas fa-table"></i> Xem trước đơn hàng trước khi in</h3>
                    </div>

                    <div class="card-body">

                        <div class="container">

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="invoice-title text-center mb-3">
                                        <h2>Đơn hàng</h2>
                                        <?php
                                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                                        ?>
                                        <strong>Ngày in đơn hàng:</strong> {{now()}}
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                            <h5>Hóa đơn của khách hàng:</h5>
                                            @foreach($all_order as $key => $order)
                                            <address>
                                                Tên khách hàng: {{ $order->khachhang_ten }}<br>
                                                Email: {{ $order->email }}<br>
                                                Số điện thoại: {{$khsdt}}<br>
                                                Địa chỉ: {{$khdc}}
                                            </address>
                                            @endforeach
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                                            <h5>Giao hàng đến:</h5>
                                            <address>
                                                Khách hàng: {{ $s_name }}<br>
                                                Điện thoại: {{ $s_phone }}<br>
                                                Tỉnh / Thành phố: {{ $s_city }}<br>
                                                Địa chỉ: {{ $s_address }} <br>
                                                Ngày giao hàng: {{ $s_date }} <br>
                                                Thời gian giao hàng: {{ $s_time }}
                                            </address>
                                        </div>
                                    </div>

                                    <div class="row">
                                    @foreach($all_order as $key => $order)
                                        <div class="col-xs-12 col-md-6">
                                            <h5>Phương thức thanh toán:</h5>
                                            @if ($order->thanhtoan_hinhthuc == 2)
                                            <address>
                                                Nhận tiền mặt
                                            </address>
                                            @endif
                                        </div>
                                        <div class="col-xs-12 col-md-6 text-right">
                                            <h5>Ngày đặt hàng:</h5>
                                            <address>
                                                {{ $order->created_at }}<br><br>
                                            </address>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><strong>Chi tiết đơn hàng</strong></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <td><strong>Tên sản phẩm</strong></td>
                                                            <td class="text-center"><strong>Giá</strong>
                                                            </td>
                                                            <td class="text-center">
                                                                <strong>Số lượng</strong></td>
                                                            <td class="text-right"><strong>Thành tiền</strong>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($chitiet as $key => $cc)
                                                            <tr>
                                                                <td>{{ $cc->sanpham_ten }}</td>
                                                                <td class="text-center">{{ $cc->sanpham_thanhtien }}</td>
                                                                <td class="text-center">{{ $cc->sanpham_soluong }}</td>
                                                                <td class="text-right">{{ $cc->sanpham_thanhtien * $cc->sanpham_soluong}}</td>
                                                            </tr>
                                                        @endforeach
                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center">
                                                                    <strong>Tổng giỏ hàng</strong>
                                                                </td>
                                                                <td class="thick-line text-right">{{ $order->donhang_tongtien - $fee }}</td>
                                                            </tr>
                                                        
                                                        <tr>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line text-center">
                                                                <strong>Phí vận chuyển</strong></td>
                                                            <td class="no-line text-right">{{ $fee }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line text-center">
                                                                <strong>Tổng tiền</strong></td>
                                                            @foreach($all_order as $key => $order)
                                                            <td class="no-line text-right">{{ $order->donhang_tongtien }}</td>
                                                            @endforeach
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card body -->

                </div>
                <!-- end card-->

            </div>
            <!-- end col-->

        </div>
        <!-- end row-->


    </div>
</div>

@endsection