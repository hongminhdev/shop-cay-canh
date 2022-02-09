<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityModel;
use DB;
use App\Models\Feeship;
use Session;
use Illuminate\Support\Facades\Redirect;

class DeliveryController extends Controller
{
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function delivery(Request $request){
        $this->AuthLogin();
        $city = DB::table('tinhthanhpho')->join('phivanchuyen','phivanchuyen.phi_matp','=','tinhthanhpho.matp')
        ->orderby('matp','ASC')->get();

        $all_city = DB::table('tinhthanhpho')->orderby('matp','asc')->get();

    	return view('admin.delivery.add_delivery')->with('city',$city)->with('all_city',$all_city);
    }

    public function deliveryfee(Request $req){
        $this->AuthLogin();
        $data = array();
        $data['phi_matp'] = $req->city;
        $data['phi_vanchuyen'] = $req->fee;

        $phi_matp = DB::table('phivanchuyen')->get();
        foreach ($phi_matp as $key => $val){
            $phi = $val->phi_matp;
        }

        DB::table('phivanchuyen')->insert($data);
        return redirect()->back()->with('message','Thêm phí vận chuyển thành công');
        
        
        
    }

    public function update_delivery(Request $req){
        $this->AuthLogin();
        $data = $req->all();
		$fee_ship = Feeship::find($data['feeship_id']);
		$fee_value = rtrim($data['fee_value'],',');
		$fee_ship->phi_vanchuyen = $fee_value;
        $fee_ship->save();
    }

    
}
