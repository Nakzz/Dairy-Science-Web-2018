<?php

$title = 'Dairy Management: People';

//HACK: In the future, automate from admin panel to add members which will add form
//database using iteration, making changes to team-member.css(thumbnail),
//original image folder.

?>

<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript">

  var bugs = [
  "some overlay is all dark",
    ""
  ];

  </script>


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

<!-- PostDoc Tittle-->
<section class="titleSection" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Postdocs</h1><hr>
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
				<div class="speakers-wrap">
					<div id="portfolioSlider">
						<ul class="slides">
							<li>
								<div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2  wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/Di.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-1"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Di Liang</h4>
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
									<h4 class="text-center">Hector Delgado</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
			<!-- Card Info -->
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
								<!-- <blockquote>
									<p>Idea: Maybe timeline or something?</p>
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
				<!-- /Card Info -->

				<!-- Card Info -->
				<div class="md-modal md-effect-9" id="modal-2">
					<div class="md-content">
						<div class="folio">
							<div class="avatar2"></div>
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
				<!-- /Card Info -->
      </div>
    </div> <!--Row ends-->
  </div>  <!--Container ends-->
</section>
<!--END Section Body-->


<!--PHD Tittle (NOT TOP)-->
<section class="titleSection2" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Ph.D. Students</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle (NOT TOP)-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
				<div class="speakers-wrap">
					<div id="portfolioSlider">
						<ul class="slides">
							<li>


								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/manfei.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-3"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Manfei Li</h4>
								</div>

								<div class="col-md-4 col-sm-4  wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/Di.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-01"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Di Liang</h4>
								</div>
								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/afshin_samia_kalantari.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-4"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Afshin Samia Kalantari</h4>
								</div>

								<div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/marion.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-5"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Marion Dutreuil</h4>
								</div>

							</li>
						</ul>
					</div>
				</div>

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-3">
			<div class="md-content">
				<div class="folio">
					<div class="avatar3"></div>
					<div class="sp-name"><strong>Manfei Li</strong><br/>Ph.D. Student, Integrated Farm System Model</div>
					<div class="sp-dsc">
						Manfei came from China and got her BS degree in China Agricultural University in Animal Science.
						After that she attended Nestle DFI L4 advanced dairy management course. Her PhD program started at
						 Spring 2017 under the guidance of Dr. Cabrera. She is currently working on generating a holistic
						 dairy farm management tool and closely working with the Integrated Farm System Model.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->

		<!-- Card Info -->
			<div class="md-modal md-effect-9" id="modal-01">
				<div class="md-content">
					<div class="folio">
						<div class="avatar1"></div>
						<div class="sp-name"><strong>Di Liang</strong><br/>Ph.D Student, UW2020 virtual dairy farm brain project (Past)</div>
						<div class="sp-dsc">
							Di grew up in China and got her BS in China Agricultural University.
							Then she obtained a MS degree in Animal Science from the University of Kentucky,
							focused on dairy health economics. Di completed her PhD in August 2017 and now she
							is working as a postdoc in the UW2020 virtual dairy farm brain project.
							<!-- <blockquote>
								<p>Idea: Maybe timeline or something?</p>
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
			<!-- /Card Info -->

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-4">
			<div class="md-content">
				<div class="folio">
					<div class="avatar4"></div>
					<div class="sp-name"><strong>Afshin Samia Kalantari</strong><br/>Ph.D. Student(Past)</div>
					<div class="sp-dsc">
						Afshin got his BS in Animal Science from Shiraz University in Iran. After finishing his BS,
						he continued immediately with his MS studies in Animal Breeding and Genetics at the Tehran university.
						During his MS studies he became highly interested in dairy herd management topics,
						and especially in optimum replacement decisions in dairy herds. Currently, Afshin is working under the
						guidance of Dr. Cabrera studying optimal reproductive management strategies with the aim of improving
						dairy cattle reproductive efficiency.
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
		<!-- /Card Info -->

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-5">
			<div class="md-content">
				<div class="folio">
					<div class="avatar5"></div>
					<div class="sp-name"><strong>Marion Dutreuil</strong><br/>Ph.D. Student(Past)</div>
					<div class="sp-dsc">
						Marion is a French student. She grew up near Paris. When she was 18, she decided to study Agriculture
						and especially Dairy Science. She worked for 2 years at the INRA (equivalent to the USDA, in France).
						She was part of 2 projects. The first one was a survey named: “Characterization of tank milk composition
						according to the livestock management practices in the Atlantic West Plain.” The second one was an
						experimentation to learn more about the impact of milk storage duration in the udder on milk fat quality.
						<br>
						Today, Marion is starting a PhD program at the Dairy Science Department at the University of Madison-Madison
						working in a project named: “Strategies of pasture supplementation on organic and conventional grazing dairies:
						assessment of economic, production and environmental outcomes.”
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
		<!-- /Card Info -->



    </div> <!--Row ends-->
  </div>  <!--Container ends-->
