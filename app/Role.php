<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
        protected $fillable = ['name'];
            //one role can be assigned to many users
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
