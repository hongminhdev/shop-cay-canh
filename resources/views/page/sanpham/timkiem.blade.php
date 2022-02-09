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
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-12">
                <div class="categories_banner">
                    <div class="categories_banner_inner">
                        <img src="public/frontend/img/banner/shop.jpg" alt="">
                    </div>
                    <h3>KẾT QUẢ TÌM KIẾM</h3>
                </div>
                <div class="beta-products-details">

                    <p class="pull-left"> Tìm thấy {{count($search_product)}} sản phẩm </p>
                    <div class="clearfix"></div>
                
                </div>
                <!-- <div class="tav_menu_wrapper">
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
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-6">
                            <div class="Relevance">
                                <span>Sắp xếp theo:</span>
                                <div class="dropdown dropdown-shop">
                                    <select name="drop" id="dropdown">
                                        <option value="2">Tên, từ A đến Z</option>
                                        <option value="2">Tên, từ Z đến A</option>
                                        <option value="2">Giá, thấp đến cao</option>
                                        <option value="2">Giá, cao đến thấp</option>
                                    </select>
                                </div>
                            </div>    
                        </div>    
                    </div>
                </div>  -->
                <br> <br>

                <div class="tab_product_wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="shop_active" >
                            <div class="row">
                                @foreach ($timkiem as $key => $pro)
                                
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single__product">
                                        <div class="single_product__inner">
                                            <!-- <span class="new_badge">new</span>
                                            <span class="discount_price">-5%</span> -->
                                            <div class="product_img">
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
                                                        <p>{{number_format($pro->sanpham_gia).' '.'VNĐ'}}</p>
                                                    </div>
                                                </div>
                                                <div class="product__hover">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                        <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>

                                                        <li><a href="{{URL::to('/chitiet-sanpham/'.$pro->sanpham_id)}}"><i class="ion-clipboard"></i></a></li>
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
                
                
            </div> 
        </div>
    </div>
</div>   
                <!--- shop_wrapper area end  -->

                <!--Brand logo start-->  

                <!--Brand logo end-->
@endsection