<?php
//connect to database
require_once('include/config.php');

//check if already logged in move to admin page
if($user->is_logged_in() ){ header('Location: index.php'); }

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	//$stmt = $conn->prepare("SELECT username,password FROM Member where userName = $username AND pass = $password");
	//$stmt->exec();
	if($user->login($username,$password)){
		$_SESSION['username'] = $username;
		header('Location: contact.php');
		exit;

	} else {
		$error[] = 'Incorrect username or password!';
	}

} ?>
