       


        <?php $data = $database->select('desc1', [ 'id', 'text' , 'link', 'table' ]); ?>
        <div id="desc1" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">CSS frameworks</h2>
    		<ul class="list-group descr">
                    <?php
            foreach ( $data as $item ) {
                echo '<li id="desc1-'. $item['id'].'" class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['text'] .'</a>' ;
                echo '  <div class="controls pull-right">';
                echo '      <a href="edit.php?table='. $item['table'] .'&id='. $item['id'] .'" class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                echo '      <a href="delete.php?table='. $item['table'] .'&id='. $item['id'] .'" class="delete-link"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                echo '  </div>';

              echo '</li>';
            }
        ?>                
    		</ul>
            </div>


        <?php $data = $database->select('desc2', [ 'id', 'text' , 'link', 'table' ]); ?>
        <div id="desc2" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">obrazky</h2>
            <ul class="list-group descr">
                    <?php
            foreach ( $data as $item ) {
                echo '<li id="desc2-'. $item['id'].'" class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['text'] .'</a>' ;
                echo '  <div class="controls pull-right">';
                echo '      <a href="edit.php?table='. $item['table'] .'&id='. $item['id'] .'" class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                echo '      <a href="delete.php?table='. $item['table'] .'&id='. $item['id'] .'" class="delete-link"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                echo '  </div>';

              echo '</li>';
            }
        ?>                
            </ul>
            </div>


            <?php $data = $database->select('desc3', [ 'id', 'text' , 'link', 'table' ]); ?>
        <div id="desc3" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">ikonky</h2>
            <ul class="list-group descr">
                    <?php
            foreach ( $data as $item ) {
                echo '<li id="desc3-'. $item['id'].'" class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['text'] .'</a>' ;
                echo '  <div class="controls pull-right">';
                echo '      <a href="edit.php?table='. $item['table'] .'&id='. $item['id'] .'" class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                echo '      <a href="delete.php?table='. $item['table'] .'id='. $item['id'] .'" class="delete-link"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                echo '  </div>';

              echo '</li>';
            }
        ?>                
            </ul>
            </div>

        
