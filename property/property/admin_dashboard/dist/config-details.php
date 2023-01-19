<?php
  include("config.php"); 

  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }

  $result = mysqli_query($mysqli,"select * from configuration_details order by configuration_id asc");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Configuration Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->

                                <form action="config-details-fun.php" method="POST">
                                  <div class="form-row">
                                    <div class="form-group col-md-2">
                                      <label for="pcode">Property Code</label>
                                      <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Property Code">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="condetails" style="font-weight: 500; margin-bottom:-3px ">Configuration Type
                                      </label>      
                                    </div>      
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-2">
                                      <label for="bedroom">Bedroom</label>
                                      <select id="bedroom" class="form-control" name="bedroom" id="bedroom">
                                          <option selected>Choose...</option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                          <option>6</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label for="bathroom">Bathroom</label>
                                      <select id="bathroom" class="form-control" name="bathroom" id="bathroom">
                                        <option selected>Choose...</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label for="balcony">Balcony</label>
                                      <select id="balcony" class="form-control" name="balcony" id="balcony">
                                        <option selected>Choose...</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-2">
                                      <label for="conarea">Area</label>
                                      <input type="text" class="form-control" name="conarea" id="conarea" placeholder="in sqft">
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label for="conrate">Rate</label>
                                      <input type="text" class="form-control" name="conrate" id="conrate" placeholder="per sqft">
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label for="conprice">Price</label>
                                      <input type="text" class="form-control" name="conprice" id="conprice" placeholder="in Rs">
                                    </div>
                                  </div>
                                  <input type="submit" class="btn btn-primary" style="margin-top:1.5%;" name="submit2" value="submit">

                                </form>

                                <div class="form-row">  
                                  <div class="form-group col-md-2">
                                    <input type="submit" class="btn btn-primary" style="margin-top:4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" 
                                    onclick="location.href='amenities-details.php';">
                                  </div>
                                </div>

                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                      <!-- display data values in table format -->

                            <div class="card mb-4">
                              <div class="card-header"><i class="fas fa-table mr-1"></i>Configuration DataTable</div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered" width="100%"    
                                        cellspacing="0">

                                          <thead>
                                            <tr style="text-align: center;">
                                              <th>ID</th>
                                              <th>Bedroom</th>
                                              <th>Bathroom</th>
                                              <th>Balcony</th>
                                              <th>Area in sqft</th>
                                              <th>Rate per sqft</th>
                                              <th>Price</th>
                                              <th>Property Code</th>
                                              <th style="color:green;">Update</th>
                                              <th style="color:red;">Delete</th>
                                            </tr>
                                          </thead>
                                       

                                        <?php

                                        while ($res = mysqli_fetch_array($result))
                                        {
                                        ?>

                                            <tr>
                                              <td><?php echo $res['configuration_id']; ?></td>
                                              <td><?php echo $res['bedroom']; ?></td>
                                              <td><?php echo $res['bathroom']; ?></td>
                                              <td><?php echo $res['balcony']; ?></td>
                                              <td><?php echo $res['conarea']; ?></td>
                                              <td><?php echo $res['conrate']; ?></td>
                                              <td><?php echo $res['conprice']; ?></td>
                                              <td><?php echo $res['pcode']; ?></td>
                                              

                                              <td><button class="btn btn-success"><a href="config-update.php?configuration_id=<?php echo 
                                              $res['configuration_id']; ?>" class="text-white">Update</a>
                                              </button></td>
                                 

                                              <td><button class="btn btn-danger"><a href="config-details-fun.php?configuration_id=<?php echo $res['configuration_id']; ?>" class="text-white">Delete</a>
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