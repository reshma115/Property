<?php
  include("../configuration/config.php"); 

    session_start();
    if (!isset($_SESSION['login']) || $_SESSION['login']!==true) 
    {
       header("location:client-login.php");
    }
     $result = mysqli_query($mysqli,"select * from about_us_details");
    $result1 = mysqli_query($mysqli,"select * from client_testimonial");

?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Client-about-us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">

     <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </head>

  <body>
    <div class="first-container" style="background-color: white; margin-top: -30px">
    <?php
      include("client-nav.php");
    ?>

    <!-- END nav -->
      <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('../images/listing-1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread"  style="margin-top: -380px">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="client-index.php">Home<i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!-- about company introduction -->
    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(../images/about.jpg);">
          </div>

          <?php

            $res=mysqli_fetch_array($result);
          
          ?>

          <div class="col-md-6 wrap-about pl-md-5 ftco-animate">
                <div class="heading-section">
                    <h2 class="mb-4">Welcome To <?php echo $res['company_name']; ?> A Real Estate Agency</h2>
                    <p><?php echo $res['company_description']; ?></p>
                    <p><a href="index.php" class="btn btn-primary">Find Properties</a></p>
                </div>
          </div>
        </div>
      </div>
  </section>

<!-- mision and vision -->
  <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 style="font-weight: 600; font-size: 20px;">Our Mission</h3>
            <p><?php echo $res['company_mission']; ?></p>
          </div>
          <div class="col-md-4">
            <h3 style="font-weight: 600; font-size: 20px;">Our Vision</h3>
            <p><?php echo $res['company_vision']; ?></p>
          </div>
          <div class="col-md-4">
            <h3 style="font-weight: 600; font-size: 20px;">Our Value</h3>
            <p><?php echo $res['company_value']; ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- happy clients -->
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              
              <?php
                   while ($res=mysqli_fetch_array($result1)) 
                  {  

              ?>

              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4"><?php echo $res['testimonial']; ?></p>
                    <div class="d-flex align-items-center">
                      <!-- <div class="user-img" style="background-image: url(images/person_1.jpg)"></div> -->
                      <div class="user-img"><?php echo'<img src="../images1/'.$res['testimonial_image'].'" class="user-img">'?></div>
                      <div class="pl-3">
                        <p class="name"><?php echo $res['testimonial_name']; ?></p>
                        <span class="position"><?php echo $res['testimonial_occupation']; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

    <!-- footer -->
    <?php
      include("client-footer.php");
    ?>


  <!--starting loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

