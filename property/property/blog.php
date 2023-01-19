<!-- pages used blog.php
                blog-single-page.php
                blog_auto_action.php
                blog_search.php -->


<?php
  include("./configuration/config.php"); 

  //$result = mysqli_query($mysqli,"select * from blog_details");
  $result1 = mysqli_query($mysqli,"select * from blog_details");
  
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blogs</title>
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

    <link rel="stylesheet" type="text/css" href="js/slick-master/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="js/slick-master/slick/slick-theme.css">


        <!-- Compiled and minified CSS -->   <!-- for card slider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->  <!-- for card slider -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        <style type="text/css">
          .slider {
              width: 81%;
              margin: 100px auto;
          }

          .slick-slide {
            margin: 0px 20px;   /*margin bottom and right*/
          }

          .slick-slide img {
            width: 100%;
          }

          .slick-prev:before,
          .slick-next:before {
            color: black;
            /*margin-right: 100px;*/
          }

          .slick-slide {
            transition: all ease-in-out .3s;
          /*  opacity: .2;*/
          }

          .slick-active {
            opacity: .5;
          }

          .slick-current {
            opacity: 1;
          }

        </style>
  </head>



  <body>
    <div class="first-container" style="background-color: white; margin-top: -30px">
    <?php
      include("nav.php");
    ?>
      
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/blog3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread"  style="margin-top: -380px">Blogs & News</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a>
            </span> <span>Blogs & News <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <!-- card slider -->

      <div class="heading-section text-center ftco-animate">
          <h2 class="mb-2">Trending Posts</h2>
      </div>

      <section class="variable slider" style="margin-bottom: 50px; margin-top: 50px;">
        <?php
          // $result = mysqli_query($mysqli,"select * from blog_details order by blog_id desc limit 10 ");
            $result = mysqli_query($mysqli,"select * from blog_details order by blog_id limit 10 ");
          while($res=mysqli_fetch_array($result))
          {
            // $pcode=$res['pcode']
         ?>
        <div>
          <div class="row">
            <div class="col s12 m7">
              <div class="card" style="width: 250px;">
                <div class="card-image">
                   <a href="blog-single-page.php?blog_id=<?php echo "{$res['blog_id']}" ?>"> <?php echo '<img src="images1/'.$res['blog_image'].'" alt="Blog_image" style="height: 165px">' ?></a>
                  <!-- <span class="card-title" style="color: black; font-weight: bold;">Title 7</span> -->
                </div>
                <div class="card-content">
                  <p><h6 style="padding-bottom: 10px"><?php echo $res['blogtype'] ?></h6></p> 
                      <?php echo "<a href='blog-single-page.php?blog_id={$res['blog_id']}' style='color: black;'> {$res['blog_name']}</a>"?> <!-- text-decoration: none; -->
                  <p><label style="margin : 20px 0px 10px 120px;"></label><?php echo $res['blog_date'] ?></label></p> 
                </div>
              </div> 
            </div>
          </div>
        </div>

        <?php
          }
        ?>

      </section>




    <!-- end of card slider -->

    <article class="ftco-section goto-here" style="margin-top: -80px; margin-bottom: 10px; float: left; width: 63%;margin-left: 6%">
      <div class="container">
        <div class="row justify-content-center" style="margin-bottom: -10px">
          <div class="col-md-12 heading-section ftco-animate mb-5" style="margin-left: 25px;">
            <h2 class="mb-2">Article</h2>
          </div>
        </div>

        <?php
          $result1 = mysqli_query($mysqli,"select * from blog_details order by blog_id desc limit 3");
          while($res=mysqli_fetch_array($result1))
          {
            // $pcode=$res['pcode']
         ?>

        <div class="row">

          <div class="col-md-12">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url('images1/<?php echo $res["blog_image"]; ?>');">
                <a href="blog-single-page.php?blog_id=<?php echo "{$res['blog_id']}"?>" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>

              <div class="text">
                <p class="price mb-3"><span class="orig-price"><?php echo $res['blogtype'] ?></span>
                  <small class="text-muted"><span style="margin-left: 74%;"><?php echo $res['blog_date'] ?></span></small>
                </p>
                <h3 class="mb-0"><a href="blog-single-page.php?blog_id=<?php echo "{$res['blog_id']}"?>"><?php echo $res['blog_name'] ?></a></h3>
                <div>
                  <a href="blog-single-page.php?blog_id=<?php echo "{$res['blog_id']}"?>" class="btn btn-primary" style="margin-left: 84%;">
                    <span >Read More</span></a>
                </div>  
              </div>
            </div>
          </div>

        </div>
      <?php } ?>
      </div>
    </article>
                

    <aside class="ftco-section goto-here" style="width: 25%; margin-top: 0px; float: right; background-color: white;  padding: 10px; margin-right: 80px;"  >

      <!-- blog autosearch -->
        <div class="row justify-content-center" style="margin-top: 30px ; margin-bottom: -20px">
          <div class="col-md-12 heading-section ftco-animate mb-5">
              <h3 class="mb-2">Search</h3>
          </div>
        </div>
        
        <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate ">
                <form action="blog_search.php" method="POST" class="search-property-1">
                  <div class="row">
                    <div class="col-lg align-items-end">
                      <div class="form-group">
                      <!--  <label for="#">Location</label> -->
                        <div class="form-field">
                            <input type="text" name="search" id="search" class="form-control" 
                              placeholder="Eg., Investment,Real Estate" style="border-color: black;" autocomplete="off">
                          </div>
                        </div>
                    </div>
                    <div class="col-lg align-items-end">
                        <div class="form-group">
                            <div class="form-field">
                                <input type="submit" name="auto-submit" id="auto-submit" value="Search" class=" btn btn-primary" style="padding-top:8px; padding-bottom:10px; margin-left: 35px; height: 45px">
                            </div>
                        </div>
                    </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-8 " style="position: absolute; margin-top: -35px; margin-left:0.5px; " > 
            <div class="list-group " id="show-list">
                        
            </div>
        </div>
        <!--end blog autosearch -->


        <div class="row justify-content-center" style="margin-bottom: -30px; margin-top: 35px;">
          <div class="col-md-12 heading-section ftco-animate mb-5">
              <h3 class="mb-2">Link</h3>
          </div>
        </div>
        <div class="border shadow-sm p-3 mb-5 bg-white rounded" >
          <p><a href=# style="color: black"><h6>Proprty.com</h6></a></p>
          <p><a href=# style="color: black"><h6>Proprty.com</h6></a></p>
          <p><a href=# style="color: black"><h6>Proprty.com</h6></a></p>
          <p><a href=# style="color: black"><h6>Proprty.com</h6></a></p>
          <p><a href=# style="color: black"><h6>Proprty.com</h6></a></p>
        </div>
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

  <!-- for card slider -->

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="js/slick-master/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- for card slider -->
        <script type="text/javascript">
          $(document).on('ready', function() {
        $(".variable").slick({
              dots: true,
              infinite: true,
              variableWidth: true
            });
        });
      </script> <!--end card slider -->

      <!-- script for autocomplete -->
          <script type="text/javascript">
              $(document).ready(function(){
                  $("#search").keyup(function(){
                      var searchText = $(this).val();
                      if (searchText!='') 
                      {
                          $.ajax({
                              url:'blog_auto_action.php',
                              method:'post',
                              data:{query:searchText},
                              success:function(response)
                              {
                                  $("#show-list").html(response);
                              }
                          });
                      }
                      else{
                          $("#show-list").html('');
                      }
                  });
                  $(document).on('click','a',function(){
                      $("#search").val($(this).text());
                      $("#show-list").html('');
                  });
              });
          </script> <!-- end of script for autocomplete -->


    
  </body>
</html>
