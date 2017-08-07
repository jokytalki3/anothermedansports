<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 <?php $dbPDO= new PDO('mysql:host=localhost;dbname=medatulp_medansports', 'medatulp', 'Y0EPF1Uee1swk');
		$result=$dbPDO->query("SELECT * FROM Orders");
	echo 'first queries'.$result; ?>
<body>
</body>
</html>
