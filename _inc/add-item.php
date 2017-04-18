<?php



	// include
	require 'config.php';

	// add new stuff

	/* zistit user_id a vlozit
*/

	$id = $database->insert('mylinks', [

		'link' => $_POST['link'],
		'nazov' => $_POST['nazov'],
		'kategoria' => $_POST['kategoria']
	]);

	// success
	if ( $id ) {
		$message = json_encode ([
			'status' => 'success',
			'id' => $id
			]);
		//header("Location: $base_url/index.php");
		die($message);

	}


	//header("Location: $base_url/index.php");
	//	die('success');