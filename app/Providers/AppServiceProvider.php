<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('layouts.sidebar', function ($view) {
            $view->with('archives', Post::archives());
            $view->with('tags', Tag::has('posts')->pluck('name'));
        });
    }
}
