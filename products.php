<?php //script error reporting
error_reporting(E_ALL);
ini_set('display_error','1');
?>
<?php
require_once('include/config.php');
if(isset($_GET['cat_id'])){
	$cat_id = preg_replace('#[^A-Z0-9]#i','',$_GET['cat_id']);
	//this if else condition determines the amounts of products to be displayed per page
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}else{
		$page=1;
	}
	$productPerPage=20;
	$start_from= ($page-1) * $productPerPage;
	//Use this var to check see if ID exists in database, if yes then get
	//the product details, if no then exit database and give a message
	$dynamicList="";
	$sql= $conn->prepare("SELECT * FROM products, category WHERE products.cat_id=category.cat_id AND products.cat_id LIKE '$cat_id' LIMIT $start_from,$productPerPage");
	$sql->execute();
	$productCount= $sql->rowCount();
	if($productCount > 0){
		//get all the product details with foreach loop
		$result=$sql->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row){
		$id=$row["product_id"];
		$product_name= $row["product_name"];
		$cat_name= $row["cat_name"];
		$price = $row["price"];
				$dynamicList .='<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
        					<div class="col-item">
        						<div class="photo">
        							<a href="single.php?id='. $id .'"> <img src="./images/'.$id.'.png" class="img-responsive" alt="" /> </a>
        						</div>
        						<div class="info">
        							<div class="row">
        								<div class="price-details col-md-6">
        									<p class="details">
        									'.$product_name.'
        									</p>
        								</div>
        							</div>
        							<div class="separator clear-left">
        								<p class="btn-add">
        									<i class="glyphicon glyphicon-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
        								</p>
        								<p class="price-new">RM'.$price.'</p>
        							</div>
        							<div class="clearfix"></div>
        						</div>
        					</div>
        				</div>';
		
		//product name, price, details, category, subcategory
		}
	}else{
		echo "There is no products with such category in the database(yet)";
		exit();
	}
}else{
	echo "Data to render this page is missing";
	exit();
}
?>
        <?php 
$title=$cat_name;
require('include/header.php');?>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><?php echo $cat_name.' '.$productCount?></li>
                </ol>
            </div>
        </div>
        <div class="products-gallery">
           <div class="container">
               <div class="col-md-9 grid-gallery">
                   <?php echo $dynamicList; ?>
                   
            <div class="clearfix"></div>
                </div>
               <div class="col-md-3 grid-details">
                    <div class="grid-addon">
                        <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">Shoes</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Running</p></a>
									<a href="#"><p>Foot ball</p></a>
									<a href="#"><p>Daily</p></a>
									<a href="#"><p>Sneakers</p></a>
						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">Clothing</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Tracks</p></a>
									<a href="#"><p>Tees</p></a>
									<a href="#"><p>Hair bands</p></a>
									<a href="#"><p>Wrist bands</p></a>
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort">Gear</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Running app</p></a>
									<a href="#"><p>Training club</p></a>
									<a href="#"><p>Nike Fuel+Band se</p></a>
						     </div>
					      </div>						  
						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					 
				 </section>
				 <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						 </div>
					 </div>
				 </section> 				 
				   <!---->
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					<script type='text/javascript'>//<![CDATA[ 
					$(window).load(function(){
					 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 400000,
								values: [ 2500, 350000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

					});//]]>  

					</script>
					<section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Air Max (30)</label>
								</div>
								<div class="col col-4">
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Armagadon   (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Helium (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kyron     (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Napolean  (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Foot Rock   (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Radiated  (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Spiked  (30)</label>
								</div>
							</div>
				   </section>
				 <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tornado</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kissan</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Manga</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wega</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kings</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
								</div>
							</div>
				   </section>		
                    </div>
               </div>
            <div class="clearfix"></div>
            </div> 
            <div class="container" align="right">
            <?php
//this code count the pages needed where the data is selected and split on pages
$sql=$conn->prepare("SELECT COUNT(product_id) AS total FROM products WHERE cat_id='$cat_id'");
$sql->execute();
$result=$sql->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
$totalpages=ceil($row['total']/$productPerPage);//calculate the total pages with result product
}
for ($i=1; $i<=$totalpages; $i++) {  // print links for all pages
            echo "<a href='products.php?cat_id=".$cat_id."&page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i." </a> "; 
};
?></div>
        <?php include('include/footer.php');?>
</body>
</html>