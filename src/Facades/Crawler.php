<?php

namespace LaravelDomCrawler\Facades;

use Illuminate\Support\Facades\Facade;

class Crawler extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-dom-crawler';
    }
}
