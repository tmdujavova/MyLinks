<?php

	// include
	require 'config.php';


	 /* zistit user_id
*/

 	$id = $database->insert('cat', [
		'nazov' => $_POST['new-cat'],
	]);



	// success
	if ( $id ) {
		$message = json_encode ([
			'status' => 'success',
			'id' => $id
			]);
		header("Location: $base_url/index.php");
		die($message);

	}

/*