</section>
<!--END Section Body-->


<!--Section Tittle (NOT TOP)-->
<section class="titleSection2" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>M.S. Students</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle (NOT TOP)-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
      <div class="col-sm-12">

				<div class="speakers-wrap">
					<div id="portfolioSlider">
						<ul class="slides">
							<li>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/jorgebar.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-6"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Jorge Barrientos</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/yaqi.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-7"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Yaqi Wu</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/claudia_hardie.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-8"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Claudia Hardie</h4>
								</div>

								<div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2  wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/mayuri_valvekar.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-9"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Mayuri Valvekar</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/jay_janowski.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-10"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Jay Janowski</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-6">
			<div class="md-content">
				<div class="folio">
					<div class="avatar6"></div>
					<div class="sp-name"><strong>Jorge Barrientos</strong><br/>M.S. Student</div>
					<div class="sp-dsc">
						Jorge is from Costa Rica. He had his Agronomy B.S. from the Tecnológico de Costa Rica, San Carlos. Later, he obtained a MS degree in Agricultural Economics from Purdue University, focused on dairy reproduction economics. Since June 2017 he started a Master degree in Dairy Science at the University of Wisconsin-Madison under the guidance of Dr. Cabrera. He is currently working on Nutritional grouping strategies and dairy diet precision analysis in Wisconsin dairy farms.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-7">
			<div class="md-content">
				<div class="folio">
					<div class="avatar7"></div>
					<div class="sp-name"><strong>Yaqi Wu</strong><br/>M.S. Student</div>
					<div class="sp-dsc">
						Yaqi Wu is a second-year master student at University of Wisconsin-Madison Dairy Science. She received a bachelor's degree in Agronomy from Anhui Agricultural University and master's degree in Animal Science from China Agricultural University. Her study field is Dairy management modeling and current project is nutritional grouping. She is interested in dairy nutrition, dairy Modeling and dairy management strategy.

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
		<!-- /Card Info -->

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-8">
			<div class="md-content">
				<div class="folio">
					<div class="avatar8"></div>
					<div class="sp-name"><strong>Claudia Hardie</strong><br/>M.S. Student(Past)</div>
					<div class="sp-dsc">
						Claudia Hardie is from a small, organic dairy farm in Blair, Wisconsin, where her family still milks a herd
						of 25 cows containing representatives of all six major dairy breeds. She earned her B.S. degree in Dairy Science
						from the University of Wisconsin - Madison in 2010. Upon the completion of her education, Claudia intends to
						remain involved with the dairy industry through extension or some other realm. Specific areas of interest include
						grazing and organic dairy farming.
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
		<!-- /Card Info -->

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-9">
			<div class="md-content">
				<div class="folio">
					<div class="avatar9"></div>
					<div class="sp-name"><strong>Mayuri Valvekar</strong><br/>M.S. Student(Past)</div>
					<div class="sp-dsc">
						Mayuri holds a B.S. in Agricultural Sciences from Acharya N.G Ranga Agricultural University, Hyderabad, India (1999-2003).
						She then did a Post-graduate diploma in Agri-Business Management from the National Institute of Agricultural Marketing,
						Jaipur, India (2003-05). Later, she joined Tinna Oils and Chemicals Ltd, New Delhi, as a Trading Officer,
						where she worked in the area of commodity research, trading and procurement. Mayuri also worked at the National
						Spot Exchange for Agriculture Produce, Mumbai, as an Executive in Market Operations. Some of her research interests
						are in the area of Dairy Economics, Farm management and decision systems modeling.
						<br>
						Mayuri is working under the guidance of Dr. Cabrera starting her Master studies in Dairy Science at the UW-Madison.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-10">
			<div class="md-content">
				<div class="folio">
					<div class="avatar10"></div>
					<div class="sp-name"><strong>Jay Janowski</strong><br/>M.S. Student(Past)</div>
					<div class="sp-dsc">
						Jay grew up in rural Luxemburg, WI surrounded by a vibrant farming community. As soon as he was able to work,
						he spent most of his time working on a neighbor’s dairy – a job that he held up until the last summer before
						graduation from UW-Madison with a degree in Dairy Science (2007). Throughout the years of hands-on experience,
						he gained a deep appreciation for what farmers do in their noble profession. There’s so much agricultural
						heritage in Wisconsin and he is very thankful to have the opportunity to help many more producers as he pursues
						his master’s degree. When not busy with coursework and research duties, He enjoys Badger sports, Packer football,
						Brewers baseball, running, and spending quality time with his family and friends.
						<br>
						Jay is currently starting his M.S. studies in the Dairy Science Department, UW-Madison, working on evaluating
						the economics of dairy expansion under the guidance of Dr. Cabrera.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->

      </div>

    </div> <!--Row ends-->
  </div>  <!--Container ends-->
