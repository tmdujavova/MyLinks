<?php

	require_once '_inc/config.php';

	// you ain't even logged in, what are you doing
	if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
			die();
	}

	// log yourself out, bro
	do_logout();

	// flash it & go home
	echo '<div class="suceess">Beyy</div>';
	header("Location: $base_url/login.php");
	die();