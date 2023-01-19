<?php

include("config.php");

if (isset($_POST['blog_submit']))
    {
      $blogname=$_POST['blogname'];
      $blogdesc=$_POST['blogdesc'];    
      $blogtype=$_POST['blogtype'];
      $blogername=$_POST['blogername'];
      $blogimage=$_FILES['blogimage']['name'];

      // $filename5=$_FILES['image5']['name'];

      $result=mysqli_query($mysqli,"Insert into blog_details values ('','$blogimage','$blogname','$blogtype',
        '$blogername','$blogdesc',now())");      //now() is used for auto date and time

      if ($result)   
      {

           move_uploaded_file($_FILES["blogimage"]["tmp_name"],"../../images1/".$_FILES["blogimage"]["name"]);
           header("location:blog_details.php");
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

    $id=$_GET['blog_id'];
    //echo $id;
    $query=" DELETE FROM `blog_details` WHERE blog_id = $id";
    mysqli_query($mysqli,$query);
    
    header("location:blog_details.php");

?>

