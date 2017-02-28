<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Perfil;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfil = new Perfil;
        $perfil->prf_nome = 'admin';
        $perfil->save();

        $usuario = new User;
        $usuario->username = 'admin';
        $usuario->email = 'admin@admin.com';
        $usuario->password = bcrypt('123456');
        $usuario->prf_id = $perfil->prf_id;
        $usuario->ativo = 1;

        $usuario->save();

        $perfil = new Perfil;
        $perfil->prf_nome = 'user';
        $perfil->save();

        $usuario = new User;
        $usuario->username = 'user';
        $usuario->email = 'user@system.com';
        $usuario->password = bcrypt('123456');
        $usuario->prf_id = $perfil->prf_id;
        $usuario->ativo = 1;

        $usuario->save();


    }
}
