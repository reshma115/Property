<?php
 		
 	include("config.php"); 

    if (isset($_POST['submit1']))
    {
      $pname=$_POST['pname'];
      $address=$_POST['address'];
      $pcode=$_POST['pcode'];
      $location=$_POST['location'];
      $status=$_POST['status'];
      $transaction=$_POST['transaction'];
      $furnished=$_POST['furnished'];
      $ownership=$_POST['ownership'];
      $sarea=$_POST['sarea'];
      $carea=$_POST['carea'];
      $price=$_POST['price'];
      $bamount=$_POST['bamount'];

      $result=mysqli_query($mysqli,"Insert into property_details values ('','$pname','$address','$pcode','$location',
        '$status','$transaction','$furnished','$ownership','$sarea','$carea','$price','$bamount')");

	    if ($result)
	    {
	        header("location:property-details.php");
	    }    
	    else{
	        echo "failed";
	    }

      //  $query= "insert into property_details values ('','$pname','$address','$pcode','$location','$status','$transaction', 'furnished', 'ownership', '$sarea', '$carea','$price', '$bamount')";
      //  $result = mysqli_query($mysqli, $query) or die('Error querying database.');

      // if ($result)
      // {
      //     echo "success"."<br>";
      // }
      // else{
      //   echo "failed"."<br>";
      // }
      // echo $query;

    }

    /*delete functionality*/

    $id=$_GET['id'];
    //echo $id;
    $query=" DELETE FROM `property_details` WHERE id = $id";
    mysqli_query($mysqli,$query);
    
    header("location:property-details.php");

?>
