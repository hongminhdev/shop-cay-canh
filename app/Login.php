<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $timestamps = false;
    protected $fillable = [
          'email',  'password',  'name','loainguoidung_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'users';
 	
 	
}
