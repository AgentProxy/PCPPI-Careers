<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    public function admin(){
        return $this->belongsToMany('App\Admin','admins_places','place_id','admin_id');
    }

    public function position(){
    	return $this->hasMany('App\Position','place_id','id');
    }
}
