<?php
$vraagAantal = 1;
for ($Q = 1; $Q <= 10; $Q++) {
    echo '

    <div class="Q-' . $vraagAantal . '" id="Q-' . $vraagAantal . '">
      <h1>Question '.$vraagAantal.'</h1>
    <div class="img-div">
   <img src="image/record2.png" alt="" onclick="answer()">
 </div>
 <div class="all-Q">
 <div class="question-1-R-A">
   <h2>
     sdfsd
   </h2>
 </div>
</div>
</div>

    ';
    $vraagAantal++;
}
?>
