<!--Header start-->
<header class="header sticky-header">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="header_wrapper_inner">
                
                <div class="logo col-xs-12">
                    <a href="{{URL::to('trang-chu')}}">
                        <img src="{{asset('public/frontend/img/logo/lg5.png')}}" alt="">
                    </a>
                </div>
                
                
                <div class="main_menu_inner">
                    
                    <div class="menu">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{URL::to('trang-chu')}}">Trang chủ</a>
                                </li>
                                <li><a href="{{URL::to('gioi-thieu')}}">Giới thiệu </a> </li>
                                <li><a href="{{URL::to('shop')}}">Shop</a>  </li>
                                <li><a href="{{URL::to('tin-tuc')}}">Tin tức </a>
                                </li>
                                <li class="mega_parent"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="mega_menu">
                                        <li class="mega_item">
                                            <a class="mega_title" href="#">Sản phẩm</a>
                                            <ul>
                                                
                                                <li><a href="{{URL::to('shop')}}">Shop page</a></li>
                                                <li><a href="{{URL::to('shopr')}}">Shop Right Sidebar</a></li>
                                                <li><a href="{{URL::to('shop')}}">Shop Left Sidebar</a></li>
                                                <li><a href="{{URL::to('chitiet-sanpham')}}">Chi tiết sản phẩm</a></li>
                                                <li><a href="">Sản phẩm yêu thích</a></li>
                                            </ul> 
                                        </li> 
                                        <li class="mega_item">
                                            <a class="mega_title" href="#">Tài khoản</a>
                                            <ul>
                                                <li><a href="">Thông tin tài khoản</a></li>
                                                <li><a href="{{URL::to('/gio-hang')}}">Giỏ hàng</a></li>
                                                <li><a href="">Checkout</a></li>
                                                <?php
                                                    $customer_id = Session::get('customer_id');
                                                    if ($customer_id != NULL){
                                                ?>
                                                    <li><a href="{{URL::to('/logout-checkout')}}">Đăng xuất</a></li>
                                                <?php
                                                    }else{
                                                ?>
                                                    <li><a href="{{URL::to('/login')}}">Đăng nhập</a></li>
                                                    <?php
                                                    }
                                                ?>
                                                <li><a href="{{URL::to('dang-ky')}}">Đăng ký</a></li>
                                            </ul> 
                                        </li>
                                        <li class="mega_item">
                                            <a class="mega_title" href="#">Thông tin</a>
                                            <ul>
                                                
                                                <li><a href="about.html">Giới thiệu</a></li>
                                                <li><a href="{{URL::to('/lien-he')}}">Liên hệ</a></li>
                                                <li><a href="{{URL::to('/tin-tuc')}}">Tin tức</a></li>
                                                <li><a href="{{URL::to('/bai-viet')}}">Bài viết</a></li>
                                                <li><a href="404.html">Error pages</a></li>
                                            </ul> 
                                        </li>
                                    </ul>    
                                </li>
                                <li><a href="{{URL::to('lien-he')}}">Liên hệ</a></li>
                                </ul>
                        </nav>
                    </div>
                    
                    <div class="mobile-menu d-lg-none">
                        <nav>
                                <ul>
                                <li class="active"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Version 1</a></li>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                        <li><a href="index-3.html">Home Version 3</a></li>
                                        <li><a href="index-4.html">Home Version 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about us </a></li>
                                <li><a href="shop.html">shop</a>  </li>
                                <li><a href="blog.html">Blog </a>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="#">Column 1</a>
                                            <ul>
                                                
                                                <li><a href="shop.html">Shop page</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right sidebar</a></li>
                                                <li><a href="shop.html">shop Left Sidebar</a></li>
                                                <li><a href="product-details.html">product Details</a></li>
                                                <li><a href="my-account.html">My account</a></li>
                                            </ul> 
                                        </li> 
                                        <li>
                                            <a href="#">Column 2</a>
                                            <ul>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                            </ul> 
                                        </li>
                                        <li>
                                            <a href="#">Column 3</a>
                                            <ul>
                                                
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="blog.html">blog Page</a></li>
                                                <li><a href="blog-details.html">blog Details</a></li>
                                                <li><a href="404.html">Error pages</a></li>
                                            </ul> 
                                        </li>
                                    </ul>    
                                </li>
                                <li><a href="#">vegetable</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header_right_info d-flex">
                    <div class="search_box">
                        <div class="search_inner">
                            <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{ csrf_field() }}
                                <input type="text" name="keywords" placeholder="Tìm kiếm">
                                <button type="submit" name="search"><i class="ion-ios-search"></i></button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="mini__cart">
                        <div class="mini_cart_inner">
                            <div class="cart_icon">
                                <a href="#">
                                    <span class="cart_icon_inner">
                                        <i class="ion-android-cart"></i>
                                        @if (Session::has('cart') != NULL)
                                            @php
                                                $t = 0;
                                            @endphp
                                            @foreach(Session::get('cart') as $key => $cart)
                                            @php
                                                    $s = $cart['product_qty'];
                                                    $t += $s;
                                            @endphp
                                        <span class="cart_count">{{number_format($t)}}</span>
                                            @endforeach
                                        @else
                                        <span class="cart_count">0</span>
                                        @endif
                                    </span>
                                    
                                </a>
                            </div>
                            <!--Mini Cart Box-->
                        
                            <div class="mini_cart_box cart_box_one">
                            @if (Session::has('cart') != NULL)
                            @php
                                $total = 0;
                            @endphp
                            @foreach(Session::get('cart') as $key => $cart)
                            @php
                                    $subtotal = $cart['product_price']*$cart['product_qty'];
                                    $total += $subtotal;
                                @endphp
                                <div class="mini_cart_item">
                                    <div class="mini_cart_img">
                                        <a href="">
                                            <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" height="50" width="50" alt="">
                                            <span class="cart_count">{{$cart['product_qty']}}</span>
                                        </a>
                                    </div>
                                    <div class="cart_info">
                                        <h6><a href=""></a>{{$cart['product_name']}}</h6>
                                        <span class="cart_price">{{number_format($cart['product_price'],0,',','.')}}đ</span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="{{URL::to('/delete-pro-cart/'.$cart['session_id'])}}"><i class="zmdi zmdi-delete" data-id="{{$cart['product_id']}}"></i></a>
                                    </div>
                                </div>
                            @endforeach
                            
                                <div class="price_content">
                                    <div class="cart_subtotals">
                                        <div class="price_inline">
                                            <span class="label">Giá tiền </span>
                                            <span class="value">
                                            {{number_format($total,0,',','.')}}đ
                                            </span>
                                        </div>
                                        <div class="price_inline">
                                            <span class="label">Phí vận chuyển </span>
                                            <span class="value">0 VNĐ</span>
                                        </div>
                                        <!-- <div class="price_inline">
                                            <span class="label">Taxes </span>
                                            <span class="value">$0.00</span>
                                        </div> -->
                                    </div>
                                    <div class="cart-total-price">
                                        <span class="label">Tổng tiền </span>
                                        <span class="value">{{number_format($total,0,',','.')}}đ</span>
                                    </div>
                                </div>
                                <div class="min_cart_checkout">
                                    <!-- <a href="">Checkout</a> -->
                                    <?php
                                        $customer_id = Session::get('customer_id');
                                        $shipping_id = Session::get('shipping_id');
                                        if ($customer_id != NULL && $shipping_id == NULL){
                                    ?>
                                        <a href="{{URL::to('/checkout')}}">Checkout</a>
                                    <?php
                                        }elseif ($customer_id != NULL && $shipping_id != NULL){
                                    ?>
                                        <a href="{{URL::to('/payment')}}">Checkout</a>
                                    <?php
                                        }else{
                                    ?>
                                        <a href="{{URL::to('/login-checkout')}}">Checkout</a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            @else
                                Giỏ hàng của bạn trống !
                            @endif
                            </div>
                            <!--Mini Cart Box End -->
                        </div>
                    </div>
                    
                    
                    <div class="header_account">
                        <div class="account_inner">
                            <a href="#"><i class="ion-gear-b"></i></a>
                        </div>
                        <div class="content-setting-dropdown">
                            <div class="language-selector-wrapper">
                                <div class="language-selector">
                                    <ul>
                                        <li><a href="#"><img src="{{asset('public/frontend/img/1.jpg')}}" alt="English"><span class="expand-more">English</span></a></li>
                                        
                                        <li><a href="#"><img src="{{asset('public/frontend/img/banner/frances2.jpg')}}" alt="Language"><span class="expand-more">Vietnamese</span> </a></li>	
                                        
                                    </ul>

                                </div>
                                <div class="currency-selector-wrapper">
                                    <ul>
                                        <li><a href="#">USD $</a></li>
                                        <li><a href="#">VND đ</a></li>
                                    </ul>
                                </div>
                                <div class="user_info_top">
                                    <ul>
                                        <li><a href="">Tài khoản của tôi</a></li>
                                        <?php
                                            $customer_id = Session::get('customer_id');
                                            if ($customer_id != NULL){
                                        ?>
                                            <li><a href="{{URL::to('/logout-checkout')}}">Đăng xuất</a></li>
                                        <?php
                                            }else{
                                        ?>
                                            <li><a href="{{URL::to('/login')}}">Đăng nhập</a></li>
                                            <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!--Header end-->