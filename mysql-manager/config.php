<?php
return [
    'dsn' => 'mysql:host=localhost;dbname=blogdb;charset=utf8', // DB info
    'username' => 'root', 
    'password' => '',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ],
];

?>