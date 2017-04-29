<?php

	// include
	require 'config.php';
	if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
		die();
	}


	$affected = $database->delete('cat',
		[ 'id' => $_POST['id'] ]
	);

	// success
	if ( $affected ) {
		header("Location: $base_url/index.php");
		die();
	}