<?php

	// include
	require 'config.php';

	// delete item
	$affected = $database->delete('desc1',
		[ 'id' => $_POST['id'] ]
	);

	// success
	if ( $affected ) {
		header("Location: $site_url/index.php");
		die();
	}

