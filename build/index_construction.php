<?php
$GLOBALS['title'] = 'Dairy Management: Home';

?>

	<!DOCTYPE html>
	<html>

	<head>

		<script type="text/javascript">
			var bugs = [

				""
			];
		</script>


		<!-- DESCRIPTION -->
		<meta name="description" content="This site is designed to support dairy farming
	decision-making focusing on model-based scientific research.
	The ultimate goal is to provide user-friendly computerized
	decision support tools to help dairy farmers improve their
	economic performance along with environmental  stewardship.">

		<meta name="keywords" content="" />
		<meta name="author" content="Ajmain Naqib" />

		<?php
include 'includes/header.php';
?>

	</head>

	<body id="top" data-spy="scroll" data-target=".header" data-offset="80">


<section id="sec_1"class="autoheight">
  <video autoplay muted loop playsinline id="Video1" preload="auto" autoplay="autoplay" loop="loop" onclick="vidplay()" >
    
    <source src="assets/videos/full_screen_video/Home (11).mp4" type="video/mp4">
      <!-- <source src="<?php //echo $videoFilename?>.webm" type="video/webm"> -->
        your browser does not support HTML5
      </video>

      <div class="home-bg" onclick="vidplay()"></div>

      <div class="dimmed">
        <div class="col-lg-12 landing-text-pos align-center">
		  <h1 class="wow animated fadeInDown " data-wow-duration="1s" data-wow-delay="1s">Under Construction</h1>
		  <h2 id="demo"></h2>
		</div>
	  </div>
	  

    </section>


							<?php
include 'includes/footer.php';
?>			<!-- /FOOTER scripts-->

<script>
// Set the date we're counting down to
var countDownDate = new Date("June 14, 2018 21:30:05").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
	</body>

	</html>
