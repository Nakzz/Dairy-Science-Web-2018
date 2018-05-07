<?php
$title = 'Dairy Management: Contact';
// if(isset($_POST['submit'])){
//
//     $name=$_POST['name'];
//     $subject=$_POST['subject'];
//     $subject="[DairyMGT]".$subject;
//     $message=$_POST['message'];
//     $from=$_POST['email'];
//     $headers='From:'.$from;
//
// // if(mail('naqib@wisc.edu',$subject,$message,$headers)){
// //     Header( "Location: /index.php" );
// // }else{
// //     Header("Location: ./contact.php");
// // }

// TODO: LINK CONTANT MAIL TO SERVER

?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
    "1: Social media link inside picture is not centered",
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

<!-- Section Tittle-->
<section class="titleSection" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Contact</h1><hr>
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

        <h3 class="text-center pagesBodyHeading">You can contact the Dairy Management Team by email, phone, fax, snail mail, or by sending a webnote. Feel free to inquire for further information, suggest improvements, or to provide feedback about the University of Wisconsin Dairy Management work.</h3>

        <div class="col-sm-12 paddingtopsmall">
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="team-member">
                <div style="margin-left:20px" class="team-member-holder">
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
            <div class="text-center">
              <h3><span>Victor E.Cabrera, Ph.D.</span></h3>
              <h4>Associate Professor Extension Specialist in Dairy Management</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact-details">
              <div class="col-lg-12 col-md-12 col-sm-12 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="light-box box-hover">
                  <p>282 Animal Sciences, <br> 1675 Observatory Dr. <br>Madison, WI 53706</p>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="light-box box-hover">
                  <p style="color:#666">Phone: (608) 265-8506<br>
                    E-mail: <a href="mailto:name@email.com">vcabrera@wisc.edu</a><br>
                    <a  href="/apps/filemanager/uploads/CV_Cabrera.pdf" target="_blank">Curriculum Vitae</a>
                  </p>
                </div>
              </div>
          </div>
        </div>

        <div id="contactWebnote" class="col-sm-5">
            <h2>Send a Webnote</h2>
            <form id="contact-form" role="form" action="/contact.php" method="post" onSubmit=" return validate()">
                <div class="form-group">
                    <label class="sr-only" for="cname">Name</label>
                    <input required type="text" name="name" id="name" value="" size="30" class="form-control" placeholder="Name" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="cname">Subject</label>
                    <input required type="text" name="subject" id="subject" value="" size="30" class="form-control" placeholder="Subject" data-validation-required-message="Please enter the subject.">
                    <p class="help-block text-danger">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="cemail">Email</label>
                    <input required type="email" name="email" id="email" value="" size="30" class="form-control" placeholder="Your E-mail" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" cols="60" rows="4" id="message" placeholder="Message" data-validation-required-message="Please enter your message."></textarea>
                    <p class="help-block text-danger">
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="learn-more-btn btn-effect" style="background-color: #1bd982;">Send Webnote</button>
                </div>
            </form>
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
