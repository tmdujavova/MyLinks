<?php

	// include
	require 'config.php';

	// update item
	$affected = $database->update('desc1',
		[ 'text' => $_POST['text'],
		'link' => $_POST['link'] ],
		[ 'id' => $_POST['id'] ]
	);

	// success
	if ( $affected ) {
		header("Location: $site_url/index.php");
		die();
	}