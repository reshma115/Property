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
      $builder_id=$_GET['builder_id'];  

      // $builderpic=$_FILES['builderpic']['name'];
      // $filename="images/$builderpic";
      // $builderpic=$_POST['builderpic'];

      $filename=$_FILES["builderpic"]["name"];
      $buildername=$_POST['buildername'];
      $builderinfo=$_POST['builderinfo'];
      $bcomplete=$_POST['bcomplete'];
      $bongoing=$_POST['bongoing'];
      $bupcoming=$_POST['bupcoming'];
      $builderyear=$_POST['builderyear'];
      $buildercity=$_POST['buildercity'];
      $pcode=$_POST['pcode'];

		$query=	"update builder_details set builderpic='$filename',buildername='$buildername', 
    builderinfo='$builderinfo',bcomplete='$bcomplete',bongoing='$bongoing',bupcoming='$bupcoming',builderyear='$builderyear',buildercity='$buildercity',pcode='$pcode' where builder_id = $builder_id ";
		$result = mysqli_query($mysqli,$query);

    if ($result)
    {
      move_uploaded_file($_FILES["builderpic"]["tmp_name"],"../../images1/".$_FILES["builderpic"]["name"]);
      header("location:builder-details.php");
    }
    else
    {
		  header("location:builder-details.php");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">update Builder Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                <form action="#" method="POST" enctype="multipart/form-data">

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
                                    

                                    <input type="submit" class="btn btn-primary" style="margin-top:1.5%;" name="update" value="submit">
                                   

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