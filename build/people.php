<?php // TODO: write a script to upload website based on changes.

//HACK: In the future, automate from admin panel to add members which will add form
//database using iteration, making changes to team-member.css(thumbnail),
//original image folder.

?>

<!DOCTYPE html>
<html>
<head>


	<!-- TITLE -->
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


	<!--SPEAKERS-->
	<section class="team text-center section-padding" id="team">
<div class="container paddingtop">
	<div class="row">
		<div class="col-lg-8 wow animated fadeInUp align-center" data-wow-duration="1s" data-wow-delay="1s">
		<h1 class="arrow">Postdocs</h1><hr>
		</div>
	</div>
	<div class="row">
		<div class="speakers-wrap">
			<div id="portfolioSlider">
				<ul class="slides">
					<li>

						<div class="col-md-4 col-sm-4 col-md-offset-2 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
							<div class="overlay-effect effects clearfix">
								<div class="img">
									<img src="assets/img/team/Di.jpg" alt="Portfolio Item">
									<div class="overlay">
									<button class="md-trigger expand" data-modal="modal-1"><i class="big-icon fa fa-search"></i><br>View More</button>
									</div>
								</div>
							</div>
							<h2>Di Liang</h2>
						</div>

						<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
							<div class="overlay-effect effects clearfix">
								<div class="img">
									<img src="assets/img/team/hector.jpg" alt="Portfolio Item">
									<div class="overlay">
										<button class="md-trigger expand" data-modal="modal-2"><i class="big-icon fa fa-search"></i><br>View More</button>
									</div>
								</div>
							</div>
							<h2>Hector Delgado</h2>
						</div>


					</li>
				</ul>
			</div>
		</div>
	</div> <!--Row Ends Here-->
</div>
<!-- Example Speaker -->
<div class="md-modal md-effect-9" id="modal-1">
	<div class="md-content">
		<div class="folio">
			<div class="avatar1"></div>
			<div class="sp-name"><strong>Di Liang</strong><br/>Postdoc, UW2020 virtual dairy farm brain project</div>
			<div class="sp-dsc">
				Di grew up in China and got her BS in China Agricultural University.
							Then she obtained a MS degree in Animal Science from the University of Kentucky,
							focused on dairy health economics. Di completed her PhD in August 2017 and now she
							is working as a postdoc in the UW2020 virtual dairy farm brain project.
									<blockquote>
				<p>Idea: Maybe timeline or something?</p>
				</blockquote>
			</div>
			<div class="sp-social">
				<ul>
<li><a href="#" class="social-btn"><i class="fas fa-envelope"></i></a></li>
				</ul>
			</div>
			<button class="md-close"><i class="fa fa-times"></i></button>
		</div>
	</div>
</div>
<div class="md-overlay"></div>
<!-- /Example Speaker -->
<!-- Example Speaker -->
<div class="md-modal md-effect-9" id="modal-2">
	<div class="md-content">
		<div class="folio">
			<div class="avatar2"></div>	<?php // TODO:Make thumbnail for all team-members ?>
			<div class="sp-name"><strong>Hector Delgado</strong><br/>Research Associate, UW2020 virtual dairy farm brain project</div>
			<div class="sp-dsc">
				Hector Delgado got his Bachelor’s degree in Veterinary Medicine from Universidad de Caldas in Manizales, Colombia.
															After working for a short period of time as Agricultural Projects Officer in a Colombian bank,
															he continued with his MBA studies at Universidad Santo Tomas in Bucaramanga, Colombia.  Immediately after that Hector got a faculty position at the Veterinary Medicine and Animal
																Science School of Universidad Cooperativa de Colombia in Bucaramanga (Colombia). After various years,
																he was appointed by World Animal Protection (former WSPA) as Veterinary Programs Manager for South America
																where he had the opportunity to introduce the concept of animal welfare in various Veterinary and Animal Science
																Schools of the region.  Although his work was very fulfilling, he had the need to continue with his education and
																he moved to Montreal (Canada) where he completed his PhD under the guidance of Dr. Kevin Wade studying longevity
																and profitability of dairy cows.  Currently Hector is working as Research Associate (Postdoc), under the guidance
																of Dr. Cabrera, participating at the UW2020 virtual dairy farm brain project.



																		<!-- <blockquote>
				<p>Here is a long quotation here is a long quotation proin gravida nibh vel velit auctor aliquet aenean sollicitudin.</p>
				</blockquote> -->
			</div>
			<div class="sp-social">
				<ul>
					<li><a href="#" class="social-btn"><i class="fas fa-envelope"></i></a></li>

				</ul>
			</div>
			<button class="md-close"><i class="fa fa-times"></i></button>
		</div>
	</div>
</div>
<div class="md-overlay"></div>
<!-- /Example Speaker -->
	</section>
<!--/SPEAKER-->



				<!--FOOTER & scripts-->
				<?php
				include 'includes/footer.php';
				?>
				<!-- /FOOTER scripts-->
			</body>
			</html>
