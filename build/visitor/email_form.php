<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Dairy Management</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Le styles -->
            <link href="/tools/assets/css/bootstrap.min.css" rel="stylesheet">
            <link type="text/css" href="/tools/assets/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
            <link type="text/css" href="/tools/assets/css/font-awesome.min.css" rel="stylesheet" />
            <!--[if IE 7]>
            <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
            <![endif]-->
            <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/custom-theme/jquery.ui.1.10.0.ie.css"/>
            <![endif]-->
            <link href="/tools/assets/css/docs.css" rel="stylesheet">
            <link href="/tools/assets/js/google-code-prettify/prettify.css" rel="stylesheet">

            <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

            <!-- Le fav and touch icons -->
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
            <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
            <link rel="shortcut icon" href="/assets/ico/favicon.png">


            <style type="text/css">
            .container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
            width: 940px;
            }
            </style>
        </head>

        <body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">

        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="/index.php" target="_blank">UW Dairy Management Tool</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li >
                                <a href="http://www.wisc.edu" target="_blank">University of Wisconsin-Madison</a>
                            </li>
                            <li>
                                <a href="http://www.uwex.edu" target="_blank">UW Extension</a>
                            </li>
                             <li >
                                <a href="http://dysci.wisc.edu/" target="_blank">Dairy Science</a>
                            </li>
                            <li>
                                <a href="/contact.php" target="_blank">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Subhead
        ==================================================
        <header class="jumbotron subhead" id="overview">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <h1>Name of the Tool</h1>
                        <p class="lead">Victor E. Cabrera, Department of Dairy Science</p>
                    </div>
                    <div class="span2">
                        <img class="hidden-phone hidden-tablet" height="100" width="auto" src="../../images/projects/uwlogo.png"></img>
                    </div>
                    <div class="span2">
                        <img class="hidden-phone hidden-tablet" height="100" width="auto" style="padding-top:58px" src="../../images/logo/UWEX.png"></img>
                    </div>
                </div>
            </div>
        </header>
        -->

        <div class="container">
        <br/> <br/>
            <?php if ($submitted_form && !$email_valid) { ?>
                <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    The email address <i><?php echo $email; ?></i> is invalid. Please provide a valid email address. 
                </div>
            <?php } ?>
        <div class="well">
            <h2>Welcome to the Dairy Management Tool Suite</h2>
            <br/>
            <p>Please provide us with an email address to keep you updated. You will not receive any promotional email from us.</p>

            <p><strong>You will be re-directed to the tool once you have provided an email address.</strong></p>

            <br/>
            <form class="form-inline" id='email_form' method='post' action='<?php echo $_SESSION['original_uri']; ?>'>

                <label for='email'>Email address:  </label>
                <input name='email' type='email' placeholder='<?php echo $placeholder; ?>'/>

                <button class="btn btn-primary" name='submit_email'>Submit</button>
            </form>
            <br/>
            <p>
                Thank you.
            </p>
            <br/>
        </div>


        </div>

<!-- Footer
================================================== -->
<footer>
    <div class="container">
        <p>&copy; Dairy Management-UW Extension <?php echo date('Y'); ?></p>
    </div>
</footer>
<!-- Placed at the end of the document so the pages load faster -->

                    <!-- JavaScript -->
            <script src="/tools/assets/js/jquery-1.9.0.min.js" type="text/javascript"></script>
            <script src="/tools/assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="/tools/assets/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
            <script src="/tools/assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
            <script type="text/javascript" src="https://www.google.com/jsapi"></script><!-- Google Charts -->
</body>
</html>
