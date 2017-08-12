<?php
//include config
require('vipfile/config.php');

//Add data
try {
    $sql = "INSERT INTO Courier (courier_id, courier_name)
    VALUES (4, 'Busi International')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Inserted ID: " . $last_id;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

