<?php
  include("config.php"); 
   session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true) 
      {
        header("location:admin-login.php");
      }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="admin-index.php">Property.com</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item">
                    <a href="../../index.php" class="nav-link" style="color: white; margin-right:35px; margin-left: 920px">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <!-- <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">ActivityLog</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div> -->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: white"><img src="https://img.icons8.com/officel/25/000000/user.png">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="admin-logout.php">Logout</a>
                            <!-- <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </div>
                </li>
            </ul>
        </nav>  <!-- end of navbar -->

      

        <div id="layoutSidenav">

              <!-- start of side bar -->

            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin-index.php"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard</a>

                             <!-- your all pages links are here -->

                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" 
                                aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-book-open"></i>
                                </div>Pages
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>

                            <!-- pages link -->
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" 
                                data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                                        data-target="#pagesCollapseAuth" aria-expanded="false" 
                                        aria-controls="pagesCollapseAuth">Add Details
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>

                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" 
                                        data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="property-details.php">Property Details</a>
                                            <a class="nav-link" href="config-details.php">Configuration</a>
                                            <a class="nav-link" href="amenities-details.php">Amenities Details</a>
                                            <a class="nav-link" href="project-details.php">Project Details</a>
                                            <a class="nav-link" href="property-image-details.php">Images Details</a>
                                            <a class="nav-link" href="popular-agent.php">Agent Details</a>
                                            <a class="nav-link" href="builder-details.php">Builder Details</a>
                                            <a class="nav-link" href="blog_details.php">Blog Details</a>
                                            <a class="nav-link" href="sole-selling-display.php">Sole selling</a>
                                        </nav>
                                    </div>

                                    <!-- error pages link -->

                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                                        data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">Error
                                        <div class="sb-sidenav-collapse-arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"  
                                        data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>    
                            </div> <!-- end of your all pages links are here -->

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                                data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>Company Details
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" 
                                data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="about-details.php">About Comapany</a>
                                    <a class="nav-link" href="client-testimonial.php">Client Testimonial</a>
                                </nav>
                            </div>


                            <a class="nav-link" href="contact-details.php"><div class="sb-nav-link-icon"></div>Contact</a>

                        </div> 
                    </div> <!--end of sb-sidenav-menu -->

                    <div class="sb-sidenav-footer" style="margin: 0px 0px 0px 10px;">
                        <div class="small">Logged in as :</div>username --
                       <label><?php echo $_SESSION['username']?></label> 
                    </div>

                </nav> <!--end of sb-sidenav accordion sb-sidenav-dark -->
            </div> <!-- end of layoutSidenav_nav -->
            <!-- end of side bar -->

            <!-- start here dashbord content -->

            <div id="layoutSidenav_content"> 

                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4">Dashboard</h2>
                        <h5><label>WELCOME</label></h5>
                        <h6><label><?php echo " Admin Name -- ". $_SESSION['username']?></label></h6>
                           
                    </div>
                </main>

               

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Property.com 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>

            </div> <!--  end of layoutSidenav_content -->

        </div> <!-- end of layoutSidenav -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
