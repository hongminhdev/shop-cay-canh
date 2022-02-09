@extends('welcome') 
@section('content')

<div class="breadcrumb_container ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">     
                <nav>
                    <ul>
                        <li>
                            <a href="{{URL::to('/trang-chu')}}">Trang chủ ></a>
                        </li>
                        <li>Checkout</li>
                    </ul>
                </nav>
            </div>
        </div> 
    </div>        
</div>

<div class="Checkout_page_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="customer-login mb-40">
                    <h3> 
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        Phản hồi khách hàng? 
                        <a class="Returning" href="#" data-toggle="collapse" data-target="#Returning_customer" aria-expanded="true">Nhấn vào đây để đăng nhập</a>     
                        
                    </h3>
                        <div id="Returning_customer" class="collapse" data-parent="#accordion">
                        <div class="card-bodyfive">
                            <div class="col-12">
                                <p>Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus..</p>  
                            </div>
                            <div class="col-lg-4">
                                <form action="#">  
                                    <div class="Returning_cart_body mb-20">
                                        <label for="b_names">Username or email <span>*</span></label>
                                        <input id="b_names" type="text">     
                                    </div>
                                    <div class="Returning_cart_body mb-20">
                                        <label for="names">Password  <span>*</span></label>
                                        <input id="names" type="text">     
                                    </div> 
                                    <div class="Returning_cart_body returning_three login mb-20">
                                        <input value="Login" type="submit">
                                        <label for="remember-me-box">
                                            <input id="remember-me-box" type="checkbox">
                                                Remember me 
                                        </label>     
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>          
                            </div>
                        </div>
                    </div>    
                </div>   
            </div>
        </div>
        <div class="checkout-form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
                    {{ csrf_field() }}
                        <h3>Thông tin khách hàng</h3>
                        <div class="row">

                            <div class="col-12 mb-30">
                                <label for="b_c_name">Họ tên khách hàng</label>
                                <input id="b_c_name" name="shipping_name" type="text" placeholder="Họ tên" required>     
                            </div>
                            <div class="col-12 mb-30">
                                <label>Địa chỉ <span>*</span></label>
                                <input name="shipping_address" type="text" placeholder="Địa chỉ" required>     
                            </div>
                             
                            <div class="col-12 mb-30">
                                <label for="b_city">Tỉnh / Thành phố <span>*</span></label>
                                <select name="shipping_city" type="text" required>
                                    <option>Chọn Tỉnh / Thành phố</option>
                                    @foreach ($all_city as $key => $a)
                                        <option value="{{$a->matp}}">{{$a->ten_tp}}</option>
                                    @endforeach
                                </select>    
                            </div>
                            
                            <div class="col-lg-6 mb-30">
                                <label for="b_email">Email <span>*</span></label>
                                <input id="b_email" name="shipping_email" type="text" placeholder="Email" required>    
                            </div> 
                                <div class="col-lg-6 mb-30">
                                <label> Điện thoại   <span>*</span></label>
                                <input name="shipping_phone" type="text" placeholder="Điện thoại" required>    
                            </div>

                            <div class="col-lg-6 mb-30">
                                <label for="b_email"> Ngày giao hàng <span>*</span></label>
                                <input id="b_email" name="shipping_date" type="date" placeholder="Ngày giao hàng" required>    
                            </div> 
                                <div class="col-lg-6 mb-30">
                                <label> Thời gian giao hàng <span>*</span></label>
                                <select name="shipping_time" type="text" placeholder="Thời gian giao hàng" required>
                                    <option value="">Thời gian giao hàng</option>
                                    <option value="9h-11h30">Buổi sáng</option>
                                    <option value="12h-14h">12h - 14h</option>
                                    <option value="14h-16h">14h - 16h</option>
                                    <option value="16h-18h">16h - 18h</option>
                                    <option value="18h-20h">18h - 20h</option>
                                    <option value="19h-21h">19h - 21h</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Ghi chú</label>
                                    <textarea id="order_note" name="shipping_note" placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: lưu ý đặc biệt để giao hàng."></textarea>
                                </div>    
                            </div>    
                            <div class="order-button">
                                <button  type="submit" name="send_oder">Gửi</button> 
                            </div>  	    	    	    	    	    	    
                        </div>
                    </form>    
                </div>
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="coupon-form-two mb-30">
                            <h3>coupon code</h3>
                            <p>Enter your coupon code if you have one</p> 
                            <form action="#">
                                <input placeholder="Coupon code" type="text">
                                <input value="Apply" type="submit">
                            </form>  
                    </div> 
                    <div class="order-wrapper">
                        <h3>Your order</h3>
                        <div class="order-table table-responsive mb-30">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-name"> Vestibulum suscipit <strong> × 1</strong></td>
                                        <td class="amount"> $165.00</td>
                                    </tr>
                                    <tr>
                                        <td class="product-name">  Vestibulum dictum magna	 <strong> × 1</strong></td>
                                        <td class="amount"> $50.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>$215.00</td>
                                    </tr>
                                    <tr>
                                        <th>Order Total</th>
                                        <td><strong>$215.00</strong></td>
                                    </tr>
                                </tfoot>
                            </table>    
                        </div>
                        <div class="payment-method">
                            <div class="panel-default">
                                <label class="righ_10" data-toggle="collapse" data-target="#collapsethree" aria-controls="collapseOne">Direct Bank Transfe</label>

                                <div id="collapsethree" class="collapse"  data-parent="#accordion">
                                    <div class="card-body2">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="panel-default">
                                <label class="righ_10" data-toggle="collapse" data-target="#collapsefour" aria-controls="collapseOne">Cheque Payment</label>

                                <div id="collapsefour" class="collapse" data-parent="#accordion">
                                    <div class="card-body2">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="panel-default">
                                <label class="righ_10" data-toggle="collapse" data-target="#collapsefive"  aria-controls="collapseOne"> PayPal</label>

                                <div id="collapsefive" class="collapse"  data-parent="#accordion">
                                    <div class="card-body2">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button">
                                <button  type="submit">Place order</button> 
                            </div>    
                        </div>    
                    </div>  
                </div> -->
            </div> 
        </div>     
    </div>    
</div>

@endsection