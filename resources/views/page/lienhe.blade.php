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
                    <a href="{{URL::to('trang-chu')}}">Trang chủ ></a>
                </li>
                <li>Liên hệ</li>
            </ul>
        </nav>
            </div>
        </div> 
    </div>        
</div>
    <!--breadcrumb area end-->

        <!--contact area css satrt-->
<div class="contact_area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="contact_map_wrapper">
                    <div class="contact_map mb-40">
                        <!-- Contact Map Start -->
                        <!-- <div id="contact-map"></div> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.117526544686!2d105.9615266310316!3d10.252104257724465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a82d216e1be39%3A0xdf8fd5aa35385b!2zOSwgMjEgQ8OieSBLaOG6vywgUGjGsOG7nW5nIDIsIFbEqW5oIExvbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1621654941888!5m2!1svi!2s"
                         width="770" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <!-- Contact Map End -->   
                    </div>
                    <div class="contact-message">
                        <div class="contact_title">
                            <h4>Thông tin liên hệ</h4>    
                        </div>
                        <form id="contact-form" method="POST" action="{{URL::to('/thongtin-lienhe')}}">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="contact_n">Họ tên<span>*</span></label>
                                    <input name="name" id="contact_n" type="text" placeholder="Họ tên *">    
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact_n2">Email<span>*</span></label>
                                    <input name="email" id="contact_n2" type="email" placeholder="Email *">    
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact_n3">Điện thoại</label>
                                    <input name="phone" id="contact_n3" type="text" placeholder="Điện thoại ">    
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact_n4">Địa chỉ</label>
                                    <input name="address" id="contact_n4" type="text" placeholder="Địa chỉ ">    
                                </div>
                                <div class="col-12">
                                    <div class="contact-textarea">
                                        <label>Nội dung<span>*</span></label>
                                        <textarea name="message"  class="form-control2" required></textarea>     
                                    </div>   
                                    <button type="submit" name="send_contact"> Gửi thông tin </button>  
                                </div> 
                            </div>
                            <!-- <p class="form-messege"></p> -->
                        </form>    
                        
                    </div>    
                </div>      
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="contact_info_wrapper">
                    <div class="contact_title">
                        <h4>Liên hệ với chúng tôi</h4>    
                    </div>
                    <div class="contact_info mb-15">
                        <div class="contact_info_icone">
                            <a href="#"><i class="icofont icofont-location-pin"></i></a>    
                        </div>
                        <div class="contact_info_text">
                            <p><span>Địa chỉ:</span>  Phường 2 - Thành phố Vĩnh Long <br> Tỉnh Vĩnh Long </p>    
                        </div>    
                    </div>
                        <div class="contact_info mb-15">
                        <div class="contact_info_icone">
                            <a href="#"><i class="icofont icofont-email"></i></a>    
                        </div>
                        <div class="contact_info_text">
                            <p><span>Email: </span>   17004068@student.vlute.edu.vn </p>    
                        </div>    
                    </div>
                        <div class="contact_info mb-15">
                        <div class="contact_info_icone">
                            <a href="#"><i class="icofont icofont-phone"></i></a>    
                        </div>
                        <div class="contact_info_text">
                            <p><span>Điện thoại:</span>  (800) 0123 456 789 </p> 
                        </div>    
                    </div>    
                </div>    
            </div>      
        </div>    
    </div>   
</div>
            <!--contact area css end-->
@endsection