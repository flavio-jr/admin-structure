<?php

use Illuminate\Database\Seeder;
use App\Usuarios;
use App\Perfis;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfil = new Perfis();
        $perfil->prf_nome = 'admin';
        $perfil->save();

        $perfil = Perfis::find(1);

        $usuario = new Usuarios();
        $usuario->usr_username = 'admin';
        $usuario->usr_email = 'admin@admin.com';
        $usuario->usr_password = bcrypt('123456');
        $usuario->usr_prf_id = $perfil->prf_id;
        $usuario->usr_ativo = 1;

        $usuario->save();
    }
}
