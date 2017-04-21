<?php

// show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// require stuff
require_once 'vendor/autoload.php';
//\php_error\reportErrors();

// global variables
$base_url = 'http://localhost/web/MyLinks/mylinksUser';

// connect to db
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'todo',
	'server'        => 'localhost',
	'username'      => 'root',
	'password'      => 'root',
	'charset'       => 'utf8'
]);

$config = [

	'db' => [
		'type'     => 'mysql',
		'name'     => 'todo',
		'server'   => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'charset'  => 'utf8'
	]

];


$db = new PDO(
	"{$config['db']['type']}:host={$config['db']['server']};
	dbname={$config['db']['name']};charset={$config['db']['charset']}",
	$config['db']['username'], $config['db']['password']
);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

require_once 'functions-auth.php';

// auth
require_once 'vendor/PHPAuth/languages/en.php';
require_once 'vendor/PHPAuth/config.class.php';
require_once 'vendor/PHPAuth/auth.class.php';



$auth_config = new Config( $db );
$auth = new Auth( $db, $auth_config, $lang );


//global function
function show_404()
{
	header("HTTP/1.0 404 Not Found");
	include_once "404.php";
	die();

}