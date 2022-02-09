@extends('welcome') 
@section('content')

    <!--breadcrumb area start-->
<div class="breadcrumb_container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">     
                <nav>
                    <ul>
                        <li>
                            <a href="{{URL::to('/trang-chu')}}">Trang chủ ></a>
                        </li>
                        <li> Chi tiết sản phẩm </li>
                    </ul>
                </nav>
            </div>
        </div> 
    </div>        
</div>
    <!--breadcrumb area end-->
                
                
                <!-- primary block area -->
<div class="table_primary_block pt-100">
    <div class="container">   
        <div class="row">
        @foreach ($details_product as $key => $value)
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="product-flags">  
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabone" role="tabpanel" >
                            <div class="product_tab_img">
                                <a href="#"><img src="{{URL::to('public/uploads/product/'.$value->sanpham_anh)}}" height="350" width="400" alt=""></a>    
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                            <div class="product_tab_img">
                                <a href="#"><img src="" alt=""></a>    
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabthree" role="tabpanel">
                            <div class="product_tab_img">
                                <a href="#"><img src="" alt=""></a>    
                            </div>
                        </div> -->
                    </div>
                    <br>
                    <!-- <div class="products_tab_button">    
                        <ul class="nav product_navactive" role="tablist">
                            <li  class="product_button_one">
                                <a class="nav-link active"  data-toggle="tab" href="#tabone" role="tab" aria-controls="imgeone" aria-selected="false">
                                <img src="" alt=""></a>
                            </li>
                            <li>
                                    <a class="nav-link" data-toggle="tab" href="#tabtwo" role="tab" aria-controls="imgetwo" aria-selected="false">
                                    <img src="" alt=""></a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" href="#tabthree" role="tab" aria-controls="imgethree" aria-selected="false">
                                <img src="" alt=""></a>
                            </li>
                        </ul>
                    </div>     -->
                </div>  
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="product__details_content">
                    <div class="demo_product">
                        <h2> {{ $value->sanpham_ten }}</h2> 
                        <!-- <p>Reference: demo_10</p> -->
                    </div>
                    <div class="product_comments_block">
                        <div class="comments_note clearfix">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div> 
                        <div class="comments_advices">
                            <ul>
                                <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                    Đọc các bài đánh giá (<span>1</span>)</a></li>
                                <li><a href="#"><i class="fa fa-pencil"></i> Viết đánh giá </a></li>
                            </ul>    
                        </div>   
                    </div>
                <form> 
                @csrf
                    <input type="hidden" value="{{$value->sanpham_id}}" 
                    class="cart_product_id_{{$value->sanpham_id}}">
                    <input type="hidden" value="{{$value->sanpham_ten}}" 
                    class="cart_product_name_{{$value->sanpham_id}}">

                    <input type="hidden" value="{{$value->sanpham_anh}}" 
                    class="cart_product_image_{{$value->sanpham_id}}">
                    <input type="hidden" value="{{$value->sanpham_gia}}" 
                    class="cart_product_price_{{$value->sanpham_id}}">
                    <input type="hidden" value="1" 
                    class="cart_product_qty_{{$value->sanpham_id}}">

                    <div class="current_price">
                        <span> Giá bán: {{number_format($value->sanpham_gia).' '.'đ'}} </span>    
                    </div>
                    <div class="product_information">
                        <div id="product_description_short">
                            <br>
                            <h5>Mô tả ngắn</h5> <br>
                            <span>{{ $value->sanpham_mota }} </span> <br><br>
                            <span>Lưu ý: Giá sản phẩm đã bao gồm chậu</span> 
                        </div> <br>
                        <div class="product_variants">
                            <div class="quickview_plus_minus">
                                <span class="control_label">Số lượng</span>
                                <div class="quickview_plus_minus_inner">
                                    <div class="cart-plus-minus">
                                        <input type="number" value="1" name="qtybutton" class="cart-plus-minus-box"/>
                                    </div>
                                    <!-- <input type="hidden" name="productid_hidden" value="{{$value->sanpham_id}}" /> -->
                                    <div class="add_button" data-id_product_detail="{{$value->sanpham_id}}">
                                        <button type="submit"> Thêm vào giỏ hàng </button> 
                                    </div>
                                </div>    
                            </div> 
                            <div class="social-sharing">
                                <span>Danh mục sản phẩm</span>
                                <ul>
                                @foreach ($details_product as $key => $dm)
                                    <li><a href="{{URL::to('/danh-muc-san-pham/'.$dm->id)}}">{{ $dm->loaisanpham_ten }}</a></li>
                                @endforeach
                                </ul>  
                            </div> 
                            <div class="product-availability">
                                <span id="availability">
                                    <i class="zmdi zmdi-check"></i>
                                        Còn hàng
                                </span>    
                            </div> 
                            <div class="social-sharing">
                                <span>Share</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                </ul>    
                            </div> 
                            <div class="block-reassurance">
                                <ul>
                                    <li>
                                        <img src="{{asset('public/frontend/img/cart/cart1.png')}}" alt="">
                                        <span>Chính sách bảo mật (với tiêu chuẩn chăm sóc khách hàng)</span>
                                    </li>
                                    <li>
                                        <img src="{{asset('public/frontend/img/cart/cart2.png')}}" alt="">
                                        <span>Chính sách giao hàng (với tiêu chuẩn chăm sóc khách hàng)</span>
                                    </li>
                                    <li>
                                        <img src="{{asset('public/frontend/img/cart/cart3.png')}}" alt="">
                                        <span>Chính sách hoàn trả (với tiêu chuẩn chăm sóc khách hàng)</span>
                                    </li>
                                </ul>    
                            </div>
                        </div>
                    </div>  
                </form>    
                </div>
            </div>   
        @endforeach
        </div>
    </div>       
