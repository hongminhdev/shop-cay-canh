@extends('admin_layout')
@section('admin_content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Bài viết</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Quản trị</li>
                        <li class="breadcrumb-item active"> Bài viết</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="far fa-check-square"></i> Chỉnh sửa bài viết </h3>
                </div>
               
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

                        <form action="{{URL::to('/update-post/'.$post->baiviet_id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="row">

                                <div class="form-group col-xl-9 col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <label>Tiêu đề bài viết</label>
                                        <input type="text" name="post_name" class="form-control" value="{{$post->baiviet_tieude}}"
                                            onkeyup="ChangeToSlug();" id="slug" placeholder="Nhập tên bài viết">
                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="post_slug" value="{{$post->baiviet_slug}}"
                                         class="form-control" id="convert_slug">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress">Tóm tắt bài viết</label>
                                        <textarea style="resize: none" rows="6" type="text" id="ckeditor_post_desc" class="form-control"
                                                placeholder="Nhập nội dung bài viết" name="post_desc"> {{$post->baiviet_tomtat}}
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress">Nội dung bài viết</label>
                                        <textarea style="resize: none" rows="6" type="text" id="ckeditor_post_content" class="form-control"
                                                placeholder="Nhập nội dung bài viết" name="post_content"> {{$post->baiviet_noidung}}
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Hình ảnh bài viết</label><br />
                                        <input type="file" name="post_image" > <br> <br>
                                        <img src="{{asset('public/uploads/post/'.$post->baiviet_anh)}}" height="100" width="100" alt="">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="update_post" class="btn btn-primary">Cập nhật bài viết</button>
                                    </div>
                                </div>

                                <div class="form-group col-xl-3 col-md-4 col-sm-12 border-left">
                                    <div class="form-group">
                                        <label>Meta từ khóa</label>
                                        <input type="text" class="form-control" name="post_keyword" value="{{$post->baiviet_keyword}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Ngày thêm</label>
                                        <input type="date" name="post_time" class="form-control" value="{{$post->ngaythem}}"
                                         id="inputEmail4" placeholder="Nhập tên sản phẩm" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputState">Hiển thị</label>
                                        <select name="post_status" id="inputState" class="form-control">
                                            <option value="1">Hiển thị</option>
                                            <option value="0">Ẩn</option>
                                        </select>
                                    </div>

                                </div>

                            </div><!-- end row -->
                        </form>

                    </div>
                    <!-- end card-body -->

                </div>
                <!-- end card -->

            </div>
            <!-- end col -->

        </div>
    </div>
</div>

@endsection












           










