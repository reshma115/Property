
<?php
	include("./configuration/config.php"); 
	$result = mysqli_query($mysqli,"select * from property_details p INNER JOIN amenities_details a ON p.pcode= a.pcode INNER JOIN configuration_details c ON c.pcode = p.pcode INNER JOIN project_details pr ON pr.pcode = p.pcode INNER JOIN builder_details bd ON bd.pcode=p.pcode INNER JOIN popular_agent_details ag 
		ON ag.pcode=p.pcode INNER JOIN property_image_details pi ON pi.pcode=p.pcode");

	$result1 = mysqli_query($mysqli,"select * from property_image_details order by pcode desc limit 6");
	$result2 = mysqli_query($mysqli,"select * from popular_agent_details limit 4");
	

?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Index</title>
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


        <style> 
          .sole_button {
          background-color: #1c87c9;
          -webkit-border-radius: 60px;
          /*border-radius: 60px;*/
          border: none;
          color: #eeeeee;
          cursor: pointer;
          display: inline-block;
          font-family: sans-serif; 
          font-size: 18px;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          margin-top: 11px;
          }
          @keyframes glowing {
          0% { background-color: #2ba805; box-shadow: 0 0 5px #2ba805; }
          50% { background-color: #49e819; box-shadow: 0 0 20px #49e819; }
          100% { background-color: #2ba805; box-shadow: 0 0 5px #2ba805; }
          }
          .sole_button {
          animation: glowing 1300ms infinite;
          }
        </style>

  </head>

  <body>
    <div class="first-container" style="background-color: white; margin-top: -30px">
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Property.com</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        <li class="nav-item"><a class="sole_button" href="sole-selling.php" style="text-decoration: none; color: white">Sole Selling</a></li>
	          <li class="nav-item active"><a href="index.php" class="nav-link" style="color: white;">Home</a></li>
	          <li class="nav-item"><a href="about-us.php" class="nav-link" style="color: white;" >About Us</a></li>
	          <!-- <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Services</a></li> -->
	          <li class="nav-item"><a href="blog.php" class="nav-link" style="color: white;">Blog</a></li>
	          <!-- <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Listing</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Blog</a></li> -->
	          <li class="nav-item"><a href="contact.php" class="nav-link" style="color: white;">Contact</a></li>
	          <li class="nav-item"><a href="./admin_dashboard/dist/admin-login.php" class="nav-link" style="color: white;">Admin</a></li>
	          <li class="nav-item"><a href="./client_page/client-login.php" class="nav-link" style="color: white;">Sign In</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text text-center w-100">
	            <h1 class="mb-4" style="margin-top:-230px">Find Properties <br>That Make You Happy</h1>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Search Properties</a></p>
            </div>
          </div>
        </div>
      </div>
      	<div class="mouse">
			<a href="#" class="mouse-icon">
				<div class="mouse-wheel">
					<span class="ion-ios-arrow-round-down"></span>
				</div>
			</a>
		</div>
    </div>

<!-- start of autocomplete section -->
    <section class="ftco-section ftco-no-pb"  >
    	<div class="container">
	    	<div class="row" style="margin-left:300px">
				<div class="col-md-12">
					<div class="search-wrap-1 ftco-animate ">
			        <form action="auto_search-property.php" method="POST" class="search-property-1">
			        	<div class="row">
			        		<div class="col-lg align-items-end">
			        			<div class="form-group">
			        			<!--  <label for="#">Location</label> -->
			          				<div class="form-field">
	                                    <div class="icon">
	                                        <span class="ion-ios-search"></span>
	                                    </div>

					                    <input type="text" name="search" id="search" class="form-control" 
					                    placeholder="Enter Location, Project or Builder Name" 
					                    style="border-color: black;" autocomplete="off">
					                </div>
				                </div>
			        		</div>
			        		<div class="col-lg align-self-end">
	                            <div class="form-group">
	                                <div class="form-field">
	                                    <input type="submit" name="auto-submit" id="auto-submit" value="Search Property" class=" btn btn-primary" style="padding-top:11px; 
	                                    padding-bottom:10px">
	                                </div>
	                            </div>
			        		</div>
			        	</div>
			        </form>
				</div></div>
				<div class="col-md-5 " style="position: relative; margin-top: -16px; margin-left:1px; " > 
                    <div class="list-group " id="show-list">
                        
                    </div>
                </div>
	    	</div>
	    </div>
    </section> <!-- end of autocomplete section -->
    <!-- script for autocomplete -->
   	<script type="text/javascript">
        $(document).ready(function(){
            $("#search").keyup(function(){
                var searchText = $(this).val();
                if (searchText!='') 
                {
                    $.ajax({
                        url:'auto-action.php',
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


    <!-- Property Listing -->
    <section class="ftco-section goto-here" >
    	<div class="container">
    		<div class="row justify-content-center">
	          	<div class="col-md-12 heading-section text-center ftco-animate mb-5">
	          		<span class="subheading">What we offer</span>
	           		<!--  <h2 class="mb-2">Exclusive Offer For You</h2> -->
	          	</div>
        	</div>
	        <div class="row">
	        	<?php

					while($res=mysqli_fetch_array($result))
					{
						$pcode=$res['pcode']
				 ?>
	 
	        	<div class="col-md-3">        		
	        		<div class="property-wrap ftco-animate">
	        			<div class="img d-flex align-items-center justify-content-center">
	        				<?php echo '<img src= "images1/'.$res['image1'].'" alt="Image1" class="align-items-center  img ">'?>
	        				<div class="list-agent d-flex align-items-center">
	        					<a href="#" class="agent-info d-flex align-items-center">
	        						<div class="img-2 rounded-circle">    
	        							<?php echo '<img src="images1/'.$res['agentpic'].'"height="200px;" width="200px;" alt="Image" class="img-2 rounded-circle">'?> </div>
	        						<h3 class="mb-0 ml-2" ><?php echo $res['agentname']; ?></h3>
	        					</a>
	        					<!-- <div class="tooltip-wrap d-flex">
	        						<a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
	        							<span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
	        						</a>
	        						<a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
	        							<span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
	        						</a>
	        					</div> -->
	        				</div>
	        			</div>
	        			<div class="text">
	        				<p class="price mb-3">₹ <span ><?php echo $res['price']; ?></span></p>

	        				<h3 class="mb-0"><a href="single-page.php?pcode=<?php echo $pcode;?>">
	        				<!-- 	<a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link"> -->
	        				<?php echo $res['pname']; ?></a></h3>

	        				<span class="location d-inline-block mb-3" style="color:black">
	        				<i class="ion-ios-pin mr-2" style="color:#d4ca68"></i><?php echo $res['address']; ?></span>
	        				<a href="#" class="icon d-flex align-items-center justify-content-center btn-custom ">
	        					<span class="ion-ios-link"></span>
	        				</a>
	        				<ul class="property_list">
	        					<li><span class="flaticon-bed" style="color:#d4ca68"></span><?php echo $res['bedroom']; ?></li>
	        					<li><span class="flaticon-bathtub" style="color:#d4ca68"></span> <?php echo $res['bathroom']; ?></li>
	        					<li><span class="flaticon-floor-plan" style="color:#d4ca68"></span> <?php echo $res['conarea']; ?></li>
	        				</ul>
	        			</div>
	        		</div>
	        	</div>
	        	 <?php } ?>
	        </div> 
    	</div>
    </section>

    <!-- Hot Properties -->
    <section class="ftco-section"  style="margin-top: -110px;">
    	<div class="container">
    		<div class="row justify-content-center">
		         <div class="col-md-12 heading-section text-center ftco-animate mb-5">
		          	<span class="subheading">Hot Properties</span>
		            <h2 class="mb-2">Find Properties In Your City</h2>
		         </div>
        	</div>
	        <div class="row">
	        	<?php
					while($res=mysqli_fetch_array($result1))
				{
			 	?>
	        	<div class="col-md-4">
	        		<div class="listing-wrap img rounded  property-wrap ftco-animate ">
	        			<?php echo '<img src= "images1/'.$res['image1'].'" alt="Image" class="center img rounded 
	        			listing-wrap ">'?>
	        			<div class="location">
	        			<!-- 	<span class="rounded"><?php echo $res['dname']; ?></span> -->
	        			</div>
	        			<!-- <div class="text d-flex">
	        				<h3><a href="#">100 Property Listing</a></h3>
	        				<a href="#" class="btn-link">See All Listing<span class="ion-ios-arrow-round-forward"></span></a>
	        			</div> -->
	        		</div>
	        	</div>
	        <?php } ?>
	        </div>
    	</div>
    </section>

    <!-- listing of popular agent -->
    <section class="ftco-section ftco-agent" style="margin-top: -150px;">
    	<div class="container">
	    	<div class="row justify-content-center pb-5">
		        <div class="col-md-12 heading-section text-center ftco-animate">
		          	<span class="subheading">Agents</span>
		            <h2 class="mb-4">Popular Agents</h2>
		        </div>
	        </div>
	        <div class="row">
	        	<?php
				while($res=mysqli_fetch_array($result2))
				{
			 ?>
	        	<div class="col-md-3 ftco-animate">
	        		<div class="property-wrap ftco-animate">
	    				<div class="img d-flex align-items-center justify-content-center">
	    					<?php echo '<img src="images1/'.$res['agentpic'].'"height="100%;" 
							width="100%;" alt="Image" class="img-fluid align-items-center img">'?>
		    			</div>
		    			<div class="text">
		    				<h3><a href="properties.html"><?php echo $res['agentname'];?></a></h3>
							<p class="h-info"><span class="ion-ios-filing icon" style="color:#d4ca68">&nbsp</span> <span class="details"><?php echo $res['agentsale']; ?> Properties </span></p>
		    			</div>
	    			</div>
	        	</div>
	        	 <?php }?> 
	        </div>
    	</div>
    </section>
</div>


 <!-- Happy clients testimony -->
 
	<section class="ftco-section testimony-section bg-light" style="margin-top: -100px;">
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
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <!-- recent Blogs -->

	<!-- <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
	              </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
	              </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
	              </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
	              </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- footer -->
    <?php
    	include("footer.php");
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

