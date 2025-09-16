<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Services;
use Illuminate\Support\Facades\URL;

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
        // 1️Composer global pour toutes les vues
        View::composer('*', function ($view) {
            $view->with('services_item', Services::select('id','slug','nom_service')->get()->reverse());
            View::share('contact_tel','+22672139415');
            View::share('facebook_link','https://www.facebook.com/share/1H5HUFjfcC');
            View::share('email','globaltechnology.bf@gmail.com');
            View::share('emplacement','Burkina Faso,Bobo-Dioulasso-Ouagadougou');
            View::share('contact_info','+226 76 34 28 07-72 13 94 15');




        });

        // 2️Forcer le HTTPS si derrière un tunnel (ngrok)
        if (request()->header('x-forwarded-proto') === 'https') {
            URL::forceScheme('https');
        }
    }
}
