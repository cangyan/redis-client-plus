<?php

return [
    'redis' => [
        'client' => 'predis',
        'default' => [
            'host' => env('READ_REDIS_HOST'),
            'port' => env('READ_REDIS_PORT'),
            'database' => env('READ_REDIS_DATABASE'),
            'password' => env('READ_REDIS_PASSWORD'),
            'read_write_timeout' => env('READ_REDIS_TIMEOUT', 0),
        ],
        'read' => [
            'host' => env('READ_REDIS_HOST'),
            'port' => env('READ_REDIS_PORT'),
            'database' => env('READ_REDIS_DATABASE'),
            'password' => env('READ_REDIS_PASSWORD'),
            'read_write_timeout' => env('READ_REDIS_TIMEOUT', 0),
        ],
        'write' => [
            'host' => env('WRITE_REDIS_HOST'),
            'port' => env('WRITE_REDIS_PORT'),
            'database' => env('WRITE_REDIS_DATABASE'),
            'password' => env('WRITE_REDIS_PASSWORD'),
            'read_write_timeout' => env('WRITE_REDIS_TIMEOUT', 0),
        ]
    ]
];