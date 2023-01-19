<?php 
  include("config.php");

  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }
  $result = mysqli_query($mysqli,"select * from client_testimonial order by testimonial_id asc");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Client Testimonial</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->

                                <form action="client-testimonial-fun.php" method="POST" enctype="multipart/form-data">
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="pdetails" style="font-weight: 700;  margin-bottom:-3px ">Client-Testimonial</label>      
                                    </div>
                                  </div>

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
                                
                                  <input type="submit" class="btn btn-primary" style="margin-top:1.5%" name="testimonial-submit" value="submit"> 

                              </form>
  <!-- <div class="form-row">  
    <div class="form-group col-md-2">
      <input type="submit" class="btn btn-primary" style="margin-top:4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" onclick="location.href='config-details.php';">
    </div>
  </div> -->
                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                      <!-- display data values in table format -->

                            <div class="card mb-4">
                              <div class="card-header"><i class="fas fa-table mr-1"></i>Client Testimonial</div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered" width="100%"    
                                        cellspacing="0">
                                        <thead>
                                            <tr style="text-align: center;">
                                              <th>ID</th>
                                              <th>Client Name</th>
                                              <th>Occupation</th>
                                              <th>Client Image</th> 
                                              <th>Client Testimonial</th>
                                              <th>Update</th> 
                                              <th>Delete</th>                  
                                            </tr> 
                                          </thead>
                                       

                                        <?php

                                        while ($res = mysqli_fetch_array($result))
                                        {

                                        ?>

                                            <tr>

                                              <td><?php echo $res['testimonial_id']; ?></td>
                                              <td><?php echo $res['testimonial_name']; ?></td>
                                              <td><?php echo $res['testimonial_occupation']; ?></td>
                                              <td><?php echo '<img src="../../images1/'.$res['testimonial_image'].'"height="55px;" width="55px;" alt="Image">' ?></td>
                                              <td><?php echo $res['testimonial']; ?></td>
                                              

                                              <td><button class="btn btn-success"><a href="client-testimonial-update.php?testimonial_id=<?php 
                                              echo $res['testimonial_id']; ?>" class="text-white">Update</a>
                                              </button></td>
                                 

                                              <td><button class="btn btn-danger"><a href="client-testimonial-fun.php?testimonial_id=<?php 
                                              echo $res['testimonial_id']; ?>" class="text-white">Delete</a>
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