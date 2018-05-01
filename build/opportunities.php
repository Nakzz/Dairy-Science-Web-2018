<?php


?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
    "1: Links are not available",
    "2:",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",

     ""
  ];

  var review = [
    "1: ",
    "2:",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",

     ""

  ];

  console.log("Known Bugs:");
  for (var i = 0; i < bugs.length; i++) {
    console.warn(bugs[i]);
  }

  console.log("Feedback:");
  for (var i = 0; i < review.length; i++) {
    console.info  (review[i]);
  }

  </script>

	<!-- TITLE -->
  <?php // TODO: Change tittle ?>
	<title>Dairy Management</title>

	<!-- DESCRIPTION -->

	<meta name="description" content="This site is designed to support dairy farming
	decision-making focusing on model-based scientific research.
	The ultimate goal is to provide user-friendly computerized
	decision support tools to help dairy farmers improve their
	economic performance along with environmental  stewardship.">

	<?php // TODO: change keywords ?>
	<meta name="keywords"  content="Event, Coming Soon, Concert, Conference,
	Counter, Exhibition, Festival, Landing Page, Music, One Page, Registration
	Form, Seminar, Subscription, Mailchimp" />
	<meta name="author" content="Ajmain Naqib" />

	<?php
	include 'includes/header.php';
	?>

</head>

<body id="top" data-spy="scroll" data-target=".header" data-offset="80">

	<!--PRELOADER
	<div class="preloader">
	<div class="status"></div>
</div>
<!--/PRELOADER-->

<!--HEADER-->

<?php
include 'includes/nav-bar.php';
?>

<!--/HEADER-->
<?php // TODO: add animation and transition ?>


<!-- Section Tittle-->
<section class="titleSection" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Opportunities</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
      <div class="col-sm-12">

        <h3 class="text-center pagesBodyHeading">
          Work and study opportunities related to Dairy Management at the University of Wisconsin Dairy Science
             Department. Feel free to distribute announcements where deemed appropriate.
        </h3>
          </div>


        <div class="col-sm-12 paddingtopsmall">
          <h2>PA Web Developer (05/01/2018)</h2>
          <p>
              The Dairy Management team at UW Extension is seeking a web application developer proficient in PHP, MySQL, HTML, CSS and JavaScript to create web applications used by dairy farmers. The primary duty of the applicant will be to work with Dr. Victor Cabrera to understand the functionality of the tools and port them to the web using the aforementioned technologies. <a href="http://www.dairymgt.info/opportunities/pa/" target="_blank">(More)</a>
          </p>
        </div>

        <div class=" col-sm-12 paddingtopsmall">
          <h2>Web Developer Assistant (05/01/2018)</h2>
          <p>
              The Dairy Management team at UW Extension is seeking a web developer asistant proficient in PHP, MySQL, HTML, CSS and JavaScript to create web applications used by dairy farmers. <a href="http://www.dairymgt.info/opportunities/pa/webassistant.php" target="_blank">(More)</a>
          </p>
        </div>

      </div>

    </div> <!--Row ends-->
  </div>  <!--Container ends-->
</section>
<!--END Section Body-->


<!-- /Logo row -->
<?php
include 'includes/logoRow.php';
?>
<!-- /logo row -->

<!--FOOTER & scripts-->
<?php
include 'includes/footer.php';
?>
<!-- /FOOTER scripts-->
</body>
</html>
