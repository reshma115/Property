<?php
    include("config.php"); 
 		
 	// include("config.php"); 

    if (isset($_POST['testimonial-submit']))
    {  
        //$filename=$_FILES["agentpic"]["name"];

        // $tempname=$_FILES["builderpic"]["tmp_name"];    
        // $folder="images/".$filename;
        // move_uploaded_file($tempname,$folder);

        // $builderpic=$_POST['builderpic'];
       
        // $companyname = $_POST['company-name'];
        // $companydescription = $_POST['company-description'];
        // $companymission = $_POST['company-mission'];
        // $companyvision = $_POST['company-vision'];
        // $companyvalue = $_POST['company-value'];

        $filename = $_FILES["testimonial_image"]["name"];
        $clientname = $_POST['client-name'];
        $occupation = $_POST['occupation'];
        $testimonial= $_POST['testimonial'];
       


        // if(file_exists("images/". $_FILES["builderpic"]["name"])) 
        // {
        //     // $store =$_FILES["builderpic"]["name"];
        //     header("location:builder-details.php");
        //     echo "image is already exists..........";
        // }
        // else
        // {
        $sql=mysqli_query($mysqli,"Insert into client_testimonial values ('','$testimonial','$clientname',
        	'$occupation','$filename')");

        // $result=mysqli_query($mysqli,"Insert into popular_agent_details values ('','$filename','$agentname',
        //       '$agentinfo','$agentarea','$agentyear','$agentsale','$aminsale','$amaxsale','$agentrent','$aminrent','$amaxrent','$pcode')");
    	   
	    if ($sql)
	    {
            move_uploaded_file($_FILES["testimonial_image"]["tmp_name"],"../../images1/".$_FILES["testimonial_image"]["name"]);
	        header("location:client-testimonial.php");
	    }    
	    else{
	        echo "failed";
	    }

  }
      /*delete functionality*/

    $testimonial_id=$_GET['testimonial_id'];
    //echo $id;
    $query=" DELETE FROM `client_testimonial` WHERE testimonial_id = $testimonial_id";
    mysqli_query($mysqli,$query);
    
    header("location:client-testimonial.php");

    
?>
