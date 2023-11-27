<?php

//composer run-script phpiggy
declare(strict_types=1);

$driver = 'mysql';
$config = http_build_query(data: [
    'host' => '127.0.0.1',
    'port' => 3307,
    'dbname' => 'phpiggy'
], arg_separator: ';');

$dsn = "{$driver}:{$config}";
$username = 'root';
$password = 'electioneering';

$db = new PDO($dsn, $username, $password);

echo "database connected";