<?php
  include("config.php"); 
   session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
      {
        header("location:admin-login.php");
      }
  $result = mysqli_query($mysqli,"select * from property_image_details order by property_image_id asc");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Property Image Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                  <form action="property-image-details-fun.php" method="POST" enctype="multipart/form-data">


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
                                    
                                      <input type="submit" class="btn btn-primary" style="margin-top:-1.5%;" name="submit7" value="submit">
                                    </form>

                                    <div class="form-row">  
                                      <div class="form-group col-md-2">
                                        <input type="submit" class="btn btn-primary" style="margin-top:4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" 
                                        onclick="location.href='popular-agent.php';">
                                      </div>
                                    </div>

                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                      <!-- display data values in table format -->

                            <div class="card mb-4">
                              <div class="card-header"><i class="fas fa-table mr-1"></i>Property Image DataTable</div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered" width="100%"    
                                        cellspacing="0">

                                        <thead>
                                          <tr style="text-align: center;">
                                            <th width="10%">ID</th>
                                            <th width="15%">Property Video</th>
                                            <th width="15%">360 Paranoma Image</th>
                                            <th colspan="5">Property Image</th>
                                            <th width="5%">Property Code</th>
                                            <th width="15%" style="color:green;">Update</th>
                                            <th width="15%" style="color:red;">Delete</th>
                                          </tr>
                                          <tr style="text-align: center;" >
                                            <th></th> <!-- for video -->
                                            <th></th> <!-- for paranoma Image -->
                                            <th  colspan="1"></th>
                                            <th>Image 1</th>
                                            <th>Image 2</th>
                                            <th>Image 3</th>
                                            <th>Image 4</th>
                                            <th>Image 5</th>
                                            <th colspan="4"></th>
                                          </tr>
                                        </thead>
                                     

                                      <?php

                                      while ($res = mysqli_fetch_array($result))
                                      {

                                      ?>

                                          <tr>
                                            <td><?php echo $res['property_image_id']; ?></td>

                                            <!-- <td><?php// echo $res['builderpic'];?></td> -->

                                            <!-- <td><img src="<?php //echo $res['builderpic']; ?>" height="55" width="55" alt="Image"></td> -->

                                            <td><?php echo $res['video_name'] ?></td>

                                            <td><?php echo '<img src="../../images1/'.$res['paranoma_image'].'"height="55px;" width="55px;" alt="paranoma_image">' ?> </td>  


                                            <td><?php echo '<img src="../../images1/'.$res['image1'].'"height="55px;" width="55px;" alt="Image1">' ?></td> 
                                            <td><?php echo '<img src="../../images1/'.$res['image2'].'"height="55px;" width="55px;" alt="Image2">' ?></td>
                                            <td><?php echo '<img src="../../images1/'.$res['image3'].'"height="55px;" width="55px;" alt="Image3">' ?></td>
                                            <td><?php echo '<img src="../../images1/'.$res['image4'].'"height="55px;" width="55px;" alt="Image4">' ?></td>
                                            <td><?php echo '<img src="../../images1/'.$res['image5'].'"height="55px;" width="55px;" alt="Image5">' ?></td>
                                            <td><?php echo $res['pcode']; ?></td>


                                            <td><button class="btn btn-success"><a href="property-image-update.php?property_image_id=<?php 
                                            echo $res['property_image_id']; ?>" class="text-white">Update</a>
                                            </button></td>
                               
                                            <td><button class="btn btn-danger"><a href="property-image-details-fun.php?property_image_id=<?php 
                                            echo $res['property_image_id']; ?>" class="text-white">Delete</a>
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