<!-- pages used  client-favorite-display.php
				 client-favorite-action.php
				 client-single-page.php
				 client-index.php -->

<?php
	include("../configuration/config.php"); 
	include("client-favorite-action.php");
	// session_start();
	// 	if (!isset($_SESSION['login']) || $_SESSION['login']!==true) 
	// 	{
	// 	   header("location:client-login.php");
	// 	}

	//include("client-index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>client-favorite-display-page.php</title>
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
<body  style="background-color: #eeeeee">
	<div class="first-container" style="margin-top: -30px">
		<?php
		  	include("client-nav.php");
		 ?>

	<section style="margin: 25px 0px 100px 300px;">
		<h3>
			<div class="your cart" style="margin:50px 0px 25px 0px;">Favorite Properties
				<a href="client-index.php" class="btn btn-info" style="color: white; margin-left: 45%;">Continue search</a>
			</div>
		</h3>
		<!-- <div class="card col-md-6 shadow-sm p-2 mb-2" id="main_div" style="">
			<div style="margin:15px 10px 0px 40px">	 -->
				<?php
					product();    //call second function from cart.php
				?>
			<!-- </div>
		</div> -->
		
	
		
	
		<!-- <section style="margin-top: 30px">
			<a href="client-index.php" class="btn btn-info" style="color: white">Continue search</a>
		</section> -->
	</section>
</div>

		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery-migrate-3.0.1.min.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.easing.1.3.js"></script>
		<script src="../js/jquery.waypoints.min.js"></script>
		<script src="../js/jquery.stellar.min.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
		<script src="../js/jquery.magnific-popup.min.js"></script>
		<script src="../js/aos.js"></script>
		<script src="../js/jquery.animateNumber.min.js"></script>
		<script src="../js/bootstrap-datepicker.js"></script>
		<script src="../js/jquery.timepicker.min.js"></script>
		<script src="../js/scrollax.min.js"></script>
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
		<script src="../js/google-map.js"></script>
		<script src="../js/main.js"></script>	
		
</body>

</html>
			