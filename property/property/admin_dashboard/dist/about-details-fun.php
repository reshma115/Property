
<?php
    include("config.php"); 
 		
 	// include("config.php"); 

    if (isset($_POST['about-submit']))
    {  
        //$filename=$_FILES["agentpic"]["name"];

        // $tempname=$_FILES["builderpic"]["tmp_name"];    
        // $folder="images/".$filename;
        // move_uploaded_file($tempname,$folder);

        // $builderpic=$_POST['builderpic'];
       
        $companyname = $_POST['company-name'];
        $companydescription = $_POST['company-description'];
        $companymission = $_POST['company-mission'];
        $companyvision = $_POST['company-vision'];
        $companyvalue = $_POST['company-value'];


        // if(file_exists("images/". $_FILES["builderpic"]["name"])) 
        // {
        //     // $store =$_FILES["builderpic"]["name"];
        //     header("location:builder-details.php");
        //     echo "image is already exists..........";
        // }
        // else
        // {
        $sql=mysqli_query($mysqli,"Insert into about_us_details values ('','$companyname','$companydescription',
        	'$companymission','$companyvision','$companyvalue')");

    	   
	    if ($sql)
	    {
	        header("location:about-details.php");
	    }    
	    else{
	        echo "failed";
	    }

  }
      /*delete functionality*/

    $about_id=$_GET['about_id'];
    //echo $id;
    $query=" DELETE FROM `about_us_details` WHERE about_id = $about_id";
    mysqli_query($mysqli,$query);
    
    header("location:about-details.php");

    
?>
