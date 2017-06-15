<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountability extends Model
{
    //
	protected $table = 'accountabilities'; 

    public position(){
		return $this->belongsTo('App\Position','position_id','id');
	}

    protected $fillable = [
    'accountability','position_id'
    ];
}
