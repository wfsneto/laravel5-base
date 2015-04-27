<?php

return [

    /**
     * PDO Fetch Style
     */

    'fetch' => PDO::FETCH_CLASS,

    /**
     * Default Database Connection Name
     */

    'default' => 'mysql',

    /**
     * Database Connections
     */

    'connections' => [

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST'),
            'database'  => env('DB_DATABASE') . '_' . $app->environment(),
            'username'  => env('DB_USERNAME'),
            'password'  => env('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

    ],

    /**
     * Migration Repository Table
     */

    'migrations' => 'migrations',

    /**
     * Redis Databases
     */

    'redis' => [

        'cluster' => false,

        'default' => [
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'database' => 0,
        ],

    ],

];
