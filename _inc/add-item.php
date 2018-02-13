<?php

	// include
require 'config.php';
if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
		die();
	}
	else {

	// add new
$link = filter_var( $_POST['link'], FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);

if ( $link === false) {
	$message = json_encode ([
		'status' => 'failure'
		]);
		//header("Location: $base_url/index.php");
	die($message);
}
else {

$id = $database->insert('mylinks', [
	'link' => $link,
	'nazov' => $_POST['nazov'],
	'kategoria_id' => $_POST['kategoria'],
	'user_id' => get_user()->uid
	]);

	// success
if ( $id ) {
	$message = json_encode ([
		'status' => 'success',
		'id' => $id
		]);
		//header("Location: $base_url/index.php");
	die($message);
}
}
}
