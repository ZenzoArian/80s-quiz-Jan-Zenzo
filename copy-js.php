<?php
$scriptAantal = 1;

for ($S = 1; $S <= 10; $S++) {
    if ($S == 1) {
      echo '<script>function answer() {';
        echo 'console.log(vraag);';
      }

      echo '
      if (vraag == '.$scriptAantal.') {
        document.getElementById("Q-1").style.display = "none";
        document.getElementById("Q-2").style.display = "none";
        document.getElementById("Q-3").style.display = "none";
        document.getElementById("Q-4").style.display = "none";
        document.getElementById("Q-5").style.display = "none";
        document.getElementById("Q-6").style.display = "none";
        document.getElementById("Q-7").style.display = "none";
        document.getElementById("Q-8").style.display = "none";
        document.getElementById("Q-9").style.display = "none";
        document.getElementById("Q-10").style.display = "none";
        document.getElementById("Q-'.$scriptAantal.'").style.display = "";
      }
      ';

    if ($S == 10) {
      echo 'vraag++;}</script>';
      }
    $scriptAantal++;
}
?>
