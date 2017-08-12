<?php
require('include/config.php');
require('include/header.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $secretKey = "6LdhhiwUAAAAACww1F9FRFcH4n8vzVBQSbyXawsx";
	$responseKey = $_POST['g-recaptcha-response'];
	//$userIP = $_SERVER['REMOTE_ADDR'];	//Show remote ip
	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey"; //append &remoteip=$userIP if want
	$response = file_get_contents($url);	//get response from verification
	$response = json_decode($response);
	if ($response->success){
		echo "<b>Verification sucess!</b>";
	} else{
		echo "<b>Verification failed...</b>";
	}}
?>

<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="index.php" method="POST">
      <p>Please done this to continue.</p>
      <input name="username" type="text" value="">
				<div class="g-recaptcha" data-sitekey="6LdhhiwUAAAAALgx43zmnqc_cusPWDulGftD5kap"></div>
				<br></br>
				<input name="submit" type="submit" value="Submit!">
      <br/>
    </form>
  </body>
</html>