</section>
<!--END Section Body-->





<!--Section Tittle (NOT TOP)-->
<section class="titleSection2" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Sabbatical Researcher</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle (NOT TOP)-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
      <div class="col-sm-12">

				<div class="speakers-wrap">
					<div id="portfolioSlider">
						<ul class="slides">
							<li>

								<div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/charbonneau.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-0"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Édith Charbonneau</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/huichao.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-11"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Huichao Zheng</h4>
								</div>

							</li>
						</ul>
					</div>
				</div>

		</div>


		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-0">
			<div class="md-content">
				<div class="folio">
					<div class="avatar0"></div>
					<div class="sp-name"><strong>Édith Charbonneau</strong><br/>Sabbatical Researcher</div>
					<div class="sp-dsc">
						Édith Charbonneau is a professor at Laval University. Her topics of research are related to dairy farm management and cow’s nutrition.
						She has developed an expertise in evaluating her topics of interest at a whole-farm level. She is currently working on projects evaluating
						the impact of strategies to mitigate greenhouse gas emission at the whole-farm level, evaluating strategies for dairy farms adaptation to climate
						 change, and she is working on new ways to manage cows and calves for optimal farm profit.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->

<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-11">
			<div class="md-content">
				<div class="folio">
					<div class="avatar11"></div>
					<div class="sp-name"><strong>Huichao Zheng</strong><br/>Sabbatical Researcher</div>
					<div class="sp-dsc">
						Dr. Huichao Zheng is an associate professor and extension specialist at the Institute of Animal Husbandry and Veterinary Sciences, Zhejiang Academy of Agricultural Sciences. Dr. Huichao Zheng research area is herbivore feed resource development and nutrition regulation. Dr. Huichao Zheng paid more attention on herbivore farm management and big data analysis in the recent years. During her short career, Dr. Huichao Zheng has published more than 20 refereed articles with 3 in English, applied for 2 patents with 1 patent granted, and given talks or presentation in more than 10 symposium and extension meetings in Zhejiang, Jiangsu, Hunan, Hubei province and abroad like USA. Dr. Huichao Zheng has attracted about ￥1.0 million to support her research and extension initiatives. Dr. Huichao Zheng achieved 1 Zhejiang First Prize in Science & Technology in 2013 and 1 Zhejiang Third Prize in Science & Technology in 2008, as the third accomplisher at ZAAS. Dr. Huichao Zheng gained Zhejiang Second Prize in Science & Technology in 2006 as the fifth accomplisher at Zhejiang University.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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


    </div> <!--Row ends-->
  </div>  <!--Container ends-->
