<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'donhang_tongtien','khachhang_id','tinhtranghd_id','id_shipping','thanhtoan_id'
    ];
    protected $primaryKey = 'donhang_id';
 	protected $table = 'donhang';
}
