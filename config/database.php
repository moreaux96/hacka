<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION_INTELIGENCIA_DEV', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'inteligencia' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_INTELIGENCIA', '127.0.0.1'),
            'port' => env('DB_PORT_INTELIGENCIA', '3306'),
            'database' => env('DB_DATABASE_INTELIGENCIA', 'forge'),
            'username' => env('DB_USERNAME_INTELIGENCIA', 'forge'),
            'password' => env('DB_PASSWORD_INTELIGENCIA', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'inteligencialog' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_LOG', '127.0.0.1'),
            'port' => env('DB_PORT_LOG', '3306'),
            'database' => env('DB_DATABASE_LOG', 'forge'),
            'username' => env('DB_USERNAME_LOG', 'forge'),
            'password' => env('DB_PASSWORD_LOG', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'concorrentes' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_CONCORRENTES', '127.0.0.1'),
            'port' => env('DB_PORT_CONCORRENTES', '3306'),
            'database' => env('DB_DATABASE_CONCORRENTES', 'forge'),
            'username' => env('DB_USERNAME_CONCORRENTES', 'forge'),
            'password' => env('DB_PASSWORD_CONCORRENTES', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'psy_transp' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_PSY_TRANSP', '127.0.0.1'),
            'port' => env('DB_PORT_PSY_TRANSP', '3306'),
            'database' => env('DB_DATABASE_PSY_TRANSP', 'forge'),
            'username' => env('DB_USERNAME_PSY_TRANSP', 'forge'),
            'password' => env('DB_PASSWORD_PSY_TRANSP', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'database' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_PSY_TRANSP', '127.0.0.1'),
            'port' => env('DB_PORT_PSY_TRANSP', '3306'),
            'database' => env('DB_DATABASE_PSY_TRANSP', 'forge'),
            'username' => env('DB_USERNAME_PSY_TRANSP', 'forge'),
            'password' => env('DB_PASSWORD_PSY_TRANSP', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'psy_transp_desenv' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_PSY_TRANSP', '127.0.0.1'),
            'port' => env('DB_PORT_PSY_TRANSP', '3306'),
            'database' => env('DB_DATABASE_PSY_TRANSP', 'forge'),
            'username' => env('DB_USERNAME_PSY_TRANSP', 'forge'),
            'password' => env('DB_PASSWORD_PSY_TRANSP', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_PSY_TRANSP', '127.0.0.1'),
            'port' => env('DB_PORT_PSY_TRANSP', '3306'),
            'database' => env('DB_DATABASE_PSY_TRANSP', 'forge'),
            'username' => env('DB_USERNAME_PSY_TRANSP', 'forge'),
            'password' => env('DB_PASSWORD_PSY_TRANSP', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],
        'bi' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_BI', '127.0.0.1'),
            'port' => env('DB_PORT_BI', '3306'),
            'database' => env('DB_DATABASE_BI', 'forge'),
            'username' => env('DB_USERNAME_BI', 'forge'),
            'password' => env('DB_PASSWORD_BI', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'correios' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_CORREIOS', '127.0.0.1'),
            'port' => env('DB_PORT_CORREIOS', '3306'),
            'database' => env('DB_DATABASE_CORREIOS', 'forge'),
            'username' => env('DB_USERNAME_CORREIOS', 'forge'),
            'password' => env('DB_PASSWORD_CORREIOS', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'latin1',
            'collation' => 'latin1_swedish_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],


        'mongodb' => [
            'driver'   => 'mongodb',
            'host'     => env('DB_HOST_MONGO', 'localhost'),
            'port'     => env('DB_PORT_MONGO', 27017),
            'database' => env('DB_DATABASE_MONGO', "psychemedics"),
            'username' => env('DB_USERNAME_MONGO', ""),
            'password' => env('DB_PASSWORD_MONGO', ""),
            'options'  => [
                //'database' => 'admin' // sets the authentication database required by mongo 3
            ]
        ],

        'localhost' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_LOCAL', '127.0.0.1'),
            'port' => env('DB_PORT_LOCAL', '3306'),
            'database' => env('DB_DATABASE_LOCAL', 'forge'),
            'username' => env('DB_USERNAME_LOCAL', 'forge'),
            'password' => env('DB_PASSWORD_LOCAL', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'latin1',
            'collation' => 'latin1_swedish_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
        'psy_transp_replication' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_PSY_TRANSP_REPLICATION', '127.0.0.1'),
            'port' => env('DB_PORT_PSY_TRANSP_REPLICATION', '3306'),
            'database' => env('DB_DATABASE_PSY_TRANSP_REPLICATION', 'forge'),
            'username' => env('DB_USERNAME_PSY_TRANSP_REPLICATION', 'forge'),
            'password' => env('DB_PASSWORD_PSY_TRANSP_REPLICATION', ''),
            'unix_socket' => env('DB_SOCKET_REPLICATION', ''),
            'charset' => 'latin1',
            'collation' => 'latin1_swedish_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
