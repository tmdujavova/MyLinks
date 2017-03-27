<?php

	// include
	require 'config.php';

	$table = $_GET['table'];
	
	// delete item
	$affected = $database->delete($table,
		[ 'id' => $_POST['id'] ]
	);

	// success
	if ( $affected ) {
		header("Location: $base_url/index.php");
		die();
	}

