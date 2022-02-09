@extends('welcome') 
@section('content')
<!--breadcrumb area start-->
<div class="breadcrumb_container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">     
                <nav>
            <ul>
                <li><a href="index.html">Trang chủ ></a></li>
                <li>Giỏ hàng</li>
            </ul>
        </nav>
            </div>
        </div> 
    </div>        
</div> 
    <!--breadcrumb area end-->
    
<div class="cart_main_area">
    <div class="container">
    
    <h3 style="text-align: center;">Giỏ hàng của bạn</h3> <br>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {!! session()->get('message') !!}
        </div>
    @elseif(session()->has('error'))
            <div class="alert alert-danger">
            {!! session()->get('error') !!}
        </div>
    @endif
        <div class="row">
            <div class="col-12">
                <form action="{{URL::to('/update-cart')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="table-content table-responsive">
                    
                        <table>
                            <thead>
                                <tr>
                                    <!-- <th>STT</th> -->
                                    <th class="img-thumbnail">Hình ảnh</th>
                                    <th class="product-name">Tên sản phẩm</th>
                                    <th class="product-price">Giá bán</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng tiền</th>
                                    <th class="product-remove">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if (Session::has('cart') != NULL)
                            @php
								$total = 0;
						    @endphp
                            @foreach(Session::get('cart') as $key => $cart)
                                @php
                                    $subtotal = $cart['product_price']*$cart['product_qty'];
                                    $total += $subtotal;
                                @endphp
                                <tr>
                                    <!-- <td></td> -->
                                    <td class="product-thumbnail">
                                        <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="70"
                                         alt="{{$cart['product_name']}}">
                                    </td>
                                    <td class="product-name"><a href="#">{{$cart['product_name']}}</a></td>
                                    <td class="product-price"><span class="amount">{{number_format($cart['product_price'],0,',','.')}}đ</span></td>
                                    
                                    <td class="product-quantity">
                                        <div class="quickview_plus_minus quick_cart">
                                            <div class="quickview_plus_minus_inner">
                                                <div class="cart-plus-minus cart_page">
                                                
                                                    <input type="text" value="{{$cart['product_qty']}}" name="cart_qty[{{$cart['session_id']}}]" class="cart_quantity_input">  
                                                    
                                                </div>  
                                                <!-- <input type="submit" value="Cập nhật" name="update_qty" class=""> -->
                                                
                                            </div>  
                                        </div>
                                    </td>
                                   
                                    <td class="product-subtotal">
                                        {{number_format($subtotal,0,',','.')}}đ
                                    </td>
                                    <td class="product-remove"><a href="{{URL::to('/delete-pro-cart/'.$cart['session_id'])}}">X</a></td>
                                </tr> 
                            @endforeach
                            @endif
                            </tbody> 
                        </table>
                    </div>
                    <div class="row table-responsive_bottom">
                        <div class="col-lg-7 col-sm-7 col-md-7">
                            <div class="buttons-carts">
                                <!-- <input value="Thanh toán" type="submit">  -->
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    $shipping_id = Session::get('shipping_id');
                                    if ($customer_id != NULL && $shipping_id == NULL){
                                ?>
                                    <a href="{{URL::to('/checkout')}}">Thanh toán</a>
                                <?php
                                    }elseif ($customer_id != NULL && $shipping_id != NULL){
                                ?>
                                    <a href="{{URL::to('/payment')}}">Thanh toán</a>
                                <?php
                                    }else{
                                ?>
                                    <a href="{{URL::to('/login-checkout')}}">Thanh toán</a>
                                <?php
                                    }
                                ?>
                                
                                <a href="{{URL::to('/shop')}}">Chọn thêm sản phẩm</a>   
                                <tr>
                                    <td><input type="submit" value="Cập nhật giỏ hàng" name="update_qty"></td>
                                </tr>
                            </div> 
                            <!-- <div class="buttons-carts coupon">
                                <h3>Coupon</h3>
                                <p>Enter your coupon code if you have one.</p>
                                <input placeholder="Coupon code" type="text"> 
                                <input value="Apply Coupon" type="submit">     
                            </div> -->
                        </div> 
                        <div class="col-lg-5 col-sm-5 col-md-5">
                        @if (Session::has('cart') != NULL)
                                <div class="cart_totals  text-right">
                                <h2>Toàn bộ sản phẩm</h2>
                                <div class="cart-subtotal">
                                    <span>Tổng</span>    
                                    <span>{{number_format($total,0,',','.')}}đ</span>    
                                    
                                </div>
                                <!-- <div class="order-total">
                                    <span><strong>Thuế</strong> </span>          
                                    <span><strong> 0 VNĐ </strong> </span>
                                </div> -->
                                <div class="cart-subtotal">
                                    <span><strong>Phí vận chuyển</strong> </span>          
                                    <span><strong> 0.0 VNĐ </strong> </span>
                                </div>
                                
                                <div class="cart-subtotal">
                                    <span><strong>Thành tiền</strong> </span> 
                                    <span><strong> </strong> </span>
                                    <span>
                                    {{number_format($total,0,',','.')}}đ
                                    </span>
                                </div>
                                <div class="wc-proceed-to-checkout">
                                    <a href="#">Kiểm tra</a>
                                </div>
                                </div>    
                        @endif
                        </div>    
                    </div>
                </form>
            </div>    
        </div>    
    </div>   
</div>
@endsection
        
            
            
           
           
           
           
           
           
           
            
    
            
  
		
		
		
