<?php



	// include
	require 'config.php';

	// add new stuff

	/* zistit user_id a vlozit
*/



	$id = $database->insert('mylinks', [
		'link' => $_POST['link'],
		'nazov' => $_POST['nazov'],
		'kategoria_id' => $_POST['kategoria'],
		'id_user' => "0"
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