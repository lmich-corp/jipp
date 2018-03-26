<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdeInovasi extends Model
{
    public function ideprofil()
    {
    	return $this->belongsTo('App\Ideprofil');
    }
}
