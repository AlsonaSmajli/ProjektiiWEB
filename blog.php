<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H A L T therapy - Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'nav.php';  ?>
    <div id="slider">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <div id="slides">
            <div id="overflow">
               <div class="inner">
                  <div class="slide slide_1">
                     <div class="slide-content">
                         <img src="img/motivational-text-yellow-background.jpg" alt="" class="Mental-HealthCare">
                     </div>
                  </div>
                  <div class="slide slide_2">
                     <div class="slide-content">
                         <img src="img/think-outside-box-quotes-business-concept.jpg" alt="" class="Mental-HealthCare"> 
                     </div>
                  </div>
                  <div class="slide slide_3">
                     <div class="slide-content">
                         <img src="img/fab-lentz-mRMQwK513hY-unsplash.jpg" alt="" class="Mental-HealthCare">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
           
         </div>
         <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            
        </div>

        </div>
   <h1>Our blog</h1>
   <hr id="hr_">
   <div class="our_blog">
    <div class="blog_1">
        <img src="img/morning.jpg" alt="">
        <a href="blog1.html"><p>Morning Routine to Make You Happy And Productive All Day</p></a>
    </div>

    <div class="blog_2">
        <img src="img/happy.jpg" alt="">
       <a href="blog2.html"><p>Mental Health Day Off</p></a>
    </div>

    <div class="blog_3">
        <img src="img/smile.jpg" alt="">
        <a href="blog3.html"><p>Anxiety Exercises to Help You Relax</p></a>
    </div>

    <div class="blog_4">
        <img src="img/meditation.jpg" alt="">
        <a href="blog4.html"><p>Simple Meditation for Beginners</p></a>
    </div>

</div>

</div>
    <?php include 'footer.php';  ?>
    <script src="js/main.js"></script>
</body>
</html>