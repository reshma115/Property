<!-- pages used blog.php
                blog-single-page.php
                blog_auto_action.php
                blog_search.php -->
                
<?php
  include("./configuration/config.php"); 
  
  $sql="select * from blog_details where blog_id ={$_GET['blog_id']} limit 1";
    // echo $sql;
  $result = mysqli_query($mysqli,$sql);
  
  

?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Single-Blogs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

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
        include("nav.php");
      ?>


      <?php
        while($res=mysqli_fetch_array($result))
        {
      ?>

      
    <section class="ftco-section goto-here" >
      <div class="container" style="margin-right: 150px; margin-top: -20px" >
          <div class="row">
            <p><label><h5><?php echo $res['blogtype'] ?></h5></label></p> 
          </div>
          <div class="row">
            <p><label><h3> <?php echo $res['blog_name'] ?></h3></label></p>
          </div> 
          <div class="row">
            <p><label><h6> <?php echo $res['blog_date'] ?></h6></label></p> 
          </div>
      </div>
    </section>

      <article class="ftco-section goto-here" style="float: left; width: 63%;margin-left: 5%; margin-top: -170px;">
        <div class="row">
          <div class="col-md-14">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" 
              style="background-image: url('images1/<?php echo $res["blog_image"]; ?>');height: 400px">
              </div>

              <div class="card card-body" >
                <p><?php echo $res['blog_description'] ?></p>

                  <div class="col-md" style="margin-top: 80px; margin-bottom: 10px; ">
                    <div class="ftco-footer-widget mb-4" style="margin-left: 20px;">
                      <p>You can connect with us here</p>
                      <a href="https://twitter.com/sarestates_real" target="_blank"><img src="images/twitter.png" style="height: 35px;width: 35px;"></a>
                      <a href="https://www.facebook.com/sarestates/" target="_blank"><img src="images/facebook.png" style="width: 45px; padding-left: 10px;"></a>
                      <a href="https://twitter.com/sarestates_real" target="_blank"><img src="images/instagram.png" 
                        style= "height: 35px; width: 45px; padding-left: 10px;"></a>
                      <a href="https://twitter.com/sarestates_real" target="_blank"><img src="images/google.png" style="width: 45px; padding-left: 10px;"></a>
                    </div>
                  </div>
              </div>

            </div>
          </div>
        </div>
    </article>
  <?php }?> <!-- article end here -->

    <aside class="ftco-section goto-here" style="width: 25%; margin-top: -83px; float: right; background-color: white; padding: 10px; margin-right: 80px;"  >
        <div class="row justify-content-center" style="margin-bottom: -30px; margin-left: 10px">
          <div class="col-md-12 heading-section ftco-animate mb-5">
              <h4 class="mb-2">You might also like</h4>
          </div>
        </div>

          <?php
            $result1 = mysqli_query($mysqli,"select * from blog_details order by blog_id desc limit 3");
            while ($res=mysqli_fetch_array($result1))
            {
          ?>
          
        <div style="margin-bottom: -30px;">
          <a href="blog-single-page.php?blog_id=<?php echo "{$res['blog_id']}" ?>">
            <div class="img d-flex align-items-center justify-content-center" style="background-image: url('images1/<?php echo $res["blog_image"]; ?>'); margin-left: 30px; height: 200px; width: 286px">
            </div>
          </a>

          <div class="border shadow-sm p-3 mb-5 bg-white rounded" style="margin-left: 30px;width: 286px" >
            <a href="blog-single-page.php?blog_id=<?php echo "{$res['blog_id']}"?>" style="color: black">
              <p><?php echo $res['blog_name'] ?></p>
            </a>
            <p style="margin-bottom:-30px;"><label><h6 style="margin-left: 150px"> <?php echo $res['blog_date'] ?></h6></label></p>
        
          </div>
        </div>
        <?php
           }
        ?>

    </aside>
     
  </div>


    <!-- footer -->
    <div style="clear: both;">
      <?php
      include("footer.php");
      ?>
    </div>
  
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
