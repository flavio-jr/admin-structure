<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfis extends Model
{
    protected $table = 'perfis';

    protected $primaryKey = 'prf_id';

    protected $fillable = ['prf_nome'];
}
