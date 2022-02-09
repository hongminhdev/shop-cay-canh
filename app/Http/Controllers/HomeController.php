<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('loaisanpham')->where('loaisanpham_hienthi','1')->orderby('id','desc')->get();
        
        $all_product = DB::table('sanpham')->where('sanpham_hienthi','1')
        ->join('loaisanpham','loaisanpham.id','=','sanpham.loaisanpham_id')->orderby('sanpham_id','desc')->get();

        $product_new = DB::table('sanpham')->where('sanpham_hienthi','1')->where('sanpham_moi','1')->get();
        $product_feature = DB::table('sanpham')->where('sanpham_hienthi','1')->where('sanpham_noibat','1')->get();
        
        return view('page.trangchu')->with('danhmuc',$cate_product)->with('all_product',$all_product)
        ->with('pro_new',$product_new)->with('pro_fea',$product_feature);
    }
    
    public function shop(){
        $cate_product = DB::table('loaisanpham')->where('loaisanpham_hienthi','1')->orderby('id','desc')->get();
        
        $all_product = Product::where('sanpham_hienthi','1')->simplePaginate(12);
        // $all_product = DB::table('sanpham')->where('sanpham_hienthi','1')->orderby('sanpham_id','desc')->limit(12)->get();
        
        return view('page.shop',compact('all_product'))->with('danhmuc',$cate_product)->with('all_product',$all_product);
    }

    // Hiển thị sp theo danh mục 
    public function dmsp($category_id){
        $cate_product = DB::table('loaisanpham')->where('loaisanpham_hienthi','1')->orderby('id','desc')->get();
        
        $pro_cate_id = DB::table('sanpham')->join('loaisanpham','sanpham.loaisanpham_id','=','loaisanpham.id')
        ->where('sanpham.loaisanpham_id',$category_id)->orderby('sanpham_id','desc')->limit(12)->get();

        $cate_name = DB::table('loaisanpham')->where('id',$category_id)->limit(1)->get();

        return view('page.danhmucsanpham.show_pro_cate')->with('danhmuc',$cate_product)
        ->with('pro_cate_id',$pro_cate_id)->with('cate_name',$cate_name);
    }

    // Chi tiết sản phẩm
    public function chitiet_sanpham($product_id){
        $cate_product = DB::table('loaisanpham')->where('loaisanpham_hienthi','1')->orderby('id','desc')->get();

        $details_product = DB::table('sanpham')
        ->join('loaisanpham','loaisanpham.id','=','sanpham.loaisanpham_id')
        ->join('donvitinh','donvitinh.donvitinh_id','=','sanpham.donvitinh_id')
        ->where('sanpham.sanpham_id',$product_id)->get();

        foreach ($details_product as $key => $value){
            $cate_id = $value->id;
        }
        

        $relate_product = DB::table('sanpham')
        ->join('loaisanpham','loaisanpham.id','=','sanpham.loaisanpham_id')
        ->join('donvitinh','donvitinh.donvitinh_id','=','sanpham.donvitinh_id')
        ->where('sanpham.loaisanpham_id',$cate_id)->whereNotIn('sanpham.sanpham_id',[$product_id])->get();

        return view('page.sanpham.chitiet_sanpham')->with('cate',$cate_product)
        ->with('details_product',$details_product)->with('relate',$relate_product);
    }

    public function gioithieu(){
        return view('page.gioithieu');
    }

    public function tintuc(){
        return view('page.tintuc');
    }
    
    public function lienhe(){
        return view('page.lienhe');
    }

    public function tt_lienhe(Request $req){
        $data = array();
        $data['hoten'] = $req->name;
        $data['email'] = $req->email;
        $data['dienthoai'] = $req->phone;
        $data['diachi'] = $req->address;
        $data['noidung'] = $req->message;
        DB::table('lienhe')->insert($data);

        return view('page.lienhe');
    }
    
    public function dangnhap(){
        return view('page.dangnhap');
    }
    public function dangky(){
        return view('page.dangky');
    }

    public function giohang(){
        return view('page.giohang');
    }



    public function shop_right(){
        return view('page.shop_right');
    }

    public function timkiem(Request $req){
        $keyword = $req->keywords;
        $cate_product = DB::table('loaisanpham')->where('loaisanpham_hienthi','1')->orderby('id','desc')->get();
        
        $all_product = DB::table('sanpham')->where('sanpham_hienthi','1')
        ->join('loaisanpham','loaisanpham.id','=','sanpham.loaisanpham_id')->orderby('sanpham_id','desc')->get();

        $search_product = DB::table('sanpham')->where('sanpham_ten','like','%'.$keyword.'%')
        ->orWhere('sanpham_gia','like','%'.$keyword.'%')->get();
        
        return view('page.sanpham.timkiem',compact('search_product'))->with('danhmuc',$cate_product)->with('timkiem',$search_product);
    }
}
