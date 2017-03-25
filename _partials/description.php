       


<?php $data = $database->select('desc1', [ 'id', 'text' , 'link' ]); ?>
        <div id="desc1" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">CSS frameworks</h2>
    		<ul class="list-group">
                    <?php
            foreach ( $data as $item ) {
                echo '<li class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['text'] .'</a>' ;

              echo '</li>';
            }
        ?>                
    		</ul>
            </div>


<?php $data = $database->select('desc2', [ 'id', 'text' , 'link' ]); ?>
        <div id="desc2" class="panel panel-primary col-sm-8 description">
        <h2 class="panel-heading">obrazky</h2>
            <ul class="list-group">
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
            <ul class="list-group">
                    <?php
            foreach ( $data as $item ) {
                echo '<li class="list-group-item"><a href="'. $item['link'] .'">';
                echo    $item['text'] .'</a>' ;

              echo '</li>';
            }
        ?>                
            </ul>
            </div>

        
