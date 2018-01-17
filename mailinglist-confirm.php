<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="canonical" href="http://irishfirelogs.com/mailinglist-confirm.php" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Subscribe to the Irish Fire Logs Mailing List to receive news, updates and deals on our products.">
    <meta name="keywords" content="Irish Fire Logs Mailing List" />
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/irishfire.png">

    <title>Irish Fire Logs Mailing List - Siobhán's Irish Fire Logs</title>


   <?php include_once("analyticstracking.php") ?>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <script src="http://www.google.com/jsapi"></script>
    <script>
    google.load("jquery", "1");
    google.load("jqueryui", "1");
    </script>
    <script>
        $(document).ready(function() {
        $('#navbar-wrapper').hide().fadeIn('fast');
    })
    $(document).ready(function() {
        $('#myCarousel').hide().fadeIn('3000');
    });
    </script>
<script type='text/javascript'>

    $(document).ready(function() {
        $('.carousel').carousel({
  interval: 5000
  })

  });

 </script>
<?php include('include.php'); ?>
</head>
<!-- NAVBAR
================================================== -->

<body id="contact">

    <div class="navbar-wrapper">
        <div class="container">

            <?php include('menu.php'); ?>
        </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div class="jumbotron">
        <div class="container">
            <div class="tiny-container">
                <img src="images/tiny-logo.png" class="tiny-logo">
            </div>
        </div>
    </div>
    <!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
         <div class="row featurette">
            <div class="col-lg-8 about">
                <h1>One More Step...</h1>
                <p class="lead home">We need to confirm your email address before we can finalize your subscription. We have sent a link to the e-mail address you entered. Please click the link to complete your sign-up.</p>
            </div>
            <div class="col-md-3">
                	<center>
				<img class="featurette-image img-responsive" src="images/burlap.jpg">
				</center>
            </div>

        </div>

<hr class="featurette-divider">
        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a>
            </p>
            <p>&copy; 2013 The Ballydesmond Company, LLC &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </p>
        </footer>

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
</body>

</html>
