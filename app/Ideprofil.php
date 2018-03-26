<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideprofil extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function ideinovasi(){
        return $this->hasMany('App\Ideinovasi');
    }
}
