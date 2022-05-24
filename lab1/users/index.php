<?php

$dbh = new PDO('sqlite:' . __DIR__ . '/database.sqlite');

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

ob_start();

require __DIR__ . '/app/Models/Model.php';
require __DIR__ . '/app/Models/User.php';

// echo 'Hello';

Model::init($dbh);

$user = new User();

// var_dump($user);