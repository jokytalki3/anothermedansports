<?php require('include/config.php');

//if form has been submitted process it
if(isset($_POST['register'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $conn->prepare('SELECT username FROM Member WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}

	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}

	if(strlen($_POST['email']) < 10){
		$error[] = 'Please enter email.';
	}

	if(strlen($_POST['hp_num']) < 10){
		$error[] = 'Please enter appropriate handphone number.';
	}

	if(strlen($_POST['address']) == 0){
		$error[] = 'Please enter address.';
	}

	if(strlen($_POST['city']) == 0){
		$error[] = 'Please select your city.';
	}

	if(strlen($_POST['state']) == 0){
		$error[] = 'Please select your state.';
	}

	if(strlen($_POST['credit_card']) < 16){
		$error[] = 'Please enter valid credit card number.';
	} else {
		$stmt = $conn->prepare('SELECT credit_card FROM Member WHERE credit_card = :credit_card');
		$stmt->execute(array(':credit_card' => $_POST['credit_card']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['credit_card'])){
			$error[] = 'Credit card is owned by another user.';
		}
	}

	if(strlen($_POST['card_expmo']) < 2){
		$error[] = 'Please select expiry month.';
	}

	if(strlen($_POST['card_expyr']) < 2){
		$error[] = 'Please select expiry year.';
	}




	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password (include/password.php)
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);


		try {

			//insert into database with a prepared statement
			$stmt = $conn->prepare('INSERT INTO Member (username,password,email,hp_num,ship_addr,ship_city,ship_state,credit_card,card_exp_mo,card_exp_yr)
			 VALUES (:username, :password, :email, :hp_num, :address, :city, :state, :credit_card, :card_expmo, :card_expyr)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':hp_num' => $_POST['hp_num'],
				':address' => $_POST['address'],
				':city' => $_POST['city'],
				':state' => $_POST['state'],
				':credit_card' => $_POST['credit_card'],
				':card_expmo' => $_POST['card_expmo'],
				':card_expyr' => $_POST['card_expyr'],

			));
			$id = $conn->lastInsertId('member_id');


			//redirect to index page
			//header('Location: register.php?action=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
			$error[] = $e->getMessage();
		}

	}
}

?>


            <!--A Design by W3layouts
