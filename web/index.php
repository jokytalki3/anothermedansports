<?php require("include/db_connect.php"); ?>
<?php 
$dynamicList="";
$sql= "SELECT * FROM products";
foreach($db->query($sql) as $row){
	$id= $row['product_id'];
	$name=$row['product_name'];
	$price=$row['price'];
	$dynamicList='<div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="product.php?id='. $id .'">
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
                      </a> </div>
                  </div>';
}

?>

<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>Medan Sports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design">
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"
      type="text/css">
    <!--fonts-->
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--shop-kart-js-->
    <script src="js/simpleCart.min.js"></script>
    <!--default-js-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>
    <!--script-->
  </head>
  <body>
    <?php require('include/header.php'); ?>
    <div class="header-end">
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><br>
            </li>
            <li data-target="#myCarousel" data-slide-to="1"><br>
            </li>
            <li data-target="#myCarousel" data-slide-to="2"><br>
            </li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active"> <img src="./images/shoe3.jpg" alt="...">
              <div class="carousel-caption car-re-posn">
                <h3>AirMax</h3>
                <h4>You feel to fall</h4>
                <span class="color-bar"></span> </div>
            </div>
            <div class="item"> <img src="./images/shoe1.jpg" alt="...">
              <div class="carousel-caption car-re-posn">
                <h3>AirMax</h3>
                <h4>You feel to fall</h4>
                <span class="color-bar"></span> </div>
            </div>
            <div class="item"> <img src="./images/shoe2.jpg" alt="...">
              <div class="carousel-caption car-re-posn">
                <h3>AirMax</h3>
                <h4>You feel to fall</h4>
                <span class="color-bar"></span> </div>
            </div>
          </div>
          <!-- Controls --> <a class="left carousel-control" href="#myCarousel"
            role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left car-icn"
              aria-hidden="true"></span> <span class="sr-only">Previous</span>
          </a> <a class="right carousel-control" href="#myCarousel" role="button"
            data-slide="next"> <span class="glyphicon glyphicon-chevron-right car-icn"
              aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="flash-sale-overview-carousel">
        <div class="header-section__header header-section--simple">
          <div class="header-section__header">
            <div class="header-section__header__title">
              <div class="flash-sale-header">
                <h3>HOT RIGHT NOW</h3>
              </div>
            </div>
            <a class="header-section__header-link" href="#">
              <div class="button-no-outline"> See All &gt; </div>
            </a> </div>
          <!--<div class="header-section__content col-md-12">
	<!-- must have the id for multi carousel-->
          <div class="row">
            <div class="col-md-12 max-height">
              <div class="carousel carousel-showmanymoveone slide max-height" id="carousel123">
                <div class="carousel-inner max-height">
                  <div class="item active">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link " href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>1This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>
                  <!--<div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>2This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>-->
                  <?php echo $dynamicList; ?>
                  <div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>3This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>4This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>5This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>6This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>7This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>8This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>9This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-sm-4 col-md-2 flash-sale-item-card"><a
                        class="flash-sale-item-card-link" href="#">
                        <div class="flash-sale-item-card__image flash-sale-item-card__image--home-page">
                          <img src="/images/loadingpic.png" class="img-responsive ">
                        </div>
                        <div class="flash-sale-item-card__lower-wrapper">
                          <!--the detail of the product-->
                          <div class="flash-sale-item-card__lower-left">
                            <div class="flash-sale-item-card__current-price--homepage">
                              <span class="flash-sale-item-price flash-sale-item-price--dollar-sign">RM</span>
                              <span class="flash-sale-item-price flash-sale-item-price--number">123.00</span>
                            </div>
                          </div>
                          <div class="flash-sale-item-card__short-desc"> <span>10This
                              is my first sample flash item sales diplayed ever</span>
                          </div>
                        </div>
                      </a> </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel123" data-slide="prev"><em
                    class="glyphicon glyphicon-chevron-left"></em></a> <a class="right carousel-control"
                  href="#carousel123" data-slide="next"><em class="glyphicon glyphicon-chevron-right"></em></a></div>
            </div>
          </div>
          <script>
		(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // https://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 5000 });
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<6;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());</script> </div>
      </div>
    </div>
   
    <div class="shop-grid">
      <div class="container">
        <div class="col-md-4 grid-stn simpleCart_shelfItem">
          <!-- normal -->
          <div class="ih-item square effect3 bottom_to_top">
            <div class="bottom-2-top">
              <div class="img"><img src="images/grid4.jpg" alt="/" class="img-responsive gri-wid"></div>
              <div class="info">
                <div class="pull-left styl-hdn">
                  <h3>style 01</h3>
                </div>
                <div class="pull-right styl-price">
                  <p><a href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart"
                        aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end normal -->
          <div class="quick-view"> <a href="single.html">See More</a> </div>
        </div>
        <div class="col-md-4 grid-stn simpleCart_shelfItem">
          <!-- normal -->
          <div class="ih-item square effect3 bottom_to_top">
            <div class="bottom-2-top">
              <div class="img"><img src="images/grid6.jpg" alt="/" class="img-responsive gri-wid"></div>
              <div class="info">
                <div class="pull-left styl-hdn">
                  <h3>style 01</h3>
                </div>
                <div class="pull-right styl-price">
                  <p><a href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart"
                        aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end normal -->
          <div class="quick-view"> <a href="single.html">Quick view</a> </div>
        </div>
        <div class="col-md-4 grid-stn simpleCart_shelfItem">
          <!-- normal -->
          <div class="ih-item square effect3 bottom_to_top">
            <div class="bottom-2-top">
              <div class="img"><img src="images/grid3.jpg" alt="/" class="img-responsive gri-wid"></div>
              <div class="info">
                <div class="pull-left styl-hdn">
                  <h3>style 01</h3>
                </div>
                <div class="pull-right styl-price">
                  <p><a href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart"
                        aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end normal -->
          <div class="quick-view"> <a href="single.html">Quick view</a> </div>
        </div>
        <div class="col-md-4 grid-stn simpleCart_shelfItem">
          <!-- normal -->
          <div class="ih-item square effect3 bottom_to_top">
            <div class="bottom-2-top">
              <div class="img"><img src="images/grid5.jpg" alt="/" class="img-responsive gri-wid"></div>
              <div class="info">
                <div class="pull-left styl-hdn">
                  <h3>style 01</h3>
                </div>
                <div class="pull-right styl-price">
                  <p><a href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart"
                        aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end normal -->
          <div class="quick-view"> <a href="single.html">Quick view</a> </div>
        </div>
        <div class="col-md-4 grid-stn simpleCart_shelfItem">
          <!-- normal -->
          <div class="ih-item square effect3 bottom_to_top">
            <div class="bottom-2-top">
              <div class="img"><img src="images/grid7.jpg" alt="/" class="img-responsive gri-wid"></div>
              <div class="info">
                <div class="pull-left styl-hdn">
                  <h3>style 01</h3>
                </div>
                <div class="pull-right styl-price">
                  <p><a href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart"
                        aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end normal -->
          <div class="quick-view"> <a href="single.html">Quick view</a> </div>
        </div>
        <div class="col-md-4 grid-stn simpleCart_shelfItem">
          <!-- normal -->
          <div class="ih-item square effect3 bottom_to_top">
            <div class="bottom-2-top">
              <div class="img"><img src="images/grid8.jpg" alt="/" class="img-responsive gri-wid"></div>
              <div class="info">
                <div class="pull-left styl-hdn">
                  <h3>style 01</h3>
                </div>
                <div class="pull-right styl-price">
                  <p><a href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart"
                        aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end normal -->
          <div class="quick-view"> <a href="single.html">Quick view</a> </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    
    <?php require('include/footer.php'); ?>
  </body>
</html>
