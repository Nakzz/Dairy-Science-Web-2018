function toggleShow(){
  var tagetDiv = document.getElementById("SlideOnClick");

    tagetDiv.classList.toggle("hideDiv");
}


      function vidplay() {
         var video = document.getElementById("Video1");

         if (video.paused) {
            video.play();
         } else {
            video.pause();
         }
      }
