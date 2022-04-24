<?php
require_once 'MenuController.php';

if(isset($_GET['id'])){
    $newsId= $_GET['id']; 
}
$news = new MenuController;
$news -> delete($newsId);



?>