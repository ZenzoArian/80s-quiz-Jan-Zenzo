let vraag = 1;
let score = 0;
let done = false;
let question = 0;
let once = 0;
function Gone() {
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
}

var x = document.getElementById("myBad");
var y = document.getElementById("myGood");
function playAudioB() {
    x.play();
}
function playAudioG() {
  y.play();
}



function noBanner() {
document.getElementById("intro-container").style.display = "none";
}
function answerGood() {
  noBanner();
    if (done == false) {
      if (once != 0) {
        score++;
        question++;
        playAudioG();
      }else {
        once = 1;
      }
      if (score > 10) {
        score = 10;
      }
      control();
    }

    if (question == 10) {
      done = true;
      end();
    }
    stopVideo();
}

function answerBad() {
  if (done == false) {
    if (once != 0) {
      score--;
      question++;
      playAudioB();
    }else {
      once = 1;
    }
    if (score < 0) {
      score = 0;
    }
    control();
  }
  if (question == 10) {
    done = true;
    end();
  }
  stopVideo();
}


function end() {
  if (done == true) {
    number = "profile_viewer_uid=";
    number += score;
    document.cookie=number;
    window.location.href = "change.php";
  }
}

function stopVideo() {
  var iframe = document.getElementById('F1');
  iframe.src = iframe.src;
  iframe = document.getElementById('F2');
  iframe.src = iframe.src;
  iframe = document.getElementById('F3');
  iframe.src = iframe.src;
  iframe = document.getElementById('F4');
  iframe.src = iframe.src;
  iframe = document.getElementById('F5');
  iframe.src = iframe.src;
  iframe = document.getElementById('F6');
  iframe.src = iframe.src;
  iframe = document.getElementById('F7');
  iframe.src = iframe.src;
  iframe = document.getElementById('F8');
  iframe.src = iframe.src;
  iframe = document.getElementById('F9');
  iframe.src = iframe.src;
  iframe = document.getElementById('F10');
  iframe.src = iframe.src;
}
