<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id';


    protected $fillable = ['username','email','ativo','prf_id'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'usuarios';

    public function perfis()
    {
        return $this->hasOne('App\Perfis','prf_id','prf_id');
    }

}
