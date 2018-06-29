<?php
$title = 'Dairy Management: Gallery';
?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
    "1: ",

    ""
  ];


  </script>
<!-- <script src="OLDWEBSITE_6_14_2018/dist/js/jquery.js"></script> -->
<script src="../../dairymgt-site/dist/js/jquery.js"></script>


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
include 'HezeGallery/usage/DisplayControl.php';

?>

<!--/HEADER-->
<?php // TODO: add animation and transition ?>

<!-- Section Tittle-->
<section class="titleSection" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Gallery</h1><hr>
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
                                    <div id="links">
                                <?php $heze->HezecomPortfolioGallery2('gallery', 'col-md-3', 'col-sm-4', 'col-xs-6'); ?>

                                <div style="clear:both" ></div>

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

<script src="HezeGallery/public/themes/default/js/gallery-custom.js"></script>

<!-- /FOOTER scripts-->
</body>
</html>
