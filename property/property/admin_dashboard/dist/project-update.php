<?php

 		
 	include("config.php"); 

  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }  

    if (isset($_POST['update']))
    {  
      $project_id=$_GET['project_id'];	    
      $dname=$_POST['dname'];
      $pminrange=$_POST['pminrange'];
      $pmaxrange=$_POST['pmaxrange'];
      $pcon=$_POST['pcon'];
      $ptower=$_POST['ptower'];
      $pcode=$_POST['pcode'];
      
		$query=	"update project_details set dname='$dname',pminrange='$pminrange',pmaxrange='$pmaxrange',
    	pcon='$pcon',ptower='$ptower',pcode='$pcode' where project_id = '$project_id' ";

		$result =mysqli_query($mysqli,$query);
	    if ($result)
	    {
	        header("location:project-details.php");
          // echo "success";
	    }    
	    else{
	        echo "failed";
	    }
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">update Project Details</h4>
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