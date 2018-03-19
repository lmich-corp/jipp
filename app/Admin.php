<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function User()
    {
    	return $this->belongsTo(User::class);
    }

    public function Profil()
    {
    	return $this->hasMany(Profil::class);
    }
}
