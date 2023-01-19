<?php
  include("config.php"); 
   session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
      {
        header("location:admin-login.php");
      }
  $result = mysqli_query($mysqli,"select * from sole_selling order by sole_id asc");
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
                      <h4 class="mt-3" style="margin-bottom: 20px;">Sole-Selling Details</h4>


                      <!-- display data values in table format -->




                            <div class="card mb-4">
                              <div class="card-header"><i class="fas fa-table mr-1"></i> Sole-Selling DataTable</div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered" width="100%"    
                                        cellspacing="0">

                                        <thead>
                                          <tr style="text-align: center; ">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Phone No</th>
                                            <th>Location</th>
                                            <th>Project Name</th>
                                            <th>Company Name Card</th>
                                            <th>Company Website</th>
                                            <th>Requirments</th>
                                           <!--  <th style="color:red;">Delete</th> -->
                                          </tr>
                                        </thead>
                                     
<!-- <?php

    $sole_id=$_GET['sole_id'];
    //echo $id;
    //$query=" DELETE FROM `sole_selling` WHERE sole_id = $sole_id";
    mysqli_query($mysqli,$query);
    //header("location:sole-selling-display.php");
?>  -->

                                      <?php

                                      while ($res = mysqli_fetch_array($result))
                                      {

                                      ?>

                                        <tr>
                                            <td><?php echo $res['sole_id']; ?></td>
                                            <td><?php echo $res['solename'] ?></td>
                                            <td><?php echo $res['soleemail'] ?></td>
                                             <td><?php echo $res['solemobile'] ?></td>
                                            <td><?php echo $res['solephone'] ?></td>
                                            <td><?php echo $res['soleloc'] ?></td>
                                           
                                            <td><?php echo $res['soleproject'] ?></td>
                                            <td><?php echo $res['solecompany'] ?></td>
                                            <td><?php echo $res['solewebsite'] ?></td>
                                            <td><?php echo $res['solecomment'] ?></td>

                                            <!--  -->

                                            <!-- <td><button class="btn btn-danger">
                                              <a href="sole-selling-display.php?sole_id=<?php 
                                            //echo $res['sole_id']; ?>" class="text-white">Delete</a>
                                            </button></td> -->

                                        
                                        </tr>



                                      <?php } ?>
                                      <!-- <a href="../../sole-selling.php">here</a> -->

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

