<?php
  include("config.php"); 
   session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
      {
        header("location:admin-login.php");
      }
      $result = mysqli_query($mysqli,"select * from about_us_details order by about_id asc");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">ABOUT US DETAILS</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                <form action="about-details-fun.php" method="POST">
                                  
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
                                 
                                  <input type="submit" class="btn btn-primary" style="margin-top:1.5%" name="about-submit" value="submit"> 
                              </form>

                                <div class="form-row">  
                                  <div class="form-group col-md-2">
                                    <input type="submit" class="btn btn-primary" style="margin-top:4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" onclick="location.href='client-testimonial.php';">
                                  </div>
                                </div>

                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                      <!-- display data values in table format -->

                          <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>About Company DataTable</div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                      <tr style="text-align: center;">
                                        <th>ID</th>
                                        <th>Company Name</th>
                                        <th>Company Description</th>
                                        <th>Company Mission</th>
                                        <th>Company Vision</th> 
                                        <th>Company Value</th> 
                                        <th>Update</th> 
                                        <th>Delete</th>                    
                                      </tr> 
                                    </thead>
                                 

                                  <?php

                                  while ($res = mysqli_fetch_array($result))
                                  {

                                  ?>

                                      <tr>
                                        <td><?php echo $res['about_id']; ?></td>
                                        <td><?php echo $res['company_name']; ?></td>
                                        <td><?php echo $res['company_description']; ?></td>
                                        <td><?php echo $res['company_mission']; ?></td>
                                        <td><?php echo $res['company_vision']; ?></td>
                                        <td><?php echo $res['company_value']; ?></td>
                                        

                                        <td><button class="btn btn-success"><a href="about-update.php?about_id=<?php 
                                        echo $res['about_id']; ?>" class="text-white">Update</a>
                                        </button></td>
                           

                                        <td><button class="btn btn-danger"><a href="about-details-fun.php?about_id=<?php 
                                        echo $res['about_id']; ?>" class="text-white">Delete</a>
                                        </button></td>
                                    </tr>


                                <?php } ?>


                                      </table>
                                  </div>
                                </div>
                            </div>

                    </div> <!--end of container-fluid -->
                </main>

    
        <!-- admin-panel-footer.php -->
    <?php
      include("admin-panel-footer.php");
    ?>
    </div>   <!--end of layoutSidenav_content -->
</div> <!--end of layoutSidenav -->