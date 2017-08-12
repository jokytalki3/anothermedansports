    <?php 
	require("include/config.php");
	$title="Medan Sports";
	require('include/header.php'); ?>
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
                <h3>HOT RIGHT NOW </h3>
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
                    <?php
					//display 6
					  $data="SELECT * FROM products LIMIT 0,6";
					  include('include/display6items.php');
					  ?>
                  </div>
                  <div class="item">
                  	<?php
					//display 6
					  $data="SELECT * FROM products LIMIT 6,6";
					  include('include/display6items.php');
					?>
				  </div>
              	  <div class="item">
                  	<?php
					//display 6
					  $data="SELECT * FROM products LIMIT 12,6";
					  include('include/display6items.php');
					?>
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
