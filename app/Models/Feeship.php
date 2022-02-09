<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feeship extends Model
{
    use HasFactory;

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'phi_matp','phi_vanchuyen'
    ];
    protected $primaryKey = 'phi_id';
 	protected $table = 'phivanchuyen';
}
