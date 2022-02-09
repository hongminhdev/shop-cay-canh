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
                <li>Giới thiệu</li>
            </ul>
        </nav>
            </div>
        </div> 
    </div>        
</div>

<!--about section area start-->
<div class="about_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 col-md-12 text-center">
                            <div class="about_section_one">
                                <h2>Chào mừng bạn đến với Shop Cây Cảnh GreenLand</h2>
                                <p> Web cây cảnh GreenLand được thành lập vào ngày 4 tháng 5 năm 2021, với sứ mệnh mang đến không gian xanh cho mọi người, chia sẻ kinh nghiệm và kiến thức chăm sóc cây cảnh. Đến với Web Cây Cảnh không đơn giản chỉ là mua cây, mà chúng tôi còn hướng dẫn quý khách hàng cách chăm sóc, cách khắc phục khi cây gặp phải vấn đề không tốt, cây cảnh mua tại cửa hàng đều được bảo hành 7 ngày đến 30 ngày tùy vào cây to hay nhỏ, để đảm bảo sản phẩm hoàn toàn là chất lượng không bị ủ bệnh trước khi mua.</p>

                                <p>Ngoài ra nếu quý khách không mua cây tại cửa hàng, mà mua ở bất kỳ đâu khi gặp vấn đề hãy cứ liên hệ với chúng tôi, chúng tôi sẵn sàng tư vấn miễn phí và nhiệt tình, để cây có thể tốt trở lại.</p>    
                            </div>
                            <div class="about__store__btn">
                                <a href="{{URL::to('lien-he')}}">Liên hệ</a>    
                            </div>    
                        </div>    
                    </div>    
                </div>    
            </div>
            <!--about section area end-->
              
                        
            <!-- about area start-->
            <div class="about_chooseUs_area">
                <div class="container-fluid">
                    <div class="row no-gutters">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="video__wrape__area" style="background-image:url(assets/img/banner/about1.jpg)">
                                <div class="video__inner">
                                    <a class="video__trigger" href="https://www.youtube.com/watch?v=cDDWvj_q-o8"><i class="zmdi zmdi-play"></i></a>    
                                </div>
                            </div>  
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="about_choose_content">
                                <h3>Tại sao chọn chúng tôi?</h3>
                                <div class="choose_content_inner">
                                    <div class="single_choose_us">
                                        <div class="choose_us mb-50">
                                            <div class="choose_icone">
                                               <i class="zmdi zmdi-favorite-outline"></i>
                                            </div>
                                            <div class="choose_details">
                                                <h4>Chăm sóc khách hàng</h4>
                                                <p>Hướng dẫn và nhiều ưu đãi mới </p>    
                                            </div>
                                        </div> <br><br><br>
                                         <div class="choose_us">
                                            <div class="choose_icone">
                                               <i class="zmdi zmdi-truck"></i>
                                            </div>
                                            <div class="choose_details">
                                                <h4>Miễn phí vận chuyển</h4>
                                                <p>Lorem ipsum dolor sit amet consect adipisic elit sed do. </p>    
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="single_choose_us">
                                        <div class="choose_us  mb-50">
                                            <div class="choose_icone">
                                              <i class="zmdi zmdi-refresh-alt"></i>
                                            </div>
                                            <div class="choose_details">
                                                <h4>Hoàn trả lại tiền</h4>
                                                <p>Đảm bảo trở lại dưới 7 ngày </p>    
                                            </div>
                                        </div> 
                                        <div class="choose_us">
                                            <div class="choose_icone"><i class="zmdi zmdi-time"></i>  </div>
                                            <div class="choose_details">
                                                <h4>Hỗ trợ 24/7</h4>
                                                <p>Hỗ trợ chính sách khi mua hàng </p>    
                                            </div>
                                        </div>    
                                    </div>
                                </div>       
                            </div>    
                        </div>   
                    </div>
                         
                </div>    
                
             </div>
            <!-- about area end -->
                
                
            <!--about team area start--> 
            <div class="about_team_area ptb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="about_section_title">
                                <h2>Về Web cây cảnh</h2>
                                <p>– Bảo hành sau khi mua cây.</p>
                                <p>– Tư vấn chuyên nghiệp.</p>
                                <p>– Hỗ trợ giải đáp thắc mắc, chăm sóc trọn đời.</p>
                            </div>    
                        </div>    
                    </div>
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single_team">
                                <div class="team__imge">
                                    <a href="#"><img src="assets/img/banner/team1.jpg" alt=""></a>    
                                </div>
                                <div class="team_hover_inpo">
                                    <div class="team_hover_action">
                                        <h2><a href="#">Grace Porter</a></h2> 
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        </ul>   
                                    </div>    
                                </div>    
                            </div>    
                        </div>
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single_team">
                                <div class="team__imge">
                                    <a href="#"><img src="assets/img/banner/team2.jpg" alt=""></a>    
                                </div>
                                <div class="team_hover_inpo">
                                    <div class="team_hover_action">
                                        <h2><a href="#">Larry Martin</a></h2> 
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        </ul>   
                                    </div>    
                                </div>    
                            </div>    
                        </div> 
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single_team team__three">
                                <div class="team__imge">
                                    <a href="#"><img src="assets/img/banner/team4.jpg" alt=""></a>    
                                </div>
                                <div class="team_hover_inpo">
                                    <div class="team_hover_action">
                                        <h2><a href="#">Tiffany Fowler</a></h2> 
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        </ul>   
                                    </div>    
                                </div>    
                            </div>    
                        </div>     
                    </div>   
                </div>    
            </div>
            <!--about team area end--> 
                
            
            <!--testimonial area start--> 
            <div class="about_testimonial_area mb-65" style="background-image:url(assets/img/banner/testimonial4.jpg)">
               <div class="about_testimonial_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2 col-lg-12 col-md-12">
                                <div class="testimonial___wrapper owl-carousel">
                                    <div class="single___testimonial text-center">
                                        <div class="testimonial__image ">
                                            <img src="assets/img/banner/testi1.png" alt="">    
                                        </div>
                                        <div class="testimonial__details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod teincidi dunt ut labore et dolore gna aliqua. Ut enim ad minim veniam,voluptate accusantium autem maiores blanditiis rerum esse quaerat.</p>    
                                        </div>
                                        <div class="testimonial__info">
                                            <a href="#">Evelyn Lucas</a>
                                            <span>-</span>    
                                            <span>Customer</span>    
                                        </div>    
                                    </div>
                                    <div class="single___testimonial text-center">
                                        <div class="testimonial__image">
                                            <img src="assets/img/banner/testi2.png" alt="">    
                                        </div>
                                        <div class="testimonial__details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod teincidi dunt ut labore et dolore gna aliqua. Ut enim ad minim veniam,voluptate accusantium autem maiores blanditiis rerum esse quaerat.</p>        
                                        </div>
                                        <div class="testimonial__info">
                                            <a href="#">Terry Cook</a>
                                            <span>-</span>    
                                            <span>Customer</span>    
                                        </div>    
                                    </div>
                                    <div class="single___testimonial text-center">
                                        <div class="testimonial__image">
                                            <img src="assets/img/banner/testi3.png" alt="">    
                                        </div>
                                        <div class="testimonial__details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod teincidi dunt ut labore et dolore gna aliqua. Ut enim ad minim veniam,voluptate accusantium autem maiores blanditiis rerum esse quaerat.</p>      
                                        </div>
                                        <div class="testimonial__info">
                                            <a href="#">Andrea Hopkins</a>
                                            <span>-</span>    
                                            <span>Customer</span>    
                                        </div>    
                                    </div>
                                      
                                </div>    
                            </div>    
                        </div>    
                    </div> 
                </div> 
            </div> 
            <!--testimonial area end-->  
         
            <div class="organic_food_wrapper">
            	<!--Brand logo start-->  
				<div class="brand_logo brand_about">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="brand_list_carousel owl-carousel">
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
				</div> 
				<!--Brand logo end-->   

				<!-- footer start -->
                <footer class="footer footer_about pt-90">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 col-xs-12">
                                <!--Single Footer-->
                                <div class="single_footer widget">
                                    <div class="single_footer_widget_inner">
                                        <div class="footer_logo">
                                            <a href="#"><img src="assets/img/logo/logo_footer.png" alt=""></a>
                                        </div>
                                        <div class="footer_content">
                                            <p>Address: 123 Main Street, Anytown, CA 12345 - USA.</p>
                                            <p>Phone: +(000) 800 456 789</p>
                                            <p>Email: Contact@posthemes.com</p>
                                        </div>
                                        <div class="footer_social">
                                            <h4>Get in Touch:</h4>
                                            <div class="footer_social_icon">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Footer-->
                            </div>
                            <div class="col-lg-6 col-md-12 col-xs-12">
                                <div class="footer_menu_list d-flex justify-content-between">
                                    <!--Single Footer-->
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">   
                                            <div class="footer_title">
                                                <h2>Products</h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Prices drop</a></li>
                                                    <li><a href="#"> New products</a></li>
                                                    <li><a href="#"> Best sales</a></li>
                                                    <li><a href="#"> Contact us</a></li>
                                                    <li><a href="#"> My account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single footer end-->   
                                    <!--Single footer start-->   
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">   
                                            <div class="footer_title">
                                                <h2>Login</h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Sitemap</a></li>
                                                    <li><a href="#"> Stores</a></li>
                                                    <li><a href="#"> Login</a></li>
                                                    <li><a href="#"> Contact us</a></li>
                                                    <li><a href="#"> My account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Footer end-->
                                    <!--Single footer start-->   
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">   
                                            <div class="footer_title">
                                                <h2> Your account </h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Personal info</a></li>
                                                    <li><a href="#"> Orders</a></li>
                                                    <li><a href="#"> Login</a></li>
                                                    <li><a href="#"> Credit slips</a></li>
                                                    <li><a href="#"> Addresses</a></li>
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Footer end-->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-xs-12">
                                <div class="footer_title">
                                    <h2> Join Our Newsletter Now </h2>
                                </div>
                                <div class="footer_news_letter">
                                    <p>Get E-mail updates about our latest shop and special offers.</p>
                                    <div class="newsletter_form">
                                        <form action="#">
                                            <input type="email" required placeholder="Your Email Address">
                                            <input type="submit" value="Subscribe">
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="copyright">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="copyright_text">
                                        <p>Copyright 2018 <a href="#">Organicfood</a>. All Rights Reserved</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="footer_mastercard text-right">
                                        <a href="#"><img src="assets/img/brand/payment.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </footer>
                
                <!-- footer end -->

				<!-- footer end -->
			</div>	
                
 
           <!--organicfood wrapper end-->
@endsection