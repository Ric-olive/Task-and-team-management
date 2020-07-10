<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'surname', 'name', 'email', 'id_number', 'phone', 'password', 'departement', 'function', 'gender', 'avatar', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function injecteurs()
    {
        return $this->hasMany('App\Injecteur');
    }

     public function pompes()
    {
        return $this->hasMany('App\Pompe');
    }

     public function mecaniques()
    {
        return $this->hasMany('App\Mecanique');
    }
}
