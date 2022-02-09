<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop cây cảnh</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/img/favicon.png')}}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/chosen.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">
        <script src="{{asset('public/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
                
            <!-- Add your site or application content here -->
            
            <!--organicfood wrapper start--> 
            <div class="organic_food_wrapper">
                <!--Header start-->
                @include('header')
                <!--Header end-->
                
                <!--Slider start-->
                <div class="slider_area">
                    @yield('content')
                
                <!--Slider end-->
                
                </div>
                
                <!-- footer start -->
                @include('footer')
                
                <!-- footer end -->
                
                
                
            </div>
           
                
            </div>
           
           
           
           
             <!-- modal area start --> 
            <div class="modal fade" id="my_modal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body shop">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="product-flags madal">  
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="imgeone" role="tabpanel" >
                                                    <div class="product_tab_img">
                                                        <a href="#"><img src="{{asset('public//frontend/img/cart/nav12.jpg')}}" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="imgetwo" role="tabpanel">
                                                    <div class="product_tab_img">
                                                        <a href="#"><img src="{{asset('public//frontend/img/cart/nav11.jpg')}}" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="imgethree" role="tabpanel">
                                                    <div class="product_tab_img">
                                                        <a href="#"><img src="{{asset('public//frontend/img/cart/nav13.jpg')}}" alt=""></a>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="products_tab_button  modals">    
                                                <ul class="nav product_navactive" role="tablist">
                                                    <li >
                                                        <a class="nav-link active" data-toggle="tab" href="#imgeone" role="tab" aria-controls="imgeone" aria-selected="false"><img src="{{asset('public//frontend/img/cart/nav.jpg')}}" alt=""></a>
                                                    </li>
                                                    <li>
                                                         <a class="nav-link" data-toggle="tab" href="#imgetwo" role="tab" aria-controls="imgetwo" aria-selected="false"><img src="{{asset('public//frontend/img/cart/nav1.jpg')}}" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a class="nav-link button_three" data-toggle="tab" href="#imgethree" role="tab" aria-controls="imgethree" aria-selected="false"><img src="{{asset('public//frontend/img/cart/nav2.jpg')}}" alt=""></a>
                                                    </li>
                                                </ul>
                                            </div>    
                                        </div>  
                                    </div> 
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="modal_right">
                                            <div class="shop_reviews">
                                                <div class="demo_product">
                                                    <h2>Sprite Yoga Straps1</h2> 
                                                </div>
                                                <div class="current_price">
                                                    <span class="regular">$64.99</span>    
                                                    <span class="regular_price" >$78.99</span>    
                                                </div>
                                                <div class="product_information product_modal">
                                                    <div id="product_modal_content">
                                                        <p>Short-sleeved blouse with feminine draped sleeve detail.</p>    
                                                    </div>
                                                    <div class="product_variants">
                                                        <div class="product_variants_item modal_item">
                                                            <span class="control_label">Size</span>
                                                            <select id="group_1">
                                                                <option value="1">S</option>
                                                                <option value="2" selected="selected">M</option>
                                                                <option value="3">L</option>
                                                            </select>    
                                                        </div>   
                                                        
                                                       <div class="quickview_plus_minus">
                                                            <span class="control_label">Quantity</span>
                                                            <div class="quickview_plus_minus_inner">
                                                                <div class="cart-plus-minus">
                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                </div>
                                                               <div class="add_button add_modal">
                                                                    <button type="submit"> Add to cart</button> 
                                                                </div>
                                                            </div>    
                                                        </div> 
                                                        
                                                        <div class="cart_description">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>    
                                                        </div> 
                                                    </div>
                                                </div>   
                                            </div>    
                                        </div>    
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="social-share">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>    
                                        </div>    
                                    </div>    
                                </div>     
                            </div>
                        </div>    
                    </div>
                </div>
            </div> 
            
    
          <!-- modal area end --> 
           
           
           
            
    
            
  
		
		
		<!-- all js here -->
        <script src="{{asset('public/frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/popper.js')}}"></script>
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.meanmenu.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/ajax-mail.js')}}"></script>
        <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/plugins.js')}}"></script>
        <script src="{{asset('public/frontend/js/main.js')}}"></script>

        <!-- ajax sweet alert -->
        <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>

        <script src="{{asset('public/backend/js/jquery.form-validator.min.js')}}"></script>
        <script type="text/javascript">
        $.validate({
            
        });
        </script>

        <script type="text/javascript">
            // jQuery.validator.setDefaults({
            // debug: true,
            // success: "valid"
            // });
            // $( "#myform" ).validate({
            // rules: {
            //     field: {
            //     required: true,
            //     email: true
            //     }
            // }
            // });
        </script>
            <!-- Hiển thị bình luận sản phẩm -->
        <script type="text/javascript">
            // Hiển thị comment sản phẩm
            $(document).ready(function(){
                load_comment();

                function load_comment(){
                    var product_id = $('.comment_product_id').val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: '{{url('/load-comment')}}',
                        method: 'POST',
                        data:{product_id:product_id,_token:_token},
                        success:function(data){
                            $('#comment_show').html(data);
                        }
                    });
                }
                // Gửi comment sp
                $('.send-comment-product').click(function(){
                    var product_id = $('.comment_product_id').val();
                    var comment_name = $('.comment_name').val();
                    var comment_email = $('.comment_email').val();
                    var comment_content_pro = $('.comment_content_pro').val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: '{{url('/send-comment-product')}}',
                        method: 'POST',
                        data:{product_id:product_id,comment_name:comment_name,comment_email:comment_email,comment_content_pro:comment_content_pro,_token:_token},
                        success:function(data){
                            $('#notify_comment').html('<p class="text text-success">Thêm bình luận thành công, bình luận đang đợi phê duyệt</p>');
                            load_comment();
                            $('#notify_comment').fadeOut(5000);
                            $('.comment_name').val('');
                            $('.comment_email').val('');
                            $('.comment_content_pro').val(''); 
                        }
                    });
                });
            });
            


            // Hiển thị comment bài viết
            $(document).ready(function(){
                load_comment_post();

                function load_comment_post(){
                    var post_id = $('.comment_post_id').val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: '{{url('/load-comment-post')}}',
                        method: 'POST',
                        data:{post_id:post_id,_token:_token},
                        success:function(data){
                            $('#comment_post_show').html(data);
                        }
                    });
                }

                $('.send-comment-post').click(function(){
                    var post_id = $('.comment_post_id').val();
                    var comment_name_post = $('.comment_name_post').val();
                    var comment_email_post = $('.comment_email_post').val();
                    var comment_content_post = $('.comment_content_post').val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: '{{url('/send-comment-post')}}',
                        method: 'POST',
                        data:{post_id:post_id,comment_name_post:comment_name_post,comment_email_post:comment_email_post,comment_content_post:comment_content_post,_token:_token},
                        success:function(data){
                            $('#notify_comment').html('<p class="text text-success">Thêm bình luận thành công, bình luận đang đợi phê duyệt</p>');
                            load_comment_post();
                            $('#notify_comment').fadeOut(5000);
                            $('.comment_name_post').val(''); 
                            $('.comment_email_post').val(''); 
                            $('.comment_content_post').val(''); 
                        }
                    });
                });
            });
            // Hiển thị reply bài viết
            $(document).ready(function(){
                load_comment_reply_post();

                function load_comment_reply_post(){
                    var rep_post_id = $('.rep_comment_post_id').val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: '{{url('/load-rep-comment-post')}}',
                        method: 'POST',
                        data:{rep_post_id:rep_post_id,_token:_token},
                        success:function(data){
                            $('#rep_comment_post_show').html(data);
                        }
                    });
                }
            });        
                
        </script>

        <!-- Ajax thêm giỏ hàng -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.ion-android-cart').click(function(){
                    var id = $(this).data('id_product');
                    var cart_product_id = $('.cart_product_id_' + id).val();
                    var cart_product_name = $('.cart_product_name_' + id).val();
                    var cart_product_image = $('.cart_product_image_' + id).val();
            
                    var cart_product_price = $('.cart_product_price_' + id).val();
                    var cart_product_qty = $('.cart_product_qty_' + id).val();
                    var _token = $('input[name="_token"]').val();

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                        success:function(data){
                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });
                        }

                    });
                });
            });
           
        </script>

        <!-- Thuộc shop -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.ion-ios-cart').click(function(){
                    var id = $(this).data('id_product1');
                    var cart_product_id = $('.cart_product_id_' + id).val();
                    var cart_product_name = $('.cart_product_name_' + id).val();
                    var cart_product_image = $('.cart_product_image_' + id).val();
            
                    var cart_product_price = $('.cart_product_price_' + id).val();
                    var cart_product_qty = $('.cart_product_qty_' + id).val();
                    var _token = $('input[name="_token"]').val();

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                        success:function(data){
                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });
                        }

                    });
                });
            });
           
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.add_button').click(function(){
                    var id = $(this).data('id_product_detail');
                    var cart_product_id = $('.cart_product_id_' + id).val();
                    var cart_product_name = $('.cart_product_name_' + id).val();
                    var cart_product_image = $('.cart_product_image_' + id).val();
            
                    var cart_product_price = $('.cart_product_price_' + id).val();
                    var cart_product_qty = $('.cart_product_qty_' + id).val();
                    var _token = $('input[name="_token"]').val();

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                        success:function(data){
                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });
                        }

                    });
                });
            });
           
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.ion-ios-cart-outline').click(function(){
                    var id = $(this).data('id_product_new');
                    var cart_product_id = $('.cart_product_id_' + id).val();
                    var cart_product_name = $('.cart_product_name_' + id).val();
                    var cart_product_image = $('.cart_product_image_' + id).val();
            
                    var cart_product_price = $('.cart_product_price_' + id).val();
                    var cart_product_qty = $('.cart_product_qty_' + id).val();
                    var _token = $('input[name="_token"]').val();

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                        success:function(data){
                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                            });
                        }

                    });
                });
            });
        </script>
        

    </body>

</html>
