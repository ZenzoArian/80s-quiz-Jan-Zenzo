<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/record2.png">
    <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
  </head>
  <body onload="Gone()">
    <audio id="myBad">
      <source src="sound/Badd.mp4" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <audio id="myGood">
        <source src="sound/Good.mp4" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>
    <script src="script.js"></script>
    <div class="intro-container" id="intro-container">
    <p class="intro-header">Don't Funk it up!</p>
    <p class="expText">Move the mouse around the screen to find the answer.</p>
    <div class="startButton" onclick="answerGood()">
      Let's Funk
    </div>
  </div>
    <?php require 'question.php'; ?>
    <?php require 'copy-js.php'; ?>
  </body>
</html>
