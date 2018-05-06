<?php
// example of how to use basic selector to retrieve HTML contents
include('./simple_html_dom.php');

// get DOM from URL or file
$html = new simple_html_dom();

$html->load_file('tools.html');

$tittleCount =0;
$bodyCount =0;
static $sectionCount =0;
static $sectionCountEnd=0;

$section = array();
$tittle = array();
$body = array();

function debug_to_console($title ,$data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug ".$title.": " . $output . "' );</script>";
}

foreach ($html->find('h4.sectionHeading') as $sectionTittle) {
  //echo $sectionTittle->plaintext; //.'<br><hr>';
  array_push($section, $sectionTittle->innertext);
  //
}

foreach ($html->find('a.accordion-toggle') as $value) {
  //echo $value->plaintext; //.'<br><hr>';
  array_push($tittle, $value->innertext);
  $tittleCount++;
}

foreach($html->find('div.media') as $e){
    //echo $e->outertext . '<br>';
    array_push($body, $e->outertext);
    $bodyCount++;
}

function sectionBeginingSyntax($array){
  static $sectionCount=0;
  $name= $array[$sectionCount];
  $href = str_replace(' ','', $name);
  echo '<!--'.$name.'-->
  <div class="col-sm-12 paddingtopsmall">
  <h2 href="'.$href.'">'.$name.'</h2>
  <div id="accordion">';
  $sectionCount++;

}

function sectionEndingSyntax($array){
static $sectionCountEnd=0;

$name= $array[$sectionCountEnd];

  echo '      </div>
      </div>
      <!--'.$name.' ends-->';
      $sectionCountEnd++;
}


for ($i=0; $i < 60; $i++) {

  switch ($i) {
    case 0:
    sectionBeginingSyntax($section);
    break;

    case 9:
    sectionBeginingSyntax($section);
    break;

    case 15:
    sectionBeginingSyntax($section);

    break;
    case 25:
    sectionBeginingSyntax($section);
    break;

    case 26:
    sectionBeginingSyntax($section);
    break;
    case 33:
    sectionBeginingSyntax($section);
    break;

    case 39:
    sectionBeginingSyntax($section);
    break;

    case 41:
    sectionBeginingSyntax($section);
    break;


    case 51:
    sectionBeginingSyntax($section);
    break;


    case 56:
    sectionBeginingSyntax($section);
    break;

    default:

  }



  echo '<div class="atab well"> ';
  echo "\r\n";
  echo '  <input id="tab'.($i+1).'" type="checkbox" name="tabs"> ';
    echo "\r\n";
  echo '  <label for="tab'.($i+1).'"> '.$tittle[$i].'</label> ';
    echo "\r\n";
  echo '  <div class="atab-content"> ';
    echo "\r\n";
  echo $body[$i];
    echo "\r\n";
  echo '</div> ';
    echo "\r\n";
  echo '</div> ';
    echo "\r\n";

    switch ($i) {
      case 8:
      sectionEndingSyntax($section);
      break;

      case 14:
      sectionEndingSyntax($section);
      break;

      case 24:
      sectionEndingSyntax($section);
      break;

      case 25:
      sectionEndingSyntax($section);
      break;

      case 32:
      sectionEndingSyntax($section);
      break;

      case 38:
      sectionEndingSyntax($section);
      break;

      case 40:
      sectionEndingSyntax($section);
      break;

      case 50:
      sectionEndingSyntax($section);
      break;

      case 56:
      sectionEndingSyntax($section);
      break;

      case 59:
      sectionEndingSyntax($section);
      break;

      default:
    }

}

// debug_to_console ("tittleCount",$tittleCount);
// debug_to_console ("bodyCount",$bodyCount);
// debug_to_console ("sectionCount",$sectionCount);
?>
