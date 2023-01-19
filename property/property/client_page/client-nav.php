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


	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="client-index.php">Property.com</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	           <li class="nav-item"><a class="sole_button" href="client-sole-selling.php" style="text-decoration: none; color: white">Sole Selling</a></li>
	          <li class="nav-item active"><a href="client-index.php" class="nav-link" style="color: white;">Home</a></li>
	          <li class="nav-item"><a href="client-about-us.php" class="nav-link" style="color: white;" >About Us</a></li>
	           <li class="nav-item"><a href="client-blog.php" class="nav-link" style="color: white;">Blog</a></li>
	          <!-- <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Services</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Agent</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Listing</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Blog</a></li> -->
	          <li class="nav-item"><a href="client-contact.php" class="nav-link" style="color: white;">Contact</a></li>
	          <!-- <li class="nav-item"><a href="admin-login.php" class="nav-link" style="color: white;">Admin</a></li> -->
	          <!-- <li class="nav-item"><a href="client-login.php" class="nav-link" style="color: white;">Sign In</a></li> -->

	        </ul>
	      </div>
	        <div class="dropdown">
	            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: white; margin-top: 10px"><img src="https://img.icons8.com/officel/25/000000/user.png"><?php echo " Welcome ".$_SESSION['uname']?>
	            </button>
	            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	            	<a class="dropdown-item" href="client-favorite-display.php">Your Wishlist</a>
	                <a class="dropdown-item" href="client-logout.php">Logout</a>
	                 
	                <!-- <a class="dropdown-item" href="#">Another action</a>
	                <a class="dropdown-item" href="#">Something else here</a> -->
	            </div>
        	</div>
	    </div>
	</nav>
    <!-- END nav -->