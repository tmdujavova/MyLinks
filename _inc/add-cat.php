<?php

	// include
	require 'config.php';

	// add new stuff
	//
	//
	 /* zistit user_id a vlozit

	 vytvori prazdny nazov link... !!!!!!!
*/

 	$id = $database->insert('mylinks', [

		'kategoria' => $_POST['new-cat']
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



	$nova_databaza = $_POST['new-cat'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE $nova_databaza (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
created_at TIMESTAMP,
text TEXT NOT NULL,
link TEXT NOT NULL,
table TEXT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    header("Location: $base_url/index.php");
		die('success');
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

*/