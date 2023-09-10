<?php

namespace LaravelDomCrawler\Providers;

use Illuminate\Support\ServiceProvider;
use LaravelDomCrawler\LaravelDomCrawler;

class LaravelDomCrawlerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
       //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('laravel-dom-crawler', function () {
            return new LaravelDomCrawler;
        });
    }
}
