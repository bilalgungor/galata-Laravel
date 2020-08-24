<?php

namespace App\Providers;

use App\Pages;
use App\Reference;
use App\Staff;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        view()->composer(['frontend.default.index', 'frontend.default.ref','frontend.layout'], function($view) {

            $data = Reference::all();

            $view->with('reference', $data);
        });
        View::share('staff',Staff::all());
        View::share('page',Pages::all()->sortBy('page_must'));
        Schema::defaultStringLength(191);
    }
}
