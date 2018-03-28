<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inovator extends Model
{
    public function dinaskab()
    {
    	return $this->belongsTo('App\Dinaskab');
    }

    public function dinasprov()
    {
    	return $this->belongsTo('App\Dinasprov');
    }

    public function proposal()
    {
    	return $this->hasMany('App\Proposal');

    }
    
    public function penghargaan()
    {
    	return $this->hasMany('App\Penghargaan');
    }

    public function penerapan()
    {
    	return $this->hasMany('App\Penerapan');
    }
}
