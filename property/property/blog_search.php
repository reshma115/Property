<!-- pages used blog.php
                blog-single-page.php
                blog_auto_action.php
                blog_search.php -->
<?php
	  include("./configuration/config.php"); 
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


     <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        </style>
  </head>



  <body>
  	<!-- navbar -->
    <div class="first-container" style="background-color: white; margin-top: -30px">
    <?php
      include("nav.php");
    ?>

    <article class="ftco-section goto-here" style="margin-top: -40px; margin-bottom: 10px;  width: 90%;margin-left: 6%">
 

	<?php
	  	if(isset($_POST['auto-submit']))
		{
			  	$data=$_POST['search'];

			  	$sql="select * from blog_details where '$data'=blogtype";
			  	$result=mysqli_query($mysqli,$sql);
			  	$result1=mysqli_query($mysqli,$sql);

			  	if (mysqli_num_rows($result)==true) 
			  	{	
				  	
				  	//echo "<section class='ftco-section goto-here' >";
    				//echo "<div class='container'>";
    				$row1 = mysqli_fetch_array($result1);
    				echo "<h3>Search Result as per&nbsp"."{$row1['blogtype']}"."</h3>"."<br><br>";
				  	echo "<div class='row' style='margin-bottom: -60px'>";
				  	while ($row = mysqli_fetch_array($result)) 
			  		{	
			  			// echo "ID :".$row['blog_id']."<br>";
					  	// echo "blog_name :".$row['blog_name']."<br>";
					  	// echo "blogtype:".$row['blogtype']."<br>";
					  	// echo "blog_post_by :".$row['blog_post_by']."<br>";
					  	// echo "Status :".$row['status']."<br>";
					  	// echo "Address :".$row['address']."<br>"."<br>";
					?>
            		
			          <div class="col-md-3">
			            <div class="property-wrap ftco-animate">
			              <div class="img d-flex align-items-center justify-content-center" style="background-image: url('images1/<?php echo $row["blog_image"]; ?>');">
			                <a href="blog-single-page.php?blog_id=<?php echo "{$row['blog_id']}"?>" class="icon d-flex align-items-center justify-content-center btn-custom">
			                  <span class="ion-ios-link"></span>
			                </a>
			              </div>

			              <div class="text">
			                <p class="price mb-3"><span class="orig-price"><?php echo $row['blogtype'] ?></span>
			                  <small class="text-muted"><span style="margin-left: 63%;"><?php echo $row['blog_date'] ?>
			                  </span></small>
			                </p>
			                <h3 class="mb-0"><a href="blog-single-page.php?blog_id=<?php echo "{$row['blog_id']}"?>"><?php echo $row['blog_name'] ?> </a></h3>
			                <div style="margin-top: 10px;">
			                  <a href="blog-single-page.php?blog_id=<?php echo "{$row['blog_id']}"?>" class="btn btn-primary" style="margin-left: 79%;">
			                    <span >Read</span></a>
			                </div>  
			              </div>
			            </div>
			          </div>

				<?php

			  		} //end of while loop
			  		 echo "</div>";
			  		 //echo "</div>";
			  		// echo "</section>";
			  	}  //end of first if statement

			  	
			  	else
			  	{
			  		echo "<h3>Data Not Found</h3>";
			  	}  //end of else statement		  	
		}
?>

</article>
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



