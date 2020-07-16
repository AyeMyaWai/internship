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
    public function boot()
    {
        $this->registerPolicies();
        /**
         * Define Gate for admin user role
         * Returns true if user role is set to admin
         **/ 
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });
        /**
         * Define Gate for editor user role
         * Returns true if user role is set to editor
         **/ 
        Gate::define('isEditor', function($user) {
            return $user->role == 'editor';
        });
        /**
         * Define Gate for guest user role
         * Returns true if user role is set to guest
         **/ 
        Gate::define('isGuest', function($user) {
            return $user->role == 'guest';
        });
    }
}
