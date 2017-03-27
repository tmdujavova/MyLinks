<?php



	// include
	require 'config.php';

	// add new stuff
	// 
	$nazov_databazy = $_POST['Kategoria'];

	$id = $database->insert($nazov_databazy, [
		'link' => $_POST['link'],
		'text' => $_POST['text'],
		'table' => $_POST['Kategoria']
	]);

	// success
	if ( $id ) {
		$message = json_encode ([
			'status' => 'success',
			'id' => $id
			]);

		die($message);
		
	}


	//header("Location: $base_url/index.php");
	//	die('success');