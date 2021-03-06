<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('index', function ($usuario) {
            if($usuario->perfis){
                $usuario->perfis->prf_nome == 'admin';
                return true;
            }
            return false;
        });

        Gate::define('edit', function ($usuario) {

            if($usuario->perfis){
                $usuario->perfis->prf_nome == 'admin';
                return true;
            }
            return false;
        });

        Gate::define('delete', function ($usuario) {

            if($usuario->perfis){
                $usuario->perfis->prf_nome == 'admin';
                return true;
            }
            return false;
        });
    }
}
