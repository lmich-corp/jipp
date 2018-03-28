<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerapan extends Model
{
    public function inovator()
    {
    	return $this->belongsTo('App\Inovator');
    }

}
