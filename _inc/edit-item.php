<?php

	// include
	require 'config.php';



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