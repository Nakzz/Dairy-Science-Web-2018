<?php
 include 'includes/random.php';
 $randomMedia = aleatorio();
 ?>

 <section id="sec_1" style="background: url('assets/videos/full_screen_video/snapshot/<?php echo $randomMedia?>png') no-repeat center center;" class="autoheight">


<video autoplay muted loop playsinline id="Video1" preload="auto" autoplay="autoplay" loop="loop" onclick="vidplay()" >
  <source src="assets/videos/full_screen_video/<?php echo $randomMedia?>mp4" type="video/mp4">
  <source src="assets/videos/full_screen_video/<?php echo $randomMedia?>webm" type="video/webm">
  your browser does not support HTML5
</video>

<div class="home-bg" onclick="vidplay()"></div>

<div class="dimmed">
  <div class="col-lg-12 landing-text-pos align-center">
    <h2 class="wow animated fadeInDown " data-wow-duration="1s" data-wow-delay="1s"><?php echo texto(); ?></h2>
    <hr id="title_hr"/>
    <!--		<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Grand Space, Portland. 21-26 Sept 2014</p>		-->
    <a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s" data-scroll href="tools.php" target="_blank">Learn More</a>
  </div>
</div>

</section>
