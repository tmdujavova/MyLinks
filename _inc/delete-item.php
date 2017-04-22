<?php

	// include
	require 'config.php';
	if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
		die();
	}

	// delete item
	$affected = $database->delete('mylinks',
		[ 'id' => $_POST['id'] ]
	);

	// success
	if ( $affected ) {
		header("Location: $base_url/index.php");
		die();
	}

