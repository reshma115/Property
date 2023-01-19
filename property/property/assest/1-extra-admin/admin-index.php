
<?php
	include("config.php"); 
	$result = mysqli_query($mysqli,"select * from property_details p INNER JOIN amenities_details a ON p.pcode= a.pcode INNER JOIN configuration_details c ON c.pcode = p.pcode INNER JOIN project_details pr ON pr.pcode = p.pcode INNER JOIN builder_details bd ON bd.pcode=p.pcode INNER JOIN popular_agent_details ag 
		ON ag.pcode=p.pcode INNER JOIN property_image_details pi ON pi.pcode=p.pcode");

	// $result = mysqli_query($mysqli,"select * from property_details p INNER JOIN amenities_details a ON p.pcode= a.pcode INNER JOIN configuration_details c ON c.pcode = p.pcode INNER JOIN project_details pr ON pr.pcode = p.pcode INNER JOIN builder_details bd ON bd.pcode=p.pcode INNER JOIN popular_agent_details ag 
	// 	ON ag.pcode=p.pcode INNER JOIN property_image_details pi ON pi.pcode ={$_GET['pcode']}");

	// $result = mysqli_query($mysqli,"select * from ");
	$result1 = mysqli_query($mysqli,"select * from property_image_details");
	$result2 = mysqli_query($mysqli,"select * from popular_agent_details");
	

?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin-Index</title>
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
    <div class="first-container" style="background-color: #ededed; margin-top: -30px">
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Property.com</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link" style="color: white;">Home</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;" >About</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Services</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Agent</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Listing</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Blog</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Contact</a></li>
	          <li class="nav-item"><a href="admin-login.php" class="nav-link" style="color: white;">Admin</a></li>
	          <li class="nav-item"><a href="client-login.php" class="nav-link" style="color: white;">Sign In</a></li>
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
    <section class="ftco-section ftco-no-pb">
    	<div class="container">
	    	<div class="row" style="margin-left:300px">
				<div class="col-md-12">
					 <div class="search-wrap-1 ftco-animate ">
						<!--<form action="#" class="search-property-1">
			        		<div class="row">
			        			<div class="col-lg align-items-end">
			        				<div class="form-group">
			        					<label for="#">Location</label>
				          				<div class="form-field">
				          					<div class="icon">
				          						<span class="ion-ios-search"></span>
				          					</div>
						                	<input type="text" class="form-control" placeholder="City/Locality Name">
						              	</div>
				              		</div>
			        			</div>
			        			<div class="col-lg align-items-end">
			        				<div class="form-group">
			        					<label for="#">Property Type</label>
			        					<div class="form-field">
			          						<div class="select-wrap">
						                     	<div class="icon">
						                     		<span class="ion-ios-arrow-down"></span>
						                     	</div>
						                      	<select name="" id="" class="form-control">
							                      	<option value="">Type</option>
							                        <option value="">Commercial</option>
							                        <option value="">- Office</option>
							                        <option value="">Residential</option>
							                        <option value="">Villa</option>
							                        <option value="">Condominium</option>
							                        <option value="">Apartment</option>
						                      	</select>
			                    			</div>
					              		</div>
				              		</div>
			        			</div>
			        			<div class="col-lg align-items-end">
			        				<div class="form-group">
			        					<label for="#">Property Status</label>
			        					<div class="form-field">
			          						<div class="select-wrap">
				                      			<div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      	<select name="" id="" class="form-control">
							                      	<option value="">Type</option>
							                        <option value="">Rent</option>
							                        <option value="">Sale</option>
						                      	</select>
				                    		</div>
						              	</div>
					              	</div>
			        			</div>
			        			<div class="col-lg align-items-end">
			        				<div class="form-group">
			        					<label for="#">Price Limit</label>
			        					<div class="form-field">
			          						<div class="select-wrap">
			                      				<div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      	<select name="" id="" class="form-control">
							                        <option value="">$5,000</option>
							                        <option value="">$10,000</option>
							                        <option value="">$50,000</option>
							                        <option value="">$100,000</option>
							                        <option value="">$200,000</option>
							                        <option value="">$300,000</option>
							                        <option value="">$400,000</option>
							                        <option value="">$500,000</option>
							                        <option value="">$600,000</option>
							                        <option value="">$700,000</option>
							                        <option value="">$800,000</option>
							                        <option value="">$900,000</option>
							                        <option value="">$1,000,000</option>
							                        <option value="">$2,000,000</option>
						                      	</select>
			                   	 			</div>
					              		</div>
				              		</div>
			        			</div>
			        			<div class="col-lg align-self-end">
			        				<div class="form-group">
			        					<div class="form-field">
					                		<input type="submit" value="Search Property" class="form-control btn btn-primary">
					              		</div>
				              		</div>
			        			</div>
			        		</div>
		        		</form>
		        	</div> -->
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
                        url:'action.php',
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

    <section class="ftco-section goto-here">
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
        					<div class="tooltip-wrap d-flex">
        						<a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
        							<span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
        						</a>
        						<a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
        							<span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
        						</a>
        					</div>
        				</div>
        			</div>
        			<div class="text">
        				<p class="price mb-3">₹ <span ><?php echo $res['price']; ?></span></p>

        				<h3 class="mb-0"><a href="client3.php?pcode=<?php echo $pcode;?>">
        				<!-- 	<a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link"> -->
        				<?php echo $res['pname']; ?></a></h3>

        				<span class="location d-inline-block mb-3" style="color:black">
        				<i class="ion-ios-pin mr-2" style="color:#d4ca68"></i><?php echo $res['address']; ?></span>
        				<a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom ">
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
   

<!--     <section class="ftco-section ftco-fullwidth">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Services</span>
            <h2 class="mb-2">Why Choose Us?</h2>
          </div>
        </div>
    	</div>
    	<div class="container-fluid px-0">
    		<div class="row d-md-flex text-wrapper align-items-stretch">
					<div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch" style="background-image: url('images/about.jpg');"></div>
					<div class="one-half half-text d-flex justify-content-end align-items-center">
						<div class="text-inner pl-md-5">
							<div class="row d-flex">
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-piggy-bank"></span></div>
			              <div class="media-body pl-4">
			                <h3>No Downpayment</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wallet"></span></div>
			              <div class="media-body pl-4">
			                <h3>All Cash Offer</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-file"></span></div>
			              <div class="media-body pl-4">
			                <h3>Experts in Your Corner</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-locked"></span></div>
			              <div class="media-body pl-4">
			                <h3>Locked in Pricing</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>      
			          </div>
			        </div>
            </div>
					</div>
    		</div>
    	</div>
    </section> -->

<!-- 		<section class="ftco-counter ftco-section img" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="305">0</strong>
                <span>Area <br>Population</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1090">0</strong>
                <span>Total <br>Properties</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="209">0</strong>
                <span>Average <br>House</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section> -->

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
		         <div class="col-md-12 heading-section text-center ftco-animate mb-5">
		          	<span class="subheading">Find Properties</span>
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

<!--     <section class="ftco-section testimony-section bg-light">
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
    </section> -->

    <section class="ftco-section ftco-agent">
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


<!--     <section class="ftco-section ftco-no-pt">
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
    </section>		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Findstate</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Search Properties</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>For Agents</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Our Story</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Meet the team</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Press</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center"> -->
	
            <!-- <p> -->
            	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 <!--  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><!-- </p>
          </div>
        </div>
      </div>
    </footer> -->
    
  

  <!-- loader -->
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

