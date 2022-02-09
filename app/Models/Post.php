<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'baiviet_tieude','baiviet_tomtat','baiviet_noidung','baiviet_slug','baiviet_keyword','baiviet_anh','ngaythem','baiviet_tinhtrang'
    ];
    protected $primaryKey = 'baiviet_id';
 	protected $table = 'baiviet';
}
