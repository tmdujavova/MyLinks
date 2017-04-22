<?php

	// include
require 'config.php';
if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
		die();
	}
	else {

	// add new stuff

$id = $database->insert('mylinks', [
	'link' => $_POST['link'],
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
