<?php

	// include
	require 'config.php';

	$table = $_GET['table'];


	// update item
	$affected = $database->update($table,
		[ 'text' => $_POST['text'],
		'link' => $_POST['link'] ],
		[ 'id' => $_POST['id'] ]
	);

	// success
	if ( $affected ) {
		header("Location: $base_url/index.php");
		die();
	}