<!DOCTYPE html>
<html lang="en">
<!--    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script> 
    -->
    <script src="dist/js/jquery.js"></script>
    <?php include 'header.php'; ?>
    <style>
        .btn {
            padding: 6px 12px!important;
        }
        </style>
    <body>

        <?php include 'menu.php'; ?>
        
        <?php  include('HezeGallery/usage/DisplayControl.php');?>

        <?php //include 'random_image_gallery.php'; ?>
        <!-- WRAPPER -->
        <div class="wrapper">

            <!-- HERO -->
            <section id="hero" class="module-hero module-parallax module-overlay-dark-1" data-background="img/module-4.jpg">

                <!-- HERO TEXT -->
                <div class="hero-caption">
                    <!--				<div class="hero-text">
                                                            <h1 class="hero-title m-t-70">About</h1>
                                                    </div>-->
                </div>
                <!-- /HERO TEXT -->

            </section>
            <!-- /HERO -->

            <!-- PORTFOLIO SINGLE -->
            <section class="module module-w">
                <div class="container">

                    <div class="row m-b-70">

                        <div class="col-sm-12"style="margin-top: 70px;">
                            <div class="col-md-12 big-title wow bounceIn">
                                <h2>Gallery</h2>
                            </div>
                            
                            <div id="links">
                                <?php $heze->HezecomPortfolioGallery2('gallery', 'col-md-3', 'col-sm-4', 'col-xs-6'); ?>

                                <div style="clear:both" ></div>

                            </div>
                            <br/><br/><br/><br/>   
                            
                        </div>

                    </div>

                </div>
            </section>
            <!-- /PORTFOLIO SINGLE -->

        </div>
        <!-- /WRAPPER -->

        <?php include 'footersmall.php'; ?>

    </body>
</html>