<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    //
    protected $table = 'requirements'; 
	public position(){
		return $this->belongsTo('App\Position','position_id','id');
	}



    protected $fillable = [
    'position_id','requirement'
    ];
}
