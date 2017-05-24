<?php

namespace cangyan\redisClientPlus\Tests;

use cangyan\redisClientPlus\RedisPlusStore;

class RedisPlusStoreTest extends AbstractTestCase
{
    public function testGet()
    {
        $client = new RedisPlusStore();
        $client->put('testGet', 11, 1);
        $this->assertEquals($client->get('testGet'), 11);
    }

    public function testMany()
    {
        $client = new RedisPlusStore();
        $client->putMany(['testGet1' => 11, 'testGet2' => 22], 1);
        $this->assertEquals($client->many(['testGet1','testGet2']), ['testGet1' => 11, 'testGet2' => 22]);
    }

    public function testIncrement()
    {
        $client = new RedisPlusStore();
        $client->flush();
        $client->increment('count');
        $client->increment('count');
        $client->increment('count');
        $client->decrement('count', 2);
        
        $this->assertEquals($client->get('count'), 1);

        $client->increment('count', 3);
        $client->decrement('count', 1);
        $this->assertEquals($client->get('count'), 3);
    }

    public function tesForever()
    {
        $client = new RedisPlusStore();
        $client->forever('pi', '3.14');
        $this->assertEquals($client->get('pi'), '3.14');
        $client->forget('pi');
        $this->assertEquals($client->get('pi'), null);
    }

    public function testGetPrefix()
    {
        $client = new RedisPlusStore();
        $this->assertEquals($client->getPrefix(), null);
    }
}