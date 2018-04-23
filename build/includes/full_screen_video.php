<?php

 include 'includes/random.php';
 $randomMedia = aleatorio();
 ?>

<video muted id="Video1" preload="auto" autoplay="autoplay" loop="loop" onclick="vidplay()" >
  <source src="assets/videos/full_screen_video/<?php echo $randomMedia?>mp4" type="video/mp4">
  <source src="assets/videos/full_screen_video/<?php echo $randomMedia?>webm" type="video/webm">
  your browser does not support HTML5
</video>
