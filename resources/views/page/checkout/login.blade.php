@extends('welcome') 
@section('content')

            <!--breadcrumb area start-->
            <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li><a href="#">Trang chủ</a> ></li>
                            <li>Đăng nhập</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
             <!--breadcrumb area end-->
            <br> 
            <h3 style="text-align: center;">Đăng nhập</h3>
             <!--login section start-->
            <div class="page_login_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                            <div class="login_page_form">
                                <form action="{{URL::to('/login-acc')}}" method="POST">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_text">
                                            	<label for="name"> Tài khoản <span>*</span></label>
                                            	<input id="field" name="email_account" type="text"
                                                data-validation="email" data-validation-error-msg="Vui lòng điền email">    
                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="input_text">
												<label for="password">Mật khẩu <span>*</span></label>
												<input id="password" name="pass_account" type="password"
                                                data-validation="password" data-validation-error-msg="Vui lòng điền mật khẩu">   
											</div>   
                                        </div>
                                        <div class="col-12">
                                            <div class="login_submit">
                                            	<input class="inline" value="Đăng nhập" name="Login" type="submit">
												<label class="inline" for="rememberme">
													<input id="rememberme" type="checkbox">
													Ghi nhớ	đăng nhập
												</label>   
                                            </div> 
                                        </div> 
                                    </div>
                                </form>    
                                <br> 
                                <p> <a style="color: #86B404;" href="{{URL::to('dang-ky')}}">Đăng ký</a> nếu bạn chưa có tài khoản !</p>   
                            </div>    
                        </div>    
                    </div>    
                </div>  
            </div>
            
            <!--login section end-->
@endsection