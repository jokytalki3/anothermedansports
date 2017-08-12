<?php
ob_start();		
session_start();

$servername = "localhost";
$username = "medatulp";
$password = "Y0EPF1Uee1swk";
$dbname = "medatulp_medansports";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname",
  $username, $password);
  //set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}

//include the user class, pass in the database connection
include('user.php');

$user = new User($conn);
 ?>
