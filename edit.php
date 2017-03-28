<?php 


	require_once '_inc/config.php';

	if ( ! isset($_GET['id']) )
	{
		show_404();
	}

	$table = $_GET['table'];

	$text = $database->get($table, "text", [
		"id" => $_GET['id']
	]);

	$link = $database->get($table, "link", [
		"id" => $_GET['id']
	]);

	if ( ! $text || ! $link )
	{
		show_404();
	}


include_once "_partials/header.php" 

?>




<div >

	<form class="navbar-form navbar-left form-inline" id="add-new" action="<?php echo "_inc/edit-item.php?table=$table" ?>" method="post">
		<div class="form-group">
          <input class="form-control" value="<?php echo $link ?>" id="link" type="text" name="link">
        </div>
         <div class="form-group">
          <input class="form-control" value="<?php echo $text ?>" id="text" type="text" name="text">
        </div>

		<div class="form-group">
         <input name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
			<button type="submit" class="btn btn-default" >Uprav</button>
		        <span class="controls">
			        <a href="<?php echo $base_url ?>" class="back-link text-muted">späť</a>
		        </span>
        
     
  </div>
      </form>      


</div>





</div>  
     <footer class="text-center"><small>TMD 2015 - 2017</small></footer>   
	</body>
</html>