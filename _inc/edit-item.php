<?php

	// include
	require 'config.php';
	if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
		die();
	}

	// update item
	$affected = $database->update('mylinks',
		[ 'nazov' => $_POST['nazov'],
		'link' => $_POST['link'] ],
		[ 'id' => $_POST['id'] ]
	);

	// success
	if ( $affected ) {
		header("Location: $base_url/index.php");
		die();
	}