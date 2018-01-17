<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="canonical" href="http://irishfirelogs.com/contact.php" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get in touch with us via our contact form. Whether you're a retailer looking for wholesale information, or a customer with a question, we're here to help.">
    <meta name="keywords" content="Contact Irish Fire Logs, contact the ballydesmond company" />
    <link rel="shortcut icon" href="assets/ico/irishfire.png">

    <title>Subscription Delivery Service - Siobhán's Irish Fire Logs</title>

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
<div class="marketing about peat"><div class="pagestarter"><h1>Irish Fire Logs Delivery Subscription</h1></div></div>
<p class="lead retailinfo retailpageheader">
We are now offering a new subscription delivery service, which would allow our customers to receive regular shipments of our Siobhán's Irish Fire products. If you would be interested in such a service, please fill out the form below, indicating how often you might be interested in receiving shipments, and one of our team members will be in contact with you shortly. 
</p>

<form method="POST" action="subscribe-submit.php" class="form-horizontal" id="IFcontact">
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
  <label class="control-label" for="Company">Frequency of Deliveries</label>
  <div class="controls">
<select id="frequency" name="frequency" class="form-control">
    <option frequency="Weekly">Weekly</option>
    <option frequency="Bi-Weekly">Bi-Weekly</option>
    <option frequency="Monthly">Monthly</option>
    <option frequency="Bi-Monthly">Bi-Monthly</option>
</select>    
  </div>
</div>


</div>

<!-- Textarea -->
<div class="control-group contactmessage">
	<div>
  <label class="control-label" for="message">Additional Comments</label>
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
            },
			message: {
                required: false,
            },
            frequency: {
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
