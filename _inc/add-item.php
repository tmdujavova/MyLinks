<?php

	// include
	require 'config.php';

	// add new stuff
	// 
	$nazov_databazy = $_POST['Kategoria'];

	$id = $database->insert($nazov_databazy, [
		'link' => $_POST['link'],
		'text' => $_POST['text']
	]);

	// success
	if ( $id ) {
		header("Location: $site_url/index.php");
		die('success');
	}