<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superadmin extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function dinasprov()
    {
        return $this->hasMany('App\Dinasprov');   
    }

    public function admin()
    {
        return $this->hasMany('App\Admin');   
    }
}
