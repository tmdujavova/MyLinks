
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

      <form class="navbar-form navbar-left form-inline" id="add-form" action="_inc/add-item.php" method="post">
        <div class="form-group">
          <input class="form-control" placeholder="Vlož link" id="link" type="text" name="link" required>
        </div>
         <div class="form-group">
          <input class="form-control" placeholder="Vlož názov" id="nazov" type="text" name="nazov" required>
        </div>
        <select class="form-control select" name="kategoria" id="kategoria" required>
                        <option value="" name="">Kategória</option>
                        <option value="desc1" name="desc1">CSS frameworks</option>
                        <option value="desc2" name="desc2">obrazky</option>
                        <option value="desc3" name="desc3">ikonky</option>
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
            <a class="list-group-item " href="<?php echo $base_url . '/index.php' ?>">Vsetko</a>
        <a class="list-group-item" href="<?php echo $base_url .'/index.php?kategoria=desc1' ?>">CSS frameworks</a>
        <a class="list-group-item" href="<?php echo $base_url . '/index.php?kategoria=desc2' ?>">obrazky</a>
        <a class="list-group-item" href="<?php echo $base_url . '/index.php?kategoria=desc3' ?>">ikonky</a>
                <div class="list-group-item">
            <form class="form-inline" id="add-cat" action="_inc/add-cat.php" method="post">
        <div class="form-group">
          <input class="form-control new-cat" placeholder="Nová kategória" id="new-cat" type="text" name="new-cat">
        </div>
        <button type="submit" class="btn btn-default" >+</button>
      </form>
    </div>
    </div>