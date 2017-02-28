<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id';


    protected $fillable = ['username','email','ativo','prf_id','password'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';

    public function perfis()
    {
        return $this->hasOne('App\Perfil','prf_id','prf_id');
    }

}
