<?php
  
  include("config.php"); 

  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }

  /*update functionality*/

  if (isset($_POST['testimonial-update']))
    {

       // here always put name from your input data like name="occupation"

      $testimonial_id=$_GET['testimonial_id'];
      $testimonial= $_POST['testimonial'];
      $clientname = $_POST['client-name'];
      $occupation = $_POST['occupation'];
      $filename = $_FILES["testimonial_image"]["name"];

      // here always put sql table colum name like testimonial_occupation='occupation'

      $query = "update client_testimonial set testimonial='$testimonial', testimonial_name='$clientname' , testimonial_occupation='$occupation', testimonial_image='$filename' where testimonial_id ='$testimonial_id'";

          $result = mysqli_query($mysqli,$query);

    if ($result)
    {
      move_uploaded_file($_FILES["testimonial_image"]["tmp_name"],"../../images1/".$_FILES["testimonial_image"]["name"]);
      header("location:client-testimonial.php");
    }
    else
    {
      header("location:client-testimonial.php");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Update Client Testimonial</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                <form action="" method="POST" enctype="multipart/form-data">
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="client-name">Client Name </label>
                                      <input type="text" class="form-control" name="client-name" id="client-name" placeholder="Client Name">
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="occupation">Occupation</label>
                                      <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Occupation">
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="testimonial_image">Client Image</label><br>
                                      <input type="file" name="testimonial_image" id="testimonial_image" accept="image/*">
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-5">
                                      <label for="testimonial">Testimonial</label>
                                      <textarea class="form-control z-depth-1" name="testimonial" id="testimonial" rows="3" placeholder="Share Your Experience"></textarea>
                                    </div>
                                  </div>
                                
                                  <input type="submit" class="btn btn-primary" style="margin-top:1.5%" name="testimonial-update" value="submit"> 
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