</section>
<!--END Section Body-->



<!--Section Tittle (NOT TOP)-->
<section class="titleSection2" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Interns</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle (NOT TOP)-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
      <div class="col-sm-12">
				<div class="speakers-wrap">
					<div id="portfolioSlider">
						<ul class="slides">
							<li>
								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/ramon.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-12"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Ramón Mur</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/veronique.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-13"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Veronique Ouellet</h4>
								</div>


								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/Lenka.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-14"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Lenka Krpálková</h4>
								</div>

								<div class="col-md-4 col-sm-4  col-md-offset-2 col-sm-offset-2  wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/Monica_Piccardi_small.png" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-15"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Mónica Piccardi</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/Emiliano_Demarchi.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-16"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Emiliano Demarchi</h4>
								</div>

							</li>
						</ul>
					</div>
				</div>


		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-12">
			<div class="md-content">
				<div class="folio">
					<div class="avatar12"></div>
					<div class="sp-name"><strong>Ramón Mur</strong><br/>Intern</div>
					<div class="sp-dsc">
						Ramón grew up between cows in a small farm in the deep of Spanish mountains. While working every weekend and holiday in his family farm he became Agricultural Engineer specialized in Animal Production in the University of Lleida. Since 2014 he is carrying out a PhD in Dairy Cattle Reproduction and working as consultant and reproductive technician in commercial farms under the supervision of Dr. Fernando López-Gatius. His target as researcher is to find ways to improve farms profitability and farmers quality of life. During his internship in Dr. Victor Cabrera lab he is developing tools that combine farm data with scientific knowledge to assist decisions in dairy farms.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-13">
			<div class="md-content">
				<div class="folio">
					<div class="avatar13"></div>
					<div class="sp-name"><strong>Veronique Ouellet</strong><br/>Intern</div>
					<div class="sp-dsc">
						Veronique Ouellet is currently a PhD student at Laval University in Canada under the advisement of Dr. Edith Charbonneau. Her research focuses on the impacts of climate change on dairy farms and on the implementation of adaptation strategies. Prior to starting her PhD program, she completed her Bachelor degree in agronomy at Laval University. While pursuing her bachelor degree, Veronique worked as a research assistant at Agriculture and Agri-Food Canada. She received her Masters degree in animal science in 2015 from Laval University. She also did a research fellowship at the Berlin Universitat in the fall of 2014 under the advisement of Pr. Wolgang Heuwieser.
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
		<!-- /Card Info -->


		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-14">
			<div class="md-content">
				<div class="folio">
					<div class="avatar14"></div>
					<div class="sp-name"><strong>Lenka Krpálková</strong><br/>Intern (Past)</div>
					<div class="sp-dsc">
						Lenka is an agricultural engineer who completed her BS in 2010 in the Czech University of Life Sciences in Prague (CULS).
						Her master's program focused mainly on breeding cattle and on evaluating and determining breeding values and selection
						indexes. Currently, she is doing her PhD in Agricultural Science at the same university but she became interested in
						dairy herd management topics. As part of her PhD studies she worked for 5 months under the guidance of Dr. Cabrera at
						the Dairy Science Department at the University of Wisconsin-Madison (USA) as an intern. She dealt mainly with optimum
						replacement decisions in dairy herds and dairy herd economics.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->


		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-15">
			<div class="md-content">
				<div class="folio">
					<div class="avatar15"></div>
					<div class="sp-name"><strong>Mónica Piccardi</strong><br/>Intern (Past)</div>
					<div class="sp-dsc">
						Mónica Piccardi is an agricultural engineer who completed her BS in 2008 in the Agricultural Science College
						at the National University of Córdoba, Argentina (FCA-UNC). Currently, she is doing her PhD in Agricultural Science
						at the same college. As a part of her studies she worked for 6 months under the guidance of Dr. Cabrera and Dr.
						Wiltbank at the Dairy Science Department at the University of Wisconsin-Madison (USA) as an intern. She studied
						the trends and patterns of culling in Wisconsin dairy herds and also in Argentinean dairy herds. Her research
						interests are in the area of Dairy Economics, Farm management and decision systems modeling.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->


		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-16">
			<div class="md-content">
				<div class="folio">
					<div class="avatar16"></div>
					<div class="sp-name"><strong>Emiliano Demarchi</strong><br/>Intern(Past)</div>
					<div class="sp-dsc">
						Emiliano Demarchi is an agricultural engineer from Argentina who finished his B.S. in 2007 in the Department of Agricultural
						Sciences at the National University of "Litoral". Currently he works as dairy farm consultant in the Central West part of the
						Santa Fe Province in Argentina. Additionally, Emiliano is a coordinator of Dairy Commision for the region CREA Santa Fe center
						(CREA; http://www.redcrea.org.ar) (Comisión de Lechería" de la Región CREA "Santa Fe Centro") and an associate instructor of
						administration of organizations of the Department of Agricultural Sciences at the National University of "Litoral"
						(http://www.fca.unl.edu.ar). As a part of a grant from the University of Wisconsin-Madison Babcock Institute, Emiliano is
						working to translate and adjust some decision support tools to the Argentinian conditions.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->

      </div>

    </div> <!--Row ends-->
  </div>  <!--Container ends-->
</section>
<!--END Section Body-->


<!--Section Tittle (NOT TOP)-->
<section class="titleSection2" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Outreach Specialists</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle (NOT TOP)-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
      <div class="col-sm-12">
				<div class="speakers-wrap">
					<div id="portfolioSlider">
						<ul class="slides">
							<li>

								<div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2  wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/francisco.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-17"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Francisco E. Contreras-Govea</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/connie_cordoba.png" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-18"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Connie Cordoba</h4>
								</div>


							</li>
						</ul>
					</div>
				</div>

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-17">
			<div class="md-content">
				<div class="folio">
					<div class="avatar17"></div>
					<div class="sp-name"><strong>Francisco E. Contreras-Govea</strong><br/>Ph.D. Outreach Specialists</div>
					<div class="sp-dsc">
						Native from Torreon, Coahuila, Mexico, with a Ph.D. in Agronomy from the University of Wisconsin-Madison. Extensive research
						and field experience in forage crops and silage nutritive value. Currently working as Outreach Specialist at the Department
						of Dairy Science, UW-Madison in the genomic selection and herd management tools to improve feed efficiency of the dairy
						industry project under the supervision of Dr. Lou Armentano and in collaboration with Dr. Victor Cabrera. In addition, Dr.
						Contreras-Govea is conducting field and laboratory research in topics related to silage fermentation of ensiled crops.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-18">
			<div class="md-content">
				<div class="folio">
					<div class="avatar18"></div>
					<div class="sp-name"><strong>Connie Cordoba</strong><br/>D.V.M Outreach Specialists(Past)</div>
					<div class="sp-dsc">
						Connie Cordoba earned her veterinary degree in Argentina. She got a Masters degree in Dairy Cattle Reproduction at the
						University of Wisconsin-Madison under Dr. Paul Fricke. Now she is an outreach specialist in dairy Cattle Reproduction
						at the Dairy Science Department running the Repro Money Program, which is the extension branch of the USDA-NIFA granted
						project called "An integrated approach to improving dairy cow fertility."
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
		<!-- /Card Info -->
      </div>

    </div> <!--Row ends-->
  </div>  <!--Container ends-->
</section>
<!--END Section Body-->



<!--Section Tittle (NOT TOP)-->
<section class="titleSection2" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Project Assistants</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle (NOT TOP)-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
      <div class="col-sm-12">
				<div class="speakers-wrap">
					<div id="portfolioSlider">
						<ul class="slides">
							<li>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/aj.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-19"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Ajmain Naqib</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/zack.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-20"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Zachary Harrison</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/pedro_melgarejo.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-21"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Pedro Melgarejo</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/Prasanth_Krishnan.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-22"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Prasanth Krishnan</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/sathiya_kumaran.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-23"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Sathiya Kumaran</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/Varun_Vats.png" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-24"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Varun Vats</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/anjaligola.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-25"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Anjali Gola</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/Krishnendra_Nathella_small.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-26"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Krishnendra Nathella</h4>
								</div>

								<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="overlay-effect effects clearfix">
										<div class="img">
											<img src="assets/img/team/nikhil_suryanarayanan.jpg" alt="Portfolio Item">
											<div class="overlay">
												<button class="md-trigger expand" data-modal="modal-27"><i class="big-icon fa fa-search"></i><br>View More</button>
											</div>
										</div>
									</div>
									<h4 class="text-center">Nikhil Suryanarayanan</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>


		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-17">
			<div class="md-content">
				<div class="folio">
					<div class="avatar17"></div>
					<div class="sp-name"><strong>Francisco E. Contreras-Govea</strong><br/>Ph.D. Outreach Specialists</div>
					<div class="sp-dsc">
						Native from Torreon, Coahuila, Mexico, with a Ph.D. in Agronomy from the University of Wisconsin-Madison. Extensive research
						and field experience in forage crops and silage nutritive value. Currently working as Outreach Specialist at the Department
						of Dairy Science, UW-Madison in the genomic selection and herd management tools to improve feed efficiency of the dairy
						industry project under the supervision of Dr. Lou Armentano and in collaboration with Dr. Victor Cabrera. In addition, Dr.
						Contreras-Govea is conducting field and laboratory research in topics related to silage fermentation of ensiled crops.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->

		<!-- Card Info -->
		<div class="md-modal md-effect-9" id="modal-18">
			<div class="md-content">
				<div class="folio">
					<div class="avatar18"></div>
					<div class="sp-name"><strong>Connie Cordoba</strong><br/>D.V.M Outreach Specialists(Past)</div>
					<div class="sp-dsc">
						Connie Cordoba earned her veterinary degree in Argentina. She got a Masters degree in Dairy Cattle Reproduction at the
						University of Wisconsin-Madison under Dr. Paul Fricke. Now she is an outreach specialist in dairy Cattle Reproduction
						at the Dairy Science Department running the Repro Money Program, which is the extension branch of the USDA-NIFA granted
						project called "An integrated approach to improving dairy cow fertility."
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
		<!-- /Card Info -->
		<div class="md-modal md-effect-9" id="modal-19">
			<div class="md-content">
				<div class="folio">
					<div class="avatar19"></div>
					<div class="sp-name"><strong>Ajmain Naqib</strong><br/>LAMP Stack Web Devoloper, Project Assistant</div>
					<div class="sp-dsc">
						Ajmain is responsible for developing and managing the website design and it's content for Dairy Management alongside developing, refining, and debugging new, and pre-existing research web-tools.
						He joined the team in late January 2018. Ajmain is currently pursing a Bachelors degree in Computer Science and intended certificate in Mathematics and/or Entrepreneurship at UW-Madison.
						<blockquote>
							<p>January 2018 - Present</p>
						</blockquote>
					</div>
					<div class="sp-social">
						<ul>
							<li><a href="mailto:naqib@wisc.edu" class="social-btn"><i class="fas fa-envelope"></i></a></li>
							<li><a href="http://psque.com/ajmain/" target="_blank" class="social-btn"><i class="fas fa-book"></i></a></li>
						</ul>
					</div>
					<button class="md-close"><i class="fa fa-times"></i></button>
				</div>
			</div>
		</div>
		<div class="md-overlay"></div>
		<!-- /Card Info -->
		<div class="md-modal md-effect-9" id="modal-20">
			<div class="md-content">
				<div class="folio">
					<div class="avatar20"></div>
					<div class="sp-name"><strong>Zachary Harrison</strong><br/>Project Assistant (Past)</div>
					<div class="sp-dsc">
						Zachary is currently responsible for Web Based Application Development, WebSite Development and IT support for Dr Cabrera and the Dairy Management group. He joined the team in January 2018. Zachary is pursuing his undergraduate degree in Computer Engineering and Computer Science at UW-Madison.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->
		<div class="md-modal md-effect-9" id="modal-21">
			<div class="md-content">
				<div class="folio">
					<div class="avatar21"></div>
					<div class="sp-name"><strong>Pedro Melgarejo</strong><br/>Project Assistant (Past)</div>
					<div class="sp-dsc">
						Pedro is responsible for Web Based Application Development, WebSite Developement and IT support for Dairy Management group.
						He joined the team in July 2013. Pedro is pursuing his Ph.D in Computer Engineering at UW-Madison.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->
		<div class="md-modal md-effect-9" id="modal-22">
			<div class="md-content">
				<div class="folio">
					<div class="avatar22"></div>
					<div class="sp-name"><strong>Prasanth Krishnan</strong><br/>Project Assistant (Past)</div>
					<div class="sp-dsc">
						Prasanth is also responsible for Web Based Application Development, WebSite Developement and IT support for Dairy Management
						group. He joined the team in January 2015. Prasanth is pursuing his Masters in Computer Sciences at UW-Madison.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->
		<div class="md-modal md-effect-9" id="modal-23">
			<div class="md-content">
				<div class="folio">
					<div class="avatar23"></div>
					<div class="sp-name"><strong>Sathiya Kumaran</strong><br/>Project Assistant (Past)</div>
					<div class="sp-dsc">
						Sathiya is also responsible for Web Based Application Development, WebSite Developement and IT support for
						Dairy Management group. He joined the team in September 2013. Sathiya is pursuing his Masters in Computer Sciences
						at UW-Madison.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->
		<div class="md-modal md-effect-9" id="modal-24">
			<div class="md-content">
				<div class="folio">
					<div class="avatar24"></div>
					<div class="sp-name"><strong>Varun Vats</strong><br/>Project Assistant (Past)</div>
					<div class="sp-dsc">
						Varun works with Dr. Cabrera to implement dairy management tools using web technologies.
						He is responsible for administering this website and providing IT support for the Dairy Management group.
						He joined the web application development team in September 2011.
						<br>
						Varun is currently pursuing his Master's in Computer Engineering at the University of Wisconsin, Madison.
						He is passionate about technology and its innovative use. In his spare time he enjoys thermocole carving,
						hiking, and playing volley ball.

						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->
		<div class="md-modal md-effect-9" id="modal-25">
			<div class="md-content">
				<div class="folio">
					<div class="avatar25"></div>
					<div class="sp-name"><strong>Anjali Gola</strong><br/>Project Assistant (Past)</div>
					<div class="sp-dsc">
						Anjali is currently responsible for WebSite Developement, Web Based Application Development,
						IT support for Dr Cabrera & Dairy Management Team. She joined the team in Feb 2012. She is
						currently pursuing her Masters in electrical engineering at UW Madison.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->
		<!-- /Card Info -->
		<div class="md-modal md-effect-9" id="modal-26">
			<div class="md-content">
				<div class="folio">
					<div class="avatar26"></div>
					<div class="sp-name"><strong>Krishnendra Nathella</strong><br/>Project Assistant (Past)</div>
					<div class="sp-dsc">
						Krishnendra is currently responsible for Web Based Application Development, WebSite Developement and IT
						support for Dr Cabrera & Dairy Management. He joined the team in December 2010. Krishnendra is pursuing
						his Masters in Computer Engineering at UW-Madison.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->
		<div class="md-modal md-effect-9" id="modal-27">
			<div class="md-content">
				<div class="folio">
					<div class="avatar27"></div>
					<div class="sp-name"><strong>Nikhil Suryanarayanan</strong><br/>Project Assistant (Past)</div>
					<div class="sp-dsc">
						Nikhil was responsible for Web Based Application Development, WebSite Developement and IT support for Dr Cabrera
						& Dairy Management. He joined the team in August 2008 and continued till December 2010. Nikhil is pursuing his
						Masters in Electrical & Computer Engineering at UW-Madison.
						<!-- <blockquote>
							<p>Idea: Maybe timeline or something?</p>
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
		<!-- /Card Info -->
      </div>

    </div> <!--Row ends-->
  </div>  <!--Container ends-->
</section>
<!--END Section Body-->



<!--FOOTER & scripts-->
<?php
include 'includes/footer.php';
?>
<!-- /FOOTER scripts-->
</body>
</html>
