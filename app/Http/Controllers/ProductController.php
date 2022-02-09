<?php

namespace App\Http\Controllers;

use App\Models\Sanpham;
use App\Models\Comment;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function add_product(){
        $this->AuthLogin();
        $cate_product = DB::table('loaisanpham')->orderby('id','desc')->get();
        $unit_product = DB::table('donvitinh')->orderby('donvitinh_id','desc')->get();
        return view('admin.add_product')->with('cate_product',$cate_product)->with('unit_product',$unit_product);
        
    }

    public function all_product(){
        $this->AuthLogin();
        $all_product = DB::table('sanpham')
        ->join('loaisanpham','loaisanpham.id','=','sanpham.loaisanpham_id')
        ->join('donvitinh','donvitinh.donvitinh_id','=','sanpham.donvitinh_id')
        ->orderby('sanpham.sanpham_id','desc')->get();
        $manager_product = view('admin.all_product')->with('all_product',$all_product); 
        return view('admin_layout')->with('admin.all_product',$manager_product);
    }

    // Thêm danh mục
    public function save_product(Request $req){
        $data = array();
        $data['sanpham_ten'] = $req->product_name;
        $data['sanpham_anh'] = $req->product_image;
        $get_image = $req->file('product_image');
        $data['ngaythem'] = $req->product_time;
        $data['sanpham_mota'] = $req->product_desc;
        $data['motachitiet'] = $req->product_desc_detail;
        $data['sanpham_gia'] = $req->product_price;
        $data['loaisanpham_id'] = $req->product_cate;
        $data['donvitinh_id'] = $req->product_unit;
        $data['sanpham_hienthi'] = $req->product_status;
        $data['sanpham_moi'] = $req->product_new;
        $data['sanpham_noibat'] = $req->product_feature;

        if ($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);

            $data['sanpham_anh'] = $new_image;
            DB::table('sanpham')->insert($data);
            Session::put('message','Thêm sản phẩm mới thành công');
            return Redirect::to('/all-product');
        }
            $data['sanpham_anh'] = '';
            DB::table('sanpham')->insert($data);
            Session::put('message','Thêm sản phẩm mới thành công');
            return Redirect::to('/all-product');
    }

    public function edit_product($product_id){
        $this->AuthLogin();
        $cate_product = DB::table('loaisanpham')->orderby('id','desc')->get();
        $unit_product = DB::table('donvitinh')->orderby('donvitinh_id','desc')->get();

        $edit_product = DB::table('sanpham')->where('sanpham_id',$product_id)->get();

        $manager_product = view('admin.edit_product')->with('edit_product',$edit_product)
        ->with('cate_product',$cate_product)->with('unit_product',$unit_product); 

        return view('admin_layout')->with('admin.edit_product',$manager_product);
        
    }

    public function update_product(Request $req, $product_id){
        $this->AuthLogin();

        $data = $req->all();
        $post = Product::find($product_id);

        $post->sanpham_ten = $data['product_name'];
        $post->sanpham_mota = $data['product_desc'];
        $post->motachitiet = $data['product_desc_detail'];
        $post->sanpham_gia = $data['product_price'];
        $post->loaisanpham_id = $data['product_cate'];
        $post->donvitinh_id = $data['product_unit'];
        $post->sanpham_hienthi = $data['product_status'];
        $post->sanpham_moi = $data['product_new'];
        $post->sanpham_noibat = $data['product_feature'];

        $get_image = $req->file('product_image');

        if ($get_image){
            // Xóa ảnh cũ
            $post_img_old = $post->sanpham_anh;
            $path = 'public/uploads/product/'.$post_img_old; 
            unlink($path);

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));

            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('public/uploads/product',$new_image);

            $post->sanpham_anh = $new_image;
        }
        
        $post->save();
        // Session::put('message','Cập nhật bài viết thành công');
        return redirect()->back()->with('message','Cập nhật sản phẩm thành công');

        
    }
    public function delete_product($product_id){
        DB::table('sanpham')->where('sanpham_id',$product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return redirect()->back()->with('message','Xóa sản phẩm thành công');
    }

    // Ẩn hiện sản phẩm
    public function unactive_product($product_id){
        DB::table('sanpham')->where('sanpham_id',$product_id)->update(['sanpham_hienthi'=>0]);
        Session::put('message','Không hiển thị sản phẩm');
        return Redirect::to('/all-product');
    }
    public function active_product($product_id){
        DB::table('sanpham')->where('sanpham_id',$product_id)->update(['sanpham_hienthi'=>1]);
        Session::put('message','Hiển thị sản phẩm');
        return Redirect::to('/all-product');
    }

    // Sản phẩm mới
    public function unactive_product_new($product_id){
        DB::table('sanpham')->where('sanpham_id',$product_id)->update(['sanpham_moi'=>0]);
        Session::put('message','Không hiển thị sản phẩm mới');
        return Redirect::to('/all-product');
    }
    public function active_product_new($product_id){
        DB::table('sanpham')->where('sanpham_id',$product_id)->update(['sanpham_moi'=>1]);
        Session::put('message','Hiển thị sản phẩm mới');
        return Redirect::to('/all-product');
    }

    //Sản phẩm nổi bật
    public function unactive_product_feature($product_id){
        DB::table('sanpham')->where('sanpham_id',$product_id)->update(['sanpham_noibat'=>0]);
        Session::put('message','Không hiển thị sản phẩm nổi bật');
        return Redirect::to('/all-product');
    }
    public function active_product_feature($product_id){
        DB::table('sanpham')->where('sanpham_id',$product_id)->update(['sanpham_noibat'=>1]);
        Session::put('message','Hiển thị sản phẩm nổi bật');
        return Redirect::to('/all-product');
    }

    // 
    public function load_comment(Request $req){
        $product_id = $req->product_id;
        $comment = Comment::where('sanpham_id',$product_id)->where('binhluan_trangthai',1)->get();
        $dem = 0;
        $dem = count($comment);
        $o = '';
        if ($dem > 0){
            $o.='<h5>Có '.$dem.' bình luận</h5>
            <hr>';
        }
        else
            $o.='<h5>Không có bình luận</h5>
            <hr>';
        foreach($comment as $key => $comm){
            $o.= '
                
                <div class="single_blog_replay mb-50">
                    <div class="replay_img">
                        
                        <a href="#"><img src="'. url('public/frontend/img/comment/avt.jpeg') .'" alt=""></a>    
                    </div>
                    <div class="replay-info-wrapper">
                        <div class="replay-info">
                            <div class="replay-name-date">
                                <h4><a href="#">'. $comm->binhluan_ten .'</a></h4>
                                <span>'. $comm->ngaygui .'</span>    
                            </div>
                            <div class="replay-btn">
                                <a href="#">Reply</a>
                            </div>    
                        </div>
                        <p>'. $comm->binhluan_noidung .'</p>    
                    </div>    
                </div>
            ';
        }
        echo $o;
    }

    public function load_comment_post(Request $req){
        $post_id = $req->post_id;
        $comment = Comment::where('baiviet_id',$post_id)
        ->where('binhluan_trangthai',1)->get();
        $dem = 0;
        $dem = count($comment);
        $o = '';
            if ($dem > 0){
                $o.='<h5>Có '.$dem.' bình luận</h5>
                <hr>';
            }
            else
                $o.='<h5>Không có bình luận</h5>
                <hr>';
            foreach($comment as $key => $comm){
            $o.= '
                <div class="single_blog_replay mb-50">
                    <div class="replay_img">
                        
                        <a href="#"><img src="'. url('public/frontend/img/comment/avt.jpeg') .'" alt=""></a>    
                    </div>
                    <div class="replay-info-wrapper">
                        <div class="replay-info">
                            <div class="replay-name-date">
                                <h4><a href="#">'. $comm->binhluan_ten .'</a></h4>
                                <span>'. $comm->ngaygui .'</span>    
                            </div>
                            <div class="replay-btn">
                                <a href="#">Reply</a>
                            </div>    
                        </div>
                        <p>'. $comm->binhluan_noidung .'</p>    
                    </div>    
                </div> ';
                foreach ($comment as $key => $rep ){
                    if ($rep->binhluan_traloi == $comm->id) {
            $o.='    <div class="single_blog_replay two mb-50">
                    <div class="replay_img">
                        <a href="#"><img src="'. url('public/frontend/img/comment/avt.jpeg') .'" alt=""></a> 
                    </div>
                    <div class="replay-info-wrapper">
                        <div class="replay-info">
                            <div class="replay-name-date">
                                <h4><a href="#">'. $rep->binhluan_ten .'</a></h4>
                                <span>'. $rep->ngaygui .'</span>    
                            </div>
                            <div class="replay-btn">
                                <a href="#">Reply</a>
                            </div>    
                        </div>
                        <p>'. $rep->binhluan_noidung .'</p>    
                    </div>    
                </div>
            ';
                    }}
            }
        echo $o;
    }

    public function load_rep_comment_post(Request $req){
        // $rep_post_id = $req->rep_post_id;
        // $comment = Comment::where('baiviet_id',$rep_post_id)->where('binhluan_traloi',$rep_post_id)
        // ->where('binhluan_trangthai',1)->get();
        // $o = '';
            
        //     foreach($comment as $key => $comm){
        //     $o.= '
                
        //     ';
        //     }
        // echo $o;
    }

    public function send_comment_product(Request $req){
        $product_id = $req->product_id;
        $comment_name = $req->comment_name;
        $comment_email = $req->comment_email;
        $comment_content = $req->comment_content_pro;

        $comment = new Comment();
        $comment->binhluan_ten = $comment_name;
        $comment->binhluan_email = $comment_email;
        $comment->binhluan_noidung = $comment_content;
        $comment->binhluan_trangthai = 0;
        $comment->sanpham_id = $product_id;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $comment->ngaygui = now();
        $comment->save();
    } 

    public function send_comment_post(Request $req){
        $post_id = $req->post_id;
        $comment_name = $req->comment_name_post;
        $comment_email = $req->comment_email_post;
        $comment_content = $req->comment_content_post;

        $comment = new Comment();
        $comment->binhluan_ten = $comment_name;
        $comment->binhluan_email = $comment_email;
        $comment->binhluan_noidung = $comment_content;
        $comment->binhluan_trangthai = 0;
        $comment->baiviet_id = $post_id;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $comment->ngaygui = now();
        $comment->save();
    }

}
