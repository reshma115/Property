<!-- related page auto.php
                  auto-action.php
                  auto_search_property.php -->


<?php
  include("config.php"); 
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>autocomplete</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </head>

  <body>

    <section class="ftco-section ftco-no-pb">
    	<div class="container">
	    	<div class="row" style="margin-left:300px">
				<div class="col-md-12">
					<!-- <div class="search-wrap-1 ftco-animate"> -->
						<form action="auto_search-property.php" method="POST" class="search-property-1">
		        		    <div class="row">
		        			    <div class="col-lg align-items-end">
		        				    <div class="form-group">
		        					    <label for="#">Location</label>
		          				        <div class="form-field">
                                            <div class="icon">
                                                <span class="ion-ios-search"></span>
                                            </div>

				                            <input type="text" name="search" id="search" class="form-control" placeholder="Enter Location, Project or Builder Name" 
                                            style="border-color: black;" autocomplete="off">
				                        </div>
			                        </div>
		        			    </div>
		        			    <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" name="auto-submit" id="auto-submit" value="Search Property" class=" btn btn-primary" style="padding-top:11px; padding-bottom:10px"><!-- <a href="search-property.php?location=<?php echo $location;?>"> -->

                                        <!-- <button class="btn btn-primary"><a href="search-property.php?location=<?php echo $res['location']; ?>" class="text-white">search</a>
                                        </button> -->
                                        </div>
                                    </div>
		        			    </div>
		        		    </div>
		        	    </form>
		            </div>
                    <div class="col-md-5" style="position: relative; margin-top: -16px; margin-left:1px; " > 
                        <div class="list-group" id="show-list">
                        
                        </div>
                    </div>
				</div>
	    	</div>
	    </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#search").keyup(function(){
                var searchText = $(this).val();
                if (searchText!='') 
                {
                    $.ajax({
                        url:'auto-action.php',
                        method:'post',
                        data:{query:searchText},
                        success:function(response)
                        {
                            $("#show-list").html(response);
                        }
                    });
                }
                else{
                    $("#show-list").html('');
                }
            });
            $(document).on('click','a',function(){
                $("#search").val($(this).text());
                $("#show-list").html('');
            });
        });
    </script>



    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>