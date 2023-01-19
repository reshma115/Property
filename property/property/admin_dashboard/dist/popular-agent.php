<?php
  include("config.php"); 
    session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
      {
        header("location:admin-login.php");
      }
  $result = mysqli_query($mysqli,"select * from popular_agent_details order by popular_agent_id asc");
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Agent Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                                <div class="card-body">

                                <!-- have started to copy from here -->
                                  <form action="popular-agent-details-fun.php" method="POST" enctype="multipart/form-data">

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
                                     
                                    <input type="submit" class="btn btn-primary" style="margin-top:1.5%;" name="submit6" value="submit">
                                  </form>

                                   <div class="form-row">  
                                    <div class="form-group col-md-2">
                                      <input type="submit" class="btn btn-primary" style="margin-top:4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" 
                                      onclick="location.href='builder-details.php';">
                                    </div>
                                  </div>

                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                      <!-- display data values in table format -->

                            <div class="card mb-4">
                              <div class="card-header"><i class="fas fa-table mr-1"></i>Agent DataTable</div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered" width="100%"    
                                        cellspacing="0">

                                        <thead>
                                          <tr style="text-align: center;">
                                            <th>ID</th>
                                            <th>Agent Image</th>
                                            <th>Agent Name</th>
                                            <th>Agent Office Address</th>
                                            <th>Properties for sale</th>
                                            <th colspan="2">Price Range For sale</th>
                                            <th>Operating year</th>
                                            <th>Properties for Rent</th>
                                            <th colspan="2">Price Range For Rent </th>
                                            <th>Dealing city</th>
                                            <th>Property Code</th>
                                            <th style="color:green;">Update</th>
                                            <th style="color:red;">Delete</th> 
                                              <tr style="text-align: center;">
                                                <th colspan="5"></th>
                                                <th>Min</th>
                                                <th>Max</th>
                                                <th colspan="1"></th>
                                               
                                              
                                                <th colspan="1"></th>
                                                <th>Min</th>
                                                <th>Max</th>
                                                <th colspan="1"></th>
                                              </tr>                         
                                            </tr>
                                        </thead>
                                          <?php

                                            while ($res = mysqli_fetch_array($result))
                                             {

                                          ?>

                                              <tr>
                                                <td><?php echo $res['popular_agent_id']; ?></td>

                                                <!-- <td><?php// echo $res['builderpic'];?></td> -->

                                                <!-- <td><img src="<?php //echo $res['builderpic']; ?>" height="55" width="55" alt="Image"></td> -->

                                                <td><?php echo '<img src="../../images1/'.$res['agentpic'].'"height="55px;" width="55px;" alt="Image">' ?></td> 
                                                <td><?php echo $res['agentname']; ?></td>
                                                <td><?php echo $res['agentinfo']; ?></td>
                                                <td><?php echo $res['agentsale']; ?></td>
                                                <td><?php echo $res['aminsale']; ?></td>
                                                <td><?php echo $res['amaxsale']; ?></td>
                                                <td><?php echo $res['agentyear']; ?></td>
                                                <td><?php echo $res['agentrent']; ?></td>
                                                <td><?php echo $res['aminrent']; ?></td>
                                                <td><?php echo $res['amaxrent']; ?></td> 
                                                <td><?php echo $res['agentarea']; ?></td>
                                                <td><?php echo $res['pcode']; ?></td>

                                                

                                                <td><button class="btn btn-success"><a href="popular-agent-update.php?popular_agent_id=<?php 
                                                echo $res['popular_agent_id']; ?>" class="text-white">Update</a>
                                                </button></td>
                                   

                                                <td><button class="btn btn-danger"><a href="popular-agent-details-fun.php?popular_agent_id=<?php 
                                                echo $res['popular_agent_id']; ?>" class="text-white">Delete</a>
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