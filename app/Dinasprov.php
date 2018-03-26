<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dinasprov extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function inovator(){
        return $this->hasMany('App\Inovator');
    }
}
