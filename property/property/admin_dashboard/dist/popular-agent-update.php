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
    	$popular_agent_id=$_GET['popular_agent_id'];
    	$filename=$_FILES["agentpic"]["name"];

        // $tempname=$_FILES["builderpic"]["tmp_name"];    
        // $folder="images/".$filename;
        // move_uploaded_file($tempname,$folder);

        // $builderpic=$_POST['builderpic'];
        $agentname=$_POST['agentname'];
        $agentinfo=$_POST['agentinfo'];
        $agentarea=$_POST['agentarea'];
        $agentyear=$_POST['agentyear'];
        $agentsale=$_POST['agentsale'];
        $aminsale=$_POST['aminsale'];
        $amaxsale=$_POST['amaxsale'];
        $agentrent=$_POST['agentrent'];
        $aminrent=$_POST['aminrent'];
        $amaxrent=$_POST['amaxrent'];
        $pcode=$_POST['pcode'];

		$query=	"update popular_agent_details set agentpic='$filename',agentname='$agentname', 
    	agentinfo='$agentinfo',agentarea='$agentarea',agentyear='$agentyear',agentsale='$agentsale',aminsale='$aminsale',
    	amaxsale='$amaxsale',agentrent='$agentrent',aminrent='$aminrent',amaxrent='$amaxrent',pcode='$pcode' where popular_agent_id = $popular_agent_id ";
		$result = mysqli_query($mysqli,$query);

    if ($result)
    {
      move_uploaded_file($_FILES["agentpic"]["tmp_name"],"../../images1/".$_FILES["agentpic"]["name"]);
      header("location:popular-agent.php");
    }
    else
    {
		  header("location:popular-agent.php");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Update Agent Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                <form action="#" method="POST" enctype="multipart/form-data">
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="agentdetails" style="font-weight: 700; margin-bottom:-3px ">AGENT DETAILS
                                          </label>      
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="pcode">Property code</label>
                                          <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Property code">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="agentpic">Agent Image</label><br>
                                          <input type="file" name="agentpic" id="agentpic" accept="image/*">
                                        </div>
                                      </div>
                                      
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="agentname">Agent Name</label>
                                          <input type="text" class="form-control" name="agentname" id="agentname" placeholder="Agent Name">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="agentinfo">Agent Office Address</label>
                                          <textarea class="form-control z-depth-1" name="agentinfo" id="agentinfo" rows="3" placeholder="Office Address of Agent...."></textarea> 
                                        </div>
                                      </div>    

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="agentarea">Dealing In</label>
                                          <input type="text" class="form-control" name="agentarea" id="agentarea" placeholder="e.g.,Mumbai,thane">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-2">
                                          <label for="agentyear">operating since</label>
                                          <input type="text" class="form-control" name="agentyear" id="agentyear" placeholder="e.g.,2010">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="agentdetails" style="font-weight: 500; margin-bottom:-3px ">Property Details
                                          </label> 
                                         </div>
                                      </div>

                                      <!-- <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="pcode">For Sale</label>
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
                                      </div> -->

                                      <div class="form-row">
                                        <div class="form-group col-md-2">
                                          <label for="agentsale">For Sale</label>
                                          <input type="text" class="form-control" name="agentsale" id="agentsale" placeholder="e.g.,8">
                                        </div>
                                        <div>
                                          <label for="agentrent">For Rent</label>
                                          <input type="text" class="form-control" name="agentrent" id="agentrent" placeholder="e.g.,6">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="agentprange" style="font-weight: 500; margin-bottom:-3px ">Price Range
                                          </label> 
                                         </div>
                                      </div>

                                        <div class="form-row">
                                          <div class="form-group col-md-2">
                                            <div><label style="margin-bottom:-13px ">For Sale</label>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-row">
                                          <div class="form-group col-md-2">          
                                            <label for="aminsale">Min</label>
                                            <select id="aminsale" class="form-control" name="aminsale" id="aminsale">
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
                                            <label for="amaxsale">Max</label>
                                            <select id="amaxsale" class="form-control" name="amaxsale" id="amaxsale">
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
                                          <div class="form-group col-md-2">
                                            <div><label style="margin-bottom:-13px ">For Rent</label>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-row">
                                          <div class="form-group col-md-2">          
                                            <label for="aminrent">Min</label>
                                            <select id="aminrent" class="form-control" name="aminrent" id="aminrent">
                                                <option selected>Choose...</option>
                                                <option>10k</option>
                                                <option>20k</option>
                                                <option>30k</option>
                                                <option>40k</option>
                                                <option>50k</option>
                                                <option>60k</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-md-2">
                                            <label for="amaxrent">Max</label>
                                            <select id="amaxrent" class="form-control" name="amaxrent" id="amaxrent">
                                              <option selected>Choose...</option>
                                              <option>10Lca</option>
                                                <option>20Lac</option>
                                                <option>30Lac</option>
                                                <option>40Lac</option>
                                                <option>50Lac</option>
                                                <option>60Lac</option>
                                            </select>
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