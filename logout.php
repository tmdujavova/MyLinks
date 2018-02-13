<?php

	require_once '_inc/config.php';

	if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
			die();
	}

	do_logout();


	echo '<div class="suceess">Beyy</div>';
	header("Location: $base_url/login.php");
	die();