<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    //
    protected $table = 'testimonies'; 
	 public position(){
		return $this->belongsTo('App\Position','position_id','id');
	}

    protected $fillable = [
    'position_id','testimony'
    ];
}
