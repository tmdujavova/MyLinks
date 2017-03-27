<?php

// show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// require stuff
require_once 'vendor/autoload.php';
//\php_error\reportErrors();

// global variables
$base_url = 'http://localhost/MyLinksSKUSKA';

// connect to db
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'todo',
	'server'        => 'localhost',
	'username'      => 'root',
	'password'      => 'root',
	'charset'       => 'utf8'
]);

//global function
function show_404()
{
	header("HTTP/1.0 404 Not Found");
	include_once "404.php";
	die();

}