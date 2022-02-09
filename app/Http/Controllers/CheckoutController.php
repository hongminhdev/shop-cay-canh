<?php

namespace App\Http\Controllers;

use App\Models\khachhang;
use Hash;
use Cart;
use Illuminate\Http\Request;
use DB;
use PDF;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function login(){
        return view('page.checkout.login');
    }
    public function login_acc(Request $req){
        $email = $req->email_account;
        $pass = md5($req->pass_account);
        $res = DB::table('khachhangs')->where('email',$email)->where('password',$pass)->first();
        
        
        if ($res){
            Session::put('customer_id',$res->id_khachhang);

            return Redirect::to('/trang-chu');
        }else{
            return Redirect::to('/login');
        }
    }

    public function login_checkout(){
        return view('page.checkout.login_checkout');
    }

    public function add_customer(Request $req){
        $data = $req->validate([
                'customer_email'=>'required|email|unique:khachhangs,email',
                'customer_pass'=>'required|min:6|max:20',
                'customer_name'=>'required',
                're_pass'=>'required|same:customer_pass|'
        ]);

        $data = array();
        $data['khachhang_ten'] = $req->customer_name;
        $data['email'] = $req->customer_email;
        $data['password'] = md5($req->customer_pass);
        $data['khachhang_sdt'] = $req->customer_phone;
        $data['khachhang_dia_chi'] = $req->customer_address;
        $data['loainguoidung_id'] = "2";

        $customer_id = DB::table('khachhangs')->insertGetId($data);

        Session::put('customer_id',$customer_id);
        Session::put('khachhang_ten',$req->customer_name);

        
        return Redirect::to('/checkout');
    }

    public function checkout(){
        $city = DB::table('tinhthanhpho')->join('phivanchuyen','phivanchuyen.phi_matp','=','tinhthanhpho.matp')
        ->orderby('matp','ASC')->get();

        $all_city = DB::table('tinhthanhpho')->orderby('matp','asc')->get();
        return view('page.checkout.checkout')->with('all_city',$all_city);
    }

    public function save_checkout_customer(Request $req){
        $data = array();
        $data['shipping_name'] = $req->shipping_name;
        $data['shipping_address'] = $req->shipping_address;
        $data['shipping_city'] = $req->shipping_city;
        $data['shipping_email'] = $req->shipping_email;
        $data['shipping_phone'] = $req->shipping_phone;
        $data['shipping_date'] = $req->shipping_date;
        $data['shipping_time'] = $req->shipping_time;
        $data['shipping_note'] = $req->shipping_note;

        $shipping_id = DB::table('shipping')->insertGetId($data);
        Session::put('shipping_id',$shipping_id);
        
        return Redirect::to('/payment');
        
        
    }

    public function payment(){
        $all_shipping = DB::table('shipping')->where('shipping_id',Session::get('shipping_id'))->get();
        foreach($all_shipping as $key => $a){
            $cty = $a->shipping_city;
        }

        $city_fee = DB::table('tinhthanhpho')->join('shipping','tinhthanhpho.matp','=','shipping.shipping_city')
        ->join('phivanchuyen','phivanchuyen.phi_matp','=','tinhthanhpho.matp')
        ->orderby('matp','ASC')->get();

        $fee = DB::table('tinhthanhpho')->where('matp',$cty)
        ->join('phivanchuyen','phivanchuyen.phi_matp','=','tinhthanhpho.matp')->get();
        foreach($fee as $key => $f){
            $ko = $f->phi_vanchuyen;
        }
        
        return view('page.checkout.payment')->with('city_fee',$city_fee)->with('aa',$cty)->with('ko',$ko);
    }

    // đặt hàng
    public function dathang(Request $req){
        $all_shipping = DB::table('shipping')->where('shipping_id',Session::get('shipping_id'))->get();
        foreach($all_shipping as $key => $a){
            $cty = $a->shipping_city;
        }

        $fee = DB::table('tinhthanhpho')->where('matp',$cty)
        ->join('phivanchuyen','phivanchuyen.phi_matp','=','tinhthanhpho.matp')->get();
        foreach($fee as $key => $f){
            $ko = $f->phi_vanchuyen;
        }
        // insert hình thức thanh toán vào csdl
        $data = array();
        $data['thanhtoan_hinhthuc'] = $req->payment_option;
        $data['thanhtoan_tinhtrang'] = 'Đang chờ xử lý';
        $payment_id = DB::table('thanhtoan')->insertGetId($data);

        // insert vào bảng đơn hàng
        if (Session::has('cart') != NULL){
        
            $total = 0;
            $to_fee = 0;
        }
        foreach(Session::get('cart') as $key => $cart){
            
                $subtotal = $cart['product_price']*$cart['product_qty'];
                $total += $subtotal;
                $to_fee = $total + $ko;
        }

        $checkout_code = substr(md5(microtime()),rand(0,26),5);
        $order_data = array();
        $order_data['order_code'] = $checkout_code;
        $order_data['donhang_tongtien'] = $to_fee;
        $order_data['khachhang_id'] = Session::get('customer_id');
        $order_data['tinhtranghd_id'] = '1';
        $order_data['id_shipping'] = Session::get('shipping_id');
        $order_data['thanhtoan_id'] = $payment_id;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order_data['created_at'] = now();
        $order_id = DB::table('donhang')->insertGetId($order_data);

        // insert vào bảng ctdh
        
        foreach(Session::get('cart') as $key => $cart){
            $order_de_data['order_code'] = $checkout_code;
            $order_de_data['sanpham_id'] = $cart['product_id'];
            $order_de_data['donhang_id'] = $order_id;
            $order_de_data['sanpham_ten'] = $cart['product_name'];
            $order_de_data['sanpham_soluong'] = $cart['product_qty'];
            $order_de_data['sanpham_thanhtien'] = $cart['product_price'];
            $order_de_data['phivanchuyen'] = $ko;
            DB::table('chitietdonhang')->insert($order_de_data);
        }
        if ($data['thanhtoan_hinhthuc'] == 2){
            Session::put('cart',null);
            Session::put('shipping_id',null);
            return view('page.checkout.handcash');
        }

        //return Redirect::to('/payment');
    }

    public function login_customer(Request $req){
        $email = $req->email_account;
        $pass = md5($req->pass_account);
        $res = DB::table('khachhangs')->where('email',$email)->where('password',$pass)->first();
        
        
        if ($res){
            Session::put('customer_id',$res->id_khachhang);

            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/login-checkout');
        }
        
        
        
    }

    public function logout_checkout(){
        Session::forget('customer_id');
    	return Redirect::to('/trang-chu');
    }

    // Quản lý đơn hàng

    public function manager_order(){
        $this->AuthLogin();
        $all_order = DB::table('donhang')
        ->join('khachhangs','khachhangs.id_khachhang','=','donhang.khachhang_id')
        ->join('tinhtranghd','tinhtranghd.id','=','donhang.tinhtranghd_id')
        ->join('shipping','shipping.shipping_id','=','donhang.id_shipping')
        ->join('thanhtoan','thanhtoan.thanhtoan_id','=','donhang.thanhtoan_id')
        ->select('donhang.*','khachhangs.khachhang_ten','tinhtranghd_ten','shipping_address','shipping_note','thanhtoan_hinhthuc','thanhtoan_tinhtrang')
        ->orderby('donhang.donhang_id','desc')->get();
        $manager_order = view('admin.quanly_dathang')->with('all_order',$all_order); 
        return view('admin_layout')->with('admin.quanly_dathang',$manager_order);
    }

    public function view_order($orderId){
        $this->AuthLogin();
        $donhang = DB::table('donhang')->where('donhang_id',$orderId)->get();
        foreach ($donhang as $key => $dh){
            $kh_id = $dh->khachhang_id;
            $ship_id = $dh->id_shipping;
        }
        $khachhang = DB::table('khachhangs')->where('id_khachhang',$kh_id)
        ->join('donhang','donhang.khachhang_id','=','khachhangs.id_khachhang')->get();
        foreach ($khachhang as $key => $kh){
            $kh_ten = $kh->khachhang_ten;
            $kh_sdt = $kh->khachhang_sdt;
            $kh_dc = $kh->khachhang_dia_chi;
        }

        $ship = DB::table('shipping')->where('shipping_id',$ship_id)
        ->join('donhang','donhang.id_shipping','=','shipping.shipping_id')->get();
        foreach ($ship as $key => $s){
            $s_name = $s->shipping_name;
            $s_address = $s->shipping_address;
            $s_phone = $s->shipping_phone;
            $s_date = $s->shipping_date;
            $s_time = $s->shipping_time;
            $s_city = $s->shipping_city;
        }
        $tinh = DB::table('tinhthanhpho')->where('matp',$s_city)->get();
        foreach ($tinh as $key => $t){
            $city = $t->ten_tp;
        }

        $chitiet = DB::table('donhang')->where('donhang.donhang_id',$orderId)
        ->join('chitietdonhang','donhang.donhang_id','=','chitietdonhang.donhang_id')->get();
        foreach ($chitiet as $key => $tc){
            $fee = $tc->phivanchuyen;
        }
                
        $manager_order_by_id = view('admin.view_order')->with('s_city',$city)->with('fee',$fee)
        ->with('khten',$kh_ten)->with('khsdt',$kh_sdt)->with('chitiet',$chitiet)
        ->with('khdc',$kh_dc)->with('s_name',$s_name)->with('s_address',$s_address)
        ->with('s_phone',$s_phone)->with('s_date',$s_date)->with('s_time',$s_time);

        return view('admin_layout')->with('admin.view_order',$manager_order_by_id);
    }

    public function confirm_order($orderId){
        $thanhtoan = DB::table('donhang')->where('donhang_id',$orderId)->get();
        foreach($thanhtoan as $key => $ttoan){
            $test = $ttoan->thanhtoan_id;
        }
        DB::table('thanhtoan')->where('thanhtoan_id',$test)
        ->update(['thanhtoan_tinhtrang'=>'Đã thanh toán']);
        DB::table('donhang')->where('donhang_id',$orderId)->update(['tinhtranghd_id'=>2]);
        return Redirect::to('/manager-order');
    }

    // In don hàng
    public function print_view_order($orderId){
        $this->AuthLogin();
        // 
        $all_order = DB::table('donhang')->where('donhang_id',$orderId)
        ->join('khachhangs','khachhangs.id_khachhang','=','donhang.khachhang_id')
        ->join('tinhtranghd','tinhtranghd.id','=','donhang.tinhtranghd_id')
        ->join('shipping','shipping.shipping_id','=','donhang.id_shipping')
        ->join('thanhtoan','thanhtoan.thanhtoan_id','=','donhang.thanhtoan_id')
        ->select('donhang.*','khachhangs.khachhang_ten','khachhangs.email','tinhtranghd_ten','shipping_address','shipping_note','thanhtoan_hinhthuc','thanhtoan_tinhtrang')
        ->orderby('donhang.donhang_id','desc')->get();

        // 
        $donhang = DB::table('donhang')->where('donhang_id',$orderId)->get();
        foreach ($donhang as $key => $dh){
            $kh_id = $dh->khachhang_id;
            $ship_id = $dh->id_shipping;
        }
        $khachhang = DB::table('khachhangs')->where('id_khachhang',$kh_id)
        ->join('donhang','donhang.khachhang_id','=','khachhangs.id_khachhang')->get();
        foreach ($khachhang as $key => $kh){
            $kh_ten = $kh->khachhang_ten;
            $kh_sdt = $kh->khachhang_sdt;
            $kh_dc = $kh->khachhang_dia_chi;
        }

        $ship = DB::table('shipping')->where('shipping_id',$ship_id)
        ->join('donhang','donhang.id_shipping','=','shipping.shipping_id')->get();
        foreach ($ship as $key => $s){
            $s_name = $s->shipping_name;
            $s_address = $s->shipping_address;
            $s_phone = $s->shipping_phone;
            $s_date = $s->shipping_date;
            $s_time = $s->shipping_time;
            $s_city = $s->shipping_city;
        }
        $tinh = DB::table('tinhthanhpho')->where('matp',$s_city)->get();
        foreach ($tinh as $key => $t){
            $city = $t->ten_tp;
        }

        $chitiet = DB::table('donhang')->where('donhang.donhang_id',$orderId)
        ->join('chitietdonhang','donhang.donhang_id','=','chitietdonhang.donhang_id')->get();
        foreach ($chitiet as $key => $tc){
            $fee = $tc->phivanchuyen;
            $code = $tc->order_code;
        }

                        
        $manager_order_by_id = view('admin.print_order')->with('s_city',$city)->with('fee',$fee)
        ->with('khten',$kh_ten)->with('khsdt',$kh_sdt)->with('chitiet',$chitiet)->with('code',$code)
        ->with('khdc',$kh_dc)->with('s_name',$s_name)->with('s_address',$s_address)
        ->with('s_phone',$s_phone)->with('s_date',$s_date)->with('s_time',$s_time)->with('all_order',$all_order);

        return view('admin_layout')->with('admin.print_order',$manager_order_by_id);
    }

    public function print_order($checkout_code){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($checkout_code));
        return $pdf->stream();
    }
    public function print_order_convert($checkout_code){
        $all_order = DB::table('donhang')->where('order_code',$checkout_code)
        ->join('khachhangs','khachhangs.id_khachhang','=','donhang.khachhang_id')
        ->join('tinhtranghd','tinhtranghd.id','=','donhang.tinhtranghd_id')
        ->join('shipping','shipping.shipping_id','=','donhang.id_shipping')
        ->join('thanhtoan','thanhtoan.thanhtoan_id','=','donhang.thanhtoan_id')
        ->select('donhang.*','khachhangs.khachhang_ten','khachhangs.email','tinhtranghd_ten','shipping_address','shipping_note','thanhtoan_hinhthuc','thanhtoan_tinhtrang')
        ->orderby('donhang.donhang_id','desc')->get();

        $donhang = DB::table('donhang')->where('order_code',$checkout_code)->get();
        foreach ($donhang as $key => $dh){
            $kh_id = $dh->khachhang_id;
            $ship_id = $dh->id_shipping;
        }
        $khachhang = DB::table('khachhangs')->where('id_khachhang',$kh_id)
        ->join('donhang','donhang.khachhang_id','=','khachhangs.id_khachhang')->get();
        foreach ($khachhang as $key => $kh){
            $kh_ten = $kh->khachhang_ten;
            $kh_sdt = $kh->khachhang_sdt;
            $kh_dc = $kh->khachhang_dia_chi;
        }

        $ship = DB::table('shipping')->where('shipping_id',$ship_id)
        ->join('donhang','donhang.id_shipping','=','shipping.shipping_id')->get();
        foreach ($ship as $key => $s){
            $s_name = $s->shipping_name;
            $s_address = $s->shipping_address;
            $s_phone = $s->shipping_phone;
            $s_date = $s->shipping_date;
            $s_time = $s->shipping_time;
            $s_city = $s->shipping_city;
        }
        $tinh = DB::table('tinhthanhpho')->where('matp',$s_city)->get();
        foreach ($tinh as $key => $t){
            $city = $t->ten_tp;
        }

        $chitiet = DB::table('donhang')->where('donhang.order_code',$checkout_code)
        ->join('chitietdonhang','donhang.donhang_id','=','chitietdonhang.donhang_id')->get();
        foreach ($chitiet as $key => $tc){
            $fee = $tc->phivanchuyen;
            $code = $tc->order_code;
        }

                        
        $manager_order_by_id = view('admin.print_order')->with('s_city',$city)->with('fee',$fee)
        ->with('khten',$kh_ten)->with('khsdt',$kh_sdt)->with('chitiet',$chitiet)->with('code',$code)
        ->with('khdc',$kh_dc)->with('s_name',$s_name)->with('s_address',$s_address)
        ->with('s_phone',$s_phone)->with('s_date',$s_date)->with('s_time',$s_time)->with('all_order',$all_order);
    //    return $checkout_code;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $o = '';
        
        $o.='<style>body{
			font-family: DejaVu Sans;
        } 
        p{
            margin-left: 380px;
        }
        span{
            margin-left: 440px;
        }
        strong{
            margin-left: 170px;
        }
        </style> 
            <h2><center>Đơn hàng</center></h2>
            
            <strong class="ngay"> Ngày lập hóa đơn: </strong> '. now() .'
            <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                         ';
                        $o.='
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                        <h5>Giao hàng đến:</h5> ';
                        foreach ($ship as $key => $s){
                            $s_name = $s->shipping_name;
                            $s_address = $s->shipping_address;
                            $s_phone = $s->shipping_phone;
                            $s_date = $s->shipping_date;
                            $s_time = $s->shipping_time;
                            $s_city = $s->shipping_city;
                        } 
                        $o.=' 
                        <address>
                            Khách hàng: '. $s->shipping_name .'<br>
                            Điện thoại: '. $s->shipping_phone .'<br>
                            Tỉnh / Thành phố: '. $s->shipping_city .'<br>
                            Địa chỉ: '. $s->shipping_address .' <br>
                            Ngày giao hàng: '. $s->shipping_date .' <br>
                            Thời gian giao hàng: '. $s->shipping_time .'
                        </address>
                    </div>
                </div>
                <div class="row"> ';
                    foreach($all_order as $key => $order){
                    $o.=' 
                        <div class="col-xs-12 col-md-6">
                            <h5>Phương thức thanh toán:</h5> ';
                            if ($order->thanhtoan_hinhthuc == 2)
                            $o.=' <address>
                                Nhận tiền mặt
                            </address>
                        </div>
                        <div class="col-xs-12 col-md-6 text-right">
                            <h5>Ngày đặt hàng:</h5>
                            <address>
                                '. $order->created_at .'<br><br>
                            </address>
                        </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Chi tiết đơn hàng</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <td class="ten"><h4>Tên sản phẩm</h4></td> 
                                                <td class="text-cente"><h4>Giá</h4>
                                                </td>
                                                <td class="text-center">
                                                    <h4>Số lượng</h4></td>
                                                <td class="text-right"><h4>Thành tiền</h4>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>';}
                                            foreach ($chitiet as $key => $cc){
                                            $o.='
                                                <tr class="ten">
                                                    <td> '.$cc->sanpham_ten .'</td>
                                                    <td class="text-center">'. $cc->sanpham_thanhtien .'</td>
                                                    <td class="text-center">'. $cc->sanpham_soluong .'</td>
                                                    <td class="text-right">'. $cc->sanpham_thanhtien * $cc->sanpham_soluong .'</td>
                                                </tr>
                                            
                                                <tr>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line text-center">
                                                        Tổng giỏ hàng
                                                    </td> 
                                                    <td class="thick-line text-right"> '. $cc->sanpham_thanhtien * $cc->sanpham_soluong .'  </td>
                                                </tr>
                                            
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    Phí vận chuyển</td> '; }
                                                foreach ($chitiet as $key => $tc){
                                                    $fee = $tc->phivanchuyen;
                                                    $code = $tc->order_code;
                                                }
                                                $o.='
                                                <td class="no-line text-right">'. $tc->phivanchuyen .'</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    Tổng tiền</td> ';
                                                foreach($all_order as $key => $order)
                                                $o.='
                                                <td class="no-line text-right">'. $order->donhang_tongtien .'</td>
                                              
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Vĩnh Long, ngày 28 tháng 5 năm 2021</p>
                                    <span>Người nhận hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';

        return $o;
    }

    // $this->validate($req,
    //         [
    //             'customer_email'=>'required|email|unique:khachhangs,email',
    //             'customer_pass'=>'required|min:6|max:20',
    //             'customer_name'=>'required',
    //             're_pass'=>'required|same:customer_pass|'
    //         ],
    //         [
    //             'email.required'=>'Vui lòng nhập email',
    //             'email.email'=>'Không đúng định dạng email',
    //             'email.unique'=>'Email đã tồn tại',
    //             'customer_pass.required'=>'Vui lòng nhập password',
    //             're_pass.same'=>'Mật khẩu không trùng khớp',
    //             'customer_pass.min'=>'Mật khẩu ít nhất 6 ký tự',
    //             'customer_pass.max'=>'Mật khẩu vượt quá độ dài cho phép'
    //         ]);
    //     $user = new khachhang();

    //     $user->khachhang_ten = $req->customer_name;
    //     $user->email = $req->customer_email;
    //     $user->password = Hash::make($req->customer_pass);
    //     $user->khachhang_sdt = $req->customer_phone;
    //     $user->khachhang_dia_chi = $req->customer_address;
    //     $user->loainguoidung_id = "2";
    //     $user->save();
    // return redirect()->back()->with('thanhcong','Đã tạo tài khoản thành công');
}
