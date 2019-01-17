<?php

$url      = parse_url(env("CUSTOM_URL",env("DATABASE_URL")));
$host     = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);


return [

    'fetch' => PDO::FETCH_CLASS,
    'default' => env('DB_CONNECTION', 'pgsql'),
    'connections' => [
        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => env('DB_HOST', $host),
            'database' => env('DB_DATABASE', $database),
            'username' => env('DB_USERNAME', $username),
            'password' => env('DB_PASSWORD', $password),
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],
    ],
    'migrations' => 'migrations'
];
