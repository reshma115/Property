 <?php
  include("config.php"); 
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }

  $result=mysqli_query($mysqli,"select * from property_details order by id asc");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Property Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                <form action="property-details-fun.php" method="POST">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="pname">Property Name</label>
                                    <input type="text" class="form-control" name="pname" id="pname" placeholder="Property Name">
                                  </div>
                                </div>

                                <div class="form-row">
                                  <!-- <div class="form-group col-md-6">
                                    <label for="pname">Property Name</label>
                                    <input type="text" class="form-control" name="pname" id="pname" placeholder="Property Name">
                                  </div> -->
                                  <div class="form-group col-md-5" style="font-weight: 300; ">
                                    <label for="address">Address</label>
                                    <textarea class="form-control z-depth-1" name="address" id="address" rows="3" placeholder="Your Address"></textarea>
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                      <label for="pcode">Property Code</label>
                                      <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Property Code">
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="location">Location</label>
                                      <input type="text" class="form-control" name="location" id="location" placeholder="your city name">
                                  </div>
                                  <div class="form-group col-md-2">
                                      <label for="status">Status</label>
                                      <input type="text" class="form-control" name="status" id="status" placeholder="your city name">
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                    <label for="transaction">Transaction Type</label>
                                    <select id="transaction" class="form-control" name="transaction" id="transaction">
                                        <option selected>Choose...</option>
                                        <option>New Property</option>
                                        <option>Resale</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="furnished">Furnished Status</label>
                                    <select id="furnished" class="form-control" name="furnished" id="furnished">
                                      <option selected>Choose...</option>
                                      <option>Furnished</option>
                                      <option>semi-furnished</option>
                                      <option>Unfurnished</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="ownership">Type of Ownership</label>
                                    <select id="ownership" class="form-control" name="ownership" id="ownership">
                                      <option selected>Choose...</option>
                                      <option>Freehold</option>
                                      <option>Leasehold</option>
                                      <option>Co-oprative</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group col-md-2">
                                    <label for="sarea">Super area</label>
                                    <input type="text" class="form-control" name="sarea" id="sarea" placeholder="in sqft">
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="carea">Carpet area</label>
                                    <input type="text" class="form-control" name="carea" id="carea" placeholder="in sqft">
                                  </div>
                                    <!-- <div class="form-group col-md-2">
                                      <label for="transaction">Transaction Type</label>
                                      <input type="text" class="form-control" name="transaction" id="transaction" placeholder=" New property..">
                                    </div> -->
                                </div>
                              
                                <div class="form-row">  
                                  <div class="form-group col-md-2">
                                    <label for="price">Price Breakup</label>
                                    <input type="text" class="form-control" name="price" id="price" placeholder="price in Rs">
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="bamount">Booking Amount</label>
                                    <input type="text" class="form-control" name="bamount" id="bamount" placeholder="price in Rs">
                                  </div>
                                </div>
                              
                                <!-- <style>
                                  myLn {
                                    display: block;
                                    width: 50%;
                                    overflow: hidden;
                                    white-space: nowrap;
                                    margin-bottom:10px;
                                    
                                  }
                                </style> -->
                                <!-- <myLn>
                                  <u> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                                  </u>
                                </myLn> -->
                               
                                <input type="submit" class="btn btn-primary" style="margin-top:1.5%" name="submit1" value="submit"> 
                              </form>

                              <div class="form-row">  
                                <div class="form-group col-md-2">
                                  <input type="submit" class="btn btn-primary" style="margin-top:4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" onclick="location.href='config-details.php';">
                                </div>
                              </div>

                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                      <!-- display data values in table format -->

                            <div class="card mb-4">
                              <div class="card-header"><i class="fas fa-table mr-1"></i>Property DataTable</div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered" width="100%"    
                                        cellspacing="0">

                                        <thead>
                                          <tr style="text-align: center;">
                                            <th>ID</th>
                                            <th>Property name</th>
                                            <th>Address</th>
                                            <th>Property code</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>Transaction type</th>
                                            <th>Furnished Status</th>
                                            <th>Type of ownership</th>
                                            <th>Super area</th>
                                            <th>Carpet area</th>
                                            <th>Price Breakup</th>
                                            <th>Booking Amount</th>
                                            <th style="color:green;">Update</th>
                                            <th style="color:red;">Delete</th>
                                          </tr>
                                        </thead>

                                        <?php

                                          while($res=mysqli_fetch_array($result))
                                          {

                                        ?>
                                            <tr>
                                              <td><?php echo $res['id']; ?></td>
                                              <td><?php echo $res['pname']; ?></td>
                                              <td><?php echo $res['address']; ?></td>
                                              <td><?php echo $res['pcode']; ?></td>
                                              <td><?php echo $res['location']; ?></td>
                                              <td><?php echo $res['status']; ?></td>
                                              <td><?php echo $res['transaction']; ?></td>
                                              <td><?php echo $res['furnished']; ?></td>
                                              <td><?php echo $res['ownership']; ?></td>
                                              <td><?php echo $res['sarea']; ?></td>
                                              <td><?php echo $res['carea']; ?></td>
                                              <td><?php echo $res['price']; ?></td>
                                              <td><?php echo $res['bamount']; ?></td>


                                              <td><button class="btn btn-success"><a href="property-update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a>
                                              </button></td>


                                              <td><button class="btn btn-danger"><a href="property-details-fun.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a>
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