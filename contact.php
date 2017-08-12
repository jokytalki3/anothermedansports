<?php
require('include/config.php');
$title="Contact Us";
require('include/header.php');
 ?>

 <!-- contact -->
    <div class="contact">
      <div class="container" align="center">
        <h2>Contact Us</h2>
        <br></br>
        <p><b>You can contact us by phone calling or email!</b></p>
        <p><br>
        </p>
        <!--Auto-resize namecard image-->
        <style>
        .fixed-ratio-resize { /* basic responsive img */
        	max-width: 60%;
        	height: auto;
        	width: auto\9; /* IE8 */
        }
        </style>
        <img class="fixed-ratio-resize" title="namecard" src="images/namecard.jpg" alt=""/>
        <br>
        <br>
        <h3>Reach our store in Bintulu!</h3>
        <div id="sitemap" class="contact-content">
          <div class="map"><iframe src="https://www.google.com/maps/embed?pb=%211m18%211m12%211m3%211d31869.070841822537%212d113.07294947086525%213d3.190569848997741%212m3%211f0%212f0%213f0%213m2%211i1024%212i768%214f13.1%213m3%211m2%211s0x321dc10eef21bd7b%3A0x6b3111ffec9cf01%212sMedan+Sports%215e0%213m2%211sen%212smy%214v1502173062655"
              style="border:0" allowfullscreen="" frameborder="0" height="450" width="600"></iframe>
          </div>
        </div>
      </div>
    </div>
    <!--contact-->

<?php require('include/footer.php'); ?>
