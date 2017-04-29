<?php
require_once '_inc/config.php';

if ( ! isset($_GET['kategoria_id']) )
{
$logged_in = get_user();

$data = $database->select('mylinks', [ 'id', 'nazov' , 'link'], ['user_id' => $logged_in->uid]);

if ( ! $data )
{
            echo '<div class="bezKat alert alert-info col-sm-8" ><i class="fa fa-info-circle" aria-hidden="true"></i>Vytvor si kategóriu.</div>';
}
else {


 echo '<div id="desc-all" class="panel panel-primary col-sm-8 description">
 <h2 class="panel-heading">Všetko</h2>
 <ul class="list-group descr">';

    foreach ( $data as $item ) {
        echo '<li id="desc-all-'. $item['id'].'" class="list-group-item"><a href="'. $item['link'] .'">';
        echo    $item['nazov'] .'</a>' ;
        echo '  <div class="controls pull-right">';
        echo '      <a href="edit.php?id='. $item['id'] .'" class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
        echo '      <a href="delete.php?id='. $item['id'] .'" class="delete-link"><i class="fa fa-trash" aria-hidden="true"></i></a>';
        echo '  </div>';

        echo '</li>';
    }

    echo '</ul>
</div>';}
} else {


    $kategoria_id = $_GET['kategoria_id'];

    $data = $database->select('mylinks', [ 'id', 'nazov' , 'link'], ["AND" => ['kategoria_id' => $kategoria_id, 'user_id' => $logged_in->uid ] ]);
    $nazov_kat = $database->get('cat', "nazov", ["AND" => ['id' => $kategoria_id, 'user_id' => $logged_in->uid ] ]);

    if ( ! $nazov_kat )
{
    show_404();
} else {


    if ( ! $data )
    {
        echo '<div id="desc-'. $kategoria_id .'" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">'. $nazov_kat .'<span class="controls pull-right SPANCat"><a href="edit-cat.php?id='. $kategoria_id .'" class="edit-link AEDKat"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
        echo '      <a href="delete-cat.php?id='. $kategoria_id .'" class="delete-link AEDKat"><i class="fa fa-trash" aria-hidden="true"></i></a></span></h2>
        <ul class="list-group descr">
            <li class="list-group-item">Nič si tu ešte nepridal. </li>

        </ul> </div>';

    } else {


        echo '<div id="desc-'. $kategoria_id .'" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">'. $nazov_kat .'<span class="controls pull-right SPANCat"><a href="edit-cat.php?id='. $kategoria_id .'" class="edit-link AEDKat"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
        echo '      <a href="delete-cat.php?id='. $kategoria_id .'" class="delete-link AEDKat"><i class="fa fa-trash" aria-hidden="true"></i></a></span></h2>
        <ul class="list-group descr">';

            foreach ( $data as $item ) {
                echo '<li id="desc'. $kategoria_id .'-'. $item['id'].'" class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['nazov'] .'</a>' ;
                echo '  <div class="controls pull-right">';
                echo '      <a href="edit.php?id='. $item['id'] .'" class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                echo '      <a href="delete.php?id='. $item['id'] .'" class="delete-link"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                echo '  </div>';

                echo '</li>';
            }
            echo ' </ul> </div>';
        }
    }
}
    ?>

