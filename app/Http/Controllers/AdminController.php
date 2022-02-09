<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Post;
use App\Models\Comment;
use App\Social;
use Socialite;
use App\Login;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Rules\Captcha; 

class AdminController extends Controller
{
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.quantri');
    }

    public function dashboard(Request $request){
        $data = $request->validate([
            //validation laravel 
            'admin_email' => 'required',
            'admin_pass' => 'required',
            // 'g-recaptcha-response' => new Captcha(),    //dòng kiểm tra Captcha
        ]);

        $admin_email = $data['admin_email'];
        $admin_password = md5($data['admin_pass']);
        $loai = "1";
        $login = Login::where('email',$admin_email)->where('password',$admin_password)->where('loainguoidung_id',$loai)->first();
        if($login){
            $login_count = $login->count();
            if($login_count>0){
                Session::put('name',$login->name);
                Session::put('id',$login->id);
                return Redirect::to('/dashboard');
            }
        }else{
                Session::put('message','Mật khẩu hoặc tài khoản không chính xác');
                return Redirect::to('/admin');
        }
    }
    public function logout(){
        $this->AuthLogin();
        Session::put('name',null);
        Session::put('id',null);
        return Redirect::to('/admin');
    }

    // Thêm bài viết
    public function add_post(){
        $this->AuthLogin();
        return view('admin.add_post');
    }

    public function save_post(Request $req){
        $this->AuthLogin();

        $data = $req->all();
        $post = new Post();
        $post->baiviet_tieude = $data['post_name'];
        $post->baiviet_tomtat = $data['post_desc'];
        $post->baiviet_noidung = $data['post_content'];
        $post->baiviet_slug = $data['post_slug'];
        $post->baiviet_keyword = $data['post_keyword'];
        $post->ngaythem = $data['post_time'];
        $post->baiviet_tinhtrang = $data['post_status'];

        $get_image = $req->file('post_image');

        if ($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));

            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('public/uploads/post',$new_image);

            $post->baiviet_anh = $new_image;

            $post->save();
            
            
            return Redirect::to('/all-post')->with('message','Thêm bài viết thành công');
        }
        else{
            return redirect()->back()->with('message','Thêm bài viết không thành công');
        }
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

    // Liệt kê bài viết
    public function all_post(){
        $this->AuthLogin();
        $all_post = Post::all();
        return view('admin.all_post')->with('all_post',$all_post);
    }


    public function delete_post($post_id){
        $this->AuthLogin();
        $post = Post::find($post_id);
        $post_img = $post->baiviet_anh;
        if ($post_img){
            $path = 'public/uploads/post/'.$post_img; 
            unlink($path);
        }
        $post->delete();
        
        return redirect()->back()->with('message','Xóa bài viết thành công');
    }

    public function edit_post($post_id){
        $post = Post::find($post_id);
        return view('admin.edit_post')->with(compact('post'));
    }

    public function update_post(Request $req, $post_id){
        $this->AuthLogin();

        $data = $req->all();
        $post = Post::find($post_id);

        $post->baiviet_tieude = $data['post_name'];
        $post->baiviet_tomtat = $data['post_desc'];
        $post->baiviet_noidung = $data['post_content'];
        $post->baiviet_slug = $data['post_slug'];
        $post->baiviet_keyword = $data['post_keyword'];
        $post->ngaythem = $data['post_time'];
        $post->baiviet_tinhtrang = $data['post_status'];

        $get_image = $req->file('post_image');

        if ($get_image){
            // Xóa ảnh cũ
            $post_img_old = $post->baiviet_anh;
            $path = 'public/uploads/post/'.$post_img_old; 
            unlink($path);

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));

            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('public/uploads/post',$new_image);

            $post->baiviet_anh = $new_image;

            
        }
        
        $post->save();
        // Session::put('message','Cập nhật bài viết thành công');
        return redirect()->back()->with('message','Cập nhật bài viết thành công');
    }

    public function tin_tuc(){
        
        $in_post = Post::where('baiviet_tinhtrang',1)->simplePaginate(6);
        return view('page.tintuc',compact('in_post'))->with('in_post',$in_post);
    }

    public function bai_viet(Request $req, $post_slug){
        
        $post = Post::where('baiviet_tinhtrang',1)->where('baiviet_slug',$post_slug)->get();

        foreach ($post as $key => $p){
            $tieude = $p->baiviet_tieude;
            $keyword = $p->baiviet_keyword;
            $url_canonical = $req->url();
        }

        $relate_post = Post::where('baiviet_tinhtrang',1)->whereNotIn('baiviet_slug',[$post_slug])->limit(3)->get();

        return view('page.baiviet')->with('tieude',$tieude)->with('post',$post)->with('relate_post',$relate_post);
    }

    public function contact(){
        $contact = DB::table('lienhe')->orderby('id','asc')->get();
        return view('page.lien_he')->with('contact',$contact);
    }

    public function all_comment_product(){
        $this->AuthLogin();
        $all_cm_pro = DB::table('binhluan')->join('sanpham','sanpham.sanpham_id','=','binhluan.sanpham_id')
        ->where('binhluan.sanpham_id','!=',null)->get();
        foreach ($all_cm_pro as $key => $sp_id){
            $sp = $sp_id->sanpham_id;
        }
        return view('admin.all_comment_product')->with('all_cm_pro',$all_cm_pro);
        
        
    }

    public function all_comment_post(){
        $this->AuthLogin();
        $all_cm_post = DB::table('binhluan')->join('baiviet','baiviet.baiviet_id','=','binhluan.baiviet_id')
        ->where('binhluan.baiviet_id','!=',null)->get();

        return view('admin.all_comment_post')->with('all_cm_post',$all_cm_post);
    }

    public function allow_comment_post(Request $req){
        $data = $req->all();
        $comment = Comment::find($data['comment_id']);
        $comment->binhluan_trangthai = $data['comment_status'];
        $comment->save();
    }
    public function allow_comment_product(Request $req){
        $data = $req->all();
        $comment = Comment::find($data['comment_id']);
        $comment->binhluan_trangthai = $data['comment_status'];
        $comment->save();
    }

    public function reply_comment_post(Request $req){
        $data = $req->all();
        $comment = new Comment();
        $comment->binhluan_noidung = $data['comment'];
        $comment->baiviet_id = $data['comment_post_id'];
        $comment->binhluan_traloi = $data['comment_id'];
        $comment->binhluan_trangthai = 1;

        $comment->binhluan_ten = 'Admin';
        $comment->binhluan_email = 'admin@gmail.com'; 
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $comment->ngaygui = now(); 
        $comment->save();
    }    

    public function reply_comment_product(Request $req){
        $data = $req->all();
        $comment = new Comment();
        $comment->binhluan_noidung = $data['comment'];
        $comment->sanpham_id = $data['comment_product_id'];
        $comment->binhluan_traloi = $data['comment_id'];
        $comment->binhluan_trangthai = 1;

        $comment->binhluan_ten = 'Admin';
        $comment->binhluan_email = 'admin@gmail.com'; 
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $comment->ngaygui = now(); 
        $comment->save();
    }    
}
