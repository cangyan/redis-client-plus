<?php

namespace cangyan\redisClientPlus;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class RedisPlusStoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Cache::extend('redisPlus', function ($app) {
            return Cache::repository(new RedisPlusStore());
        });
    }

    public function register()
    {
        //
    }
}