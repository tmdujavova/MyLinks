<?php

require_once '_inc/config.php';
if ( ! logged_in() ) {
		header("Location: $base_url/login.php");
		die();
	}

if ( ! isset($_GET['id']) )
{
	show_404();
}

$nazov = $database->get('mylinks', "nazov", [
	"id" => $_GET['id']
	]);

$link = $database->get('mylinks', "link", [
	"id" => $_GET['id']
	]);

if ( ! $nazov || ! $link )
{
	show_404();
}

include_once "_partials/header.php"

?>

<div >

	<form class="navbar-form navbar-left form-inline" id="delete-form" action="_inc/delete-item.php" method="post">
		<div class="form-group">
			<input disabled class="form-control" value="<?php echo $link ?>" id="link" type="text" name="link">
		</div>
		<div class="form-group">
			<input disabled class="form-control" value="<?php echo $nazov ?>" id="nazov" type="text" name="nazov">
		</div>


		<div class="form-group">
			<input name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
			<button type="submit" class="btn btn-default" >Zmaž</button>
			<span class="controls">
				<a href="<?php echo $base_url ?>" class="back-link text-muted">Späť</a>
			</span>


		</div>
	</form>

	<?php include "_partials/footer.php" ?>