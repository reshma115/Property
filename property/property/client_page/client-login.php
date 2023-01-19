<?php 
    include("../configuration/config.php"); 

//This script will handle login
session_start();

//check if the user is already logged in
if(isset($_SESSION['uname']))
{
    header("location: client-index.php");
    exit;
}
// require_once "config.php";

$uname = $password = $email = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['uname'])) || empty(trim($_POST['password'])) || empty(trim($_POST['email'])))
    {
        $err = "Please enter uname + password + email";
    }
    else
    {
        $uname = trim($_POST['uname']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
    }


if(empty($err))
{
    $sql = "SELECT id, uname, password FROM client_login WHERE uname = ?";
    $stmt = mysqli_prepare($mysqli, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_uname);
    $param_uname = $uname;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $uname, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["uname"] = $uname;
                            $_SESSION["id"] = $id;
                            $_SESSION["login"] = true;

                            //Redirect user to welcome page
                            header("location: client-index.php");
                            
                        }
                    }

                }

    }
}    


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

    <title>Client-Login</title>
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
            <div class="col-md-6  shadow p-3 mb-5 bg-white rounded">
                <div class="card" >
                    <div class="card-header" style="text-align: center;"><h5>Login</h5></div>
                        <div class="card-body">
                            <form name="my-form" action="" method="POST">
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
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail 
                                    </label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                       <!--  <input type="submit" name="submit9" id="submit9" class="btn btn-primary" value="Register"> -->
                                         <button type="submit" class="btn btn-primary">Sign in</button>
                                        
                                    </div>
                                     <div class="form-group row" style="margin-left: 67%">
                                    <a href="client-registration.php">Not Register ?<br>&nbsp&nbspClick here</a>
                                    </div>
                            </form>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    <div><a href="../index.php" class="btn btn-primary" style="margin-left: 75%; ">GO TO HOME PAGE</a></div>

</main>
</body>
</html>