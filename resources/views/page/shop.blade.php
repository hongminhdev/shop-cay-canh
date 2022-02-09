@extends('welcome') 
@section('content')

<div class="breadcrumb_container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">     
                <nav>
            <ul>
                <li>
                    <a href="{{URL::to('/trang-chu')}}">Trang chủ ></a>
                </li>
                <li>Shop</li>
            </ul>
        </nav>
            </div>
        </div> 
    </div>        
</div>
<!--- shop_wrapper area  -->
<div class="shop_wrapper ptb-90">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-8 col-12">
                <div class="shop_sidebar">
                    <div class="block_categories">
                        <div class="category_top_menu widget">
                            <div class="widget_title">
                                <h3>Danh mục cây cảnh</h3>
                            </div>
                            <ul class="shop_toggle">
                                @foreach ($danhmuc as $key => $dm)
                                <div class="has-sub">
                                    <h6><a href="{{URL::to('/danh-muc-san-pham/'.$dm->id)}}">
                                    {{ $dm->loaisanpham_ten }}</a></h6>
                                </div>
                                @endforeach
                            </ul>   
                        </div>
                    </div>
                    <div class="search_filters_wrapper">
                        <div class="price_filter widget">
                            <div class="widget_title">
                                <h3>Bộ lọc theo giá</h3>
                            </div>
                            <!-- <div class="search_filters widget">
                                <div id="slider-range"></div>
                                <input type="text" name="text" id="amount" />    
                            </div> -->
                            <div>
                                <a href="">100000 - 200000</a>
                            </div>
                        </div>
                                       
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-12">
                <div class="categories_banner">
                    <div class="categories_banner_inner">
                        <img src="public/frontend/img/banner/shop.jpg" alt="">
                    </div>
                    <h3>SHOP</h3>
                </div>
                <div class="tav_menu_wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7 col-sm-6">
                            <div class="tab_menu shop_menu">
                                <div class="tab_menu_inner">
                                    <ul class="nav" role="tablist">
                                        <li><a  class="active" data-toggle="tab" href="#shop_active" role="tab" aria-controls="shop_active" aria-selected="true"><i class="fa fa-th" aria-hidden="true"></i></a></li>

                                        <li><a data-toggle="tab" href="#featured_active" role="tab" aria-controls="featured_active" aria-selected="false"><i class="fa fa-list" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="tab_menu_right">    
                                    <p>Có tất cả {{count($all_product)}} sản phẩm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-6">
                            <div class="Relevance">
                                <span>Sắp xếp theo:</span>
                                <div class="dropdown dropdown-shop">
                                    <select name="drop" id="dropdown">
                                        <!-- <option value="1">Relevance</option>    -->
                                        <option value="2">Tên, từ A đến Z</option>
                                        <option value="2">Tên, từ Z đến A</option>
                                        <option value="2">Giá, thấp đến cao</option>
                                        <option value="2">Giá, cao đến thấp</option>
                                    </select>
                                </div>
                            </div>    
                        </div>    
                    </div>
                </div> 
                <div class="tab_product_wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="shop_active" >
                            <div class="row">
                                @foreach ($all_product as $key => $pro)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single__product">
                                        <div class="single_product__inner">
                                            @if ($pro->sanpham_moi == 1)
                                                <span class="new_badge">new</span>
                                            @endif
                                            <!-- <span class="discount_price">-5%</span> -->
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
                                                    <img src="{{URL::to('public/uploads/product/'.$pro->sanpham_anh)}}" height="200" width="200" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content text-center">
                                                <div class="produc_desc_info">
                                                    <div class="product_title">
                                                        <h4><a href="">{{$pro->sanpham_ten}}</a></h4>
                                                    </div>
                                                    <div class="product_price">
                                                        <p>{{number_format($pro->sanpham_gia).' '.'đ'}}</p>
                                                    </div>
                                                </div>
                                                <div class="product__hover">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-cart" data-id_product1="{{$pro->sanpham_id}}"></i></a></li>
                                                        <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>

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
                        <!-- Xem sản phẩm dạng đứng -->
                        <div class="tab-pane fade" id="featured_active" role="tabpanel">
                            <div class="tab_product_bottom_wrapper">    
                                <div class="row">
                                    @foreach ($all_product as $key =>  $pro)
                                    <div class="col-lg-4 col-md-5 col-sm-5">
                                        <div class="single_product__inner inner_shop">
                                            
                                            @if ($pro->sanpham_moi == 1)
                                                <span class="new_badge">new</span>
                                            @endif
                                            <br> 
                                            <!-- <span class="new_badge">new</span>
                                            <span class="discount_price">-5%</span> -->
                                            <div class="product_img">
                                                <a href="{{URL::to('/chitiet-sanpham/'.$pro->sanpham_id)}}">
                                                    <img src="{{URL::to('public/uploads/product/'.$pro->sanpham_anh)}}" height="200" width="300" alt="">
                                                </a>
                                            </div>
                                            <br>
                                        </div> 
                                    </div> 
                                    <div class="col-lg-8 col-md-7 col-sm-7">
                                        <div class="product__content text-left">
                                            <div class="produc_desc_info">
                                                <div class="product_title title_shop">
                                                    <h5><a href="product-details.html">{{$pro->sanpham_ten}}</a></h5>
                                                </div>
                                                <div class="product_price price_shop">
                                                    <!-- <p class="regular_price">$65.51</p> giá gốc-->
                                                    <p> Giá: {{number_format($pro->sanpham_gia).' '.'đ'}}</p>
                                                </div>
                                                <div class="product_content_shop">
                                                    <p>Mô tả ngắn: {{$pro->sanpham_mota}}</p>
                                                </div>
                                            </div>
                                            <div class="product__hover hover_shop">
                                                <div class="product_addto_cart">
                                                    <button type="submit">Thêm vào giỏ hàng</button> 
                                                </div>
                                                <div class="product_cart_icone">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                        <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>

                                                        <li><a href="{{URL::to('/chitiet-sanpham/'.$pro->sanpham_id)}}"><i class="ion-clipboard"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                            
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                    </div>  
                </div>
                
                <div class="shop_pagination">
                    <div class="row align-items-center">   
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="total_item_shop">
                                Showing 13-14 of 14 item(s) 
                            </div>
                        </div>

                        <!-- <div class="col-lg-6 offset-lg-2 col-md-6 col-sm-6"> -->
                            <div class="page_list_clearfix text-center">
                                <ul>
                                    <!-- <li class="prev"><a href="#"><i class="zmdi zmdi-chevron-left"></i> Previous</a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="current_page"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"> Next <i class="zmdi zmdi-chevron-right"></i></a></li> -->
                                    {!! $all_product->links() !!}
                                </ul> 
                                
                            </div>   
                        <!-- </div> -->
                    </div>   
                </div>
            </div> 
        </div>
    </div>
</div>   
                <!--- shop_wrapper area end  -->

                <!--Brand logo start-->  
<!-- <div class="brand_logo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="brand_list_carousel owl-carousel shop_page">
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/1.png" alt="brand logo">
                        </a>
                    </div>
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/2.png" alt="brand logo">
                        </a>
                    </div>
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/3.png" alt="brand logo">
                        </a>
                    </div>
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/4.png" alt="brand logo">
                        </a>
                    </div>
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/5.png" alt="brand logo">
                        </a>
                    </div>
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/1.png" alt="brand logo">
                        </a>
                    </div>
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/2.png" alt="brand logo">
                        </a>
                    </div>
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/3.png" alt="brand logo">
                        </a>
                    </div>
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/4.png" alt="brand logo">
                        </a>
                    </div>
                    <div class="single_brand_logo">
                        <a href="#">
                            <img src="assets/img/brand/5.png" alt="brand logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  -->
                <!--Brand logo end-->
@endsection