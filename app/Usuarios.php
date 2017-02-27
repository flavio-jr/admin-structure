<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'usr_id';


    protected $fillable = ['usr_username','usr_email','usr_ativo','usr_prf_id'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'usuarios';

    public function perfis()
    {
        return $this->hasOne('App\Perfis','prf_id','usr_prf_id');
    }

}
