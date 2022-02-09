<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'name','email','password','loainguoidung_id'
    ];
    protected $primaryKey = 'id';
 	protected $table = 'users';
}
