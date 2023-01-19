<?php
  include("config.php"); 
  session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
      {
        header("location:admin-login.php");
      }
  $result = mysqli_query($mysqli,"select * from project_details order by project_id asc");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Project Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->

                                <form action="project-details-fun.php" method="POST">
														      <div class="form-row">
														        <div class="form-group col-md-2">
														          <label for="pcode">Property Code</label>
														          <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Property Code">
														        </div>
														      </div>         
														      <div class="form-row">
														        <div class="form-group col-md-6">
														          <label for="dname">Developer Name</label>
														          <input type="text" class="form-control" name="dname" id="dname" placeholder="Developed by">
														        </div>
														      </div>
														      <div class="form-row">
														        <div class="form-group col-md-6">
														          <label for="prange" style=" margin-bottom:-10px ;">Price Range
														          </label>      
														        </div>      
														      </div>
														        
														      <div class="form-row">
														        <div class="form-group col-md-2">
														          <label for="pminrange">Min</label>
														          <select id="pminrange" class="form-control" name="pminrange" id="pminrange">
														              <option selected>Choose...</option>
														              <option>10Lca</option>
														              <option>20Lac</option>
														              <option>30Lac</option>
														              <option>40Lac</option>
														              <option>50Lac</option>
														              <option>60Lac</option>
														          </select>
														        </div>
														        <div class="form-group col-md-2">
														          <label for="pmaxrange">Max</label>
														          <select id="pmaxrange" class="form-control" name="pmaxrange" id="pmaxrange">
														            <option selected>Choose...</option>
														            <option>70Lac</option>
														            <option>90Lac</option>
														            <option>1Cr</option>
														            <option>5Cr</option>
														            <option>10Cr</option>
														            <option>20Cr</option>
														            <option>30Cr</option>
														          </select>
														        </div>
														      </div>
														      <div class="form-row">
														        <div class="form-group col-md-6">
														          <label for="pcon">Configuration</label>
														          <input type="text" class="form-control" name="pcon" id="pcon" placeholder="e.g.,1,2,3 BHK">
														        </div>
														      </div>
														      <div class="form-row">
														        <div class="form-group col-md-6">
														          <label for="ptower">Tower & Units Details</label>
														          <input type="text" class="form-control" name="ptower" id="ptower" placeholder="e.g.,7 Towers and 25 Units">
														        </div>
														      </div>


														    <input type="submit" class="btn btn-primary" style="margin-top:1.5%;"
														   name="submit4" value="submit">
                                </form>

                                <div class="form-row">  
									<div class="form-group col-md-2">
									<input type="submit" class="btn btn-primary" style="margin-top:4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" 
										onclick="location.href='property-image-details.php';">
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
																              <th>Developer name</th>
																              <th colspan="2">Price</th>              
																              <th>configuration</th>
																              <th>Tower & Unit Details</th> 
																              <th>Property Code</th>             
																              <th style="color:green;">Update</th>
																              <th style="color:red;">Delete</th>
																                <tr style="text-align: center;">
																                  <th colspan="2" ></th>
																                  <th>Min</th>
																                  <th>Max</th>
																                <th colspan="5" ></th>
																                </tr>
																            </tr>
																          </thead>


																          <?php
																		        while ($res = mysqli_fetch_array($result))
																		        {
																		      ?>

																		      <tr>
															              <td><?php echo $res['project_id']; ?></td>
															              <td><?php echo $res['dname']; ?></td>
															              <td><?php echo $res['pminrange']; ?></td>
															              <td><?php echo $res['pmaxrange']; ?></td>
															              <td><?php echo $res['pcon']; ?></td>
															              <td><?php echo $res['ptower']; ?></td>
															              <td><?php echo $res['pcode']; ?></td>
															             
															              

															              <td><button class="btn btn-success"><a href="project-update.php?project_id=<?php echo $res['project_id']; ?>" class="text-white">Update</a>
															              </button></td>
															 

															              <td><button class="btn btn-danger"><a href="project-details-fun.php?project_id=<?php echo $res['project_id']; ?>" class="text-white">Delete</a>
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