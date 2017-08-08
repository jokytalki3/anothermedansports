<?php
require('config.php');

if ($dbname->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
    $stmt = $dbname->prepare('select * from prod_temp',
        array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
} else {
    die("my application only works with mysql; I should use \$stmt->fetchAll() instead");
}
?>

