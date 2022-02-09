<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    use HasFactory;

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'ten_tp','type'
    ];
    protected $primaryKey = 'matp';
 	protected $table = 'tinhthanhpho';
}
