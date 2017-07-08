<?php

return [
    'database' => [
        'name' => 'databasename',
        'username' => 'root',
        'password' => 'password',
        "charset" => "utf8",
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
