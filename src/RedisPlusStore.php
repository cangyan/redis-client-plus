<?php

namespace cangyan\redisClientPlus;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Cache;

class RedisPlusStore implements Store
{
    public function get($key)
    {
        Cache::setConnection('read');
        return Cache::get($key);
    }

    public function many(array $keys)
    {
        Cache::setConnection('read');
        return Cache::many($keys);
    }

    public function put($key, $value, $minutes)
    {
        Cache::setConnection('write');
        return Cache::put($key, $value, $minutes);
    }

    public function putMany(array $values, $minutes)
    {
        Cache::setConnection('write');
        return Cache::putMany($values, $minutes);
    }

    public function increment($key, $value = 1)
    {
        Cache::setConnection('write');
        return Cache::increment($key, $value);
    }

    public function decrement($key, $value = 1)
    {
        Cache::setConnection('write');
        return Cache::decrement($key, $value);
    }

    public function forever($key, $value)
    {
        Cache::setConnection('write');
        return Cache::forever($key, $value);
    }

    public function forget($key)
    {
        Cache::setConnection('write');
        return Cache::forget($key);
    }

    public function flush()
    {
        Cache::setConnection('write');
        return Cache::flush();
    }
    
    public function getPrefix()
    {
        return Cache::getPrefix();
    }
}