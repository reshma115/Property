<?php
 		
 	include("config.php"); 

    if (isset($_POST['submit4']))
    {  
      $filename=$_FILES["builderpic"]["name"];

      // $tempname=$_FILES["builderpic"]["tmp_name"];    
      // $folder="images/".$filename;
      // move_uploaded_file($tempname,$folder);

      // $builderpic=$_POST['builderpic'];
      $buildername=$_POST['buildername'];
      $builderinfo=$_POST['builderinfo'];
      $bcomplete=$_POST['bcomplete'];
      $bongoing=$_POST['bongoing'];
      $bupcoming=$_POST['bupcoming'];
      $builderyear=$_POST['builderyear'];
      $buildercity=$_POST['buildercity'];
      $pcode=$_POST['pcode'];


      // if(file_exists("images/". $_FILES["builderpic"]["name"])) 
      // {
      //     // $store =$_FILES["builderpic"]["name"];
      //     header("location:builder-details.php");
      //     echo "image is already exists..........";
      // }
      // else
      // {
            $result=mysqli_query($mysqli,"Insert into builder_details values ('','$filename','$buildername',
              '$builderinfo','$bcomplete','$bongoing','$bupcoming','$builderyear','$buildercity','$pcode')");

    	    if ($result) /*for images*/
    	    {   
             

              move_uploaded_file($_FILES["builderpic"]["tmp_name"],"../../images1/".$_FILES["builderpic"]["name"]);
    	        header("location:builder-details.php");
              // echo "success";
    	    }    
    	    else
          {
    	        echo "failed";
    	    }

      // }
  }

      /*delete functionality*/

    $builder_id=$_GET['builder_id'];
    //echo $id;
    $query=" DELETE FROM `builder_details` WHERE builder_id = $builder_id";
    mysqli_query($mysqli,$query);
    
    header("location:builder-details.php");

    
?>


