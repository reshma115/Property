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
      $configuration_id=$_GET['configuration_id'];	           
      $bedroom=$_POST['bedroom'];
      $bathroom=$_POST['bathroom'];
      $balcony=$_POST['balcony'];
      $conarea=$_POST['conarea'];
      $conrate=$_POST['conrate'];
      $conprice=$_POST['conprice'];
      $pcode=$_POST['pcode'];
			
		$query=	"update configuration_details set bedroom='$bedroom',bathroom='$bathroom',balcony='$balcony',
    conarea='$conarea',conrate='$conrate',conprice='$conprice',pcode='$pcode' where configuration_id=$configuration_id ";

		$result =mysqli_query($mysqli,$query);

		 header("location:config-details.php");

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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Update Confoguration Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->

                                <form action="#" method="POST">  
                                  <div class="form-row">
                                      <div class="form-group col-md-2">
                                        <label for="pcode">Property Code</label>
                                        <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Property Code">
                                      </div>
                                  </div>  
                                    <!-- configuration details form -->
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="condetails" style="font-weight: 700; margin-bottom:-3px ">CONFIGURATION DETAILS
                                      </label>      
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
                                  <input type="submit" class="btn btn-primary" style="margin-top:1.5%;
                                  margin-bottom:1.5%;" name="update" value="submit">
                                  
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