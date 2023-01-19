<?php
	  include("./configuration/config.php"); 
	  	if(isset($_POST['auto-submit']))
		{
			  	$data=$_POST['search'];

			  	$sql="select * from property_details where '$data'=location";
			  	$result=mysqli_query($mysqli,$sql);

			  	$sql1="select * from builder_details where '$data'=buildername";
			  	$result1=mysqli_query($mysqli,$sql1);

			  	$sql2="select * from project_details where '$data'=dname";
			  	$result2=mysqli_query($mysqli,$sql2);

			  	if (mysqli_num_rows($result)==true) 
			  	{
			  		// $row= mysqli_fetch_array($result);
				  	// echo "ID :".$row['id']."<br>";
				  	// echo "location :".$row['location']."<br>";
				  	// echo "Property code :".$row['pcode']."<br>";
				  	// echo "Property name :".$row['pname']."<br>";
				  	// echo "Status :".$row['status']."<br>";
				  	// echo "Address :".$row['address']."<br>";
				  	echo "<h3>find as per city..</h3>"."<br><br>";
				  	while ($row = mysqli_fetch_array($result)) 
			  		{	
			  			echo "ID :".$row['id']."<br>";
					  	echo "location :".$row['location']."<br>";
					  	echo "Property code :".$row['pcode']."<br>";
					  	echo "Property name :".$row['pname']."<br>";
					  	echo "Status :".$row['status']."<br>";
					  	echo "Address :".$row['address']."<br>"."<br>";
					  	
			  		} //end of while loop
			  	}  //end of first if statement

			  		
			  	elseif(mysqli_num_rows($result1)==true)
			  	{
			  			echo "<h3>find as per Builder..</h3>"."<br><br>";
			  			while ($row = mysqli_fetch_array($result1)) 
			  		{
			  			//$row = mysqli_fetch_array($result1);
			  			echo "ID :".$row['builder_id']."<br>";
					  	echo "Builder Name :".$row['buildername']."<br>";
					  	echo "Property code :".$row['pcode']."<br>";
					  	echo "Builder Information :".$row['builderinfo']."<br>";
					  	echo "Builder City :".$row['buildercity']."<br>"."<br>";
					}
					
			  	} //end of elseif statement

			  	elseif(mysqli_num_rows($result2)==true)
			  	{
			  		// $sql="select * from builder_details where '$data'=buildername";
			  		// $result=mysqli_query($mysqli,$sql);
			  			echo "<h3>find as per Project..</h3>"."<br><br>";
			  			while ($row = mysqli_fetch_array($result2)) 
			  		{
			  			//$row = mysqli_fetch_array($result2);
			  			echo "ID :".$row['project_id']."<br>";
					  	echo "Project Name :".$row['dname']."<br>";
					  	echo "Property code :".$row['pcode']."<br>";
					  	echo "Project minimum range :".$row['pminrange']."<br>";
					  	echo "Project maximum range :".$row['pmaxrange']."<br>";
					  	echo "Configuration :".$row['pcon']."<br>";
					  	echo "Tower and unit details :".$row['ptower']."<br>"."<br>";
					}

			  	} //end of elseif statement
			  	else
			  	{
			  		echo "<h3>data not found</h3>";
			  	}  //end of else statement
			  	
		}
?>