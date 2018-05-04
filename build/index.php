<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript">

  var bugs = [
    "1: Navbar doesnt work in mobile or tablet",
    "2: Navbar elements shows under navbar element in mobile or tablet",
    "3: Get direction is not centered",
     "4: Links text color is white on hover and too small, not legible",
		 "5: Taking too long to load.",
		 "6: Make h1 20px, and button smaller and whole block smaller"
		 "7: add static image instead of 1920x1080 images",
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
	<title>Dairy Management</title>

	<!-- DESCRIPTION -->
	<meta name="description" content="This site is designed to support dairy farming
	decision-making focusing on model-based scientific research.
	The ultimate goal is to provide user-friendly computerized
	decision support tools to help dairy farmers improve their
	economic performance along with environmental  stewardship.">

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

<!--HOME-->
<section id="sec_1" class="autoheight">

	<!--LANDING VIDEO-->
	<?php
	// TODO: video doesn't play automatically in IOS
	include 'includes/full_screen_video.php';
	?>
	<!--/LANDING VIDEO-->

	<div class="home-bg" onclick="vidplay()"></div>

	<div class="dimmed">
		<div class="col-lg-12 landing-text-pos align-center">
			<h1 class="wow animated fadeInDown " data-wow-duration="1s" data-wow-delay="1s"><?php echo texto(); ?></h1> <?php // TODO: make font size smaller ?>
			<hr id="title_hr"/>
			<!--		<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Grand Space, Portland. 21-26 Sept 2014</p>		-->
			<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s" data-scroll href="tools.php" target="_blank">Learn More</a>
		</div>
	</div>

</section>
<!--/HOME-->

<!--ABOUT
<section class="intro text-center section-padding" id="intro">
<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
<div class="row">
<div class="col-lg-12 align-center about">
<!-- <h1 class="arrow">About the Event: #ADD_TOOLS_ANIMATION LOGO HERE</h1>
<hr>



<div class="col-sm-8 col-md-8 bottom-padding">

</div>

</div>
</div>
</div>
</section>
<!--/ABOUT-->

<!--FEATURES-->
<section class="features text-center" id="features">
	<div class="row">

			<!-- /grid-gallery -->

			<div class="padding_right padding_left features-md paddingSmall_bottom">
				<div class="row">
					<div class="paddingtopsmall">
						<div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
							<div class="col-lg-3 col-lg-md-3 contact-details">
								<div class="col-lg-12 col-md-12 col-sm-12 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="light-box box-hover">

										<p>282 Animal Sciences, <br> 1675 Observatory Dr. <br>Madison, WI 53706</p>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="light-box box-hover">
										<p style="color:white">Phone: (608) 265-8506<br>
											E-mail: <a style="color: white;" href="mailto:name@email.com">vcabrera@wisc.edu</a><br>
											<a style="color: white;" href="/apps/filemanager/uploads/CV_Cabrera.pdf" target="_blank">Curriculum Vitae</a>
										</p>
									</div>
								</div>
								<div class="col-sm-4 col-md-4">
											<a id="get_directions" class="learn-more-btn btn-effect" href="https://www.google.com/maps/dir/''/Animal+Science,+Elm+Dr,+Madison,+WI+53706/data=!4m5!4m4!1m0!1m2!1m1!1s0x8807acc078fbc397:0xb7e3ed786867978f?sa=X&ved=0ahUKEwj_lY_i0qXaAhXE5YMKHUmAAHEQiBMINTAA" target="_blank"><i class="fas fa-map-marker-alt"></i><span>Get Directions</span></a>
								</div>
							</div>

							<div class="col-lg-5 col-md-5 col-sm-12">
								<div class="overlay-effect effects clearfix ">

<?php // TODO: make column of 3 instead of 2. Either add texts from next row, or create a logo for tools and have similiar to old website ?>

									<div class="team-member">
											<div class="team-member-holder">
												<div style="margin-left:54px" class="">
													<div class="team-member-image center-block">
															<img class="center-block" alt="" src="assets/img/team/crop_victor.jpg">
															<div class="LINKoverlay">
																<div style="padding-top:100%" class="light-box box-hover linksOnly">

																	<a href="https://www.facebook.com/pages/University-of-Wisconsin-Dairy-Management/172972072340" target="_blank" class="blackIcon facebook team-member-links-item"><i class="fab fa-facebook fa-2x"></i></a>
																	<a href="https://twitter.com/vecabrera" target="_blank" class="twitter team-member-links-item"><i class="blackIcon fab fa-twitter fa-2x"></i></a>
																	<a href="https://plus.google.com/u/0/112288846247174607175/about" target="_blank" class="blackIcon google-plus team-member-links-item"><i class="fab fa-google-plus fa-2x"></i></a>
																	<a href="http://www.linkedin.com/pub/victor-cabrera/12/3a1/924" target="_blank" class="blackIcon twitter team-member-links-item"><i class="fab fa-linkedin fa-2x"></i></a>
																	<a href="http://www.youtube.com/user/dairybynature/videos" target="_blank" class=" blackIcon youtube team-member-links-item"><i class="fab fa-youtube fa-2x"></i></a>

																</div>

															</div>
													</div>
												</div>

											</div>
									</div>

											<h2><span>Victor E.Cabrera, Ph.D.</span></h2>
											<h3>Associate Professor Extension Specialist in Dairy Management</h3>
										</div>
									</div>



									<div class="col-lg-4 col-md-4 col-lg-4 paddingtopsmall paddingSmall_bottom">

										<a class="twitter-timeline" height="300" href="https://twitter.com/vecabrera" data-widget-id="343590479574757376">Tweets by @vecabrerai</a>
										<script>!function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); }}(document, "script", "twitter-wjs");</script>

									</div>


								</div>
							</div>

						</div>
					</div>

					<!-- Vimoe Video-->

				<!--row ends here-->
			</section>
			<!--/FEATURES-->

			<!--SCHEDULE-->
			<section class="text-center section-padding" id="responsive">
				<div class="container wow animated fadeInLeft bottom-spacing">
					<div class="row">
						<div class="col-md-8 align-center wow animated fadeInLeft">
							<h1 class="arrow">Featured Items</h1><hr>
						</div>
					</div>
				</div>

				<div class="FeaturedImage container-schedule container wow animated fadeInDown animated" data-wow-duration="1s" data-wow-delay="1s">


					<div class="row padding_right padding_left ">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 paddingSmall_bottom ">


							<p>Liang, D. F. Sun, M. A. Wattiaux, V. E. Cabrera, J. L. Hedtcke, and E. M. Silva. 2017.
								Effect of feeding strategies and cropping systems on greenhouse gas emission from Wisconsin
								certified organic dairy farms. Journal of Dairy Science 100:5957-5973.
							</p>
							<center>
								<img src="assets/img/items/articulo.png" class="img-responsive " style="width: 100%;">
							</center>
							<a href="https://www.elsevier.com/about/press-releases/research-and-journals/optimizing-feeding-is-necessary-to-maintain-milk-production-in-organic-herds" target="blank_">Optimizing feeding is necessary to maintain milk production in organic herds</a>
							<hr>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 paddingSmall_bottom">


							<p>
								A Virtual Dairy Farm Brain: The Next Big Leap in Dairy
								Farm Management Applying Artificial Intelligence.
							</p>
							<center>
								<img src="assets/img/items/proyect.jpg" class="img-responsive paddingtopsmall">
							</center>
							<a href="https://research.wisc.edu/funding/uw2020/round-3-projects/a-virtual-dairy-farm-brain/" target="blank_">Virtual Dairy Farm Brain</a><br>
							<a href="http://host.madison.com/ct/business/technology/open-the-barn-doors-hal-artificial-intelligence-could-one-day/article_bc181462-fe83-5591-86f8-3b98862da27c.html" target="blank_">Open the barn doors, Hal!': Artificial intelligence could one day run a dairy farm</a>

							<hr>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12">
							<p>Assessing the value of a cow and making replacement decisions in dairy farming have important economic implications.</p>
							<center>
								<img src="assets/img/items/tool.jpg" class="img-responsive paddingtopsmall" style="width: 100%;">
							</center>
							<a href="http://dairymgt.info/publications/2012_Hoards_Cabrera.pdf" target="blank_">Magazine article</a><br>
							<a href="http://dairymgt.info/tools/cow_value_resp/index.php" target="blank_">Decision Support Tool</a>
							<hr>
						</div>

					</div>



				</div>
			</section>

			<!--/SCHEDULE-->





			<!--FEATURES-->
			<section class="paralax text-center paddingtopsmall" id="about">

				<div class="row">
					<h1 class="wow animated fadeInLeft">ABOUT</h1><hr>
					<div class="col-sm-12 col-md-12 bottom-padding padding_bottom wow animated fadeInRight">
						<h2><p class="paddingtopsmall big-font text-white padding_bottom">
							This site is designed to support dairy farming decision-making focusing on model-based scientific research.
							The ultimate goal is to provide user-friendly computerized decision support tools to help dairy farmers improve their
							economic performance along with environmental stewardship.</p></h1>
							<a href="about.php" class="btn btn-default">Read more</a>
						</div>



					</div><!--row ends here-->
				</section>
				<!--/FEATURES-->









				<!--Links-->

				<?php // TODO: add animation ?>
				<?php //// HACK: add toggle with button? ?>
				<div id="sponsers" class="ignite-cta text-center section-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-8 align-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
								<h1 class="arrow">University of Wisconsin</h1><hr>
							</div>



							<div class="buttonForSlide">
									<a class="learn-more-btn btn-effect">
										<i class="fas fa-chevron-down"></i>
										<span>Links</span></a>



							<div class="SlideOnClick col-lg-12 col-md-12 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
								<!-- Service row 1 -->
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">
													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://www.wisc.edu/" target="_blank">University of Wisconsin - Madison</a>
												</h5>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">
													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://www.uwex.edu/" target="_blank">UW - Cooperative Extension</a>
												</h5>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">
													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://dysci.wisc.edu/" target="_blank">UW - Dairy Science</a>
												</h5>
											</div>
										</div>
									</div>
								</div>
								<!-- Service row 1 -->

								<!-- Service row 2 -->
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">
													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://fyi.uwex.edu/dairy/" target="_blank">UW – Extension Dairy Team</a>
												</h5>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">
													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://paulfricke.dysci.wisc.edu/" target="_blank">Dairy Cattle Reproduction</a>
												</h5>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">
													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://www.uwex.edu/ces/dairynutrition/" target="_blank">Dairy Cattle Nutrition</a>
												</h5>
											</div>
										</div>
									</div>
								</div>
								<!-- Service row 2 -->

								<!-- Service row 3 -->
								<div class="row">



									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">
													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://cdp.wisc.edu/" target="_blank">UW Center for Dairy Profitability</a>
												</h5>
											</div>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">
													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://dairynutrient.wisc.edu/" target="_blank">UW Dairy Nutrient</a>
												</h5>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">


													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://future.aae.wisc.edu/" target="_blank">Understanding Dairy Markets</a>
												</h5>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-4 col-md-offset-4 wow fadeIn">
										<div class="service-box" style="margin-bottom: 0px;">
											<div class="service-box-content">
												<h5 style="margin-top: 25px;">
													<i class="fas fa-angle-right"></i>&nbsp;<a href="http://milkquality.wisc.edu/" target="_blank">Milk Quality</a>
												</h5>
											</div>
										</div>
									</div>

								</div>



							</div>
</div>
							<!-- Service row 3 -->



						</div>
					</div>
				</div>
				<!-- /SPONSORS -->

				<!--SUBSCRIBE-->
				<section class="subscribe text-center">
					<div class="subscribe-overlay"></div>
					<div class="container wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
						<h1>Subscribe for newsletter</h1>
						<form action="notify-me.php" id="notifyMe" method="POST" class="center-block align-center col-lg-5 col-md-5 col-sm-10 col-xs-10">
							<div class="input-group col-lg-12 align-center">
								<input type="text" class="form-control email-add" name="email" placeholder="Enter Email Address">
								<button class="btn btn-default notify-button"><i class="fa fa-paper-plane"></i><span>Send</span></button>
							</div>
						</form>
					</div>
				</section>
				<!-- /SUBSCRIBE -->

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
