<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposals extends Model
{
    public function Profil()
    {
    	return $this->belongsTo(Profil::class);
    }
}