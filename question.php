<?php
$vraagAantal = 1;
$img = 0;
for ($Q = 1; $Q <= 10; $Q++) {
if ($Q == 1) {
  $A = "Good";
  $B = "Bad";
  $C = "Bad";
  $question = "Bon Jovi - Livin' On A Prayer <br> Woah, we're half way there";
  $RA = "Woah, livin' on a prayer";
  $RB = "Woah, sitting on a pear";
  $RC = "Woah, were getting there";
  $VID = '<iframe align=middle id="F1" width="560" height="315" src="https://www.youtube.com/embed/lDK9QqIzhwk?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}if ($Q == 2) {
  $A = "Bad";
  $B = "Good";
  $C = "Bad";
  $question = "Survivor - Eye Of The Tiger<br>It's the eye of the tiger, ";
  $RA = "It's the thrill of the night";
  $RB = "It's the thrill of the fight";
  $RC = "It's the thrill of the kite";
  $VID = '<iframe id="F2" width="560" height="315" src="https://www.youtube.com/embed/btPJPFnesV4?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}if ($Q == 3) {
  $A = "Good";
  $B = "Bad";
  $C = "Bad";
  $question = "The Human League - Don't You Want Me<br>Don't you";
  $RA = "Want me, baby?";
  $RB = "Want me, maybe?";
  $RC = "Want me, lady?";
  $VID = '<iframe id="F3" width="560" height="315" src="https://www.youtube.com/embed/uPudE8nDog0?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}if ($Q == 4) {
  $A = "Bad";
  $B = "Good";
  $C = "Bad";
  $question = "Eurythmics - Sweet Dreams (Are Made Of This)<br>Sweet dreams are made of this";
  $RA = "Who am I to take a pee?";
  $RB = "Who am I to disagree?";
  $RC = "Who am I to break a knee?";
  $VID = '<iframe id="F4" width="560" height="315" src="https://www.youtube.com/embed/qeMFqkcPYcg?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}if ($Q == 5) {
  $A = "Bad";
  $B = "Bad";
  $C = "Good";
  $question = "Another One Bites the Dust - Queen<br>Another one bites the dust";
  $RA = "And another girl gone, and another girl gone";
  $RB = "And another one went, and another one went";
  $RC = "And another one gone, and another one gone";
  $VID = '<iframe id="F5" width="560" height="315" src="https://www.youtube.com/embed/Wz_DNrKVrQ8?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}if ($Q == 6) {
  $A = "Good";
  $B = "Bad";
  $C = "Bad";
  $question = "Whitney Houston - I Wanna Dance With Somebody<br>Oh, I wanna dance with somebody";
  $RA = "I wanna feel the heat with somebody";
  $RB = "I wanna feel the beat with somebody";
  $RC = "I wanna feel no need with somebody";
  $VID = '<iframe id="F6" width="560" height="315" src="https://www.youtube.com/embed/eH3giaIzONA?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}if ($Q == 7) {
  $A = "Bad";
  $B = "Good";
  $C = "Bad";
  $question = "Soft Cell - Tainted Love<br>Now I know I've got to";
  $RA = "Run away I've got to<br>Go today";
  $RB = "Run away I've got to<br>Get away";
  $RC = "Run away I've got to<br>Be away";
  $VID = '<iframe id="F7" width="560" height="315" src="https://www.youtube.com/embed/XZVpR3Pk-r8?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}if ($Q == 8) {
  $A = "Good";
  $B = "Bad";
  $C = "Bad";
  $question = "Wham! - Wake Me Up Before You Go Go<br>Wake me up before you go-go";
  $RA = "Don't leave me hanging on like a yo-yo";
  $RB = "Don't leave me hanging on like a pogo";
  $RC = "Don't leave me hanging on like a polo";
  $VID = '<iframe id="F8" width="560" height="315" src="https://www.youtube.com/embed/h75mqUm0lIo?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}if ($Q == 9) {
  $A = "Bad";
  $B = "Bad";
  $C = "Good";
  $question = "Journey - Don't Stop Believin'<br>Don't stop believin'";
  $RA = "Hold on to the meaning'";
  $RB = "Hold on to the ceiling'";
  $RC = "Hold on to the feelin'";
  $VID = '<iframe id="F9" width="560" height="315" src="https://www.youtube.com/embed/1k8craCGpgs?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}if ($Q == 10) {
  $A = "Bad";
  $B = "Good";
  $C = "Bad";
  $question = "Rick Astley - Never Gonna Give You Up<br>Never gonna give you up<br>Never gonna let you down";
  $RA = "Never gonna run around and alert you";
  $RB = "Never gonna run around and desert you";
  $RC = "Never gonna run around and dessert you";
  $VID = '<iframe id="F10" width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}

    $img++;
    $random = rand(0,90);
    echo "
    <style>
    #img-div-".$img."{
      margin-left: ".$random."%;
    }
    </style>";

    echo'

    <div class="Q-' . $vraagAantal . '" id="Q-' . $vraagAantal . '">
      <h1>Question '.$vraagAantal.' <br> '.$question.'</h1>
      '.$VID.'
      <div id="img-div-'.$img.'">
      <div class="img-div">
      <img src="image/record2.png" alt="" onclick="answer'.$A.'()">
      </div>
      <div class="all-Q">
      <div class="question-Q'.$Q.'-R-A">
      <h2>
      '.$RA.'
      </h2>
      </div>
      </div>
      </div>

';
$img++;
$random = rand(0,90);
echo "
<style>
#img-div-".$img."{
  margin-left: ".$random."%;
}
</style>";

echo'
      <div id="img-div-'.$img.'">
      <div class="img-div">
      <img src="image/record2.png" alt="" onclick="answer'.$B.'()">
      </div>
      <div class="all-Q">
      <div class="question-Q'.$Q.'-R-B">
      <h2>
      '.$RB.'
      </h2>
      </div>
      </div>
      </div>

';
$img++;
$random = rand(0,90);
echo "
<style>
#img-div-".$img."{
  margin-left: ".$random."%;
}
</style>";

echo'
      <div id="img-div-'.$img.'">
      <div class="img-div">
      <img src="image/record2.png" alt="" onclick="answer'.$C.'()">
      </div>
      <div class="all-Q">
      <div class="question-Q'.$Q.'-R-C">
      <h2>
      '.$RC.'
      </h2>
      </div>
      </div>
      </div>

</div>

    ';
    $vraagAantal++;
}
?>
