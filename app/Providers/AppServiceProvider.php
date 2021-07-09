<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;
use View;

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
        $servicesdata = Voyager::model('Service')->select('id','title','heading','slug')->where('status',1)->get();

    View::composer('templates.header', function($view) use($servicesdata) {
    $view->with('servicesdata',$servicesdata);
    });
    }
}
