<!-- pages used  client-favorite-display.php
				 client-favorite-action.php
				 client-single-page.php
				 client-index.php -->


<?php
	include("../configuration/config.php"); 
?>
<head>
	<title>client-favorite-action-page.php</title>
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

<?php
	//require ("client-index.php");
	session_start();
	//session_destroy();
	

	if (isset($_GET['add']) && !empty($_GET['add']))   //for add
	{
		$id = $_GET['add'];
		
		// $q =mysqli_query($mysqli,"select `pcode`,`address`,`status`,`furnished`,`price` from property_details where `pcode`='".$id."'");

		$q = mysqli_query($mysqli,"select * from property_details p INNER JOIN amenities_details a ON p.pcode= a.pcode INNER JOIN configuration_details c ON a.pcode = c.pcode 
					INNER JOIN project_details pr ON c.pcode = pr.pcode 
					INNER JOIN builder_details bd ON pr.pcode=bd.pcode 
					INNER JOIN popular_agent_details ag ON bd.pcode=ag.pcode 
					INNER JOIN property_image_details pi ON ag.pcode=pi.pcode where pi.pcode='".$id."'");

		while ($pcode = mysqli_fetch_assoc($q)) 
		{
			if ($pcode['pcode'] != @$_SESSION['cart_'.$id]) 
			{
				echo @$_SESSION['cart_'.$id]++;
			}
			header('location:client-index.php');
		}
	}

	// if (isset($_GET['remove'])) 		//for remove
	// {
	// 	$_SESSION['cart_'.$_GET['remove']]--;
	// 	header('location:client-favorite-display.php');
	// }

	if (isset($_GET['remove'])) 		//for delete
	{		
		$_SESSION['cart_'.$_GET['remove']]=0;
		header('location:client-favorite-display.php');
	}

		
	function product()
	{ 
		global $mysqli;
		//$net=0;
		foreach ($_SESSION as $name => $value) 													
		{
			if ($value > 0) 
			{
				if (substr($name,0,5) == 'cart_')  	
				{
					
					$id = @substr($name,5,(strlen($name-5)));
					// $q = mysqli_query($mysqli,"select `pcode`,`address`,`status`,`furnished`,`price` from property_details where `pcode`='".$id."'");

					$q = mysqli_query($mysqli,"select * from property_details p INNER JOIN amenities_details a ON p.pcode= a.pcode INNER JOIN configuration_details c ON a.pcode = c.pcode 
					INNER JOIN project_details pr ON c.pcode = pr.pcode 
					INNER JOIN builder_details bd ON pr.pcode=bd.pcode 
					INNER JOIN popular_agent_details ag ON bd.pcode=ag.pcode 
					INNER JOIN property_image_details pi ON ag.pcode=pi.pcode where pi.pcode='".$id."'");


					while ($get =mysqli_fetch_assoc($q))  	
					{

					echo '<div class="card col-md-8 shadow p-2 mb-3 bg-white rounded bg-white rounded " id="main_div">';
					echo '<div style="margin:15px 15px 0px 40px">';	

					echo '<img src= "../images1/'.$get['image1'].'" height="150" width="150" alt="Image1" style="float:right;">';

					echo "Property Code ".$get['pcode'].'<h6 style="margin-left:400px;"> ₹ '.$get['price'].'</h6>';
					echo "<b>".$get['pcon']." Apartment"."</b>"."&nbsp&nbsp".$get['conarea']."	sqft".'<br>';
						//echo '<h6 style="margin-left:250px;"> ₹'.$get['price'].'</h6>'.'<br>';

					echo "<a href='client-single-page.php?pcode={$get['pcode']}'>".$get['address']."</a>".'<br>'.'<br>';

					echo '<table style="margin-bottom:0px;">';
						echo '<tr>';
							echo '<td width="140">'."Builder Name ".'</td>';
							echo '<td>'.$get['buildername'].'</td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>'."Status".'</td>';
							echo '<td>'.$get['status'].'</td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>'."Details".'</td>';
							echo '<td>'.$get['bathroom']. " Bathroom"." , ".$get['furnished'].'</td>';
						echo '</tr>';
						// echo '<tr>';
						// 	echo '<td>'."Amenities ".'</td>';
						// 	echo '<td width="340">'.$get['amenities']. " Bathroom".'</td>';
						// echo '</tr>';						
					echo '</table>';

					echo '<span>';

					echo "<a href='client-single-page.php?pcode={$get['pcode']}'  class='btn btn-success' style='color: white; margin-left:62%;'>"."Go to Property"."</a>";

 					echo '<a href="client-favorite-action.php?remove='.$get['pcode'].'" class="btn btn-danger" style="color: white; margin-left:1%; ">Remove</a><br/><br/>';

 						echo '</span>';

					echo '</div>';
					echo '</div>';

						
					}
				}

			}	
			
		}
		
	}
?>

