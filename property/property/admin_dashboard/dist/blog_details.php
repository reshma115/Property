 <?php
  include("config.php"); 
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }

  // $result=mysqli_query($mysqli,"select * from blog_details order by id asc");

   $result=mysqli_query($mysqli,"select * from blog_details");
?>
<head>
  <script src="plugin/ckeditor/ckeditor.js"></script>
</head>
  
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
                        <h4 class="mt-3" style="margin-bottom: 20px;">Blog Details</h4>
                            <div class="card mb-4">
                              <div class="card-header">Fill Details</div>
                              <div class="card-body">

                                <!-- have started to copy from here -->
                                <form action="blog_details_fun.php" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="blogname">Article Name</label>
                                    <input type="text" class="form-control" name="blogname" id="blogname" placeholder="Topic Name">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-5">
                                      <label for="blogtype">Blog Type</label>
                                      <input type="text" class="form-control" name="blogtype" id="blogtype" placeholder="Ex., Real Estate ,Investment..">
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group col-md-5">
                                      <label for="blogername">Blogger Name</label>
                                      <input type="text" class="form-control" name="blogername" id="blogername" placeholder="Posted by..">
                                  </div>
                                </div>
<!-- 
                                <div class="form-row">
                                  <div class="form-group col-md-5">
                                    <label for="blogsmalldesc">Small description</label>
                                    <textarea class="form-control z-depth-1" name="blogsmalldesc" id="blogsmalldesc" rows="2" placeholder="brief Here about topic.."></textarea>
                                  </div>
                                </div> -->

                                 <div class="form-row">
                                  <div class="form-group col-md-5">
                                      <label for="blogimage">Blog Image</label><br>
                                      <input type="file" name="blogimage" id="blogimage" accept="image/*" multiple />
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group col-md-11">
                                    <label for="blogdesc">Description</label>
                                    <textarea class="ckeditor" name="blogdesc" id="blogdesc" rows="30" placeholder="Write Here.." style="width: 100%"></textarea>
                                  </div>
                                </div>



                               
                                <input type="submit" class="btn btn-primary" style="margin-top:1.5%" 
                                name="blog_submit" value="submit"> 
                              </form>
                             </div> <!-- end of card-body -->
                            </div> <!-- end of card mb-4 -->

                      <!-- display data values in table format -->

                            <div class="card mb-4">
                              <div class="card-header"><i class="fas fa-table mr-1"></i>Blog DataTable</div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered" width="100%"    
                                        cellspacing="0">

                                        <thead>
                                          <tr style="text-align: center;">
                                            <th width="1%">ID</th>
                                            <th width="5%">Article name</th>
                                            <th width="4%">Blogger Name</th>
                                            <th width="2%">Blog Type</th>
                                            <th width="3%">Blog Image</th>
                                            <th width="85%">Description</th>
                                            <th>Date</th>
                                            <!--<th>Time</th> -->
                                            <th style="color:green;">Update</th>
                                            <th style="color:red;">Delete</th>
                                          </tr>
                                        </thead>

                                        <?php

                                          while($res=mysqli_fetch_array($result))
                                          {

                                        ?>
                                            <tr>
                                              <td><?php echo $res['blog_id']; ?></td>
                                              <td><?php echo $res['blog_name']; ?></td>
                                              <td><?php echo $res['blog_post_by']; ?></td>
                                              <td><?php echo $res['blogtype']; ?></td>
                                             <!--  <td><?php echo $res['blog_image']; ?></td> -->

                                             <td><?php echo '<img src="../../images1/'.$res['blog_image'].'"height="55px;" width="55px;" alt="blog_image">' ?> </td>  
                                              <td><?php echo $res['blog_description']; ?></td>

                                              <td><?php echo $res['blog_date']; ?></td>
                                            
                                              <td><button class="btn btn-success"><a href="blog_update.php?blog_id=<?php echo $res['blog_id']; ?>" class="text-white">Update</a>
                                              </button></td>


                                              <td><button class="btn btn-danger"><a href="blog_details_fun.php?blog_id=<?php echo $res['blog_id']; ?>" class="text-white">Delete</a>
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
