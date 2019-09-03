<?php session_start();
   echo $_SESSION['player']; ?>
 <!DOCTYPE html>
 <html lang="nl" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style2.css">
     <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
     <link rel="shortcut icon" href="image/record2.png">
     <title>Score</title>
   </head>
   <body>
     <h1>Congratulations <?php echo $_SESSION['player']; ?>!</h1>
     <h2><?php $pp = $_COOKIE['profile_viewer_uid']; echo "Score: " . $pp; ?></h2>
     <h3>You completed the quiz, look  below for your score on the scoreboard.</h3>
     <a class="startButton" href="index.php">
      Try-Again
    </a>
     <div class="block"></div>
   </body>
 </html>
 <?php
 require 'ietsx2.php';
  ?>
