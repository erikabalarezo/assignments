<?php

$dsn = getenv('DB_DSN');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

$email = getenv('DB_EMAIL');
$city = getenv('DB_CITY');

$db = new PDO($dsn, $user, $pass, $email, $city);
$db->exec('SET NAMES utf8');
