<?php
require_once 'MenuController.php';

 if(isset($_GET['id'])){
     $newsId= $_GET['id']; 
 }

 $news =new MenuController;
 $currenNews = $news-> edit($newsId);

//update
 if(isset($_POST['submit'])){
     $news->update($_POST, $newsId);
 }
?>


<form method="post">
    Image:
    <input type="file" name="image" value="<?php echo $currenNews['news_image']; ?>"><br>
    Title:
    <input type="text" name="title" value="<?php echo $currenNews['news_title']; ?>"><br>
    Body:
    <input type="text" name="body" value="<?php echo $currenNews['news_body']; ?>"><br>
    <input type="submit" name="submit" value="Update">


</form>