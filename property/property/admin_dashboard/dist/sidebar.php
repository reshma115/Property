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
