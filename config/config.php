<?php

$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();

return [
    'db' => [
        'host' => $_ENV['DB_HOST'],
        'dbname' => $_ENV['DB_DATABASE'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'charset'   => 'utf8',
    ],
];
