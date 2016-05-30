<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    //
    protected $fillable = ['full_name','email','phone','gender','state','lga','village','farm_size','no_of_pack','longitude','latitude','crop_type'];
}
