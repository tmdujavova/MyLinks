<?php

	// include
require 'config.php';
if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
		die();
	}
	else {

	$logged_in = get_user();

$id = $database->insert('cat', [
	'nazov' => $_POST['new-cat'],
	'user_id' => $logged_in->uid
	]);

	// success
if ( $id ) {
	$message = json_encode ([
		'status' => 'success',
		'id' => $id
		]);
	header("Location: $base_url/index.php");
	die($message);

}
}


