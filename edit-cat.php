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

$nazov = $database->get('cat', "nazov", [
	"id" => $_GET['id']
	]);

if ( ! $nazov )
{
	show_404();
}
if ( $_SERVER['REQUEST_METHOD'] === 'POST' )
	{
		$affected = $database->update('cat',
		[ 'nazov' => $_POST['nazov'] ],
		[ 'id' => $_POST['id'] ]
	);

	// success
	if ( $affected ) {
		header("Location: $base_url/index.php");
		die();
	}
	}


include_once "_partials/header.php"

?>

<div >
	<form class="navbar-form navbar-left form-inline" id="edit-form" action=""  method="post">
		<div class="form-group">
			<input class="form-control" value="<?php echo $nazov ?>" id="nazov" type="text" name="nazov" required>
		</div>

		<div class="form-group">
			<input name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
			<button type="submit" class="btn btn-default" >Uprav</button>
			<span class="controls">
				<a href="<?php echo $base_url ?>" class="back-link text-muted">Späť</a>
			</span>


		</div>
	</form>
	<?php include "_partials/footer.php" ?>