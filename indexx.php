<?php
require_once 'MenuController.php';




?>

<div>
    <?php
    $products = new MenuController;
    $all = $products->readData();
    for($i=0; $i<count($all); $i++){
        echo 
        '<div> 
           <div>
             <img src="' .$all[$i]['news_image'] . '">

           </div>
        
        
           <div>
             <h5>' .$all[$i]['news_title'] .'</h5>
             <p>' .$all[$i]['news_body'] .'</p>
           </div>
        </div>';
    }
    ?>
</div>