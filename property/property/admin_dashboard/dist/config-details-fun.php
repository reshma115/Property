<?php
 		
 	include("config.php"); 

    if (isset($_POST['submit2']))
    {      
      $bedroom=$_POST['bedroom'];
      $bathroom=$_POST['bathroom'];
      $balcony=$_POST['balcony'];
      $conarea=$_POST['conarea'];
      $conrate=$_POST['conrate'];
      $conprice=$_POST['conprice'];
      $pcode=$_POST['pcode'];

      $result=mysqli_query($mysqli,"Insert into configuration_details values('','$bedroom','$bathroom','$balcony',
        '$conarea','$conrate','$conprice','$pcode')");

	    if ($result)
	    {
	        header("location:config-details.php");
          // echo "success";
	    }    
	    else{
	        echo "failed";
	    }


}

      /*delete functionality*/

    $configuration_id=$_GET['configuration_id'];
    //echo $id;
    $query=" DELETE FROM `configuration_details` WHERE configuration_id = $configuration_id";
    mysqli_query($mysqli,$query);
    
    header("location:config-details.php");

    
?>


