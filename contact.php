<?php
require_once('databaseConn/database.php');
require_once('databaseConn/create.php');
require_once('header.php');
?>



<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Contact
    <small>Sob &amp; Jerry´s</small>
  </h1>
  <hr>

  <!-- Content Row -->
  <div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
      <!-- Embedded Google Map -->
      <iframe style="width: 100%; height: 400px; border: 0;" iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d67944.732818148!2d12.546615353587288!3d55.67978426184352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465253b9fb133d0d%3A0xae09cace5f79abde!2sUnicorns%20%26%20Rainbows!5e0!3m2!1ssv!2sse!4v1613154391985!5m2!1ssv!2sse" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4">
      <h3>Contact Details</h3>
      <p>
        Kronprinsessegade 7, Copenhagen

        <br>Denmark 1306
        <br>
      </p>
      <p>
        <abbr title="Phone">P</abbr>: (123) 4556-78905
      </p>
      <p>
        <abbr title="Email">E</abbr>:
        <a href="admin/admin.php">Sob.Jerrys@yh.nackademin.dk
        </a>
      </p>
    </div>
  </div>
  <!-- /.row -->

  <!-- Contact Form -->
  <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <div class="row">
    <div class="col-lg-8 mb-4">
      <h3>Send us a Message</h3>


      <form action="" method="POST">
                <div class="row">
                    <div class="col">
                        <label for="name"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Unicorn Dump" required></input>
                    </div>

                    <div class="col">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" id="email" name="email" placeholder="name@example.com" required></input>
                        <span class="error"> <?php if (isset($errEmail)) echo $errEmail; ?> </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="message"><i class="fa fa-arrow-circle-right"></i> Message</label>
                        <textarea type="text" id="message" name="message" required></textarea>
                    </div>
                </div>

                <span class="error"> <?php if (isset($mess)) echo "$mess"; ?> </span>
                <input type="submit" value="Confirm Order" class="btn">
                <span> <?php if (isset($errErr)) echo $errErr; ?> </span>
            </form>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<?php
require_once('footer.php');
?>