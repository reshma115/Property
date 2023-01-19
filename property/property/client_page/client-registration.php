<?php 
     include("../configuration/config.php"); 

$uname = $password = $confirm_password =$email=$phone=$address= "";
$userunamename_err = $password_err = $confirm_password_err = $email_err= $phone_err = $address_err ="";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if uname is empty
    if(empty(trim($_POST["uname"]))){
        $uname_err = "Username cannot be blank";
        echo $uname_err ."<br>";
    }
    else{
        $sql = "SELECT id FROM client_login WHERE uname = ?";
        $stmt = mysqli_prepare($mysqli, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_uname);

            // Set the value of param uname
            $param_uname = trim($_POST['uname']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $uname_err = "This uname is already taken"; 
                    echo $uname_err  ."<br>";
                }
                else{
                    $uname = trim($_POST['uname']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
    }

    

// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
    echo  $password_err ."<br>";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
    echo $password_err ."<br>";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
    echo  $password_err ."<br>";
}

//check for email

if(empty(trim($_POST['email'])))
{
  $email_err = "Email cannot be blank";
   echo  $email_err ."<br>";
}
else{
    $email = trim($_POST['email']);
}

//check for phone

if(empty(trim($_POST['phone'])))
{
  $phone_err = "phone cannot be blank";
   echo  $phone_err ."<br>";
}
else{
    $phone = trim($_POST['phone']);
}

//check for address

if(empty(trim($_POST['address'])))
{
  $address_err = "address cannot be blank";
   echo  $address_err ."<br>";
}
else{
    $address = trim($_POST['address']);
}



// If there were no errors, go ahead and insert into the database
if(empty($uname_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)
 && empty($phone_err ))
{
    $sql = "INSERT INTO client_login (uname, password, email, phone, address) VALUES (?, ?, ?, ?, ?)";
    echo $sql;
    $stmt = mysqli_prepare($mysqli, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sssss", $param_uname, $param_password, $param_email, $param_phone,
          $param_address);

        // Set these parameters
        $param_uname = $uname;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_email=$email;
        $param_phone=$phone;
        $param_address=$address;

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location:client-login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
     // mysqli_stmt_close($stmt);
}
mysqli_close($mysqli);
} 
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Client-Registration</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
   <!--  <a class="navbar-brand" href="#">Laravel</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent" style="margin-top: 6%">
       <!--  <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul> -->

    </div>
    </div>
</nav>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8  shadow p-3 mb-5 bg-white rounded">
                <div class="card" style="margin-top: -40px"  >
                    <div class="card-header" style="text-align: center;"><h5>Register</h5></div>
                        <div class="card-body">
                            <form name="my-form" action="#" method="POST">
                                <!-- <div class="form-group row" style="margin-top: 2%">
                                    <label for="full_name"  class="col-md-4 col-form-label text-md-right" >Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name">
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <label for="uname" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="uname" class="form-control" name="uname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="confirm_password" class="col-md-4 col-form-label text-md-right">Confirm password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="confirm_password" class="form-control" name="confirm_password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail </label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email">
                                    </div>
                                </div>

                                

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone" name="phone" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right"> Address</label>
                                    <div class="col-md-6">
                                        <textarea id="address" class="form-control" name="address"></textarea> 
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                       <!--  <input type="submit" name="submit9" id="submit9" class="btn btn-primary" value="Register"> -->
                                         <button type="submit" class="btn btn-primary">Sign in</button>
                                        
                                    </div>
                            </form>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    <div><a href="../index.php" class="btn btn-primary" style="margin-left: 75%; margin-top: -20px; margin-bottom: 20px;">GO TO HOME PAGE</a></div>
</main>
</body>
</html>