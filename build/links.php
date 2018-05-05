<?php

include('apps/publications/classes/class.publication.php');

?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
"Anchor tag doesn't take to specific accordian ",



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
        <h1>Related Links</h1><hr>
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
        <h3 class="text-center pagesBodyHeading">A collection of useful links related to dairy farm management.
        </h3>
      </div>

      <div class="col-sm-12 paddingtopsmall styledLists">

        <div id="accordion">

          <?php
          $categories = DB::query("SELECT * FROM link_categories");
          if($categories)
          {
            $count =1 ;
            foreach($categories as $key=>$val) {
              $href = str_replace(' ','', $val['name']);
              ?>
              <div href="<?php echo $href;?>" class="atab well ">
                <input id="presentations<?php echo $val['id'];?>" type="checkbox" name="tabs">
                <label for="presentations<?php echo $val['id'];?>"><?php echo $val['name'];?></label>
                <div class="atab-content">
<ul>


                  <?php $link_data =   DB::query("SELECT * FROM link_contents WHERE category_id=%s ORDER BY  link_contents.order asc ",$val['id']);
                  foreach($link_data as $k=>$v){
                    ?>
                    <li><a target="_blank" href="<?php echo $v['filename'];?>"><?php echo $v['link_title'];?></a></li>
                    <p style="margin: 0.5em !important; padding-bottom:1em; padding-left: 3em;"><?php echo $v['description'];?></p>
                  <?php } ?>
                  </ul>
                </div>
              </div>

              <?php $count++; }
            }
            ?>

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
