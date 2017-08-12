<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=medatulp_medansports', 'medatulp', 'Y0EPF1Uee1swk');
} catch (PDOException $e) {
    echo $e->getMessage()."<br>";
    die();
}
/**$sql = 'SELECT * from products';
foreach( $db->query($sql) as $row ) {
    echo $row['product_id']." - ".$row['product_name']."<br>";
}
$db = null;//close database**/
?> 
