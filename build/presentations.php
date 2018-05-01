<?php


?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
    "1: Search bar is notworking yet. Backend connections hasnt been established",
    "2: Links are missing",
    "3: Anchor tag points to after text",
     "3: Not correct text.",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",

    ""
  ];

  var review = [
    "1: Working on improving each according design.",
    "2: Database not connected yet. Used text from Project.php for design",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",

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
        <h1>Presentations</h1><hr>
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
        <h3 class="text-center pagesBodyHeading">A collection of presentations related to dairy farm management that complement decision support tools.
        </h3>
      </div>

      <?php // TODO: Search bar needs to bo connected to database ?>
      <div id="searchBar" class="col-sm-10 col-sm-offset-1">
        <input type="text" name="search" placeholder=" Search Presentations">
      </div>



      <div class="col-sm-12 paddingtopsmall">

        <div id="accordion">
          <div class="atab well ">
            <input id="wisconsin" type="checkbox" name="tabs">
            <label for="wisconsin">Wisconsin Audience</label>
            <div class="atab-content">


            </div>
          </div>
          <div class="atab well">
            <input id="tab-two" type="checkbox" name="tabs">
            <label for="tab-two"> National Audience</label>
            <div class="atab-content">



              </div>

            </div>


        </div>
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
