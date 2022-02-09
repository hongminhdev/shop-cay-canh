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
                <li>{{$tieude}}</li>
            </ul>
        </nav>
            </div>
        </div> 
    </div>        
</div>

            <!--blog details area start-->      
<div class="blog_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-8">
                <div class="blog_details_left">
                    <div class="blog_left_sidebar mb-50">
                        <div class="blog_sidebar_img">
                            <img src="" alt="">    
                        </div>
                        <div class="blog_sidebar_img_content">
                            <p>On the other hand, dislike men who are so beguiled and the demoralized by the charms of pleasure of the moment.</p>
                            <h4>Tayeb rayed</h4> 
                            <div class="blog_sidebar_social">
                                <ul>
                                    <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-flikr"></i></a></li>
                                </ul>    
                            </div>  
                        </div>    
                    </div>
                    <div class="blog_left_sidebar mb-50">
                        <h3>Search </h3> 
                        <div class="blog_sidebar_search">
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button><i class="icofont icofont-search-alt-2"></i></button>
                            </form>    
                        </div>   
                    </div>
                    <div class="blog_left_sidebar mb-50">
                        <h3>Bài viết liên quan</h3>
                        @foreach ($relate_post as $key => $re)
                        <div class="recent_post mb-30">
                            <div class="recent_post_title">
                                <a href="{{URL::to('/bai-viet/'.$re->baiviet_slug)}}">
                                    <img src="{{URL::to('public/uploads/post/'.$re->baiviet_anh)}}" height="60" width="90" alt="">
                                </a>    
                            </div>
                            <div class="recent_post_content">
                                <h4><a href="{{URL::to('/bai-viet/'.$re->baiviet_slug)}}">{{ $re->baiviet_tieude}}</a></h4>
                                <span class="post_date">{{ $re->ngaythem}}</span>   
                            </div>   
                        </div>
                        @endforeach
                    </div>
                    <div class="blog_left_sidebar mb-50">
                        <h3>Tags</h3>
                        <div class="blog-tags-style">
                            <ul>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Adobe</a></li>
                            </ul>    
                        </div>    
                    </div>    
                </div>    
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="blog_details_info">
                @foreach ($post as $key => $p)
                    <div class="blog_meta">
                        <ul>
                            <li>Bài viết</li>
                            <li>{{ $p->ngaythem }}</li>
                        </ul>   
                    </div>
                    <h2 style="color: green;"> {{$tieude}} </h2> 
                    <div class="blog_details_img">
                        <img src="{{URL::to('public/uploads/post/'.$p->baiviet_anh)}}" hspace="90" width="600" alt="">    
                    </div>   
                    <div class="post_excerpt">
                        <p> {!! $p->baiviet_tomtat !!} </p> 
                        {!! $p->baiviet_noidung !!} 
                    </div>
                @endforeach
                
                    <div class="blog_leave_area">
                        <h3>Để lại bình luận của bạn</h3>
                        <form >
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog_leave_form mb-20">
                                        <input placeholder="Tên *" type="text" class="comment_name_post">    
                                    </div> 
                                    <div class="blog_leave_form mb-20">
                                        <input placeholder="Email *" type="Email" class="comment_email_post">    
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="label_textarea">
                                        <textarea name="comment_post" class="comment_content_post" 
                                            placeholder="Bình luận*">
                                        </textarea>    
                                    </div>   
                                </div>
                                <div class="col-12">
                                    <div class="blog_leave_btn">
                                        <button type="button" class="send-comment-post">Gửi bình luận</button>
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
                            <input type="hidden" name="comment_post_id" class="comment_post_id" value="{{$p->baiviet_id}}">
                            <div id="comment_post_show"></div>
                        </form>

                        <form>
                        @csrf
                            <input type="hidden" name="rep_comment_post_id" class="rep_comment_post_id" value="{{$p->baiviet_id}}">
                            <div id="rep_comment_post_show"></div>
                        </form>

                        
                                
                    </div> 
                    <!--  -->
                </div>
                    
            </div>    
        </div>    
    </div>    
</div>
            
             <!--blog details area end-->    
@endsection
            
            
           
           
           
           
           
           
        
            
    
            
  
		
		
		
