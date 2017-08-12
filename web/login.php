<?php
//use header
$title="Login";
require('include/header.php');
//connect to database
require_once('include/config.php');

//check if already logged in move to admin page
if($user->is_logged_in() ){ header('Location: index.php'); }

//process login form if submitted
if(isset($_POST['login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	try{
	if($user->login($username,$password)){
		$_SESSION['username'] = $username;
		header('Location: index.php');
		exit;
	}

	} catch(PDOException $e){
		$error[] = 'Incorrect username or password!';
}
}
?>

<!-- login-page -->
<div class="login">
		<div class="container">
				<div class="login-grids">
						<div class="col-md-6 log">
										 <h3>Login</h3>
										 <div class="strip"></div>
										 <p>Welcome, please enter the following to continue.</p>
										 <?php
				     				//check for any errors
				     				if(isset($error)){
				     					foreach($error as $error){
				     						echo '<p class="bg-danger">'.$error.'</p>';
				     					}
				     				}
				     				?>
										 <form>
												 <h5>User Name:</h5>
												 <input name="username" type="text" value="<?php if(isset($error)){ echo $_POST['username']; } //username remains in textbox even got error?>">
												 <h5>Password:</h5>
												 <input name="password" type="password" value="" autocomplete="off"><br>
												 <input name="login" type="submit" value="Login">

										 </form>
										<a href="forgotpwd.php">Forgot Password ?</a>
						</div>
						<div class="col-md-6 login-right">
										<h3>New Registration</h3>
										<div class="strip"></div>
										<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
										<a href="register.php" class="button">Create An Account</a>
						</div>
						<div class="clearfix"></div>
				</div>
		</div>
</div>
<!-- //login-page -->

<?php require('include/footer.php') ?>
