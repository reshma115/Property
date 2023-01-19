<?php
  
  include("config.php"); 
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }

  /*update functionality*/

  if (isset($_POST['about-update']))
    {
      $id=$_GET['id'];  
      $aboutid=$_GET['about_id'];  
      $companyname = $_POST['company-name'];
      $companydescription = $_POST['company-description'];
      $companymission = $_POST['company-mission'];
      $companyvision = $_POST['company-vision'];
      $companyvalue = $_POST['company-value'];

    $query= "update about_us_details set about_id = '$aboutid', company_name = '$companyname' , company_description = '$companydescription' , company_mission = '$companymission' , company_vision = '$companyvision' , company_value = '$companyvalue' where about_id = '$aboutid' ";

    $result =mysqli_query($mysqli,$query);

     header("location:about-details.php");

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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Update About Us</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->

                                  <form action="" method="POST">
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="company-name">Company Name </label>
                                          <input type="text" class="form-control" name="company-name" id="company-name" placeholder="Company Name">
                                        </div>
                                      </div>

                                  <!--     <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="company-pic">Company Image</label><br>
                                          <input type="file" name="company-pic" id="company-pic" accept="image/*">
                                        </div>
                                      </div> -->

                                      <div class="form-row">
                                        <div class="form-group col-md-5">
                                          <label for="company-description">Description About Company </label>
                                          <textarea class="form-control z-depth-1" name="company-description" id="company-description" rows="3" placeholder="About Company"></textarea>
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-5">
                                          <label for="company-mission">Company Mission</label>
                                          <textarea class="form-control z-depth-1" name="company-mission" id="company-mission" rows="3" placeholder="Mission"></textarea>
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-5">
                                          <label for="company-vision">Company Vision</label>
                                          <textarea class="form-control z-depth-1" name="company-vision" id="company-vision" rows="3" placeholder="Vision"></textarea>
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-5">
                                          <label for="company-value">Company Value </label>
                                          <textarea class="form-control z-depth-1" name="company-value" id="company-value" rows="3" placeholder="Value"></textarea>
                                        </div>
                                      </div>  
                                      <input type="submit" class="btn btn-primary" style="margin-top:1.5%" name="about-update" value="submit"> 
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