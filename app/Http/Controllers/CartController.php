<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CartController extends Controller
{
    public function gio_hang(Request $req){
        $meta_desc = "Giỏ hàng của bạn"; 
        $meta_keywords = "Giỏ hàng Ajax";
        $meta_title = "Giỏ hàng Ajax";
        $url_canonical = $req->url();
        //--seo
        
        

        return view('page.giohang.giohang')->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }

    // Thêm giỏ hàng ajax
    public function add_cart_ajax(Request $req){
        $data = $req->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if($val['product_id']==$data['cart_product_id']){
                    $is_avaiable++;
                    $cart[$key] = array(
                        'session_id' => $val['session_id'],
                        'product_name' => $val['product_name'],
                        'product_id' => $val['product_id'],
                        'product_image' => $val['product_image'],
                        'product_qty' => $val['product_qty']+ $data['cart_product_qty'],
                        'product_price' => $val['product_price'],
                        );
                    Session::put('cart',$cart);
                }
            }
            if($is_avaiable == 0){
                $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],

            );
            Session::put('cart',$cart);
        }
       
        Session::save();
    }

    public function delete_pro_cart($session_id){
        $cart = Session::get('cart');
        // echo '<pre>';
        // print_r($cart);
        // echo '</pre>';
        if($cart==true){
            foreach($cart as $key => $val){
                if($val['session_id']==$session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart',null);
            return redirect()->back()->with('message','Xóa sản phẩm thành công');

        }else{
            return redirect()->back()->with('message','Xóa sản phẩm thất bại');
        }
    }

    public function update_cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart==true){
            // $message = '';

            foreach($data['cart_qty'] as $key => $qty){
                foreach ($cart as $session => $val){
                    if ($val['session_id'] == $key){
                        $cart[$session]['product_qty'] = $qty;
                    }
                }

            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Cập nhật giỏ hàng thành công');
        }
        else{
            return redirect()->back()->with('message','Cập nhật giỏ hàng thất bại');
        }
    }





        // Delete
    public function save_cart(Request $req){
        $productId = $req->productid_hidden;
        $quanlity = $req->qtybutton;

        $product_info = DB::table('sanpham')->where('sanpham_id',$productId)->first();
        
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy
        $data['id'] = $product_info->sanpham_id; 
        $data['qty'] = $quanlity; 
        $data['name'] = $product_info->sanpham_ten; 
        $data['price'] = $product_info->sanpham_gia; 
        $data['weight'] = $product_info->sanpham_hienthi; 
        $data['options']['image'] = $product_info->sanpham_anh;
        Cart::add($data); 

        return Redirect::to('/show-cart');
    }
    public function show_cart(){
        return view('page.giohang.giohang');
    }

    public function delete_to_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }

    // Update số lượng sp có trong giỏ hàng
    public function update_cart_quantity(Request $request){
        $Id = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($Id,$qty);
        return Redirect::to('/show-cart');
    }

    
}
