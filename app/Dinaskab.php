<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dinaskab extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function admin()
    {
    	return $this->belongsTo('App\User');
    }

    public function inovator(){
        return $this->hasMany('App\Inovator');
    }
}
