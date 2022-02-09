<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'sanpham_id','donhang_id','sanpham_ten','sanpham_soluong','sanpham_thanhtien'
    ];
    protected $primaryKey = 'ctdh_id';
 	protected $table = 'chitietdonhang';
}
