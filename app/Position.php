<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
	public function place(){
		return $this->belongsTo('App\Place','place_id','id');
	}

	public function testimony(){
        return $this->hasMany('App\Testimony','position_id','id');
    }

    public function requirement(){
        return $this->hasMany('App\Requirement','position_id','id');
    }

    public function accountability(){
        return $this->hasMany('App\Accountability','position_id','id');
    }


    protected $fillable = [
    'position','place_id','location','function'
    ];
}
