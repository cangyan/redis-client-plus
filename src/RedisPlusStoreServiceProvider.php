<?php

namespace cangyan\redisClientPlus;

use Illuminate\Support\ServiceProvider;

class RedisPlusStoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('RedisPlusStore', function ($app) {
            return new RedisPlusStore();
        });
    }
}