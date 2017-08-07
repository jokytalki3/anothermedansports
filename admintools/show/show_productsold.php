 <?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Product Id</th><th>Product Name</th><th>Description</th><th>Weight</th><th>Price</th><th>Status</th><th>Category Id</th><th>Brand id</th><th>Tags</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

require('../vipfile/config.php');
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);
//$show = "CREATE TEMPORARY TABLE IF NOT EXISTS prod_temp SELECT * FROM products;
	//ALTER TABLE prod_temp DROP cat_id;
	//SELECT * FROM prod_temp";

try {
	//array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
	$show = $conn->prepare("CREATE TEMPORARY TABLE IF NOT EXISTS prod_temp SELECT * FROM products");
    $show->execute();
    $show = $conn->prepare("ALTER TABLE prod_temp DROP cat_id, DROP brand_id");
    $show->execute();
    $show = $conn->prepare("SELECT * FROM prod_temp JOIN Category, Brand");
    $show->execute();
    // set the resulting array to associative
    $result = $show->setFetchMode(PDO::FETCH_ASSOC);
    //$result = $show->fetchAll(PDO::FETCH_OBJ);
    foreach(new TableRows(new RecursiveArrayIterator($show->fetchAll())) as $k=>$v) {
        echo $v;
    
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 

