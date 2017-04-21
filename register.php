<?php
require_once '_inc/config.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' )
	{
		$email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
		$password = $_POST['password'];
		$password_repeat = $_POST['repeat'];

		$register = $auth->register( $email, $password, $password_repeat );

		echo '<pre>';
		print_r( $register );
		echo '</pre>';

		if($register['error']) {
			echo '<div class="error">' .$register['message'].'</div>';
		} else {
			//echo '<div class="sucees">' .$register['message'].'</div>';
			header("Location: $base_url/login.php");
			die();
		}

}
	include_once "_partials/header.php";

?>

	<form method="post" action="" class="box box-auth">
		<h2 class="box-auth-heading">
			Register, you dumbass
		</h2>

		<input type="text" value="" class="form-control" name="email" placeholder="Email Address" required autofocus>
		<input type="password" class="form-control" name="password" placeholder="Password" required>
		<input type="password" class="form-control" name="repeat" placeholder="Password again, DO IT" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

		<p class="alt-action text-center">
			or <a href="<?php echo "$base_url/login.php" ?>">come inside (of me)</a>
		</p>
	</form>

<?php include_once "_partials/footer.php" ?>