(function() {
  "use strict";

  function playPause(btn, vid) {
    var vid = document.getElementById(vid);
    if(vid.paused){
      vid.play();
      btn.innerHTML = "PAUSE";
    } else{
      vid.play();
      btn.innerHTML = "PLAY";
    }
      playPause.addEventListener('click', playpausebtn, false);
  }
})();
