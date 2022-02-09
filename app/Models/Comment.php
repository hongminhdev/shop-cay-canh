<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'binhluan_ten','binhluan_email','binhluan_noidung','binhluan_trangthai','sanpham_id','baiviet_id','binhluan_traloi','ngaygui'
    ];
    protected $primaryKey = 'id';
 	protected $table = 'binhluan';
}
