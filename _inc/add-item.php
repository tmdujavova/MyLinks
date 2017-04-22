<?php


	// include
require 'config.php';
if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
		die();
	}
	else {

	$logged_in = get_user();
	// add new stuff

$id = $database->insert('mylinks', [
	'link' => $_POST['link'],
	'nazov' => $_POST['nazov'],
	'kategoria_id' => $_POST['kategoria'],
	'user_id' => $logged_in->uid
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
