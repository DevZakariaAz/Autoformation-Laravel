<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
    protected $policies = [
        Article::class => ArticlePolicy::class,
    ];
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}