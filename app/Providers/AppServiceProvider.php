<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use  App\Setting;
use  App\Page;
use  App\Post;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        Schema::defaultStringLength(191);
        View::composer('front.includes.footer',function($view){
            $setting = Setting::first();
            $view->with('setting',$setting);
        });
        View::composer('front.includes.head',function($view){
            $setting = Setting::first();
            $view->with('setting',$setting);
        });
        View::composer('front.includes.header',function($view){
            $setting = Setting::first();
            $view->with('setting',$setting);
        });
        View::composer('front.includes.sideber',function($view){
            $setting = @Setting::first();
            $view->with('setting',$setting);
        });
        View::composer('front.includes.sideber',function($view){
            $posts = @Post::where('slug','event')->get();
            $view->with('posts',$posts);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       require_once app_path() . '/Helpers/ResultHelper.php';
    }
}
