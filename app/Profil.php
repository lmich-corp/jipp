<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
	public function Admin(){
		return $this->belongsTo(Admin::class)	
	}
    
    Public function Ideinovasi()
    {
    	return $this->hasMany(Ideinovasi::class);
    }

    public function Proposal()
    {
    	return $this->hasMany(Proposal::class);
    }
}
