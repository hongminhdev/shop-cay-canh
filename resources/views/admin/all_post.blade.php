@extends('admin_layout')
@section('admin_content')

<!-- <div class="content-page"> -->

            <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Bài viết</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Quản trị</li>
                            <li class="breadcrumb-item active">Bài viết</li>
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
                            <span class="pull-right"><a href="{{URL::to('/add-post')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Thêm bài viết </a></span>
                            <h3><i class="far fa-file-alt"></i> Danh sách bài viết </h3>
                        </div>
                        <!-- end card-header -->
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
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 300px">Thông tin bài viết</th>
                                            <th style="width:110px">Trạng thái</th>
                                            <th style="min-width:110px">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_post as $key => $post)
                                        <tr>
                                            <td>
                                                <div class="blog_list"><img  src="public/uploads/post/{{ $post->baiviet_anh }}" /></div>
                                                <h4> {{ $post->baiviet_tieude }} </h4>
                                                <p> Đăng bởi <b>Administrator</b> vào {{ $post->ngaythem }}</p>
                                                <p>{!! $post->baiviet_tomtat !!}</p>
                                            </td>

                                            <td>
                                            @if ($post->baiviet_tinhtrang == 1)
                                                Hiển thị
                                            @else
                                                Ẩn
                                            @endif
                                            </td>

                                            <td>
                                                <a href="{{URL::to('/edit-post/'.$post->baiviet_id)}}" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i> Sửa</a>                                                        
                                                <a href="{{URL::to('/delete-post/'.$post->baiviet_id)}}" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i> Xóa</a>                                                        
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- end card-body -->

                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
            <!-- END content -->

<!-- </div> -->

@endsection










