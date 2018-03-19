<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideinovasi extends Model
{
    Public function Profil()
    {
    	return $this->belongsTo(Profil::class);
    }
}
