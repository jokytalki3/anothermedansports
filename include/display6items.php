<?php
	//display products up to 6 products
	require_once("include/config.php");
	
	if(isset($data)){
		$dataquery=$data;
	}
	$dynamicList="";
	$sql= $conn->prepare($dataquery);
	$sql->execute();
	$count= $sql->rowCount();
	if($count>0){
		$result=$sql->fetchAll	(PDO::FETCH_ASSOC);
		foreach($result as $row){
		$id= $row['product_id'];
		$name=$row['product_name'];
		$price=$row['price'];
		$dynamicList .='<div class="col-xs-6 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="single.php?id='. $id .'">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="./images/'. $id .'.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">'.$price.'</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>'.$name.'</span>
                          </div>
                        </div>
                      </a> </div>';
	}
			echo $dynamicList;
	}else{
		echo "We don't have any product to display";
	}
	
?>