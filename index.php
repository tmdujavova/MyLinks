<?php include_once "_partials/header.php";
if ( ! logged_in() ) {
  header("Location: $base_url/login.php");
  die();
}
else {
 $logged_in = get_user();
}
?>

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
            <input class="form-control" placeholder="http://Vlož link" id="link" type="text" name="link" required>
          </div>
          <div class="form-group">
            <!--<div class="radio">
              <label class="radio-inline">
                <input type="radio" name="title" id="Linktitle" value="Linktitle" checked> Titulok
              </label>
                <label class="radio-inline">
                  <input type="radio" name="title" id="myTitle" value="myTitle"> Vlastný názov
                </label>
              </div>-->
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
            <button type="submit" class="btn btn-default pridaj" >Pridať</button>

            <!-- <input class="button" type="submit" value="Pridaj link">-->
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="navbar-link"><?= plain( $logged_in->email ) ?></li>
            <li><a href="<?php echo "$base_url/logout.php" ?>" class="btn btn-default logout">Odhlásiť sa</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <div class="row">
      <div class="list-group list col-sm-3">

        <h2 class="popisKat">Kategória:</h2>
        <ul class="ulKat">
          <li class="LiKat"><a class="list-group-item " href="<?php echo $base_url . '/index.php' ?>">Všetko</a></li>

          <?php
          $kategorie = $database->select('cat', [ 'id', 'nazov'], [ 'user_id' => $logged_in->uid ]);

          foreach ( $kategorie as $name_kat ) {

            echo '<a class="list-group-item" href="'. $base_url .'/index.php?kategoria_id='. $name_kat['id'].'">'. $name_kat['nazov'].'</a>';
          }
          ?>
        </ul>

        <div class="list-group-item">
          <form class="form-inline" id="add-cat" action="_inc/add-cat.php" method="post">
            <div class="form-group formKat">
              <input class="form-control new-cat" placeholder="Nová kategória" id="new-cat" type="text" name="new-cat" required>
            </div>
            <button type="submit" class="btn btn-default pridajKat" >+</button>
          </form>
        </div>
      </div>


      <div class="desc-container">
       <?php include '_partials/description.php' ?>
     </div>
     <?php include "_partials/footer.php" ?>