       


        <?php $data = $database->select('desc1', [ 'id', 'text' , 'link' ]); ?>
        <div id="desc1" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">CSS frameworks</h2>
    		<ul class="list-group descr">
                    <?php
            foreach ( $data as $item ) {
                echo '<li class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['text'] .'</a>' ;
                echo '  <div class="controls pull-right">';
                echo '      <a href="edit.php?id='. $item['id'] .'" class="edit-link">uprav</a>';
                echo '      <a href="delete.php?id='. $item['id'] .'" class="delete-link">X</a>';
                echo '  </div>';

              echo '</li>';
            }
        ?>                
    		</ul>
            </div>


        <?php $data = $database->select('desc2', [ 'id', 'text' , 'link' ]); ?>
        <div id="desc2" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">obrazky</h2>
            <ul class="list-group descr">
                    <?php
            foreach ( $data as $item ) {
                echo '<li class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['text'] .'</a>' ;

              echo '</li>';
            }
        ?>                
            </ul>
            </div>


            <?php $data = $database->select('desc3', [ 'id', 'text' , 'link' ]); ?>
        <div id="desc3" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">ikonky</h2>
            <ul class="list-group descr">
                    <?php
            foreach ( $data as $item ) {
                echo '<li class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['text'] .'</a>' ;

              echo '</li>';
            }
        ?>                
            </ul>
            </div>

        
