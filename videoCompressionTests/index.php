<?php
include 'random.php';

$originalFileSize = 12263158;
$directory= './';//Video Directory;

$filenames = randomMedia('full_screen_video',$directory);
$rand_keys = array_rand($filenames, count($filenames));


$dir=$directory.'*.mp4';
$media_files = glob($dir);

$info = array(
  "Original",
  "-pre vs -crf 19 v9_2",
  "-pre vs -crf 17 v9",
  "-pre vs -crf 22 h.264",
  "-pre vs -crf 25 x265",
  "-pre vs -crf 28 c938"
);

foreach($media_files as $key => $file) {
  $filesize = filesize($file);
  $filesizeMB = round($filesize / 1024 / 1024, 1);
  $compressed =100 - (($filesize/  $originalFileSize)*100);

  $file=basename($file);
  $fileNameOnly = substr($file, 0 , (strrpos(($file), ".")));



  ?>

  <section id="sec_1" style="no-repeat center center;" class="autoheight">
    <video autoplay muted loop playsinline id="Video1" preload="auto" autoplay="autoplay" loop="loop" onclick="vidplay()" >
      <source src="<?php echo $fileNameOnly?>.mp4" type="video/mp4">
      </video>

      <div style="margin: 1em 1em 1em 1em;">
        <h1><?php echo $fileNameOnly?>.mp4</h1>
        <p>File Size: <?php echo " ". $filesizeMB?>MB &#09; Compressed: <?php echo " ". $compressed?>% <?php echo "  </br> Descriptor: ". $info[$key]?> </p>
      </div>
    </section>
    <?php

  }


  ?>
