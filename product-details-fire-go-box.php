<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once("analyticstracking.php") ?>
    <link rel="canonical" href="http://irishfirelogs.com/product-details-fire-go-box.php" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fire Go Box is a portable package of Irish peat briquettes from The Ballydesmond Company.">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/irishfire.png">

    <title>Fire Go Box - Irish Peat Briquettes - Siobhán's Irish Fire Logs</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
   <!--  <link rel="stylesheet" href="assets/css/bootstrap-lightbox.css"> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

     <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <!-- End FancyBox -->

<link rel="stylesheet" href="/assets/css/blueimp-gallery.min.css">

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({

                helpers:  {
                   title : {
                        type : 'inside'
                    }
                }
        })
    });
</script>

<style>
#links { text-align:center; }
#links > li > a { display: inline-block; float: none; }

#links, #links:hover { -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; border: none; }
</style>

</script>
</head>
<!-- NAVBAR
================================================== -->

<body id="products">
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

    <div class="container marketing">


        <div class="row featurette">
            <div class="pagestarter detail-header"><h1>Siobhán's Fire Go Box</h1>
                <h2 class="featurette-heading peatheader usagesub">
                    Irish Peat Briquettes
                </h2>                
            </div>
            <div class="col-md-5 peat product-right">
                <a class="fancybox" href="images/detail-3.jpg" title="Siobhán's Fire Go Box"><img class="featurette-image img-responsive detail-image" src="images/detail-3.jpg" alt="Siobhán's Fire Go Box"></a>

                <div class="detail-thumbnails">
                    <span class="detail-smallbox">
                        <a class="fancybox" href="images/detail-3.jpg" title="Siobhán's Fire Go Box - Detailed Imagae"><img class="detail-thumb" src="images/detail-3a.jpg" alt="Siobhán's Fire Go Box - Detailed Imagae"></a>
                    </span>
                    <span class="detail-smallbox">
                        <a class="fancybox" href="images/detail-3b.jpg" title="Peat briquettes - Detailed Imagae"><img class="detail-thumb" src="images/detail-3b.jpg" alt="Peat briquettes - Detailed Imagae"></a>
                    </span>
                </div>

            </div>


            <div class="col-md-7 peat product-left">

<!--                 <div class="blogheader"><div class="blogtitle"><p class="featurette-heading blogheader">Dublin Trip - December 2013</p></div> -->
<!--                 <div class="blogdate" style="float: left; width: 100%;"><strong>Posted on January 12, 2014</strong></div></div><br> -->
                <p class="lead peatinfo" style="padding-top: 15px;">&nbsp;&nbsp;&nbsp;Perfect for your next outdoor adventure, our Fire Go Box is a compact, travel-friendly version of Irish Fire Logs. The perfect solution for keeping your campfires burning longer and hotter, with no sparks. Two Irish Fire Logs (briquettes) per box.</p>
               <a href="http://shop.irishfirelogs.com/products/fire-go-box.html" alt="Purchase Siobhán's Fire Go Box Online"><p class="product-details">Purchase this product online</p></a>

                <table  style="width: 60%;">
                <tr style="width: 60%; min-width: 250px;">
                <td><p class="product-details">Dimensions:</p></td><td><p class="product-details">7.5"x3"x3.5"</p></td>
                </tr>
                <tr  style="width: 60%;">
                <td><p class="product-details">Weight:</p></td><td> <p class="product-details">2 lbs</p></td>
                </tr>
                </table>
            </div>
		</div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->

        <?php include_once("footer.php") ?>


    </div>


</body>
<!-- Placed at the end of the document so the pages load faster -->

<!-- <script src="assets/js/jquery.js"></script> -->
<script src="js/blueimp-gallery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="assets/js/holder.js"></script>

<script>
document.getElementById('container').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MH67MP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MH67MP');</script>
<!-- End Google Tag Manager -->

</body>

</html>
