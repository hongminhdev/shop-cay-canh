@extends('admin_layout')
@section('admin_content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Bình luận sản phẩm</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Quản trị</li>
                        <li class="breadcrumb-item active">Bình luận sản phẩm</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-table"></i> Liệt kê bình luận</h3>
                                    <!-- Use <i>.table-striped</i> to add zebra-striping to any table row within the 'tbody'. (
                                    <a target="_blank" href="https://getbootstrap.com/docs/4.3/content/tables/#striped-rows">more
                                        info</a>) -->
                                </div>
                                <div id="notify_comment"></div>
                                <div class="card-body">

                                    <table class="table table-responsive-xl table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tên</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Bình luận</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Ngày gửi</th>
                                                <th scope="col">Quản lý</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($all_cm_pro as $key => $a)
                                            <tr>
                                                <th>{{$a->binhluan_ten}}</th>
                                                <td>{{$a->binhluan_email}}</td>
                                                <td>{{$a->binhluan_noidung}}
                                                @if ($a->binhluan_trangthai == 1)
                                                    <br/><textarea class="form-control reply_comment_pro_{{$a->id}}" cols="20" rows="3"></textarea>
                                                    <br/><button class="btn btn-primary btn-reply-comment-pro"
                                                    data-pro_id="{{$a->sanpham_id}}" data-comment_id_pro="{{$a->id}}">Trả lời bình luận</button>
                                                @endif
                                                </td>
                                                <td> <a href="{{url('/chitiet-sanpham/'.$a->sanpham_id)}}" target="_blank">
                                                    {{$a->sanpham_ten}}</a> 
                                                </td>
                                                <td>{{$a->ngaygui}}</td>
                                                <td>
                                                    @if ($a->binhluan_trangthai == 1)
                                                        <input type="button" data-comment_status="0" data-comment_id_pro="{{$a->id}}" id_product="{{$a->sanpham_id}}" 
                                                        class="btn btn-danger btn-xs comment_duyet_sp_btn" value="Bỏ duyệt">
                                                    @else
                                                        <input type="button" data-comment_status="1" data-comment_id_pro="{{$a->id}}" id_product="{{$a->sanpham_id}}"
                                                        class="btn btn-primary btn-xs comment_duyet_sp_btn" value="Duyệt" style="margin-left: 10px;">
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <!-- end card-->
                        </div>
    <!-- end card-->
        </div>

        </div>
    </div>
</div>



@endsection