</div>
                <!-- primary block end -->
                
                <!-- product page tab -->
                
<div class="product_page_tab ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_tab_button">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li>
                            <a class=" tav_past " id="home-tab" data-toggle="tab" href="#Description" 
                            role="tab" aria-controls="Description" aria-selected="false">Mô tả chi tiết</a>
                        </li>
                        <li>
                            <a class=" tav_past"  id="profile-tab" data-toggle="tab" href="#details" 
                            role="tab" aria-controls="details" aria-selected="false">Thông tin</a>
                        </li>
                        <li>
                            <a class=" tav_past active"  id="contact-tab" data-toggle="tab" href="#Reviews" 
                            role="tab" aria-controls="Reviews" aria-selected="true">Đánh giá</a>
                        </li>
                    </ul>
                </div>    
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show " id="Description" role="tabpanel" >
                        <div class="product-description">
                            <p>{!! $value->motachitiet !!}</p>  
                        </div>
                    </div>
                    <div class="tab-pane fade" id="details" role="tabpanel">
                        <div class="product-details">
                            <div class="product-manufacturer">
                                <a href="#"><img src="" alt=""></a>   
                            </div> 
                            <div class="product-reference">
                                <label class="label">Reference </label> 
                                <span>demo_10</span>   
                            </div> 
                            <div class="product-quantities">
                                <label class="label">In stock</label> 
                                <span>321 Items</span>   
                            </div> 
                            <div class="product-out-of-stock">
                                <section class="product-features">
                                    <h3>Data sheet</h3>
                                    <dl class="data-sheet">
                                        <dt class="name">Compositions</dt>    
                                        <dd class="value">Viscose</dd>
                                        <dt class="name">Styles</dt>
                                        <dd class="value">Dressy</dd>
                                        <dt class="name">Properties</dt> 
                                        <dd class="value">Short Dress</dd>     
                                    </dl>
                                </section>    
                            </div> 
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="Reviews" role="tabpanel">
                        <div class="product_comments_block_tab">
                            <div class="comment_clearfix">
                                <div class="comment_author">
                                    <span>Đánh giá sao sản phẩm </span> &nbsp; &nbsp; 
                                    <div class="star_content clearfix">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>    
                                    </div> 
                                </div> 

                                <div class="blog_leave_area">
                                    <h3>Để lại bình luận của bạn</h3>
                                    <form>
                                    @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="blog_leave_form mb-20">
                                                    <input placeholder="Tên *" type="text" class="comment_name">    
                                                </div> 
                                                <div class="blog_leave_form mb-20">
                                                    <input placeholder="Email *" type="email" class="comment_email">    
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="label_textarea">
                                                    <textarea name="comment_product"  placeholder="Bình luận*"
                                                        class="comment_content_pro">
                                                    </textarea>    
                                                </div>   
                                            </div>
                                            <div class="col-12">
                                                <div class="blog_leave_btn">
                                                    <button type="button" class="send-comment-product">Gửi bình luận</button>
                                                </div>    
                                                <div id="notify_comment"></div>
                                            </div>     
                                        </div>
                                    </form>    
                                </div>
                                <!-- Hiển thị bình luận -->
                                <div class="blog_replay_wrapper">
                                    <form>
                                    @csrf
                                        <input type="hidden" name="comment_product_id" class="comment_product_id" value="{{$value->sanpham_id}}">
                                        <div id="comment_show"></div>
                                    </form>
                                    <div class="single_blog_replay two mb-50">
                                        <div class="replay_img">
                                            <a href="#"><img src="" alt=""></a>    
                                        </div>
                                        <div class="replay-info-wrapper">
                                            <div class="replay-info">
                                                <div class="replay-name-date">
                                                    <h4><a href="#">JOHN NGUYEN</a></h4>
                                                    <span>July 15, 2016 at 2:39 am</span>    
                                                </div>
                                                <div class="replay-btn">
                                                    <a href="#">Reply</a>
                                                </div>    
                                            </div>
                                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>    
                                        </div>    
                                    </div>
                                           
                                </div> 
                                <!--  -->
                            </div>    
                        </div>  
                    </div>
                </div>
            </div>    
            </div>    
    </div>        
</div>
                <!-- product page tab end -->
                
                <!--Features product area-->
<div class="features_product">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title text-left">
                    <h3> Sản phẩm tương tự </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="related_product_active owl-carousel">
            @foreach ($relate as $key => $sptt)
                <div class="col-lg-2">
                    <div class="single__product">
                        <div class="single_product__inner">
                            <!-- <span class="new_badge">new</span> -->
                            <div class="product_img">
                            <a href="{{URL::to('/chitiet-sanpham/'.$sptt->sanpham_id)}}">
                                <img src="{{URL::to('public/uploads/product/'.$sptt->sanpham_anh)}}" height="280" alt="">
                                </a>
                            </div>
                            <div class="product__content text-center">
                                <div class="produc_desc_info">
                                    <div class="product_title">
                                        <h4><a href="">{{ $sptt->sanpham_ten }}</a></h4>
                                    </div>
                                    <div class="product_price">
                                        <p>{{ number_format($sptt->sanpham_gia).' '.'VNĐ' }}</p>
                                    </div>
                                </div>
                                <div class="product__hover">
                                    <ul>
                                        <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                        <li><a href="{{URL::to('/chitiet-sanpham/'.$sptt->sanpham_id)}}"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
                <!--Features product end-->
@endsection