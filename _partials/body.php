
<?php if ( logged_in() ) : $logged_in = get_user() ?>
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

            <?php
            $kategorie = $database->select('cat', [ 'id', 'nazov'], [ 'user_id' => $logged_in->uid ]);

            foreach ( $kategorie as $name_kat ) {

              echo '<option value="'. $name_kat['id'].'" name="'. $name_kat['id'].'">'. $name_kat['nazov'].'</option>';
            }
            ?>

          </select>
          <button type="submit" class="btn btn-default" >Pridaj</button>

          <!-- <input class="button" type="submit" value="Pridaj link">-->
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><?= plain( $logged_in->email ) ?></li>
        <li><a href="<?php echo "$base_url/logout.php" ?>" class="btn btn-default logout">logout</a></li>

          <?php
          /*
            if (logged_in()
              ) {
              echo "logged in";


            } else {
              echo "Forbidden";
            }*/
          ?>

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


  <div class="row">
    <div class="list-group list col-sm-3">

      <h2>Kategória:</h2>
      <a class="list-group-item " href="<?php echo $base_url . '/index.php' ?>">Vsetko</a>

      <?php
      $kategorie = $database->select('cat', [ 'id', 'nazov'], [ 'user_id' => $logged_in->uid ]);

      foreach ( $kategorie as $name_kat ) {

        echo '<a class="list-group-item" href="'. $base_url .'/index.php?kategoria_id='. $name_kat['id'].'">'. $name_kat['nazov'].'</a>';
      }
      ?>

      <div class="list-group-item">
        <form class="form-inline" id="add-cat" action="_inc/add-cat.php" method="post">
          <div class="form-group">
            <input class="form-control new-cat" placeholder="Nová kategória" id="new-cat" type="text" name="new-cat">
          </div>
          <button type="submit" class="btn btn-default" >+</button>
        </form>
      </div>
    </div>
    <?php endif ?>