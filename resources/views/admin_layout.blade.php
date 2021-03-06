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
                                <span> Qu???n l?? t??i kho???n </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{URL::to('/all-post')}}">
                                <i class="fas fa-file-alt"></i>
                                <span> B??i vi???t </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> Qu???n l?? b??nh lu???n </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('/all-comment-product')}}">B??nh lu???n s???n ph???m </a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/all-comment-post')}}">B??nh lu???n b??i vi???t</a>
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
                                <span> Qu???n l?? ????n h??ng </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{URL::to('/delivery')}}">
                                <i class="fas fa-photo-video"></i>
                                <span> Ph?? v???n chuy???n </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> S???n ph???m </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('add-product')}}">Th??m s???n ph???m</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('all-product')}}">Li???t k?? s???n ph???m</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> Danh m???c s???n ph???m </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{URL::to('add-category-product')}}">Th??m danh m???c</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('all-category-product')}}">Li???t k?? danh m???c</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="slider.html">
                                <i class="fas fa-photo-video"></i>
                                <span> Th??ng tin Shop c??y c???nh </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{URL::to('/contact')}}">
                                <i class="fas fa-photo-video"></i>
                                <span> Th??ng tin li??n h??? </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="slider.html">
                                <i class="fas fa-photo-video"></i>
                                <span> Th???ng k?? </span>
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
                var alert = 'Duy???t b??nh lu???n th??nh c??ng';
            }else{
                var alert = 'Kh??ng duy???t b??nh lu???n th??nh c??ng';
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
                    $('#notify_comment').html('<span class="text text-alert">Tr??? l???i b??nh lu???n th??nh c??ng</span>');
                }
            });
        });
    </script>

        <!-- Duy???t comment s???n ph???m -->
    <script type="text/javascript">
        $('.comment_duyet_sp_btn').click(function(){
            var comment_status = $(this).data('comment_status');
            var comment_id = $(this).data('comment_id_pro');
            var comment_pro_id = $(this).attr('id_product');

            if (comment_status == 1){
                var alert = 'Duy???t b??nh lu???n th??nh c??ng';
            }else{
                var alert = 'Kh??ng duy???t b??nh lu???n th??nh c??ng';
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
                    $('#notify_comment').html('<span class="text text-alert">Tr??? l???i b??nh lu???n th??nh c??ng</span>');
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
        
            //L???y text t??? th??? input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //?????i k?? t??? c?? d???u th??nh kh??ng d???u
                slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
                slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
                slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
                slug = slug.replace(/??|???|???|???|???/gi, 'y');
                slug = slug.replace(/??/gi, 'd');
                //X??a c??c k?? t??? ?????t bi???t
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
                slug = slug.replace(/ /gi, "-");
                //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
                //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox c?? id ???slug???
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