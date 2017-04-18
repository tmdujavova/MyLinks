
<!-- zistit user_id a z neho vyberat [where]

vsetko dat dokopy, podla toho co je vybrane hladat cez kategoriu [where] .... v linku? #id  ??
-->
<?php
    require_once '_inc/config.php';

    if ( ! isset($_GET['kategoria']) )
    {

         $data = $database->select('mylinks', [ 'id', 'nazov' , 'link']);

        echo '<div id="desc" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">vsetko</h2>
            <ul class="list-group descr">';

            foreach ( $data as $item ) {
                echo '<li id="desc-'. $item['id'].'" class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['nazov'] .'</a>' ;
                echo '  <div class="controls pull-right">';
                echo '      <a href="edit.php?id='. $item['id'] .'" class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                echo '      <a href="delete.php?id='. $item['id'] .'" class="delete-link"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                echo '  </div>';

              echo '</li>';
            }

            echo '</ul>
            </div>';
    }

    $kategoria = $_GET['kategoria'];

        $data = $database->select('mylinks', [ 'id', 'nazov' , 'link'], ['kategoria' => $kategoria ]);

if ( ! $data )
        {
            show_404();
        }


        echo '<div id="desc1" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">'. $kategoria .'</h2>
    		<ul class="list-group descr">';

            foreach ( $data as $item ) {
                echo '<li id="desc1-'. $item['id'].'" class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['nazov'] .'</a>' ;
                echo '  <div class="controls pull-right">';
                echo '      <a href="edit.php?id='. $item['id'] .'" class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                echo '      <a href="delete.php?id='. $item['id'] .'" class="delete-link"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                echo '  </div>';

              echo '</li>';
            }
      echo '
    		</ul>
            </div>'





?>

