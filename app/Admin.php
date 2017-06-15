<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'username', 'name'
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password'
    // ];
   

    public function place(){
         return $this->belongsToMany('App\Place','admins_places','admin_id','place_id');
    }

}
