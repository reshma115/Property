<?php
  include("config.php"); 
  session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
      {
        header("location:admin-login.php");
      }
  $result = mysqli_query($mysqli,"select * from project_details order by project_id asc");
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
<head>
  <title>project details</title>
</head>
<body>

<form action="project-details-fun.php" method="POST">
<!-- <fieldset style=" border: 2px solid #000000; margin:50px 100px 50px 100px; padding-bottom:30px; padding-left:70px; padding-right:-200px;"> -->
  <?php
  include("admin-nav.php");
  ?>
  <!-- END of nav -->

  <div class="container" style=" margin-top: 40px; margin-left:30%; " >        
         <!-- Project details form -->
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="projectdetails" style="font-weight: 700; margin-bottom:-3px ">PROJECT DETAILS
          </label>      
        </div>
      </div>
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

    </div> <!-- first div -->
  <!-- </fieldset> -->
  </form>

  
<div class="container" style=" margin-left:30%; " >
  <div class="form-row">  
    <div class="form-group col-md-2">
      <input type="submit" class="btn btn-primary" style="margin-top:-4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" 
      onclick="location.href='property-image-details.php';">
    </div>
  </div>
</div>


<!-- display data values in table format -->

  
  <div>
      <div class="form-row" style="margin-left:10%; margin-right:10%;">
        <table class="table table-striped table-bordered">
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
            <!-- echo '<tr>';
            echo '<td>'.$res['id'].'</td>';
            echo '<td>'.$res['dname'].'</td>';
            echo '<td>'.$res['pminrange'].'</td>';
            echo '<td>'.$res['pmaxrange'].'</td>';
            echo '<td>'.$res['pcon'].'</td>';
            echo '<td>'.$res['ptower'].'</td>';
            
            echo '<td>'.'<input type="submit" name="update"  value="Update" class="btn btn-success update" id="'.$res["id"].'">
            '.'</td>';
            echo '<td>'.'<input type="submit" name="delete"  value="Delete"  class="btn btn-danger delete" id="'.$res["id"].'">
            '.'</td>';      
            echo '</tr>'; -->


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
</body>
</html>
