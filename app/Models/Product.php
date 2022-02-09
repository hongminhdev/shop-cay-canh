<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'sanpham_ten','sanpham_anh','sanpham_mota','motachitiet','sanpham_gia','ngaythem','loaisanpham_id','donvitinh_id','sanpham_hienthi','sanpham_moi','sanpham_noibat'
    ];
    protected $primaryKey = 'sanpham_id';
 	protected $table = 'sanpham';
}
