<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>My Links</title>
		<link rel="stylesheet"  href="assets/css/normalize.css">
        <link rel="stylesheet"  href="assets/css/bootstrap-theme.css">
		<link rel="stylesheet"  href="assets/css/style.css">	
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


		<script src="assets/js/script.js"></script>

		<!--[if lt IE 9]>
	    	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
		<![endif]-->

	</head>

	<body id="domov">
<div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MyLinks</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form class="navbar-form navbar-left form-inline" id="add-form" action="#" method="post">
        <div class="form-group">
          <input class="form-control" placeholder="Vlož link" id="text" type="text" name="new-link">
        </div>
        <select class="form-control select" name="Kategória">
                        <option value="">Kategória</option>
                        <option value="rôzne">Rôzne</option>
                        <option value="frameworks">CSS frameworks</option>
                        <option value="generato">CSS generator</option>
                        <option value="knihy">knihy</option>
                        <option value="ikonky">ikonky</option>
                    </select>
        <button type="submit" class="btn btn-default" >Pridaj</button>
       <!-- <input class="button" type="submit" value="Pridaj link">-->
      </form>      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Meno Priezvisko</a></li>
 
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


	<div class="row">
		<div class="list-group list col-sm-3">
			
            <h2>Kategória:</h2>
                <a class="list-group-item active" href="#desc0">Rôzne</a>
				<a class="list-group-item" href="#desc1">CSS frameworks</a>
				<a class="list-group-item" href="#desc2">CSS generator</a>
				<a class="list-group-item" href="#desc3">knihy</a>
				<a class="list-group-item" href="#desc4">obrazky</a>
				<a class="list-group-item" href="#desc5">ikonky</a>
                <div class="list-group-item">    
            <form class="form-inline" id="add-cat" action="#" method="post">
        <div class="form-group">
          <input class="form-control new-cat" placeholder="Nová kategória" id="text" type="text" name="new-cat">
        </div>
        <button type="submit" class="btn btn-default" >+</button>
      </form>      
		</div> 	
		</div>

    <div class="desc-container">
    <?php
                include '_partials/description.php';
            ?>
            
		</div>
    </div>

</div>  
     <footer class="text-center"><small>TMD 2015 - 2017</small></footer>   
	</body>
</html>