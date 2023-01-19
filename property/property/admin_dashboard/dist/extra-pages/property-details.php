<?php
  include("config.php"); 

  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
  {
    header("location:admin-login.php");
  }

  $result=mysqli_query($mysqli,"select * from property_details order by id asc");
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
<head>
  <title>single property</title>
</head>
<body>

<form action="property-details-fun.php" method="POST">
<!-- <fieldset style=" border: 2px solid #000000; margin:50px 100px 50px 100px; padding-bottom:30px; padding-left:70px; padding-right:-200px;"> -->


  <?php
  include("admin-nav.php");
  ?>

  
    <!-- END nav -->


  <div class="container" style=" margin-top: 20px; margin-left:30%; " >
        <!-- property details form -->


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="pdetails" style="font-weight: 700;  margin-bottom:-3px ">PROPERTY DETAILS</label>      
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="pname">Property Name</label>
        <input type="text" class="form-control" name="pname" id="pname" placeholder="Property Name">
      </div>
    </div>

    <div class="form-row">
      <!-- <div class="form-group col-md-6">
        <label for="pname">Property Name</label>
        <input type="text" class="form-control" name="pname" id="pname" placeholder="Property Name">
      </div> -->
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
        <!-- <div class="form-group col-md-2">
          <label for="transaction">Transaction Type</label>
          <input type="text" class="form-control" name="transaction" id="transaction" placeholder=" New property..">
        </div> -->
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
  
    <!-- <style>
      myLn {
        display: block;
        width: 50%;
        overflow: hidden;
        white-space: nowrap;
        margin-bottom:10px;
        
      }
    </style> -->
    <!-- <myLn>
      <u> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
      </u>
    </myLn> -->
   
    <input type="submit" class="btn btn-primary" style="margin-top:1.5%" name="submit1" value="submit"> 
</div>
 <!--  </div> -->
  <!-- </fieldset> -->
  </form>

<div class="container" style=" margin-top:20px; margin-left:30%; " >
  <div class="form-row">  
    <div class="form-group col-md-2">
      <input type="submit" class="btn btn-primary" style="margin-top:-4px; padding-left: 20px; padding-right:20px;  text-align: center;" name="next" value="Next" onclick="location.href='config-details.php';">
    </div>
  </div>
</div>

<!-- display data values in table format -->

 <div>
      <div class="form-row" style="margin-left:5px;">
        <table class="table table-striped table-bordered">
          <thead>
  
          <tr style="text-align: center;">
            <th>ID</th>
            <th>Property name</th>
            <th>Address</th>
            <th>Property code</th>
            <th>Location</th>
            <th>Status</th>
            <th>Transaction type</th>
            <th>Furnished Status</th>
            <th>Type of ownership</th>
            <th>Super area</th>
            <th>Carpet area</th>
            <th>Price Breakup</th>
            <th>Booking Amount</th>
            <th style="color:green;">Update</th>
            <th style="color:red;">Delete</th>
          </tr>
        </thead>

        <?php

        while($res=mysqli_fetch_array($result))
        {

        ?>
          <!-- echo '<tr>';
          echo '<td>'.$res['id'].'</td>';
          echo '<td>'.$res['pname'].'</td>';
          echo '<td>'.$res['address'].'</td>';
          echo '<td>'.$res['pcode'].'</td>';
          echo '<td>'.$res['location'].'</td>';
          echo '<td>'.$res['status'].'</td>';
          echo '<td>'.$res['transaction'].'</td>';
          echo '<td>'.$res['furnished'].'</td>';
          echo '<td>'.$res['ownership'].'</td>';
          echo '<td>'.$res['sarea'].'</td>';
          echo '<td>'.$res['carea'].'</td>';
          echo '<td>'.$res['price'].'</td>';
          echo '<td>'.$res['bamount'].'</td>'; 
          echo '<td>'.'<input type="submit" name="update"  value="Update"  class="btn btn-success  update" id="'.$res["id"].'">
          '.'</td>';

          echo '<td>'.'<button class="btn btn-danger delete">'.'<a href="delete.php?id=<?php echo $res['id'];?>"> Delete </a>'.'</button>'.'</td>';
          // echo '<td>'.'<input type="submit" name=" "  value="Delete"  class="btn btn-danger delete" id="'.$res["id"].'">
          // '.'</td>';      
          echo '</tr>'; -->

            <tr>
              <td><?php echo $res['id']; ?></td>
              <td><?php echo $res['pname']; ?></td>
              <td><?php echo $res['address']; ?></td>
              <td><?php echo $res['pcode']; ?></td>
              <td><?php echo $res['location']; ?></td>
              <td><?php echo $res['status']; ?></td>
              <td><?php echo $res['transaction']; ?></td>
              <td><?php echo $res['furnished']; ?></td>
              <td><?php echo $res['ownership']; ?></td>
              <td><?php echo $res['sarea']; ?></td>
              <td><?php echo $res['carea']; ?></td>
              <td><?php echo $res['price']; ?></td>
              <td><?php echo $res['bamount']; ?></td>


              <td><button class="btn btn-success"><a href="property-update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a>
              </button></td>


              <td><button class="btn btn-danger"><a href="property-details-fun.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a>
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
