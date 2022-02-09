<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // if($this->app->environment('production')) {
        //     \URL::forceScheme('https');
        // }
    }
    // https://stackoverflow.com/questions/53123678/laravel-project-deploy-to-heroku-but-bootstrap-styles-missing
    // https://www.youtube.com/watch?v=cjy_Dtp9Z4k
}
