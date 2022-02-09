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
                <li>Tin tức</li>
            </ul>
        </nav>
            </div>
        </div> 
    </div>        
</div>
           <!--blog area start-->
<div class="blog_list_area">
    <div class="container">
        <div class="row">
        @foreach ($in_post as $key => $post)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single_blog_list">
                    <div class="blog__thumb">
                        <a href="{{URL::to('/bai-viet/'.$post->baiviet_slug)}}">
                            <img src="{{URL::to('public/uploads/post/'.$post->baiviet_anh)}}" height="270" alt="">
                        </a>    
                    </div>
                    <div class="post__content">
                        <h3><a href="{{URL::to('/bai-viet/'.$post->baiviet_slug)}}">{{$post->baiviet_tieude}}</a></h3>
                        <!-- <h6>{!! $post->baiviet_tomtat !!}</h6> -->
                        <ul>
                            <li><a href="{{URL::to('/bai-viet/'.$post->baiviet_slug)}}">Xem bài viết</a></li>
                            <li class="post_date">{{$post->ngaythem}}</li>
                        </ul>    
                    </div>
                </div>    
            </div> 
        @endforeach 
            <div class="col-12">
                <div class="pagination_content">
                    
                    <!-- <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="pagination_three"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                    </ul> -->
                    
                    {!! $in_post->links() !!}
                </div>      
            </div>                        
        </div>    
    </div>   
</div>
           <!--blog area end-->
@endsection
           
            
                
            
                
                
                
            
           
           
           
           
           
           
          
            
    
            
  
		
		
		
