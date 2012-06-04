<?php
/*opens connection to MySQL db conection*/
//Shared between all the PHP files in our application
//pdo connection

//Our username and pass are kept in Environmen Variables, in .htaccess
//THis is for security so they are never publickly visible on GItHub

$user = getenv('DB_USER'); //The Mysql username
$pass = getenv('DB_PASS');//THe Mysql password
$data_source = getenv('DATA_SOURCE');
//PDO:PHP Dta Objects
//Allows us to connect to many diferent inds of databases
$db = new PDO($data_source, $user, $pass);

//Force the connection to communicate in UTF-8
//and support many human languages
$db->exec('SET NAMES utf8');

//NO username or passwords on Github EVER!!!