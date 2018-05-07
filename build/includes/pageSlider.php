<?php
include 'includes/random.php';


$directory= 'assets/img/slider/';//Video Directory;
$filenames = randomMedia('slider', $directory);
$rand_keys = array_rand($filenames, count($filenames));

$captions = randomCaption('long');
$rand_keys = array_rand($captions,count($captions));

$numberOfSlides = 5;    //CHANGE TO CHANGE NUMBER OF IMAGES YOU WANT TO SHOW FROM THE DIRECTORY
?>
<!--SLIDER-->
<section>
  <ul id="slippry-slide">

    <?php for ($i=0; $i < $numberOfSlides; $i++) {?>

      <li>
        <a href="#slide <?php $i ?> ">
          <img src="<?php echo $directory . $filenames[$rand_keys[$i]];?>
          "alt="<?php echo $captions[$rand_keys[$i]]; ?>">
        </a>
      </li>

    <?php } ?>

  </ul>
</section>




<!--/SLIDER-->
