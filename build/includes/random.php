<?php


function aleatorio(){
  $videos = array(
    "dairymgt_video_1.",
    "dairymgt_video_2.",
    "dairymgt_video_3.",
    "dairymgt_video_4.",
    "dairymgt_video_5.",
    "dairymgt_video_6.",
    "dairymgt_video_7.",
    "dairymgt_video_8.",
    "dairymgt_video_9.",
    "dairymgt_video_10."
  );
  return $videos[array_rand($videos, 1)]; ;
}


function randomCaption($type){
  $captions = array();
  switch ($type) {
    case 'short':
    $captions = array(
      "Decision support tools",
    "Decision making",
    "Economic performance",
    "Environmental stewardship",
    "Improving profitability"
  );
shuffle($captions);
      return $captions;
      break;

    case 'long':
    $captions = array(
      "Decision-making focused on scientific research",
      "Model-based decision support tools",
      "Improving cost-efficiency and profitability",
      "Environmental stewardship in dairy farms",
      "Helping dairy farms improve economic performance"
    );
    shuffle($captions);
          return $captions;
      break;

      default:


      break;
  }
}



function randomMedia($type, &$directory){
  $filenames = array();
  switch ($type) {
    case 'full_screen_video':
    $dir=$directory.'*.mp4';
    $media_files = glob($dir);
    foreach($media_files as $key => $file) {
      $file=basename($file);
      $fileNameOnly = substr($file, 0 , (strrpos(($file), ".")));

      $filenames[$key] = $fileNameOnly;
    }
    break;

    case 'slider':
    $dir=$directory. '*.jpg';
    $media_files = glob($dir);
    foreach($media_files as $key => $file) {
      $fileNameOnly=basename($file);
      //$fileNameOnly = substr($file, 0 , (strrpos($file, ".")));

      $filenames[$key] = $fileNameOnly;
    }
    break;

    case 'full_screen_video_smaller':
    $dir= $directory.'smaller/*.mp4';
    $media_files = glob($dir);
    foreach($media_files as $key => $file) {
      $file=basename($file);
      $fileNameOnly = substr($file, 0 , (strrpos(($file), ".")));

      $filenames[$key] = $fileNameOnly;
    }
    break;
    default:
    break;
  }

  shuffle($filenames);
  return $filenames;
}


// //DEBUG
//    $directory = '../assets/videos/full_screen_video/';
//    $filenames = randomMedia('full_screen_video', $directory);
//
//    $rand_keys = array_rand($filenames, count($filenames));
//
//
//   for ($j=0; $j <count($filenames) ; $j++) {
//     echo $filenames[$rand_keys[$j]];
// echo "<br>";
//   }
//
//  $filenames = randomMedia('slider', $directory);
//    $rand_keys = array_rand($filenames,count($filenames));
// for ($j=0; $j <count($filenames) ; $j++) {
//   echo $filenames[$rand_keys[$j]];
// echo "<br>";
// }
//
// $captions = randomCaption('short');
//    $rand_keys = array_rand($captions,count($captions));
// for ($j=0; $j <count($captions) ; $j++) {
//   echo $captions[$rand_keys[$j]];
// echo "<br>";
// }
//
// $captions = randomCaption('long');
//    $rand_keys = array_rand($captions,count($captions));
// for ($j=0; $j <count($captions) ; $j++) {
//   echo $captions[$rand_keys[$j]];
// echo "<br>";
// }


//USE
//  <img src="<?php echo $image_files[$rand_keys[0]];
//    <h3 class="image_text hidden-xs"><span><?php echo $captions[0]


?>
