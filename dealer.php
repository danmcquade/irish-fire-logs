<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="canonical" href="http://irishfirelogs.com/dealer.php" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get in touch with us via our contact form. Whether you're a retailer looking for wholesale information, or a customer with a question, we're here to help.">
    <meta name="keywords" content="Contact Irish Fire Logs, contact the ballydesmond company" />
    <meta name="owner" content="info@irishfirelogs.com" />
    <link rel="shortcut icon" href="assets/ico/irishfire.png">

    <title>Dealer Inquiry - Siobhán's Irish Fire Logs</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap-lightbox.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <style type="text/css">
    	.error {
    		margin-bottom: 0px;
    		padding-left: 0px;
    		color: rgb(218, 85, 85);
    	}
    </style>
</head>
<!-- NAVBAR
================================================== -->

<body id="contact">

<?php include_once("analyticstracking.php") ?>

    <div class="navbar-wrapper">
        <div class="container">

        <?php include('menu.php'); ?>

        </div>
    </div>
    <div class="jumbotron">
        <div class="container">
            <div class="tiny-container">
                <img src="images/tiny-logo.png" class="tiny-logo" alt="Irish Fire Logs Logo">
            </div>
        </div>
    </div>


<div class="container">
<!-- Form Name -->
<div class="row">
<div class="col-lg-7 cform">
<div class="marketing about peat"><div class="pagestarter"><h1>Become a Dealer</h1></div></div>
<p class="lead" style="text-align: justify;">We are continually looking to expand our retail footprint by partnering with qualified dealers. If you are interested in becoming a dealer, please please complete and submit the form below. We will review your submission and respond in a timely manner. The Ballydesmond Company reserves the right to limit retail distributors in selected markets. 
</p>

<form method="POST" action="contact-submit-dealer.php" class="form-horizontal" id="IFcontact">
<fieldset>

<div class="ccform">
<!-- Text input-->
<div class="control-group cname">
<div>
  <label class="control-label" for="name">Name</label>
  <label for="name" class="error" style="padding-top: 7px;"></label>
  </div>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="" class="input-xlarge" required />
    
  </div>
</div>

<!-- Text input-->
<div class="control-group cemail">
  <label class="control-label" for="email">E-Mail</label>
  <label for="email" class="error" style="padding-top: 7px;"></label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="" class="input-xlarge" required />
    
  </div>
</div>
<div class="control-group contact-company">
  <label class="control-label" for="Company">Company</label>
  <div class="controls">
    <input id="company" name="company" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>


<div class="control-group cphone">
  <label class="control-label" for="email">Phone</label>
  <label for="phone" class="error" style="padding-top: 7px;"></label>
  <div class="controls">
    <input id="phone" name="phone" type="text" placeholder="" class="input-xlarge" required />
    
  </div>
</div>


</div>

<!-- Textarea -->
<div class="control-group contactmessage">
	<div>
  <label class="control-label" for="message">Message</label>
  <label for="message" class="error" style="padding-top: 7px;"></label>
  </div>
  <div class="controls">                     
    <textarea class="form-control" rows="3"  id="message"  name="message" placeholder=""></textarea>
  </div>
</div>
<br>
<div class="controls">
<input type="hidden" name="save" value="contact">
<button id="submit" name="button1id" class="btn btn-success">Submit</button>
</div>
</div>
<div class="col-lg-5 cform2">
  <div class="container sack">
    <img src="images/burlap.jpg">
  </div>
</div>
</fieldset>
</form>
</div>
</div>

    <div class="container marketing">

   

        <hr class="featurette-divider">

  

        <!-- FOOTER -->

        <?php include_once("footer.php") ?>


    </div>


</body>
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="assets/js/holder.js"></script>
<script src="assets/js/bootstrap-lightbox.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<script src="assets/js/additional-methods.js"></script>

<script type="text/javascript">
$(document).ready(function () {

    $('#IFcontact').validate({ // initialize the plugin
        rules: {
            name: {
                required: true,

            },
            email: {
                required: true,
                email: true
            },
			message: {
                required: true,
            },
            company: {
                required: false,
            }


        }

    });

});
</script>

<script type="text/javascript">
  $('#IFcontact').bind("keyup keypress", function(e) {
  var code = e.keyCode || e.which; 
  if (code  == 13) {               
    e.preventDefault();
    return false;
  }
});
</script>
</body>

</html>
