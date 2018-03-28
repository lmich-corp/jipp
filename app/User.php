<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function superadmin()
    {
        return $this->hasOne('App\Superadmin');
    }
    public function admin()
    {
        return $this->hasOne('App\Admin');   
    }

    public function dinasprov()
    {
        return $this->hasOne('App\Dinasprov');   
    }

    public function dinaskab()
    {
        return $this->hasOne('App\Dinaskab');
    }
    public function inovator()
    {
        return $this->hasOne('App\Inovator');
    }

    public function juri()
    {
        return $this->hasOne('App\Juri');
    }
}
