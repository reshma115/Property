<?php

	include("config.php"); 

	if (isset($_POST['submit3'])) 
	{
	    $amenities=$_POST['amen'];  // html form attribute name
	    $b = implode( ",",$amenities);
	    $pcode=$_POST['pcode'];
	    // echo $b;
	    $sql="insert into amenities_details values('','$b','$pcode')";
	    //echo $sql;
	    $result= mysqli_query($mysqli,$sql);
	    if ($result) 
	    {
	      header("location:amenities-details.php");
	      // echo "success";
	    }
	    else
	    {
	      // echo "failed";
	    }
	}



	/*delete functionality code*/

    $id=$_GET['id'];
    //echo $id;
    $query=" DELETE FROM `amenities_details` WHERE id = $id";
    mysqli_query($mysqli,$query);

    header("location:amenities-details.php");

?>