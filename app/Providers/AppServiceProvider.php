<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\LogoChange;
use Illuminate\Support\Facades\Auth;    // Must Must use
use Illuminate\Support\Facades\Blade;   // Must Must use

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // Blade Directive For Admin - Code Start From Here
        
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->user_role_id == 1;
        });
        
        // Blade Directive For - Agent Start Here

        Blade::if('agent', function(){
            return auth()->check() && auth()->user()->user_role_id == 2;
        });
 
        view()->composer('*', function ($view){
            $logo_change = LogoChange::find(6); 
            $view->with('logochange', $logo_change);
        });
    }
}
