<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'loaisanpham_ten','loaisanpham_mo_ta','loaisanpham_hienthi','loaisanpham_thoigian'
    ];
    protected $primaryKey = 'id';
 	protected $table = 'loaisanpham';
}
