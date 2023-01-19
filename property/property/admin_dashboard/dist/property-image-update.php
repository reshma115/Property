<?php
	
 	include("config.php"); 
  
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }  

	/*update functionality*/

 	if (isset($_POST['update']))
    {
      $property_image_id=$_GET['property_image_id'];  

      // $builderpic=$_FILES['builderpic']['name'];
      // $filename="images/$builderpic";
      // $builderpic=$_POST['builderpic'];

      // $filename=$_FILES["image1"]["name"];

      $filename1=$_FILES["image1"]["name"];
      $filename2=$_FILES['image2']['name'];
      $filename3=$_FILES['image3']['name'];
      $filename4=$_FILES['image4']['name'];
      $filename5=$_FILES['image5']['name'];
      $pcode=$_POST['pcode'];
      $filename6 = $_FILES['file']['name'];
      $filename7 = $_FILES['paranoma_image']['name'];

		// $query=	"update property_image_details set image1='$filename1',image2='$filename2',image3='$filename3',image4='$filename4',image5='$filename5',pcode='$pcode' where property_image_id = $property_image_id ";
    $query= "update property_image_details set image1='$filename1',image2='$filename2',image3='$filename3',image4='$filename4',image5='$filename5',pcode='$pcode', video_name='$filename6',paranoma_image='$filename7' where property_image_id = $property_image_id ";
		$result = mysqli_query($mysqli,$query);

    if ($result)
    {
      move_uploaded_file($_FILES["image1"]["tmp_name"],"../../images1/".$_FILES["image1"]["name"]);
      move_uploaded_file($_FILES['image2']['tmp_name'],"../../images1/".$_FILES['image2']['name']); 
      move_uploaded_file($_FILES['image3']['tmp_name'],"../../images1/".$_FILES['image3']['name']);
      move_uploaded_file($_FILES['image4']['tmp_name'],"../../images1/".$_FILES['image4']['name']);
      move_uploaded_file($_FILES['image5']['tmp_name'],"../../images1/".$_FILES['image5']['name']);

      move_uploaded_file($_FILES['file']['tmp_name'],"../../images1/".$_FILES['file']['name']);
      move_uploaded_file($_FILES['paranoma_image']['tmp_name'],"../../images1/".$_FILES['paranoma_image']
                ['name']);



      header("location:property-image-details.php");
    }
    else
    {
		  header("location:property-image-details.php");
    }

  }

?>



<!-- navbar.php -->
<?php
  include("navbar.php");
?>

<div id="layoutSidenav">  
  <!-- sidebar.php -->
  <?php
    include("sidebar.php");
  ?>

  <div id="layoutSidenav_content"> 

                  <main>
                    <div class="container-fluid">
                        <h4 class="mt-3" style="margin-bottom: 20px;">Update Property Image Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                                                  
                                  <form action="#" method="POST" enctype="multipart/form-data">
                                      <div class="form-row">
                                          <div class="form-group col-md-2">
                                            <label for="pcode">Property Code</label>
                                            <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Property Code">
                                          </div>
                                      </div> 

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="image">Property Images</label><br>
                                          <table class="table table-borderless"  style="margin-left:-12px">
                                            <tr>            
                                                <tr> 
                                                  <td>Image 1</td>
                                                  <td>Image 2</td>
                                                  <td>Image 3</td>
                                                </tr>
                                                <td><input type="file" name="image1" id="image1" accept="image/*" multiple /></td>
                                                <td><input type="file" name="image2" id="image2" accept="image/*" multiple /></td>
                                                <td><input type="file" name="image3" id="image3" accept="image/*" multiple /></td>

                                                <tr>
                                                  <tr>   
                                                    <td>Image 4</td>
                                                    <td>Image 5</td>
                                                  </tr>  
                                                  <td><input type="file" name="image4" id="image4" accept="image/*" multiple /></td>
                                                  <td><input type="file" name="image5" id="image5" accept="image/*" multiple /></td>
                                                </tr>

                                                <!-- for video -->
                                                <tr>
                                                  <tr>
                                                   <td>360 Paranoma Image</td> 
                                                    <td>Upload Video</td>
                                                  </tr>
                                                  <td><input type="file" name="paranoma_image" id="paranoma_image" accept="image/*" multiple /></td>
                                                  <td><input type="file" name="file" id="file"></td>
                                                </tr>

                                            </tr>
                                          </table>
                                        </div>
                                      </div>
                                    
                                      <input type="submit" class="btn btn-primary" style="margin-top:1.5%;" name="update" value="submit">
                                   
                                    </form>



                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                    </div> <!--end of container-fluid -->
                </main>
     <!-- admin-panel-footer.php -->
    <?php
      include("admin-panel-footer.php");
    ?>
    </div>   <!--end of layoutSidenav_content -->
</div> <!--end of layoutSidenav -->