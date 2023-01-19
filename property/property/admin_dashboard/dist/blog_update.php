<?php
	
 	include("config.php"); 
  
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }  

	/*update functionality*/

 	if (isset($_POST['blog_update']))
    {
      $blog_id=$_GET['blog_id'];  
      $blogname=$_POST['blogname'];
      $blogdesc=$_POST['blogdesc'];
      $blogtype=$_POST['blogtype'];
      $blogername=$_POST['blogername'];
      $blogimage=$_FILES['blogimage']['name'];


    $query= "update blog_details set blog_image='$blogimage',blog_name='$blogname', 
    blogtype='$blogtype', blog_post_by='$blogername', blog_description='$blogdesc' where blog_id = '$blog_id' ";

		$result = mysqli_query($mysqli,$query);

    
      if ($result)
      {

           move_uploaded_file($_FILES["blogimage"]["tmp_name"],"../../images1/".$_FILES["blogimage"]["name"]);
           header("location:blog_details.php");
      }    
      else{
           header("location:blog_details.php");
      }

  }

?>
<head>
  <script src="plugin/ckeditor/ckeditor.js"></script>
</head>
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Update Blog Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="blogname">Article Name</label>
                                    <input type="text" class="form-control" name="blogname" id="blogname" placeholder="Topic Name">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-5">
                                      <label for="blogtype">Blog Type</label>
                                      <input type="text" class="form-control" name="blogtype" id="blogtype" placeholder="Ex., Real Estate ,Investment..">
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group col-md-5">
                                      <label for="blogername">Blogger Name</label>
                                      <input type="text" class="form-control" name="blogername" id="blogername" placeholder="Posted by..">
                                  </div>
                                </div>

                                 <div class="form-row">
                                  <div class="form-group col-md-5">
                                      <label for="blogimage">Blog Image</label><br>
                                      <input type="file" name="blogimage" id="blogimage" accept="image/*" multiple />
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group col-md-11">
                                    <label for="blogdesc">Description</label>
                                    <textarea class="ckeditor" name="blogdesc" id="blogdesc" rows="30" placeholder="Write Here.." style="width: 100%"></textarea>
                                  </div>
                                </div>



                               
                                <input type="submit" class="btn btn-primary" style="margin-top:1.5%" 
                                name="blog_update" value="submit"> 
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
