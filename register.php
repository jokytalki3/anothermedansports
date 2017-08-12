<?php require('include/config.php');

//if form has been submitted process it
if(isset($_POST['register'])){	//validations
	//recaptcha v2 server side script
	$secretKey = "6LdhhiwUAAAAACww1F9FRFcH4n8vzVBQSbyXawsx";
	$responseKey = $_POST['g-recaptcha-response'];
	//$userIP = $_SERVER['REMOTE_ADDR'];	//Show remote ip
	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey"; //append &remoteip=$userIP if want
	$response = file_get_contents($url);	//get response from verification
	$response = json_decode($response);

	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $conn->prepare('SELECT username FROM Member WHERE username = :username');
		$stmt->bindParam(':username', $_POST['username']); //bind parameter prevent injection
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}

	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Confirm password does not match.';
	}

	if(strlen($_POST['email']) < 10){
		$error[] = 'Please enter email.';
	}

	if(strlen($_POST['hp_num']) < 10){
		$error[] = 'Please enter appropriate handphone number.';
	}

	if(strlen($_POST['address']) < 10){
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

	if ($response->success == false){
		$error[] = "<b>Verification failed!</b>";
	}

	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password (include/password.php)
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);


		try {

			//insert into database with a prepared statement
			$stmt = $conn->prepare('INSERT INTO Member (username,password,email,hp_num,ship_addr,ship_city,ship_state,credit_card,card_exp_mo,card_exp_yr)
			 VALUES (:username, :password, :email, :hp_num, :address, :city, :state, :credit_card, :card_expmo, :card_expyr)');
		 //bind parameters for preventing injection
			 $stmt->bindParam(':username', $_POST['username']);
			 $stmt->bindParam(':password', $hashedpassword);
			 $stmt->bindParam(':email', $_POST['email']);
			 $stmt->bindParam(':hp_num', $_POST['hp_num']);
			 $stmt->bindParam(':address', $_POST['address']);
			 $stmt->bindParam(':city', $_POST['city']);
			 $stmt->bindParam(':state', $_POST['state']);
			 $stmt->bindParam(':credit_card', $_POST['credit_card']);
			 $stmt->bindParam(':card_expmo', $_POST['card_expmo']);
			 $stmt->bindParam(':card_expyr', $_POST['card_expyr']);
		 //executing query
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

			echo "<h2 class='bg-success'>Registration successful! You will be redirected to homepage.</h2>";
			//redirect to index page
			header("refresh:2; url=index.php");
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
			$error[] = $e->getMessage();
		}

	}
}
//import header
$title="Register";
require('include/header.php');
?>

<!-- reg-form -->
<div class="reg-form">
	<div class="container">
		<div class="reg">
			<h3>Register Now</h3>
			<p>Welcome, please enter the following details to
				continue.</p>
			<p>If you have previously registered with us, <a href="login.php">click
					here</a></p>
			<form role="form" method="post" action="" autocomplete="off">
				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}
				?>
				<ul>
					<li class="text-info">Username:</li>
					<li><input name="username" pattern="[A-Za-z0-9]{6,100}" title="6-100 characters, only a-Z and 0-9 allowed!" type="text" placeholder="6-100 chatacters, a-Z and 0-9 only" value="<?php if(isset($error)){ echo $_POST['username']; } //username remains in textbox even got error?>"></li>
				</ul>
				<ul>
					<li class="text-info">Password:</li>
					<li><input name="password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{6,100}" title="6-100 characters and least a number" value="" type="password" placeholder="6-100 characters and at least a number"></li>
				</ul>
				<ul>
					<li class="text-info">Confirm Password:</li>
					<li><input name="passwordConfirm" value="" type="password"></li>
				</ul>
				<ul>
					<li class="text-info">Email: </li>
					<li><input name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter correct email address" type="text" placeholder="someone@email.com" value="<?php if(isset($error)){ echo $_POST['email']; } ?>"></li>
				</ul>
				<ul>
					<li class="text-info">Mobile Number:</li>
					<li><input name="hp_num" type="text" value="<?php if(isset($error)){ echo $_POST['hp_num']; } ?>"></li>
				</ul>
				<ul>
					<li class="text-info">Street Address: </li>
					<li><input name="address" type="text" value="<?php if(isset($error)){ echo $_POST['address']; } ?>"></li>
				</ul>
				<ul>
					<li class="text-info">City: </li>
					<li><input name="city" type="text" value="<?php if(isset($error)){ echo $_POST['city']; } ?>"></li>
				</ul>
				<ul>
					<li class="text-info">State: </li>
					<li><input name="state" type="text" value="<?php if(isset($error)){ echo $_POST['state']; } ?>"></li>
				</ul>
				<ul>
					<li class="text-info">Credit/Debit Card Number (16 digits): </li>
					<li><input name="credit_card" pattern="[0-9]{16,16}" title="Correct card number" value="" type="text" placeholder="1234567890123456"></li>
				</ul>
				<ul>
					<li class="text-info">Card Expiry Month: </li>
					<li><input name="card_expmo" pattern="[0-9]{2,2}" title="Correct month" value="" type="text"></li>
				</ul>
				<ul>
					<li class="text-info">Card Expiry Year: </li>
					<li><input name="card_expyr" pattern="[0-9]{2,2}" title="Correct year" value="" type="text"></li>
				</ul>
				<br></br>
				<p>Please verify the following to complete registration.</p>
				<div class="g-recaptcha" data-sitekey="6LdhhiwUAAAAALgx43zmnqc_cusPWDulGftD5kap"></div>
				<br></br>
				<input name="register" type="submit" value="Register Now">
<p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p>
</form>
</div>
</div>
</div>

<?php require('include/footer.php');
