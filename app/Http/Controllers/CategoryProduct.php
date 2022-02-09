<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function add_category_product(){
        $this->AuthLogin();
        return view('admin.add_category_product');
    }

    public function all_category_product(){
        $this->AuthLogin();
        // $all_category_product = DB::table('loaisanpham')->orderby('id','asc')->get();
        $all_category_product = ProductType::orderBy('id','DESC')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product); 
        return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    }

    // Thêm danh mục
    public function save_category_product(Request $req){
        $data = $req->all();

        $category = new ProductType();
        $category->loaisanpham_ten = $data['category_product_name'];
        $category->loaisanpham_mo_ta = $data['category_product_desc'];
        $category->loaisanpham_hienthi = $data['category_product_status'];
        $category->loaisanpham_thoigian = $data['category_product_time'];
        $category->save();

        // $data = array();
        // $data['loaisanpham_ten'] = $req->category_product_name;
        // $data['loaisanpham_mo_ta'] = $req->category_product_desc;
        // $data['loaisanpham_hienthi'] = $req->category_product_status;
        // $data['loaisanpham_thoigian'] = $req->category_product_time;
        // DB::table('loaisanpham')->insert($data);

        
        return Redirect::to('/add-category-product')->with('message','Thêm danh mục mới thành công');
    }

    public function edit_category_product($category_product_id){
        $this->AuthLogin();
        // $edit_category_product = DB::table('loaisanpham')->where('id',$category_product_id)->get();
        // $edit_category_product = ProductType::find($category_product_id); cách 2 model ko cần foreach

        $edit_category_product = ProductType::where('id',$category_product_id)->get();
        $mana_category_product = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product); 
        return view('admin_layout')->with('admin.edit_category_product',$mana_category_product);
        // return view('admin.edit_category_product');
    }

    // Ẩn hiện danh mục
    public function unactive_category_product($category_product_id){
        DB::table('loaisanpham')->where('id',$category_product_id)->update(['loaisanpham_hienthi'=>0]);
        Session::put('message','Không hiển thị danh mục');
        return Redirect::to('all-category-product');
    }
    public function active_category_product($category_product_id){
        DB::table('loaisanpham')->where('id',$category_product_id)->update(['loaisanpham_hienthi'=>1]);
        Session::put('message','Hiển thị danh mục thành công');
        return Redirect::to('all-category-product');
    }

    public function update_category_product(Request $req, $category_product_id){
        // $data = array();
        // $data['loaisanpham_ten'] = $req->category_product_name;
        // $data['loaisanpham_mo_ta'] = $req->category_product_desc; 
        // DB::table('loaisanpham')->where('id',$category_product_id)->update($data);
        $data = $req->all();
        $category = ProductType::find($category_product_id);
        $category->loaisanpham_ten = $data['category_product_name'];
        $category->loaisanpham_mo_ta = $data['category_product_desc'];
        $category->save();

        return Redirect::to('all-category-product')->with('message','Cập nhật danh mục sản phẩm thành công');
    }
    public function delete_category_product($category_product_id){
        DB::table('loaisanpham')->where('id',$category_product_id)->delete();
        
        return Redirect::to('all-category-product')->with('message','Xóa danh mục sản phẩm thành công');
    }
}
