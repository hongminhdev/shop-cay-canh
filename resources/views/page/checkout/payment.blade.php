@extends('welcome') 
@section('content')
<!--breadcrumb area start-->
<div class="breadcrumb_container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">     
                <nav>
            <ul>
                <li><a href="{{URL::to('/trang-chu')}}">Trang chủ ></a></li>
                <li>Thanh toán</li>
            </ul>
        </nav>
            </div>
        </div> 
    </div>        
</div> 
    <!--breadcrumb area end-->
    <?php
        echo Session::get('shipping_id');
    ?>
<div class="cart_main_area">
    <div class="container">
    <h3 style="text-align: center;">Xem lại giỏ hàng</h3> <br>
        <div class="row">
            <div class="col-12">
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
                                    <!-- <td>1</td> -->
                                    <td class="product-thumbnail">
                                        <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="70" alt="">
                                    </td>
                                    <td class="product-name"><a href="#">{{$cart['product_name']}}</a></td>
                                    <td class="product-price"><span class="amount">{{number_format($cart['product_price'],0,',','.')}}đ</span></td>
                                    
                                    <td class="product-quantity">
                                        <div class="quickview_plus_minus quick_cart">
                                            <div class="quickview_plus_minus_inner">
                                                <div class="cart-plus-minus cart_page">
                                                
                                                    <input type="text" value="{{$cart['product_qty']}}" name="cart_qty[{{$cart['session_id']}}]" class="cart_quantity_input">  
                                                    <!-- <input type="hidden" value="" name="rowId_cart" class="form-control"> -->
                                                </div> 
                                                
                                            </div>  
                                        </div>
                                    </td>
                                   
                                    <td class="product-subtotal">
                                        {{number_format($subtotal,0,',','.')}}đ
                                    </td>
                                    <td class="product-remove"><a href="">X</a></td>
                                </tr>
                                
                                @endforeach
                                
                            @endif
                            </tbody> 
                        </table>
                    </div>
            </div>    
        </div>    
    </div>   
</div>
<div class="order-wrapper">
    <h3>Đơn đặt hàng của bạn</h3>
    <div class="order-table table-responsive mb-30">
        <table>
            <thead>
                <tr>
                    <th class="product-name">Sản phẩm</th>
                    <th class="product-total">Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
            @if (Session::has('cart') != NULL)
            @php
                $total = 0;
                $to_fee  = 0;
            @endphp
                @foreach(Session::get('cart') as $key => $cart)
                @php
                    $subtotal = $cart['product_price']*$cart['product_qty'];
                    $total += $subtotal;
                    $to_fee = $total + $ko;
                @endphp
                <tr>
                    <td class="product-name"> {{$cart['product_name']}} <strong> × {{$cart['product_qty']}} </strong></td>
                    <td class="amount"> 
                    {{number_format($subtotal,0,',','.')}}đ
                    </td>
                </tr>
                @endforeach
            @endif
            </tbody>
            <tfoot>
            @if (Session::has('cart') != NULL)
                <tr>
                    <th>Tổng phụ của giỏ hàng</th>
                    <td>{{number_format($total,0,',','.')}}đ</td>
                </tr>
                <tr>
                    <th>Phí vận chuyển</th>
                    
                    <td>{{number_format($ko,0,',','.')}}đ</td>
                    
                </tr>
                <tr>
                    <th>Tổng đơn đặt hàng</th>
                    <td><strong>{{number_format($to_fee,0,',','.')}}đ</strong></td>
                </tr>
            @endif
            </tfoot>
        </table>    
    </div>
    <h4>Chọn hình thức thanh toán</h4>
    <form action="{{URL::to('/dat-hang')}}" method="post">
    {{ csrf_field() }}
        <div class="payment-method">
            <div class="panel-default">
                <label class="righ_10" data-toggle="collapse" data-target="#collapsethree" aria-controls="collapseOne">
                    Chuyển tiền trực tiếp qua ngân hàng
                </label>

                <div id="collapsethree" class="collapse"  data-parent="#accordion">
                    <div class="card-body2">
                        <p><input type="checkbox" value="1">Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền đã được chuyển vào trong tài khoản của chúng tôi.</p>
                    </div>
                </div>
            </div> 
            <div class="panel-default">
                <label class="righ_10" data-toggle="collapse" data-target="#collapsefive"  aria-controls="collapseOne"> Thanh toán khi giao hàng</label>

                <div id="collapsefive" class="collapse"  data-parent="#accordion">
                    <div class="card-body2">
                        <p><input type="checkbox" name="payment_option" value="2">Thực hiện thanh toán của bạn khi chúng tôi giao hàng đến địa chỉ giao hàng của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="order-button">
                <button type="submit" name="order_place" class="send_order">Đặt hàng</button> 
            </div>    
        </div>    
    </form>
</div> 
@endsection
        
            
            
           
           
           
           
           
           
           
            
    
            
  
		
		
		
