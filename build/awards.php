<?php


?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
    "None",

     ""
  ];

  console.log("Known Bugs:");
  for (var i = 0; i < (bugs.length -1); i++) {
    console.warn(i+1 + ": "+ bugs[i]);
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
        <h1>Awards</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row styledLists"> <!--Row-->
      <div class="col-sm-12">
        <h2>Latest Awards </h2>
        <ul>
            <li>
                  2016. University of Wisconsin-Madison.
                  Vilas Faculty Mid-Career Investigator Award (<a href="./awards/Cabrera_Victor_Mid_Career_CALS.pdf" target="_blank">Letter</a>) (<a href="http://ecals.cals.wisc.edu/2016/12/29/victor-cabrera-receives-vilas-faculty-mid-career-investigator-award/" target="_blank">News</a>)
            </li>
            <li>
                2013. Wisconsin Association of County Agricultural Agents.
                Second Mile Award (<a href="./images/awards/PlaqueSecondMile.png" target="_blank">Plaque</a>) (<a href="./awards/CitationSecondMile.pdf" target="_blank">Citation</a>)
            </li>
            <li>
                2012. University of Wisconsin-Madison College of Agricultural and Life Sciences.
                Pound Extension Award (<a href="./awards/Pound_Letter.pdf" target="_blank">Letter</a>) (<a href="./images/awards/Pound_Plaque.png" target="_blank">Plaque</a>) (<a href="./awards/Pound_Words.pdf" target="_blank">Words</a>)
            </li>
            <li>
                2012. University of Florida School of Natural Resources and Environment.
                Distinguished Achievement Award (<a href="./images/awards/Distinguished_Plaque.png" target="_blank">Plaque</a>) (<a href="./awards/Distinguished_Words.pdf" target="_blank">Words</a>)
            </li>
            <li>
                2011. American Dairy Science Association.
                Foundation Scholar Award in Dairy Production (<a href="./awards/Foundation_Letter.pdf" target="_blank">Letter</a>) (<a href="./images/awards/Foundation_Plaque.png" target="_blank">Plaque</a>) (<a href="./awards/Foundation_Citation.pdf" target="_blank">Citations</a>)
            </li>
            <li>
                2011. University of Wisconsin-Madison College of Agricultural and Life Sciences.
                Alfred Toepfer Faculty Fellow Award. (<a href="./awards/Toepfer_Letter.pdf" target="_blank">Letter</a>)
            </li>
        </ul>

      </div>

      <div class="col-sm-12">
        <h2>Previous Awards</h2>
        <ul style="text-align:left; font-size:1.3em;" >
            <li>
                1998, 1999, 2001-2004. University of Florida.
                Outstanding International Student (<a href="./images/uf1.jpg" target="_blank">Certificate</a>)
            </li>
            <li>
                2002. Agricultural Development Foundation, Managua, Nicaragua.
                Outstanding Contributions to Farming Systems in Nicaragua (<a href="./images/funica.jpg" target="_blank">Certificate</a>)
            </li>
            <li>
                1993. La Molina Agrarian University, Lima, Peru.
                Honor Diploma: Ranking 2/177 (<a href="./images/unalm1.jpg" target="_blank">Diploma</a>)
            </li>
        </ul>
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
