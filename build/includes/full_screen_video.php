<?php
include 'includes/random.php';

$directory = 'assets/videos/full_screen_video/'; //Video Directory;

$filenames = randomMedia('full_screen_video', $directory);
$rand_keys = array_rand($filenames, count($filenames));

$filenamesSmaller = randomMedia('full_screen_video_smaller', $directory);
$rand_keysSmaller = array_rand($filenames, count($filenames));

$captions = randomCaption('long');
$rand_keys = array_rand($captions, count($captions));

$previewFilename = $directory . 'snapshot/' . $filenames[$rand_keys[0]]; //img preview directory
$videoFilename = $directory . $filenames[$rand_keys[0]];
$videoFilenameSmaller = $directory . "smaller/" . $filenamesSmaller[$rand_keysSmaller[0]];

$smdirectory = 'assets/img/slider/phones/'; //Video Directory;
$smfilenames = randomMedia('slider', $smdirectory);
$smrand_keys = array_rand($smfilenames, count($smfilenames));

$numberOfSlides = 5; //CHANGE TO CHANGE NUMBER OF IMAGES YOU WANT TO SHOW FROM THE DIRECTORY

?>

<!-- <section id="sec_1" style="background: url('<?php //echo $previewFilename ?>.png') no-repeat center center;" class="autoheight"> -->
<section id="sec_1" class="autoheight">
  <video autoplay muted loop playsinline id="Video1" preload="auto" autoplay="autoplay" loop="loop" onclick="vidplay()" poster= "assets/videos/full_screen_video/snapshot/"<?php echo $videoFilenameSmaller ?> ".jpg">
    <source src="<?php echo $videoFilename ?>.mp4" type="video/mp4">
        <!-- <source src="<?php //echo $videoFilenameSmaller?>.mp4" type="video/mp4" media="(max-width: 480px)"> -->

        your browser does not support HTML5
      </video>

      <div class="home-bg" onclick="vidplay()"></div>

      <div class="dimmed">
        <div class="col-lg-12 landing-text-pos align-center">
          <h2 class="wow animated fadeInDown " data-wow-duration="1s" data-wow-delay="1s"><?php echo $captions[$rand_keys[0]]; ?></h2>
          <hr id="title_hr"/>
          <!--		<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Grand Space, Portland. 21-26 Sept 2014</p>		-->
          <a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s" data-scroll href="tools.php" target="_blank">Learn More</a>
        </div>
      </div>

    </section>


<!--SLIDER-->
<section id= "sec_2" style= "padding-top:120px">

<script>
//var pageName = "Slider";
</script>

  <ul id="slippry-slide">

    <?php for ($i = 0; $i < $numberOfSlides; $i++) {?>

      <li>

        <a href="#slide <?php $i?> ">
          <img src="<?php echo $smdirectory . $smfilenames[$smrand_keys[$i]]; ?>">

        </a>

        <div class="dimmed">
        <div class="col-lg-12 landing-text-pos align-center">
          <h2 style="color:white" class="wow animated fadeInDown " data-wow-duration="1s" data-wow-delay="1s"><?php echo $captions[$rand_keys[0]]; ?></h2>
          <hr id="title_hr"/>
          <!--		<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Grand Space, Portland. 21-26 Sept 2014</p>		-->
          <a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s" data-scroll href="tools.php" target="_blank">Learn More</a>
        </div>
      </li>



    <?php }?>



  </ul>
</section>




<!--/SLIDER-->

