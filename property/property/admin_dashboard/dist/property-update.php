<?php
  
  include("config.php"); 

  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }  

  /*update functionality*/

  if (isset($_POST['update']))
    {
      $id=$_GET['id'];  
      $pname=$_POST['pname'];
      $address=$_POST['address'];
      $pcode=$_POST['pcode'];
      $location=$_POST['location'];
      $status=$_POST['status'];
      $transaction=$_POST['transaction'];
      $furnished=$_POST['furnished'];
      $ownership=$_POST['ownership'];
      $sarea=$_POST['sarea'];
      $carea=$_POST['carea'];
      $price=$_POST['price'];
      $bamount=$_POST['bamount'];
      
    $query= "update property_details set id=$id, pname='$pname',address='$address',pcode='$pcode',location='$location',status='$status',transaction='$transaction',furnished='$furnished',ownership='$ownership',sarea='$sarea',carea='$carea',price='$price',bamount='$bamount' where id=$id ";

    $result =mysqli_query($mysqli,$query);

     header("location:property-details.php");

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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Update Property Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                 <form action="" method="POST">
                                      
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="pname">Property Name</label>
                                          <input type="text" class="form-control" name="pname" id="pname" placeholder="Property Name">
                                        </div>
                                      </div>

                                      <div class="form-row">
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
                                     
                                      <input type="submit" class="btn btn-primary" style="margin-top:1.5%" name="update" value="submit">
                                   
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