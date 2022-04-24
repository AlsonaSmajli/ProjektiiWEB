<?php
require_once 'MenuController.php';

$news= new MenuController;
if(isset($_POST['submit'])){
    $news->insert($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .create{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding:20px;
            padding-bottom: 60px; 
        }
        #buton{
            padding:10px 30px;
            font-size: 20px;
            background: rgb(62, 90, 62);;
            color:white;
            margin:0 5px;
            text-transform: capitalize;

        }
        #img{
            padding:10px 20px;
            font-size: 15px;
            color:green;
            margin:0 5px;
            text-transform: capitalize; 
        }
        #title{
            padding:5px;
            font-size: 15px;
            margin:0 5px;
            text-transform: capitalize;
        }
        #content{
            padding:5px;
            font-size: 15px;
            margin:0 5px;
            text-transform: capitalize;
        }
     


    </style>
</head>
<body>
    

<div class="create">
    <form method="POST">
        Image:
        <input type="file" id ="img"name="image" placeholder="Image"> <br><br>
       
        <input type="text" id="title" name="title"placeholder="Enter the title here"> <br><br>
        
        <textarea name="body" id="content" cols="30" rows="10" placeholder="Enter the content here"></textarea> <br><br>
        <input type="submit" id="buton" name="submit" value="Save">

    </form>
</div>
</body>
</html>