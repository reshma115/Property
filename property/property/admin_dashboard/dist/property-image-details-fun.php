<?php
 		
 	include("config.php"); 

    if (isset($_POST['submit7']))
    {  
      $filename1=$_FILES["image1"]["name"];
      $filename2=$_FILES['image2']['name'];
      $filename3=$_FILES['image3']['name'];
      $filename4=$_FILES['image4']['name'];
      $filename5=$_FILES['image5']['name'];

      // $tempname=$_FILES["builderpic"]["tmp_name"];    
      // $folder="images/".$filename;
      // move_uploaded_file($tempname,$folder);

      // $builderpic=$_POST['builderpic'];
      $pcode=$_POST['pcode'];
      $filename6 = $_FILES['file']['name'];
      $filename7 = $_FILES['paranoma_image']['name'];


      // if(file_exists("images/". $_FILES["builderpic"]["name"])) 
      // {
      //     // $store =$_FILES["builderpic"]["name"];
      //     header("location:builder-details.php");
      //     echo "image is already exists..........";
      // }
      // else
      // {
            $result=mysqli_query($mysqli,"Insert into property_image_details values ('','$filename1',
              '$filename2','$filename3','$filename4','$filename5','$pcode','$filename6','$filename7')");

    	    if ($result) /*for images*/
    	    {   
              move_uploaded_file($_FILES["image1"]["tmp_name"],"../../images1/".$_FILES["image1"]["name"]);

              move_uploaded_file($_FILES['image2']['tmp_name'],"../../images1/".$_FILES['image2']['name']); 
              move_uploaded_file($_FILES['image3']['tmp_name'],"../../images1/".$_FILES['image3']['name']);
              move_uploaded_file($_FILES['image4']['tmp_name'],"../../images1/".$_FILES['image4']['name']);
              move_uploaded_file($_FILES['image5']['tmp_name'],"../../images1/".$_FILES['image5']['name']);

              move_uploaded_file($_FILES['file']['tmp_name'],"../../images1/".$_FILES['file']['name']);
              move_uploaded_file($_FILES['paranoma_image']['tmp_name'],"../../images1/".$_FILES['paranoma_image']
                ['name']);

    	        //header("location:property-image-details.php");
              // echo "success";
    	    }    
    	    else
          {
    	        echo "failed";
    	    }

      // }
  }

      /*delete functionality*/

    $property_image_id=$_GET['property_image_id'];
    //echo $id;
    $query=" DELETE FROM `property_image_details` WHERE property_image_id = $property_image_id";
    mysqli_query($mysqli,$query);
    
    header("location:property-image-details.php");

    
?>


