@extends('welcome') 
@section('content')

<!--breadcrumb area start-->
<div class="breadcrumb_container ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li>
                                <a href="index.html">Trang chủ ></a>
                            </li>
                            <li>Đăng ký</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
             <!--breadcrumb area end-->
             <br> 
            <h3 style="text-align: center;">Đăng ký</h3>
            <!--login section start-->
            <div class="page_login_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="register_page_form">
                                <form action="{{ URL::to('/add-customer') }}" method="POST">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="input_text">
												<label for="R_N"> Họ và tên <span>*</span></label>
												<input id="R_N" name="customer_name"
                                                placeholder="Nhập họ tên" type="text"
                                                data-validation="length" data-validation-length="min5" data-validation-error-msg="Vui lòng điền họ tên"> 
                                            </div>   
                                        </div>
                                        <!-- <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="input_text">
												<label for="R_N2"> Ngày sinh <span>*</span></label>
												<input id="R_N2" name="customer_date" type="date" required>    
											</div>
                                        </div> -->
                                        
                                         <div class="col-lg-6 col-sm-6 col-md-6">
											<div class="input_text">
												<label for="R_N5">Điện thoại<span>*</span></label>
												<input id="R_N5" name="customer_phone"
                                                placeholder="Nhập số điện thoại" type="text" required>  
											</div>  
                                        </div>
                                        <div class="col-lg-12 col-sm-6 col-md-6">
                                            <div class="input_text">
												<label for="R_N4">Email <span>*</span></label>
												<input id="R_N4" name="customer_email"
                                                placeholder="Nhập email" type="email"
                                                data-validation="email" data-validation-error-msg="Vui lòng điền email"> 
											</div>   
                                        </div>
                                        <!-- <div class="col-12">
                                            <div class="input_text">
                                            	<label for="R_N6">Quốc Gia<span>*</span></label>
												<select  id="R_N6">
													<option value="1">Việt Nam</option>
													<option value="2">bangladesh</option>
													<option value="3">Algeria</option>
													<option value="4">Afghanistan</option>
													<option value="5">Ghana</option>
													<option value="6">Albania</option>
													<option value="7">Colombia</option>
													<option value="8">Bahrain</option>
													<option value="9">Dominican Republic</option>  
												</select> 
                                            </div>  
                                        </div> -->
                                        <div class="col-12">
                                            <div class="input_text">
                                            	<label for="R_N7">Địa chỉ<span>*</span></label>
                                            	<input id="R_N7" name="customer_address"
                                                data-validation="length" data-validation-length="min3" data-validation-error-msg="Vui lòng điền địa chỉ" 
                                                placeholder="Nhập địa chỉ" type="text" required>    
                                            </div>
                                        </div> 
                                        <!-- <div class="col-12">
                                            <div class="input_text">
                                            	<input placeholder="Apartment, suite, unit etc. (optional)" type="text">   
                                            </div> 
                                        </div>  -->

                                        <!-- <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="input_text">
                                            	<label for="R_N8">Tỉnh / Thành phố<span>*</span></label>
                                            	<select class="form-control form-control-sm js_location" data-type="city" id="city">
                                                    <option value="">Chọn Tỉnh/Thành phố</option>
                                                </select>   
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="input_text">
                                            	<label for="R_N8">Quận / Huyện<span>*</span></label>
                                            	<select class="form-control form-control-sm js_location" data-type="district" id="district">
                                                    <option value="">Chọn Tỉnh/Thành phố</option>
                                                </select>   
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="input_text">
                                            	<label for="R_N8">Phường / Xã<span>*</span></label>
                                            	<select class="form-control form-control-sm" id="wards" >
                                                    <option value="">Chọn Tỉnh/Thành phố</option>
                                                </select>   
                                            </div>
                                        </div> -->
                                       
                                        <div class="col-12">
                                            <div class="input_text">
                                            	<label for="R_N10"> Mật khẩu <span>*</span></label>
                                            	<input id="R_N10" name="customer_pass"
                                                placeholder="Nhập mật khẩu" type="password" required>    
                                            </div>
                                        </div> 
                                        <!-- <div class="col-12">
                                            <div class="input_text">
												<label for="R_N11">Account password<span>*</span></label>
												<input id="R_N11" type="text">    
											</div>
                                        </div> -->
                                        <div class="col-12">
                                            <div class="input_text">
												<label for="R_N12">Nhập lại mật khẩu <span>*</span></label>
												<input id="R_N12" name="re_pass" 
                                                placeholder="Nhập lại mật khẩu" type="password" required> 
											</div>   
                                        </div>
                                        <!-- <div class="col-12">
                                            <div class="input_text">
												<input id="rememberme" type="checkbox"> 
												<label for="rememberme">I agree Terms & Condition</label>   
											</div>
                                        </div> -->
                                        <div class="col-12">
                                            <div class="login_submit">
                                            	<input value="Đăng ký" type="submit">
                                            </div>
                                        </div>    
                                        <br>
                                        @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            @foreach($errors->all() as $loi)
                                                {{$loi}}
                                            @endforeach
                                        </div>
                                        @endif
                                        @if(Session::has('thanhcong'))
                                            <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                                        @endif
                                    </div>
                                </form>    
                            </div>    
                        </div>    
                    </div>    
                </div>  
            </div>
            
            <!--login section end-->
@endsection