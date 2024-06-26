<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Home;
use App\Models\Network;
use App\Models\Post;
use App\Models\User;
use App\Policies\HomePolicy;
use App\Policies\PostPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
       //Home::class=>HomePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        /* Gate::define('see-secret-page',function(User $user,string $pays) {
            
            return $pays==='doe';

        }); */
        
    }
}
