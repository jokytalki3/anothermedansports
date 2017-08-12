<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Medan Sports E-commerce Responsive website, Bootstrap Website, Andriod Compatible Website, Smartphone Compatible Website, Yonex, Addoy, Trophy, Award, Garments, Sports Wear">
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"
      type="text/css">
    <!--fonts-->
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--shop-kart-js-->
    <script src="js/simpleCart.min.js"></script>
    <!--default-js-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>
    <!--script-->
    <!-- FlexSlider -->
            <script src="js/imagezoom.js"></script>
              <script defer src="js/jquery.flexslider.js"></script>
            <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
        <!-- //FlexSlider-->
  </head>
  <body>
<div class="header">
  <div class="container">
    <div class="header-top">
      <div class="logo"> <a href="index.php">Medan Sports</a> </div>
      <div class="login-bars"> <a class="btn btn-default log-bar" href="register.php" role="button">Sign up</a> <a class="btn btn-default log-bar" href="login.php" role="button">Login</a>
        <div class="cart box_1"> <a href="checkout.html">
          <h3>
            <div class="total"> <span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
          </h3>
          </a>
          <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
    <!---menu-----bar--->
    <div class="header-botom">
      <div class="content white">
        <nav class="navbar navbar-default nav-menu" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <!--/.navbar-header-->

          <div class="collapse navbar-collapse collapse-pdng nav-background-color" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-font">
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sports Equipment<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="products.php?cat_id=SE001">Game Ball</a></li>
                  <li><a href="products.php?cat_id=SE005">Racket</a></li>
                  <li><a href="products.php?cat_id=SE006">Table Tennis</a></li>
                  <li><a href="products.php?cat_id=SE007">Hockey</a></li>
                  <li class="divider"></li>
                  <li><a href="products.php?cat_id=SE010">Running</a></li>
                  <li><a href="products.php?cat_id=SE009">Track &#38; Field</a></li>
                  <li class="divider"></li>
                  <li><a href="products.php?cat_id=SE002">Indoor Game</a></li>
                  <li><a href="products.php?cat_id=SE008">Outdoor Game</a></li>
                  <li class="divider"></li>
                  <li><a href="products.php?cat_id=SE004">Net Needle &#38; Trolley</a></li>
                  <li><a href="products.php?cat_id=SE003">Post, Board,  Ring &#38; Stand</a></li>
                  <li><a href="products.php?cat_id=SE011">Supportive</a></li>
                  <li><a href="products.php?cat_id=SE012">Accessories</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Garment<strong class="caret"></strong></a>
                <ul class="dropdown-menu multi-column columns-2">
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="multi-column-dropdown">
                        <li><a href="products.php?cat_id=GM001">Round Neck Shirt</a></li>
                        <li><a href="products.php?cat_id=GM002">Collar Neck Shirt</a></li>
                        <li><a href="products.php?cat_id=GM003">Zip Mock Neck</a></li>
                        <li><a href="products.php?cat_id=GM004">Jersey</a></li>
                        <li class="divider"></li>
                        <li><a href="products.php?cat_id=GM005">Pant</a></li>
                        <li class="divider"></li>
                        <li><a href="products.php?cat_id=GM008">Muslimah</a></li>
                        <li class="hidden-lg hidden-md hidden-sm divider"></li>
                        <li class="hidden-lg hidden-md hidden-sm"><a href="products.php?cat_id=GM006">Corporate Uniform</a></li>
                        <li class="hidden-lg hidden-md hidden-sm"><a href="products.php?cat_id=GM007">Lab Coat</a></li>
                        <li class="hidden-lg hidden-md hidden-sm"><a href="products.php?cat_id=GM009">Jacket</a></li>
                        <li class="hidden-lg hidden-md hidden-sm"><a href="products.php?cat_id=GM010">Vest</a></li>
                        <li class="hidden-lg hidden-md hidden-sm"><a href="products.php?cat_id=GM011">Coverall</a></li>
                        <li class="divider"></li>
                        <li class="hidden-lg hidden-md hidden-sm"><a href="products.php?cat_id=GM012">Apron</a></li>
                        <li class="hidden-lg hidden-md hidden-sm"><a href="products.php?cat_id=GM013">Cap</a></li>
                        <li class="hidden-lg hidden-md hidden-sm"><a href="products.php?cat_id=GM014">Towel</a></li>
                      <!--long and short sleeve should be categorized later on product page-->
                      </ul>
                    </div>
                    <div class="col-sm-6">
						<ul class="multi-column-dropdown">
                       		<li class="hidden-xs"><a href="products.php?cat_id=GM006">Corporate Uniform</a></li>
                        	<li class="hidden-xs"><a href="products.php?cat_id=GM007">Lab Coat</a></li>
                       		<li class="hidden-xs"><a href="products.php?cat_id=GM009">Jacket</a></li>
                        	<li class="hidden-xs"><a href="products.php?cat_id=GM010">Vest</a></li>
                        	<li class="hidden-xs"><a href="products.php?cat_id=GM011">Coverall</a></li>
                        	<li class="divider"></li>
                        	<li class="hidden-xs"><a href="products.php?cat_id=GM012">Apron</a></li>
                        	<li class="hidden-xs"><a href="products.php?cat_id=GM013">Cap</a></li>
                        	<li class="hidden-xs"><a href="products.php?cat_id=GM014">Towel</a></li>
						</ul>
					</div>
                    <div class="col-sm-4 menu-img-pad hidden"> <a href="#"><img src="images/menu2.jpg" alt="/" class="img-rsponsive men-img-wid" /></a> </div>
                  </div>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trophy<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-2">
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="multi-column-dropdown">
                        <li><a href="products.php?cat_id=TP001">Imported Cup</a></li>
                        <li><a href="products.php?cat_id=TP002">Hanging Medal</a></li>
                        <li><a href="products.php?cat_id=TP003">Plastic Standing Medal</a></li>
                        <li class="divider"></li>
                        <li><a href="products.php?cat_id=TP004">Plaque</a></li>
                        <li><a href="products.php?cat_id=TP005">Pewter Award</a></li>
                        <li><a href="products.php?cat_id=TP006">Poly Resin Trophy</a></li>
                        <li><a href="products.php?cat_id=TP007">Acrylic Make-up Trophy</a></li>
                        <li><a href="products.php?cat_id=TP008">Casting Part Trophy</a></li>
                        <li><a href="products.php?cat_id=TP009">Ps Trophy</a></li>
                        <li class="divider"></li>
                        <li><a href="products.php?cat_id=TP010">Custom Made</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-6"> <a href="#"><img src="images/menu3.jpg" alt="/" class="img-rsponsive men-img-wid" /></a> </div>
                  </div>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gift &#38; Premium<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="products.php?cat_id=GP001">USB Drive Series</a></li>
                  <li><a href="products.php?cat_id=GP002">Power Bank Series</a></li>
                  <li><a href="products.php?cat_id=GP003">Pen Series</a></li>
                  <li class="divider"></li>
                  <li><a href="products.php?cat_id=GP004">Bag Series</a></li>
                  <li class="divider"></li>
                  <li><a href="products.php?cat_id=GP005">Household Series</a></li>
                  <li><a href="products.php?cat_id=GP006">Stationery Series</a></li>
                  <li><a href="products.php?cat_id=GP007">Electronic Series</a></li>
                  <li><a href="products.php?cat_id=GP008">Eco Series</a></li>
                  <li><a href="products.php?cat_id=GP009">Miscellaneous Series</a></li>
                  <li><a href="products.php?cat_id=GP010">Lanyard Series</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Custom Made<b class="caret"></b></a>
               	<ul class="dropdown-menu">
                  <li><a href="products.php?cat_id=CM001">Embroidery</a></li>
                  <li><a href="products.php?cat_id=CM002">Heatpress</a></li>
                  <li><a href="products.php?cat_id=CM003">Silkscreeb</a></li>
                  <li class="divider"></li>
                  <li><a href="products.php?cat_id=CM004">Sticker</a></li>
                  <li class="divider"></li>
                  <li><a href="products.php?cat_id=CM005">Garment</a></li>
                  <li><a href="products.php?cat_id=CM006">Trophy</a></li>
                  <li><a href="products.php?cat_id=CM007">Name Card</a></li>
                  <li><a href="products.php?cat_id=CM008">Banner</a></li>
                  <li><a href="products.php?cat_id=CM009">Bunting</a></li>
                  <li><a href="products.php?cat_id=CM010">Pennants</a></li>
                  <li><a href="products.php?cat_id=CM011">Mug</a></li>
                  <li><a href="products.php?cat_id=CM012">Chop</a></li>
                </ul>

              </li>
              <li class="hidden"><a href="contact.html">Custom Made</a></li>
              <li class="hidden"><a href="#">FAQ</a></li>
            </ul>
          </div>
          <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
      </div>
      <!--/.content--->
    </div>
    <!--header-bottom-->
  </div>
</div>
