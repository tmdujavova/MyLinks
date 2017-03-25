<?php

	// include
	require 'config.php';

	// add new stuff
	$id = $database->insert('items', [
		'text' => $_POST['message']
	]);

	// success
	if ( $id ) {
		header('Location: http://localhost/todoapp/index.php');
		die();
	}