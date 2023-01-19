<?php
  include("config.php"); 
   session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
      {
        header("location:admin-login.php");
      }

  $result=mysqli_query($mysqli,"select * from amenities_details order by id asc");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Amenities Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->

                                <form action="amenities-details-fun.php" method="POST">
                                  <div class="form-row">
                                        <div class="form-group col-md-2">
                                          <label for="pcode">Property Code</label>
                                          <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Property Code">
                                        </div>
                                    </div>       
                                     <!-- Amenities details form -->
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="amendetails" style="font-weight: 700; margin-bottom:-3px ">AMENITIES 
                                          </label>      
                                        </div>
                                      </div>
                                      <div class="form-row" style="margin-left:6px;">
                                        <div class="form-group col-md-6">
                                          <table class="table " name="amendetails" id="amendetails">
                                            <tbody>
                                              <tr>                
                                                <td>
                                                  <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]" class="form-check-input" value="Club House">Club House
                                                  </label>
                                                </td>
                                                <td>
                                                  <label class="form-check-label">
                                                    <input type="checkbox" name="amen[]"  class="form-check-input" value="Swimming Pool">Swimming Pool
                                                  </label>
                                                </td>
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="Jogging and Strolling">Jogging and Strolling Track 
                                                  </label>
                                                </td>
                                              </tr>
                                              <tr>   
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox"name="amen[]" class="form-check-input" value="wifi">wifi
                                                  </label>
                                                </td>
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="Community Hall">Community Hall
                                                  </label>
                                                </td>
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="Power BackUp">Power BackUp
                                                  </label>
                                                  </td>
                                              </tr>
                                              <tr>              
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="Lift">Lift
                                                  </label> 
                                                </td>
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="Security">Security
                                                  </label>
                                                </td>
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="Fire fighting system">Fire fighting system
                                                  </label>
                                                </td>
                                              </tr>
                                              <tr>              
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]" class="form-check-input" value="CCTV">CCTV 
                                                  </label>
                                                </td>
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="Car parking">Car parking
                                                  </label>
                                                </td>
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="Rain water Harvesting">Rain water Harvesting
                                                  </label>
                                                </td>
                                              </tr>
                                              <tr>              
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="kids play area">kids play area
                                                  </label>
                                                </td>
                                                <td>
                                                <label class="form-check-label">
                                                   <input type="checkbox" name="amen[]"  class="form-check-input" value="Gymnasium">Gymnasium
                                                  </label>
                                                </td>
                                                <td>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    <input type="submit" class="btn btn-primary"  name="submit3" value="submit">

                                </form>

                                <div class="form-row">  
                                  <div class="form-group col-md-2">
                                    <input type="submit" class="btn btn-primary" style="margin-top:4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" 
                                    onclick="location.href='project-details.php';">
                                  </div>
                                </div>

                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                      <!-- display data values in table format -->

                            <div class="card mb-4">
                              <div class="card-header"><i class="fas fa-table mr-1"></i>Amenities DataTable</div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered" width="100%"    
                                        cellspacing="0">

                                          <thead>
                                            <tr style="text-align: center;">
                                              <th>ID</th>
                                              <th>Amenities</th>
                                              <th>Property Code</th>
                                              <th style="color:green;">Update</th>
                                              <th style="color:red;">Delete</th>
                                            </tr>
                                          </thead>
                                       

                                          <?php
                                            while ($res =mysqli_fetch_array($result))
                                            {
                                          ?>
                                             <tr>
                                              <td><?php echo $res['id']; ?></td>
                                              <td><?php echo $res['amenities']; ?></td>
                                              <td><?php echo $res['pcode']; ?></td>
                                              <td><button class="btn btn-success"><a href="amenities-update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a>
                                              </button></td>
                                 

                                              <td><button class="btn btn-danger"><a href="amenities-details-fun.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a>
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