<?php
require_once('databaseConn/read.php');
require_once('header.php');
?>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('images/giphy.gif')">
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <h1 class="my-4">Welcome to Sob &amp; Jerry´s</h1>
  <hr>
  <!-- Marketing Icons Section -->

  <?php

  $prodData = "<div class='row'>";

  foreach ($result as $key => $value) {
    $prodData .=
      "
          <div class='col-lg-4 mb-4'>
            <div class='card h-100'>
              <h5 class='card-header'>$value[productName] | $value[price] €</h5>
                <div class='card-body'>
                  <img src='$value[pictureLink]'; ID='imageHeight'>
                </div>
                <div class='card-footer'>
                <a href='orderForm.php?id=$value[ID]' class='btn btn-primary'>Read more &amp; Buy</a>
              </div>
            </div>
          </div>
        ";
  }
  $prodData .= "</div>";
  echo $prodData;
  ?>



</div>
<!-- /.container -->


<?php
require_once('footer.php');
?>