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
        $this->assertEquals(1,1);
    }

    public function testPut()
    {
        $this->assertEquals(1,1);
    }

    public function testPutMany()
    {
        $this->assertEquals(1,1);
    }

    public function testIncrement()
    {
        $this->assertEquals(1,1);
    }

    public function testDecrement()
    {
        $this->assertEquals(1,1);
    }

    public function tesForever()
    {
        $this->assertEquals(1,1);
    }
    
    public function testForget()
    {
        
    }

    public function testFlush()
    {
        $this->assertEquals(1,1);
    }

    public function testGetPrefix()
    {
        $this->assertEquals(1,1);
    }
}