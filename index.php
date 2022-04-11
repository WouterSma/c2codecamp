<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CodeCamp</title>
</head>

<body>
        <?php require_once "header.php"; ?>
   <div class="container">
        <div class="clock">
        <div class="outer-clock-face">
        <div class="inner-clock-face">

        <div class="hand hour-hand"></div>
        <div class="hand min-hand"></div>
        <div class="hand second-hand"></div>
        </div>
            <div class="marking marking-one"></div>
            <div class="marking marking-two"></div>
            <div class="marking marking-three"></div>
            <div class="marking marking-four"></div>
            <script src="javascript/anclock.js"></script>
        </div>
        <div id="clock"></div>
        <div id="date"></div>
        <script src="javascript/clock.js"></script>
    </div>

    
   </div>
   <img src="img/areamap.png" alt="img areamap">
    <?php require_once("footer.php") ?>
    <a class="hidden" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">:)</a>
</body>
</html>