Author: W3layoutAuthor URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 UnportedLicense URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
            <html lang="en">
              <head>
                <meta content="text/html; charset=utf-8" http-equiv="content-type">
                <title>N-Air a E-commerce category Flat Bootstrap Responsive
                  Website Template | Checkout :: w3layouts</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design">
                <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
                <!--fonts-->
                <link href="//fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"
                  type="text/css">
                <!--fonts-->
                <!--bootstrap-->
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
                <script defer="defer" src="js/jquery.flexslider.js"></script>
                <link rel="stylesheet" href="css/flexslider.css" type="text/css"
                  media="screen">
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
                      <div class="logo"> <a href="index.php">N-AIR</a>
                      </div>
                      <div class="login-bars"> <a class="btn btn-default log-bar"
                          href="register.php" role="button">Sign up</a> <a class="btn btn-default log-bar"
                          href="login.php" role="button">Login</a>
                        <div class="cart box_1"> <a href="checkout.html">
                            <h3>
                              <div class="total">
                                <span class="simpleCart_total"></span>(<span id="simpleCart_quantity"
                                  class="simpleCart_quantity"></span>)</div>
                            </h3>
                          </a>
                          <p><a href="javascript:;" class="simpleCart_empty">Empty
                              Cart</a></p>
                          <div class="clearfix"> </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!---menu-----bar--->
                    <div class="header-botom">
                      <div class="content white">
                        <nav class="navbar navbar-default nav-menu" role="navigation">
                          <div class="navbar-header"> <button type="button" class="navbar-toggle"
                              data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              <span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span>
                              <span class="icon-bar"></span> </button> </div>
                          <!--/.navbar-header-->
                          <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav nav-font">
                              <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                  data-toggle="dropdown">Shop<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                  <li><a href="products.html">Shoes</a></li>
                                  <li><a href="products.html">Tees</a></li>
                                  <li><a href="products.html">Tops</a></li>
                                  <li class="divider"></li>
                                  <li><a href="products.html">Tracks</a></li>
                                  <li class="divider"></li>
                                  <li><a href="products.html">Gear</a></li>
                                </ul>
                              </li>
                              <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                  data-toggle="dropdown">Men<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                  <div class="row">
                                    <div class="col-sm-4 menu-img-pad">
                                      <ul class="multi-column-dropdown">
                                        <li><a href="products.html">Joggers</a></li>
                                        <li><a href="products.html">Foot Ball</a></li>
                                        <li><a href="products.html">Cricket</a></li>
                                        <li class="divider"></li>
                                        <li><a href="products.html">Tennis</a></li>
                                        <li class="divider"></li>
                                        <li><a href="products.html">Casual</a></li>
                                      </ul>
                                    </div>
                                    <div class="col-sm-4 menu-img-pad"> <a href="#"><img
                                          src="images/menu1.jpg" alt="/" class="img-rsponsive men-img-wid"></a>
                                    </div>
                                    <div class="col-sm-4 menu-img-pad"> <a href="#"><img
                                          src="images/menu2.jpg" alt="/" class="img-rsponsive men-img-wid"></a>
                                    </div>
                                  </div>
                                </ul>
                              </li>
                              <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                  data-toggle="dropdown">Women<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-2">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <ul class="multi-column-dropdown">
                                        <li><a href="products.html">Tops</a></li>
                                        <li><a href="products.html">Bottoms</a></li>
                                        <li><a href="products.html">Yoga Pants</a></li>
                                        <li class="divider"></li>
                                        <li><a href="products.html">Sports</a></li>
                                        <li class="divider"></li>
                                        <li><a href="products.html">Gym</a></li>
                                      </ul>
                                    </div>
                                    <div class="col-sm-6"> <a href="#"><img src="images/menu3.jpg"
                                          alt="/" class="img-rsponsive men-img-wid"></a>
                                    </div>
                                  </div>
                                </ul>
                              </li>
                              <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                  data-toggle="dropdown">kids<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                  <li><a href="products.html">Tees</a></li>
                                  <li><a href="products.html">Shorts</a></li>
                                  <li><a href="products.html">Gear</a></li>
                                  <li class="divider"></li>
                                  <li><a href="products.html">Watches</a></li>
                                  <li class="divider"></li>
                                  <li><a href="products.html">Shoes</a></li>
                                </ul>
                              </li>
                              <li><a href="contact.html">Catch</a></li>
                              <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <!--/.navbar-collapse-->
                          <div class="clearfix"></div>
                        </nav>
                        <!--/.navbar-->
                        <div class="clearfix"></div>
                      </div>
                      <!--/.content---> </div>
                    <!--header-bottom--> </div>
                </div>
                <div class="head-bread">
                  <div class="container">
                    <ol class="breadcrumb">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="register.php">LOGIN</a></li>
                      <li class="active">REGISTER</li>
                    </ol>
                  </div>
                </div>
                <!-- reg-form -->
                <div class="reg-form">
                  <div class="container">
                    <div class="reg">
                      <h3>Register Now</h3>
                      <p>Welcome, please enter the following details to
                        continue.</p>
                      <p>If you have previously registered with us, <a href="#">click
                          here</a></p>
                      <form role="form" method="post" action="" autocomplete="off">
                        <ul>
                          <li class="text-info">Username: </li>
                          <li><input name="username" value="" type="text"></li>
                        </ul>
                        <ul>
                          <li class="text-info">Password: </li>
                          <li><input name="password" value="" type="password"></li>
                        </ul>
                        <ul>
                          <li class="text-info">Re-enter Password:</li>
                          <li><input name="passwordConfirm" value="" type="password"></li>
                        </ul>
                        <ul>
                          <li class="text-info">Email: </li>
                          <li><input name="email" value="" type="text"></li>
                        </ul>
                        <ul>
                          <li class="text-info">Mobile Number:</li>
                          <li><input name="hp_num" value="" type="text"></li>
                        </ul>
                        <ul>
                          <li class="text-info">Street Address: </li>
                          <li><input name="address" value="" type="text"></li>
                        </ul>
                        <ul>
                          <li class="text-info">City: </li>
                          <li><input name="city" value="" type="text"></li>
                        </ul>
                        <ul>
                          <li class="text-info">State: </li>
                          <li><input name="state" value="" type="text"></li>
                        </ul>
                        <ul>
                          <li class="text-info">Credit/Debit Card Number (16 digits): </li>
                          <li><input name="credit_card" value="" type="text"></li>
                        </ul>
                        <ul>
                          <li class="text-info">Card Expiry Month: </li>
                          <li><input name="card_expmo" value="" type="text"></li>
                        </ul>
                        <ul>
                          <li class="text-info">Card Expiry Year: </li>
                          <li><input name="card_expyr" value="" type="text"></li>
                        </ul>
                        <input name="register" type="submit" value="Register Now">
					<p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p>
				</form>
			</div>
		</div>
	</div>
        <div class="footer-grid">
            <div class="container">
                <div class="col-md-2 re-ft-grd">
                    <h3>Categories</h3>
                    <ul class="categories">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Formal</a></li>
                        <li><a href="#">Casuals</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <h3>Short links</h3>
                    <ul class="shot-links">
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Terms &amp; conditions</a></li>
                        <li><a href="contact.html">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-md-6 re-ft-grd">
                    <h3>Social</h3>
                    <ul class="social">
                        <li><a href="#" class="fb">facebook</a></li>
                        <li><a href="#" class="twt">twitter</a></li>
                        <li><a href="#" class="gpls">g+ plus</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <div class="bt-logo">
                        <div class="logo">
                            <a href="index.php" class="ft-log">N-AIR</a>
                        </div>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
            <p>©   2015 N-AIR All Rights Reserved. Design by <a href="http://www.w3layouts.com">w3layouts</a></p>
                </div>
            </div>
        </div>
</body>
</html>
