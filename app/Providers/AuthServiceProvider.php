<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        Gate::define('manage-users', function ($user) {
            return $user->role === 'admin';
        });
    
        Gate::define('create-rifas', function ($user) {
            return $user->role === 'organizador';
        });
    
        Gate::define('buy-boletas', function ($user) {
            return in_array($user->role, ['organizador', 'cliente']);
        });
    }
}
