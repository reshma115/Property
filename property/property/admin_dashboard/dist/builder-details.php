<?php
  include("config.php"); 
    session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
      {
        header("location:admin-login.php");
      }
  $result = mysqli_query($mysqli,"select * from builder_details order by builder_id asc");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Builder Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                <form action="builder-details-fun.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                          <label for="pcode">Property Code</label>
                                          <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Property Code">
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="builderpic">Builder logo</label><br>
                                        <input type="file" name="builderpic" id="builderpic" accept="image/*">
                                      </div>
                                    </div>
                                    
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="buildername">Builder Name</label>
                                        <input type="text" class="form-control" name="buildername" id="buildername" placeholder="Builder Name">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="builderinfo">Builder information</label>
                                        <textarea class="form-control z-depth-1" name="builderinfo" id="builderinfo" rows="3"placeholder="Information about builder...."></textarea> 
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="builderdetails" style="font-weight: 500; margin-bottom:-3px ">Builder Project Details
                                        </label>      
                                      </div>
                                    </div>


                                    <div class="form-row">
                                      <div class="form-group col-md-2">
                                        <label for="bcomplete">Complete</label>
                                        <input type="text" class="form-control" name="bcomplete" id="bcomplete" placeholder="e.g.,1,2">
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label for="bongoing">Ongoing</label>
                                        <input type="text" class="form-control" name="bongoing" id="bongoing" placeholder="e.g.,1,2">
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label for="bupcoming">Upcoming</label>
                                        <input type="text" class="form-control" name="bupcoming" id="bupcoming" placeholder="e.g.,1,2">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-2">
                                        <label for="builderyear">Year since operating</label>
                                        <input type="text" class="form-control" name="builderyear" id="builderyear" placeholder="e.g.,1970">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-2">
                                        <label for="buildercity">Operating cities</label>
                                        <input type="text" class="form-control" name="buildercity" id="buildercity" placeholder="e.g.,Mumbai">
                                      </div>
                                    </div>
                                    

                                    <input type="submit" class="btn btn-primary" style="margin-top:1.5%;  padding-left: 20px; padding-right:20px;" name="submit4" value="submit">

                                </form>

                                  <div class="form-row">  
                                    <div class="form-group col-md-2">
                                      <input type="submit" class="btn btn-primary" style="margin-top:4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Back to first Page" 
                                      onclick="location.href='property-details.php';">
                                    </div>
                                  </div>


                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                      <!-- display data values in table format -->

                            <div class="card mb-4">
                              <div class="card-header"><i class="fas fa-table mr-1"></i>Builder DataTable</div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered" width="100%"    
                                        cellspacing="0">
                                          <thead>
                                            <tr style="text-align: center;">
                                              <th>ID</th>
                                              <th>Builder logo</th>
                                              <th>Builder Name</th>
                                              <th>Builder info</th>
                                              <th colspan="3" >Builder Project Details</th>
                                              <th>Operating year</th>
                                              <th>Operating city</th>
                                              <th>Proprty Code</th>
                                              <th style="color:green;">Update</th>
                                              <th style="color:red;">Delete</th>
                                                 <tr style="text-align: center;">
                                                  <th colspan="4" ></th>
                                                  <th>Complete</th>
                                                  <th>Ongoing</th>
                                                  <th>Upcoming</th>
                                                  <th colspan="4" ></th>
                                                </tr>
                                            </tr>
                                          </thead>

                                          <?php

                                          while ($res = mysqli_fetch_array($result))
                                          {

                                          ?>

                                            <tr>
                                              <td><?php echo $res['builder_id']; ?></td>

                                              <!-- <td><?php// echo $res['builderpic'];?></td> -->

                                              <!-- <td><img src="<?php //echo $res['builderpic']; ?>" height="55" width="55" alt="Image"></td> -->

                                              <td><?php echo '<img src="../../images1/'.$res['builderpic'].'"height="55px;" width="55px;" alt="Image">' ?></td> 
                                              <td><?php echo $res['buildername']; ?></td>
                                              <td><?php echo $res['builderinfo']; ?></td>
                                              <td><?php echo $res['bcomplete']; ?></td>
                                              <td><?php echo $res['bongoing']; ?></td>
                                              <td><?php echo $res['bupcoming']; ?></td>
                                              <td><?php echo $res['builderyear']; ?></td>
                                              <td><?php echo $res['buildercity']; ?></td>
                                              <td><?php echo $res['pcode']; ?></td>
                                              

                                              <td><button class="btn btn-success"><a href="builder-update.php?builder_id=<?php 
                                              echo $res['builder_id']; ?>" class="text-white">Update</a>
                                              </button></td>
                                 

                                              <td><button class="btn btn-danger"><a href="builder-details-fun.php?builder_id=<?php 
                                              echo $res['builder_id']; ?>" class="text-white">Delete</a>
                                              </button></td>
                                          </tr>


                                      <?php

                                        }

                                        ?>

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