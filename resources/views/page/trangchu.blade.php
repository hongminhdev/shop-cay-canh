@extends('welcome') 
@section('content')

<div class="slider_list  owl-carousel">
    <div class="single_slide" style="background-image: url(public/frontend/img/slider/bg1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider__content">
                        <p>Ưu đãi độc quyền -10% trong tuần này</p>
                        <h2>Chúng tôi <strong>cung cấp</strong> những</h2> 
                        <h3> sản phẩm <strong> tốt nhất cho bạn </strong></h3>
                        <h6>Bắt đầu <span>mua hàng tại</span></h6>
                        <div class="slider_btn">
                            <a href="{{URL::to('/shop')}}">Shopping now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_slide" style="background-image: url(public/frontend/img/slider/h2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider__content">
                        <p style="color: #FFFFFF;">Ưu đãi độc quyền -10% trong tuần này</p>
                        <h2 style="color: #FFFFFF;">Thỏa niềm <strong style="color: #FFFFFF;">đam mê </strong> với các</h2>
                        <h3 style="color: #FFFFFF;">loại <strong style="color: #FFFFFF;">cây cảnh</strong> độc đáo</h3>  
                        <h6 style="color: #FFFF99;">Bắt đầu <span style="color: #CCFFFF;">mua ngay tại</span></h6>
                        <div class="slider_btn">
                            <a href="{{URL::to('/shop')}}">Shopping now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
                <!--Banner area start-->
    <div class="banner_area home1_banner mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner">
                        <a href="#">
                            <img src="public/frontend/img/banner/1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner">
                        <a href="#">
                            <img src="public/frontend/img/banner/2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner banner_three">
                        <a href="#">
                            <img src="public/frontend/img/banner/3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <!--Banner area end-->
                
                <!-- Sản phẩm nổi bật -->
    <div class="features_product pt-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3> Sản phẩm nổi bật </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="features_product_active owl-carousel">
                @foreach ($pro_fea as $key => $pro_feature)
                    <div class="col-lg-2">
                        <div class="single__product">
                            <div class="single_product__inner">
                                <!-- <span class="new_badge">new</span> -->
                                <!-- <span class="discount_price">-5%</span> -->
                                <div class="product_img">
                                <form>
                                    @csrf
                                <input type="hidden" value="{{$pro_feature->sanpham_id}}" 
                                class="cart_product_id_{{$pro_feature->sanpham_id}}">
                                <input type="hidden" value="{{$pro_feature->sanpham_ten}}" 
                                class="cart_product_name_{{$pro_feature->sanpham_id}}">

                                <input type="hidden" value="{{$pro_feature->sanpham_anh}}" 
                                class="cart_product_image_{{$pro_feature->sanpham_id}}">
                                <input type="hidden" value="{{$pro_feature->sanpham_gia}}" 
                                class="cart_product_price_{{$pro_feature->sanpham_id}}">
                                <input type="hidden" value="1" 
                                class="cart_product_qty_{{$pro_feature->sanpham_id}}">
                                
                                <a href="{{URL::to('/chitiet-sanpham/'.$pro_feature->sanpham_id)}}"> 
                                    <img src="{{URL::to('public/uploads/product/'.$pro_feature->sanpham_anh)}}" height="200" width="200" alt="">
                                </a>
                                </div>
                                <div class="product__content text-center">
                                    <div class="produc_desc_info">
                                        <div class="product_title">
                                            <h6>{{ $pro_feature->sanpham_ten }}</h6>
                                        </div>
                                        <div class="product_price">
                                            <p>{{number_format($pro_feature->sanpham_gia).' '.'đ'}}</p>
                                        </div>
                                    </div>
                                    <div class="product__hover">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-cart" data-id_product="{{$pro_feature->sanpham_id}}"></i></a></li>
                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                            <li><a href="{{URL::to('/chitiet-sanpham/'.$pro_feature->sanpham_id)}}"><i class="ion-clipboard"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div> <br>
                <!--Features product end-->

                <!--Shipping area start-->
        <div class="shipping_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="shipping_list d-flex justify-content-between flex-xs-column">
                            <div class="single_shipping_box d-flex">
                                <div class="shipping_icon">
                                    <img src="public/frontend/img/ship/1.png" alt="shipping icon">
                                </div>
                                <div class="shipping_content">
                                    <h6>Giao hàng miễn phí cho đơn hàng trên 500000 VNĐ</h6>
                                    <p>Giao hàng miễn phí cho tất cả các đơn đặt hàng</p>
                                </div>
                            </div>
                            <div class="single_shipping_box one d-flex">
                                <div class="shipping_icon">
                                    <img src="public/frontend/img/ship/2.png" alt="shipping icon">
                                </div>
                                <div class="shipping_content">
                                    <h6>Hoàn trả lại tiền</h6>
                                    <p>Đảm bảo trở lại dưới 7 ngày</p>
                                </div>
                            </div>
                            <div class="single_shipping_box two d-flex">
                                <div class="shipping_icon">
                                    <img src="public/frontend/img/ship/3.png" alt="shipping icon">
                                </div>
                                <div class="shipping_content">
                                    <h6>Giảm giá thành viên</h6>
                                    <p>Hỗ trợ trực tuyến 24 giờ một ngày</p>
                                </div>
                            </div>
                            <div class="single_shipping_box three d-flex">
                                <div class="shipping_icon">
                                    <img src="public/frontend/img/ship/4.png" alt="shipping icon">
                                </div>
                                <div class="shipping_content">
                                    <h6>Hỗ trợ trực tuyến 24/7</h6>
                                    <p>Hỗ trợ chính sách khi mua hàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!--Shipping area end-->
                
                
    <!--shop product area start-->
    <!-- <div class="shop_product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="shop_product_head d-flex justify-content-between mb-30">
                        <div class="section_title space_2 text-left">
                            <h3>shop</h3>
                        </div>
                            <div class="home_shop_product text-right">
                            <ul class="product-tab-list nav d-flex flex-wrap justify-content-end" role="tablist">
                                <li><a class="active" href="#fresh" data-toggle="tab" role="tab" aria-selected="true" aria-controls="fresh">
                                    Cây cảnh để bàn  
                                </a></li>
                                <li><a href="#flowers" data-toggle="tab" role="tab" aria-selected="false" aria-controls="flowers"> Cây cảnh văn phòng </a></li>
                                <li><a href="#organics" data-toggle="tab" role="tab" aria-selected="false" aria-controls="organics">Cây cảnh trong nhà </a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="shop_larg_product">
                        <div class="single__product_2">
                            <div class="product_img">
                                <a href="#">
                                    <img src="public/frontend/img/product/g1.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__content text-center">
                                <div class="product_title">
                                    <h4><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                </div>
                                <div class="product_price">
                                    <p>$65.66</p>
                                </div>
                                <div class="product-add-to-cart">
                                    <a href="#">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="fresh" role="tabpanel">
                            <div class="row">
                                <div class="shop-product_list owl-carousel">
                                    <div class="col-12">
                                        <div class="shop_single_prduct_item">

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Healthy Melt</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$90.66</p>
                                                            </div>
                                                        </div>

                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Healthy Melt</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$90.66</p>
                                                            </div>
                                                        </div>

                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                        </div> 
                                    </div>  
                                    <div class="col-12">
                                        <div class="shop_single_prduct_item">

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Fusce nec facilisi</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$50.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg12.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="#">Double Cheese</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$55.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                        </div> 
                                    </div>   
                                    <div class="col-12">
                                        <div class="shop_single_prduct_item">

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Sprite Yoga Straps1</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$70.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$55.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                        </div> 
                                    </div>   
                                    <div class="col-12">
                                        <div class="shop_single_prduct_item">

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Donec sem tellus</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$45.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="#">Country Burger</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$35.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                        </div> 
                                    </div>   
                                    <div class="col-12">
                                        <div class="shop_single_prduct_item">
                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg9.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Chaz Kangeroo Hoodie3</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$75.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg10.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Chaz Kangeroo Hoodie3</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$75.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                        </div> 
                                    </div>   
                                    <div class="col-12">
                                        <div class="shop_single_prduct_item">
                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Donec sem tellus</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$45.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg12.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="#">Country Burger</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$35.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                        </div> 
                                    </div>   
                                    <div class="col-12">
                                        <div class="shop_single_prduct_item">
                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg13.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Chaz Kangeroo Hoodie3</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$62.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="single__product">
                                                <div class="single_product__inner">
                                                    <span class="new_badge">new</span>
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="public/frontend/img/product/g1.jpg8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="produc_desc_info">
                                                            <div class="product_title">
                                                                <h4><a href="product-details.html">Fusce nec facilisi</a></h4>
                                                            </div>
                                                            <div class="product_price">
                                                                <p>$68.66</p>
                                                            </div>
                                                        </div>
                                                        <div class="product__hover">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
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
                        <div class="tab-pane fade" id="flowers" role="tabpanel">
                            <div class="row">
                            <div class="shop-product_list owl-carousel">
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Healthy Melt</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$90.66</p>
                                                        </div>
                                                    </div>

                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Healthy Melt</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$90.66</p>
                                                        </div>
                                                    </div>

                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>  
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg11.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Fusce nec facilisi</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$50.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg12.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="#">Double Cheese</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$55.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg5.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Sprite Yoga Straps1</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$70.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg6.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$55.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg7.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Donec sem tellus</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$45.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg8.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="#">Country Burger</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$35.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg9.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Chaz Kangeroo Hoodie3</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$75.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg10.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Chaz Kangeroo Hoodie3</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$75.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg11.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Donec sem tellus</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$45.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg12.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="#">Country Burger</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$35.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg13.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Chaz Kangeroo Hoodie3</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$62.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg8.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Fusce nec facilisi</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$68.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
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
                        <div class="tab-pane fade" id="organics" role="tabpanel">
                            <div class="row">
                            <div class="shop-product_list owl-carousel">
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Healthy Melt</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$90.66</p>
                                                        </div>
                                                    </div>

                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Healthy Melt</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$90.66</p>
                                                        </div>
                                                    </div>

                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>  
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg11.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Fusce nec facilisi</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$50.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg12.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="#">Double Cheese</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$55.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg5.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Sprite Yoga Straps1</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$70.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg6.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$55.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg7.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Donec sem tellus</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$45.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg8.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="#">Country Burger</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$35.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg9.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Chaz Kangeroo Hoodie3</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$75.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg10.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Chaz Kangeroo Hoodie3</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$75.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg11.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Donec sem tellus</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$45.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg12.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="#">Country Burger</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$35.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div> 
                                </div>   
                                <div class="col-12">
                                    <div class="shop_single_prduct_item">
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg13.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Chaz Kangeroo Hoodie3</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$62.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="public/frontend/img/product/g1.jpg8.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">Fusce nec facilisi</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>$68.66</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
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
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--shop product area end-->
    <br>       
    <!--Banner area start-->
    <!-- <div class="banner_area home1_banner2 pb-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_banner">
                        <a href="#">
                            <img src="public/frontend/img/banner/big-1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_banner">
                        <a href="#">
                            <img src="public/frontend/img/banner/big-2.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--Banner area end-->                
                
    <br>    <br>
<!--New product area-->
<div class="new_product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section_title text-center">
                    <h3> Sản phẩm mới </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features_product_active owl-carousel">
            @foreach ($pro_new as $key => $pro)
                <div class="col-lg-2">
                    <div class="single__product">
                        <div class="single_product__inner">
                            <span class="new_badge">new</span>
                            <div class="product_img">
                            <form>
                                    @csrf
                                <input type="hidden" value="{{$pro->sanpham_id}}" 
                                class="cart_product_id_{{$pro->sanpham_id}}">
                                <input type="hidden" value="{{$pro->sanpham_ten}}" 
                                class="cart_product_name_{{$pro->sanpham_id}}">

                                <input type="hidden" value="{{$pro->sanpham_anh}}" 
                                class="cart_product_image_{{$pro->sanpham_id}}">
                                <input type="hidden" value="{{$pro->sanpham_gia}}" 
                                class="cart_product_price_{{$pro->sanpham_id}}">
                                <input type="hidden" value="1" 
                                class="cart_product_qty_{{$pro->sanpham_id}}">

                            <a href="{{URL::to('/chitiet-sanpham/'.$pro->sanpham_id)}}">
                                <img src="{{URL::to('public/uploads/product/'.$pro->sanpham_anh)}}" height="200" width="200"
                                  alt="">
                            </a>
                            </div>
                            <div class="product__content text-center">
                                <div class="produc_desc_info">
                                    <div class="product_title">
                                        <h4><a href="product-details.html">{{$pro->sanpham_ten}}</a></h4>
                                    </div>
                                    <div class="product_price">
                                        <p>{{number_format($pro->sanpham_gia).' '.'đ'}}</p>
                                    </div>
                                </div>
                                <div class="product__hover">
                                    <ul>
                                        <li><a href="#"><i class="ion-ios-cart-outline" data-id_product_new="{{$pro->sanpham_id}}"></i></a></li>
                                        <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal" title="Quick View" ><i class="ion-android-open"></i></a></li>
                                        <li><a href="{{URL::to('/chitiet-sanpham/'.$pro->sanpham_id)}}"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            
        </div>
    </div>
</div> <br>
<!--new product end-->
                
    <!--Banner area start-->
    <div class="banner_area banner_area-2 pb-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="single_banner">
                        <a href="#">
                            <img src="public/frontend/img/banner/banner-4.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="single_banner">
                        <a href="#">
                            <img src="public/frontend/img/banner/banner-5.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single_banner">
                        <a href="#">
                            <img src="public/frontend/img/banner/banner-6.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner area end-->

<div class="section_title space_2 text-left">
    <h3> Sản phẩm bán chạy </h3>
</div>
<!--Best seller product -->
<div class="best_seller_product two best_seller_three">
    <div class="container">
        <div class="row">
        @foreach ($danhmuc as $key => $dm)
            <div class="col-lg-4 col-md-8">
                <div class="section_title space_2 text-left">
                    <h3> {{ $dm->loaisanpham_ten }} </h3>
                </div>
                <div class="best_selling_product_three owl-carousel">
                    @foreach ($all_product as $key => $pro)
                    @if ( $dm->id == $pro->loaisanpham_id )
                    <div class="best_selling_product">
                        <div class="single_small_product small_three">
                            <div class="product_thumb">
                                <a href="{{URL::to('/chitiet-sanpham/'.$pro->sanpham_id)}}">
                                    <img src="{{URL::to('public/uploads/product/'.$pro->sanpham_anh)}}" height="100" width="100" alt="">
                                </a>
                            </div>
                            &nbsp; &nbsp; 
                            <div class="product_content"> <br> <br> <br>
                                <h6>{{ $pro->sanpham_ten }}</h6> 
                                <div class="product_ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product_price"> 
                                    <span class="regular_price">{{ number_format($pro->sanpham_gia).' '.'đ' }}</span>
                                    <!-- <span class="old_price">$62.23</span> -->
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endif
                    @endforeach
                </div>
            </div>
        @endforeach
        </div>
    </div>

<!--Best seller product  end-->
                 

    <!--Brand logo start-->  
    <div class="brand_logo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="brand_list_carousel owl-carousel">
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/1.png" alt="brand logo">
                            </a>
                        </div>
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/2.png" alt="brand logo">
                            </a>
                        </div>
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/3.png" alt="brand logo">
                            </a>
                        </div>
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/4.png" alt="brand logo">
                            </a>
                        </div>
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/5.png" alt="brand logo">
                            </a>
                        </div>
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/1.png" alt="brand logo">
                            </a>
                        </div>
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/2.png" alt="brand logo">
                            </a>
                        </div>
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/3.png" alt="brand logo">
                            </a>
                        </div>
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/4.png" alt="brand logo">
                            </a>
                        </div>
                        <div class="single_brand_logo">
                            <a href="#">
                                <img src="public/frontend/img/brand/5.png" alt="brand logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!--Brand logo end-->   
@endsection