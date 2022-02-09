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
                <li>Đặt hàng</li>
            </ul>
        </nav>
            </div>
        </div> 
    </div>        
</div> 
    <!--breadcrumb area end-->
   <br> <br> 
<h4 style="text-align: center;">Cảm ơn bạn đã đặt hàng, chúng tôi sẽ liên hệ với bạn sớm nhất có thể!</h4> 
<br> <br>
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
                
                <tr>
                    <td class="product-name">  <strong> </strong></td>
                    <td class="amount"> 
                        
                    </td>
                </tr>
                
            </tbody>
            <tfoot>
                <tr>
                    <th>Tổng phụ của giỏ hàng</th>
                    <td> 0.0 VNĐ </td>
                </tr>
                <tr>
                    <th>Tổng đơn đặt hàng</th>
                    <td><strong> 0.0 VNĐ </strong></td>
                </tr>
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
                <label class="righ_10" data-toggle="collapse" data-target="#collapsefive"  aria-controls="collapseOne"> Nhận tiền mặt</label>

                <div id="collapsefive" class="collapse"  data-parent="#accordion">
                    <div class="card-body2">
                        <p><input type="checkbox" name="payment_option" value="2">Thực hiện thanh toán của bạn khi chúng tôi giao hàng đến địa chỉ giao hàng của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="order-button">
                <!-- <button  type="submit" name="order_place">Đặt hàng</button>  -->
            </div>    
        </div>    
    </form>
</> 
@endsection
        
            
            
           
           
           
           
           
           
           
            
    
            
  
		
		
		
