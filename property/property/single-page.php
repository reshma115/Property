
<?php

	include("./configuration/config.php"); 

	// using parent-child relation
	$sql="select * from property_details p INNER JOIN amenities_details a ON p.pcode= a.pcode 
	INNER JOIN configuration_details c ON a.pcode = c.pcode 
	INNER JOIN project_details pr ON c.pcode = pr.pcode 
	INNER JOIN builder_details bd ON pr.pcode=bd.pcode 
	INNER JOIN popular_agent_details ag ON bd.pcode=ag.pcode 
	INNER JOIN property_image_details pi ON ag.pcode=pi.pcode where pi.pcode ={$_GET['pcode']} limit 1";
		// echo $sql;
	$result = mysqli_query($mysqli,$sql);

?>

<!DOCTYPE html> 
<html lang="en">
	<head>
		<title>single-page</title>
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
	    <link rel="stylesheet" type="text/css" href="single-page.css">
	</head>
	<body>

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
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/aframe/0.7.1/aframe.min.js">	
		</script> <!-- for 360 paranoma view -->

		<div class="first-container" style="background-color: #ededed; margin-top: -30px">
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" 
				id="ftco-navbar" >
				<div class="container" style="margin-top:-15px;">
				    <a class="navbar-brand" href="index.php">PROPERTY.COM</a>
					    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					    	<span class="oi oi-menu"></span> Menu
					    </button>
				    <div class="collapse navbar-collapse" id="ftco-nav">
					    <ul class="navbar-nav ml-auto">
					        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					        <li class="nav-item"><a href="about-us.php" class="nav-link">About Us</a></li>
					        <!-- <li class="nav-item"><a href="#" class="nav-link">Services</a></li> -->
					        <li class="nav-item"><a href="#" class="nav-link">Agent</a></li>
					        <!-- <li class="nav-item "><a href="#" class="nav-link">Listing</a></li>
					        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li> -->
					        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					    </ul>
				    </div>
			    </div>
			</nav>
			<!-- END nav -->

			<?php
				while($res=mysqli_fetch_array($result))
				{

					$img1=$res['image1'];
					$img2=$res['image2'];
					$img3=$res['image3'];
					$img4=$res['image4'];
					$img5=$res['image5'];
			?>

			<section class="ftco-section ftco-property-details" style="margin-top: 25px" >
			    <div class="container">

			    	<div class="row justify-content-center" >
			      		<div class="col-md-11">
			      			<div class="property-details">
		      					<div class="col-md-12 table-responsive-smshadow-sm p-3 mb-5 bg-white rounded "> 
		      						<div id="carouselExampleIndicators" class="carousel card slide" data-ride="carousel" data-interval="3000">
		      							<!-- <ol class="carousel-indicators">
										    <li data-target="#carouselExampleIndicators" data-slide-to="0"
										     class="active"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
									  	</ol> -->
									  	<div class="carousel-inner">
									  		<div class="carousel-item active">
										      <?php echo '<img src="images1/'.$res['image1'].'" class="d-block" alt="First slide">'?>
										    </div>
										    <div class="carousel-item">
										      <?php echo '<img src="images1/'.$res['image2'].'" class="d-block" alt="second slide">'?>
										    </div>
										    <div class="carousel-item">
										      <?php echo '<img src="images1/'.$res['image3'].'" class="d-block" alt="third slide">'?>
										    </div>
										    <div class="carousel-item">
										      <?php echo '<img src="images1/'.$res['image4'].'" class="d-block" alt="fourth slide">'?>
										    </div>
										    <div class="carousel-item">
										      <?php echo '<img src="images1/'.$res['image5'].'" class="d-block" alt="fifth slide">'?>
										    </div>
									  	</div>
									  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="		button" data-slide="prev">
										    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
										    <span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleIndicators" role="		button" data-slide="next">
										    <span class="carousel-control-next-icon" aria-hidden="true"></span>
										    <span class="sr-only">Next</span>
										</a>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div> <!-- END of image div -->

			    </div>
			</section>
			<!-- END of first section -->
			<section class="ftco-section ftco-property-details" style="margin-top:-15%;" >
			    <div class="container">

			    	
		      		<div class="row justify-content-center position-relative">
			      		<div class="col-md-11">
			      			<div class="property-details">	      					      				
		      					<div class="property-details">
		      						<div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      							<h2 style="color:black; margin: 3px 0px 0px 10px">
		      								<?php echo $res['pname']; ?></h2>
				      					<span class="text" style="color:black; margin: 10px 0px 0px 10px">
				      						<?php echo $res['address']; ?>
				      					</span>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div> <!-- END of name div -->

		      		<div class="row justify-content-center" style="margin-top:-30px">
			      		<div class="col-md-11">
			      			<div class="property-details">	      					      				
		      					<div class="property-details">
		      						<div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      						 	<label style="color:black; margin: 15px 0px 10px 10px" >
		      						 		<h6>
		      						 			<b>PROPERTY DETAILS</b>
		      						 		</h6>
		      						 	</label> 
		      						 	<table class="table table-borderless table-hover " >
									      	<tr><td>property code </td><td><?php echo $res['pcode']; ?></td></tr>
											<tr><td>Location </td><td><?php echo $res['location']; ?></td></tr>
											<tr><td>Status </td><td><?php echo $res['status']; ?></td></tr>
											<tr><td>Transaction Type </td><td><?php echo $res['transaction'];?>	
											</td></tr>
											<tr><td>Furnished status </td><td><?php echo $res['furnished']; ?>
											</td></tr>
											<tr><td>Type Of Ownership </td><td><?php echo $res['ownership']; ?>
											</td></tr>
											<tr><td>Super Area </td><td><?php echo $res['sarea']; ?></td></tr>
											<tr><td>Carpet Area </td><td><?php echo $res['carea']; ?></td></tr>
											<tr><td>Price Breakup </td><td><?php echo $res['price']; ?></td></tr>
											<tr><td>Booking Amount </td><td><?php echo $res['bamount']; ?></td>
											</tr>
										</table>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div> <!-- END of Property details div -->

		      		<div class="row justify-content-center" style="margin-top:-30px">
			      		<div class="col-md-11">
			      			<div class="property-details">
		      					<div class="property-details">
		      						<div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      							<label style="color:black; margin: 15px 0px 0px 10px" ><h6><b>CONFIGURATION</b></h6></label> 	 
		      							<table class="table table-borderless table-hover ">
		      								<!-- <tr><th><h6><b style="color:black;" >CONFIGURATION</b></h6></th><th></th></tr> -->
									    	<tr><td width="64%">Bedroom</td><td> <?php echo $res['bedroom']; ?></td></tr>
									   		<tr><td>Bathroom </td><td> <?php echo $res['bathroom']; ?></td></tr>
									   		<tr><td>Balcony </td><td> <?php echo $res['balcony']; ?></td></tr>
									   		<tr><td>Area </td><td> <?php echo $res['conarea']; ?></td></tr>
									   		<tr><td>Rate </td><td> <?php echo $res['conrate']; ?></td></tr>
									   		<tr><td>Price</td><td> <?php echo $res['conprice']; ?></td></tr>
									   	</table>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div> <!-- END of configuration details div -->

		      		<div class="row justify-content-center" style="margin-top:-30px">
			      		<div class="col-md-11">
			      			<div class="property-details">
		      					<div class="property-details">
		      						<div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      							<label style="color:black; margin: 15px 0px 0px 10px">
		      								<h6>
		      									<b>AMENITIES DETAILS</b>
		      								</h6>
		      							</label>  	 
		      							<table class="table table-borderless">
		      								<tr>
									    		<td class="check">
									    			<span class="ion-ios-checkmark-circle"></span>&nbsp&nbsp&nbsp
										    		<?php echo $res['amenities']; ?>
										    	</td>
									    	</tr>
									   	</table>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div> <!-- END of aminities details div -->

		      		<div class="row justify-content-center" style="margin-top:-30px">
			      		<div class="col-md-11">
			      			<div class="property-details">
		      					<div class="property-details">
		      						<div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      							<label style="color:black; margin: 15px 0px 0px 10px" ><h6><b>PROJECT DETAILS</b></h6></label>  	 
		      							<table class="table table-borderless table-hover ">
		      								<!-- <tr><th><h6><b style="color:black;" >PROJECT DETAILS</b></h6></th><th></th></tr> -->
									    	<tr>
									    		<td>Developers Name</td>
									    		<td><?php echo $res['dname']; ?></td>
									    		<td></td>
									    	</tr>
											<tr>
												<td>configuration </td>
												<td><?php echo $res['pcon']; ?></td>
												<td></td>
											</tr>
											<tr>
												<td>Tower and unit Details </td>
												<td><?php echo $res['ptower'];?></td>
												<td></td>
											</tr>
											<tr>
												<td>Price Range</td>
												<td>Minimum<br>
													<b><?php echo $res['pminrange'];?></b>
												</td>
												<td>Maximum<br>
													<b><?php echo $res['pmaxrange']; ?></b>
												</td>
											</tr>
									   	</table>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div> <!-- END of project details details div -->

		      		<div class="row justify-content-center" style="margin-top:-30px">
			      		<div class="col-md-11">
			      			<div class="property-details">
		      					<div class="property-details">
		      						<div class="col-md-12 table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      							<label style="color:black; font-size: 19px; margin: 15px 0px 0px 10px" ><h6><b>Tools to Help You Decide Better</b></h6></label>  	
		      							<table class="table table-borderless">
									    	<tr>
									    		<td>
										    		<ul class="nav nav-pills mb-2" id="pills-tab" role="tablist" >
													    <li class="nav-item">
													      	<a href="finalemical.php" class="nav-link " 
													      		style="margin-right:15px; background-color:#a4c2ff; color: black">EMI Calculator
													      	</a>
															<li class="nav-item">
															    <a href="eligibility1.php" class="nav-link" style="margin-right:15px; background-color:#a4c2ff; color: black">Loan Eligibity Calculator
															    </a>
															</li>
													    </li>
													</ul>
												</td>
									    	</tr>	
									    </table>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div> <!-- END of Tools to Help You Decide Better div -->


		      		<div class="row justify-content-center" style="margin-top:-30px">
			      		<div class="col-md-11">
			      			<div class="property-details">
		      				<!-- 	<div class="property-details"> -->
		      						<div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      							<label style="color:black; margin: 15px 0px 0px 10px" >
		      								<h6>
		      									<b>Video</b>
		      								</h6>
		      							</label> 

		      							<?php echo '<video width="600" poster="./images1/image_1.jpg" controls 
		      							             	autoplay style="margin-left:230px; margin-bottom: 50px; margin-top: 30px; outline:none">
														<source src="images1/'.$res['video_name'].'" type="video/MP4">
													</video>';?>				
		      						</div>
		      					<!-- </div> -->
		      				</div>
		      			</div>
		      		</div> <!-- END of video div -->

		      		<style type="text/css"> /*for 360 degree paranoma view*/
					a-scene 
					{
					  height: 500px;
					  width: 800px;
					  margin-top: 30px;
					  margin-left:150px;
					  margin-bottom: 50px;
					}
					</style>

		      		<div class="row justify-content-center" style="margin-top:-30px">
			      		<div class="col-md-11">
			      			<div class="property-details">
		      				<!-- 	<div class="property-details"> -->
		      						<div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      							<label style="color:black; margin: 15px 0px 0px 10px" >
		      								<h6>
		      									<b>360 Paranoma View</b>
		      								</h6>
		      							</label> 

		      							<div id="myEmbeddedScene">
										    <a-scene embedded>
											<?php echo '<img id="paranoma" src="images1/'.$res['paranoma_image'].'"/>' ?>
											<a-sky src="#paranoma" rotation="0 -90 0"></a-sky>
										    </a-scene>
										</div>

		      						</div>
		      					<!-- </div> -->
		      				</div>
		      			</div>
		      		</div> <!-- END of 360 paranoma view div -->


		      		<div class="row justify-content-center" style="margin-top:-30px">
			      		<div class="col-md-11">
			      			<div class="property-details">
		      					<div class="property-details">
		      						<div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      							<label style="color:black; margin: 15px 0px 0px 10px" ><h6><b>BUILDER DETAILS</b></h6></label>  	 
		      							<table class="table table-borderless table-hover ">
									    	<tr>
									    		<td><h5><?php echo $res['buildername']; ?></h5></td>
									    		<td></td>
									    		<td></td>
									    		<td></td>
									    	</tr>
									   		<tr>
									   			<td><?php echo '<img src="images1/'.$res['builderpic'].'"height="200px;" width="200px;" alt="Image">' ?></td>
									   			<td></td>
									   			<td></td>
									   			<td></td>
									   		</tr>
									   		<tr>
									   			<td rowspan="2"colspan="3"><?php echo $res['builderinfo'];?></td>
									   			<td></td>
									   		</tr>
									   		<tr></tr>
									   		<tr>
									   			<td>Year Since Operating </td>
									   			<td><?php echo $res['builderyear']; ?></td>
									   			<td></td>
									   			<td></td>
									   		</tr>
									   		<tr>
									   			<td>Operating Cities</td>
									   			<td><?php echo $res['buildercity']; ?></td>
										   		<td></td>
										   		<td></td>
									   		</tr>
									   		<tr>
									   			<td>Overview </td>
									   			<td>Completed<br><?php echo $res['bcomplete']; ?></td>
									   			<td>Ongoing<br><?php echo $res['bongoing']; ?></td>
									   			<td>Upcoming<br><?php echo $res['bupcoming']; ?></td>
									   		</tr>
									   	</table>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div> <!-- END of Builder details div -->

		      		<div class="row justify-content-center" style="margin-top:-30px">
			      		<div class="col-md-11">
			      			<div class="property-details">
		      					<div class="property-details">
		      						<div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
		      							<label style="color:black; margin: 15px 0px 0px 10px" >
		      								<h6>
		      									<b>AGENT DETAILS</b>
		      								</h6>
		      							</label> 	 
		      							<table class="table table-borderless table-hover ">
		      								<!-- <tr><th><h6><b style="color:black;" >AGENT DETAILS</b></h6></th><th></th></tr></th><th></th><th></th><th></th></tr> -->
									    	<tr>
									    		<td>
									    			<h5><?php echo $res['agentname']; ?></h5>
									    		</td>
									    		<td></td>
									    		<td></td>
									    		<td></td>
									    	</tr>

									   		<tr>
									   			<td><?php echo '<img src="images1/'.$res['agentpic'].'"height="200px;" width="200px;" alt="Image">'?></td>
									   			<td></td>
									   			<td></td>
									   			<td></td>
									   		</tr>
									   		<tr>
									   			<td>Office Address</td>
									   			<td><?php echo $res['agentinfo'];?></td>
									   			<td></td>
									   		</tr>	
									   		<tr>
									   			<td>Dealing In</td>
									   				<td><?php echo $res['agentarea']; ?></td>
									   				<td></td>
									   			</tr>
									   		<tr>
									   			<td>Year Since Operating </td>
									   			<td><?php echo $res['builderyear']; ?></td>
									   			<td></td>
									   			<td></td>
									   		</tr>

									   		<tr>
									   			<td>Properties</td>
									   			<td>For Sale<br><?php echo $res['agentsale']; ?></td>
									   			<td>Price Range<br><?php echo $res['aminsale']; ?>&nbsp&nbsp-&nbsp&nbsp<?php echo $res['amaxsale']; ?></td>
									   		</tr>

									   		<tr>
									   			<td></td>
									   			<td>For Rent<br><?php echo $res['agentrent']; ?></td>
									   			<td>Price Range<br><?php echo $res['aminrent']; ?>&nbsp&nbsp-&nbsp&nbsp<?php echo $res['amaxrent']; ?></td>
									   		</tr>
									   	</table>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      		</div> <!-- END of agent details div -->


			    </div>
			</section>
			<!-- END of second section -->

			<?php } ?>
		</div> <!-- END of main-container div -->
	</body>
	
</html>