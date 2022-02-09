@extends('admin_layout')
@section('admin_content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Phí vận chuyển</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Quản trị</li>
                        <li class="breadcrumb-item active">Phí vận chuyển</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <form action="{{URL::to('/delivery-fee')}}" method="POST">
        {{ csrf_field() }}
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="far fa-hand-pointer"></i> Phí vận chuyển theo Tỉnh/Thành phố</h3>
                        Chọn Tỉnh / Thành phố để thêm phí vận chuyển
                    </div>

                    <div class="card-body">

                        <label for="example1">
                            Chọn Tỉnh:
                        </label>
                        <div class="mb-1"></div>
                        <select class="form-control select2" id="city" name="city">
                        <option>--- Chọn tỉnh thành phố ---</option>
                        @foreach($all_city as $key => $all)
                            <option value="{{$all->matp}}">{{$all->ten_tp}}</option>
                        @endforeach 
                        </select>

                    </div>
                </div><!-- end card-->
            </div>


            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="far fa-hand-pointer"></i> Thêm phí vận chuyển</h3>
                        Chọn phí vận chuyển theo Tỉnh / Thành phố
                    </div>

                    <div class="card-body">

                        <label for="example2">
                            Chọn mức phí vận chuyển:
                        </label>
                        <div class="mb-1"></div>
                        <div class="form-group">
                            <select class="form-control" name="fee" id="fee">
                                <option>--- Chọn phí vận chuyển ---</option>
                                <option value="25000">25000</option>
                                <option value="50000">50000</option>
                                <option value="100000">100000</option>
                                <option value="150000">150000</option>
                                <option value="200000">200000</option>
                            </select>
                        </div>
                        <button type="submit" name="add_fee" class="btn btn-primary">Thêm phí</button>
                    </div>
                </div><!-- end card-->
        </form>
            </div>
        
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fas fa-user-friends"></i> Danh sách phí vận chuyển theo Tỉnh / Thành phố </h3>
                        
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
                                        <th>Tên Tỉnh / Thành phố</th>
                                        <th>Loại thành phố</th>
                                        <th>Phí vận chuyển</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($city as $key => $ct)
                                    <tr>
                                        <td>{{ $ct->ten_tp }}</td>
                                        <td>{{ $ct->type }}</td>
                                        <td contenteditable data-feeship_id="{{$ct->phi_id}}" class="feeship_edit">{{ number_format($ct->phi_vanchuyen) }}</td>
                                        
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



