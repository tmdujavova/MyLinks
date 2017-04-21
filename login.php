<?php
require_once '_inc/config.php';
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' )
	{
		$username = filter_var( $_POST['username'], FILTER_SANITIZE_EMAIL );
		$password = $_POST['password'];
		$remember = $_POST['rememberMe'] ? true : false;

		$login = $auth->login( $username, $password, $remember );
		echo '<pre>';
		print_r( $login );
		echo '</pre>';

	if($login['error']) {
			echo '<div class="error">' .$login['message'].'</div>';
		} else {
			setcookie(
			$auth_config->cookie_name,
			$login['hash'],
			$login['expire'],
			$auth_config->cookie_path,
			$auth_config->cookie_domain,
			$auth_config->cookie_secure,
			$auth_config->cookie_http
		);
			//echo '<div class="sucees">' .$login['message'].'</div>';
			header("Location: $base_url/index.php");
			die();
		}

}
	include_once "_partials/header.php";

?>

	<form method="post" action="" class="box box-auth">
		<h2 class="box-auth-heading">
			Login, bitch
		</h2>

		<input type="text" value="" class="form-control" name="username" placeholder="Email Address" required autofocus>
		<input type="password" class="form-control" name="password" placeholder="Password" required>
		<label class="checkbox">
			<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe" checked>
			Remember me
		</label>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		<p class="alt-action text-center">
			or <a href="<?php echo "$base_url/register.php" ?>">create acount</a>
		</p>
	</form>

<?php include_once "_partials/footer.php" ?>