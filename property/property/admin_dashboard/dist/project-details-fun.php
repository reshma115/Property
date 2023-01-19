<?php
 		
 	include("config.php"); 

    if (isset($_POST['submit4']))
    {      
      $dname=$_POST['dname'];
      $pminrange=$_POST['pminrange'];
      $pmaxrange=$_POST['pmaxrange'];
      $pcon=$_POST['pcon'];
      $ptower=$_POST['ptower'];
      $pcode=$_POST['pcode'];
      

      $result=mysqli_query($mysqli,"Insert into project_details values ('','$dname','$pminrange','$pmaxrange',
        '$pcon','$ptower','$pcode')");

	    if ($result)
	    {
	        header("location:project-details.php");
          // echo "success";
	    }    
	    else{
	        echo "failed";
	    }

    }

    $project_id=$_GET['project_id'];
    //echo $id;
    $query=" DELETE FROM `project_details` WHERE project_id = $project_id";
    mysqli_query($mysqli,$query);
    
    header("location:project-details.php");

?>


