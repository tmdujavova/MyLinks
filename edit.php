<?php 


	require_once '_inc/config.php';

	$text = $database->get("desc1", "text", [
		"id" => $_GET['id']
	]);

	$link = $database->get("desc1", "link", [
		"id" => $_GET['id']
	]);

	if ( ! $text )
	{
		header("HTTP/1.0 404 Not Found");
		include_once "404.php";
		die();
	}


include_once "_partials/header.php" 

?>




<div >

	<form class="navbar-form navbar-left form-inline" id="add-form" action="_inc/edit-item.php" method="post">
        <div class="form-group">
        <textarea class="form-control" name="link" id="link" rows="1"><?php echo $link ?></textarea>
        </div>
         <div class="form-group">
         <textarea class="form-control" name="text" id="text" rows="1"><?php echo $text ?></textarea>
        </div>
		<div class="form-group">
         <input name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
			<button type="submit" class="btn btn-default" >Uprav</button>
		        <span class="controls">
			        <a href="<?php echo $site_url ?>" class="back-link text-muted">späť</a>
		        </span>
        
     
  </div>
      </form>      


</div>





</div>  
     <footer class="text-center"><small>TMD 2015 - 2017</small></footer>   
	</body>
</html>