<!DOCTYPE html>
<html lang="en">

<head>
    <title> Admin - Dashboard</title>
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/backend/assets/images/favicon.ico')}}">

    <!-- Bootstrap CSS -->
    <link href="{{asset('public/backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="{{asset('public/backend/assets/font-awesome/css/all.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{asset('public/backend/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets/plugins/chart.js/Chart.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets/plugins/datatables/datatables.min.css')}}" />
    <!-- END CSS for this page -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
</head>

<body class="adminbody">
<?php
    $name = Session::get('name');

?>
    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="{{URL::to('/all-category-product')}}" class="logo">
                    <img alt="Logo" src="{{asset('public/backend/assets/images/logo.png')}}" />
                    <span>Nura Admin</span>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <span class="notif-bullet"></span>
                        </a>
                    </li>

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="{{asset('public/backend/assets/images/avatars/avatar2.png')}}" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>John Doe</b>
                                    <span>User registration</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="{{asset('public/backend/assets/images/avatars/avatar3.png')}}" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michael Cox</b>
                                    <span>Task 2 completed</span>
                                    <small class="text-muted">12 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="{{asset('public/backend/assets/images/avatars/avatar4.png')}}" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michelle Dolores</b>
                                    <span>New job completed</span>
                                    <small class="text-muted">35 minutes ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="#" class="dropdown-item notify-item notify-all">
                                View All Allerts
                            </a>

                        </div>
                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>Settings</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 1</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 2</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 3</b>
                                </p>
                            </a>

                        </div>

                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('public/backend/assets/images/avatars/admin.png')}}" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>Hello, <?php echo $name ?></small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="profile.html" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="{{URL::to('/logout')}}" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>
                        <li class="submenu">
                            <a class="active" href="{{URL::to('/all-category-product')}}">
                                <i class="fas fa-bars"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="users.html">
                                <i class="fas fa-user"></i>
                                <span> Quản lý tài khoản </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{URL::to('/all-post')}}">
                                <i class="fas fa-file-alt"></i>
                                <span> Bài viết </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> Quản lý bình luận </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('/all-comment-product')}}">Bình luận sản phẩm </a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/all-comment-post')}}">Bình luận bài viết</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="submenu">
                            <a href="mail-all.html">
                                <span class="label radius-circle bg-danger float-right">18</span>
                                <i class="fas fa-envelope"></i>
                                <span> Mailbox </span>
                            </a>
                        </li> -->

                        <li class="submenu">
                            <a href="{{URL::to('/manager-order')}}">
                                <i class="fas fa-photo-video"></i>
                                <span> Quản lý đơn hàng </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{URL::to('/delivery')}}">
                                <i class="fas fa-photo-video"></i>
                                <span> Phí vận chuyển </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> Sản phẩm </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('add-product')}}">Thêm sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('all-product')}}">Liệt kê sản phẩm</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> Danh mục sản phẩm </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('add-category-product')}}">Thêm danh mục</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('all-category-product')}}">Liệt kê danh mục</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="slider.html">
                                <i class="fas fa-photo-video"></i>
                                <span> Thông tin Shop cây cảnh </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{URL::to('/contact')}}">
                                <i class="fas fa-photo-video"></i>
                                <span> Thông tin liên hệ </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="slider.html">
                                <i class="fas fa-photo-video"></i>
                                <span> Thống kê </span>
                            </a>
                        </li>

                        <li class="submenu">

                            <li class="submenu">
                                <a class="pro" href="pro.html">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span> PRO Version </span>
                                </a>
                            </li>

                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->

        <div class="content-page">

            <!-- Start content -->
            
                        @yield('admin_content')
                    
                    <!-- end row-->

                
                <!-- END container-fluid -->

            
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <footer class="footer">
            <span class="text-right">                
                Copyright <a target="_blank" href="#">Company</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="https://bootstrap24.com" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
            </span>
        </footer>

        <script src="{{asset('public/backend/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('public/backend/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/backend/assets/js/moment.min.js')}}"></script>

        <script src="{{asset('public/backend/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('public/backend/assets/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('public/backend/assets/js/detect.js')}}"></script>
        <script src="{{asset('public/backend/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('public/backend/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('public/backend/assets/js/jquery.nicescroll.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('public/backend/assets/js/admin.js')}}"></script>

    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="{{asset('public/backend/assets/plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/plugins/datatables/datatables.min.js')}}"></script>

    <!-- Counter-Up-->
    <script src="{{asset('public/backend/assets/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

    <!-- dataTabled data -->
    <script src="{{asset('public/backend/assets/data/data_datatables.js')}}"></script>
    <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.form-validator.min.js')}}"></script>
    <!-- Charts data -->
    <!-- <script src="public/backend/assets/data/data_charts_dashboard.js"></script> -->

    <script type="text/javascript">
        $('.comment_duyet_btn').click(function(){
            var comment_status = $(this).data('comment_status');
            var comment_id = $(this).data('comment_id');
            var comment_post_id = $(this).attr('id');
            // alert(comment_status);
            // alert(comment_id);
            // alert(comment_post_id);
            if (comment_status == 1){
                var alert = 'Duyệt bình luận thành công';
            }else{
                var alert = 'Không duyệt bình luận thành công';
            }
            $.ajax({
                url : '{{url('/allow-comment-post')}}',
                method: 'POST',
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment_status:comment_status,comment_id:comment_id,comment_post_id:comment_post_id},
                success:function(data){
                    location.reload();
                    $('#notify_comment').html('<span class="text text-alert">'+alert+'</span>');
                }
            });
        });

        $('.btn-reply-comment-post').click(function(){
            var comment_id = $(this).data('comment_id');

            var comment = $('.reply_comment_post_'+comment_id).val();
            
            var comment_post_id = $(this).data('post_id');
            
            $.ajax({
                url : '{{url('/reply-comment-post')}}',
                method: 'POST',
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment:comment,comment_id:comment_id,comment_post_id:comment_post_id},
                success:function(data){
                    $('.reply_comment_post').val('');
                    $('#notify_comment').html('<span class="text text-alert">Trả lời bình luận thành công</span>');
                }
            });
        });
    </script>

        <!-- Duyệt comment sản phẩm -->
    <script type="text/javascript">
        $('.comment_duyet_sp_btn').click(function(){
            var comment_status = $(this).data('comment_status');
            var comment_id = $(this).data('comment_id_pro');
            var comment_pro_id = $(this).attr('id_product');

            if (comment_status == 1){
                var alert = 'Duyệt bình luận thành công';
            }else{
                var alert = 'Không duyệt bình luận thành công';
            }
            $.ajax({
                url : '{{url('/allow-comment-product')}}',
                method: 'POST',
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment_status:comment_status,comment_id:comment_id,comment_pro_id:comment_pro_id},
                success:function(data){
                    location.reload();
                    $('#notify_comment').html('<span class="text text-alert">'+alert+'</span>');
                }
            });
        });

        $('.btn-reply-comment-pro').click(function(){
            var comment_id = $(this).data('comment_id_pro');

            var comment = $('.reply_comment_pro_'+comment_id).val();
            
            var comment_product_id = $(this).data('pro_id');
            
            
            $.ajax({
                url : '{{url('/reply-comment-product')}}',
                method: 'POST',
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment:comment,comment_id:comment_id,comment_product_id:comment_product_id},
                success:function(data){
                    $('.reply_comment_pro').val('');
                    $('#notify_comment').html('<span class="text text-alert">Trả lời bình luận thành công</span>');
                }
            });
        });
    </script>
    
    <script>
        CKEDITOR.replace('ckeditor1');
        CKEDITOR.replace('ckeditor2');
        CKEDITOR.replace('ckeditor_post_content');
        CKEDITOR.replace('ckeditor_post_desc');
    </script>

    <script type="text/javascript">
 
        function ChangeToSlug()
        {
            var slug;
        
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
    </script>

    <script type="text/javascript">
        $.validate({
            
        });
    </script>
    <script>
        $(document).on('ready', function() {
            // data-tables
            $('#dataTable').DataTable({
                // data: dataSet,
                // columns: [{
                //     title: "Name"
                // }, {
                //     title: "Position"
                // }, {
                //     title: "Office"
                // }, {
                //     title: "Extn."
                // }, {
                //     title: "Date"
                // }, {
                //     title: "Salary"
                // }]
            });

            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        });

        
        $(document).on('blur','.feeship_edit',function(){
            var feeship_id = $(this).data('feeship_id');
            var fee_value = $(this).text();
            var _token = $('input[name="_token"]').val();
            // alert(feeship_id);
            // alert(fee_value);
            $.ajax({
                url : '{{url('/update-delivery')}}',
                method: 'POST',
                data:{feeship_id:feeship_id, fee_value:fee_value, _token:_token},
                success:function(data){
                    
                }
            });
        });

    </script>
    <!-- END Java Script for this page -->

</body>

</html>