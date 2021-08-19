<?php

namespace App\Providers;

use App\CustomClasses\LangMap;
use App\Slider;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{

    private static $categories;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //front
        view()->composer('front.partials.banner', function ($view) {
            if (!$image = Slider::first()->images()->first()) {
                $image = new \StdClass;
                $image->src = 'default.jpg';
                $image->title = 'Blase';
                $image->description = 'Distribuidora de autopartes';
            }
            $imgs = Slider::find(1)->images;
            $view->with(compact('image','imgs'));
        });

        //admin
        view()->composer('admin/*/form*', 'App\Http\ViewComposers\FormComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
