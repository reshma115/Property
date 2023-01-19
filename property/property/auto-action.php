<!-- pages used auto-action.php
                auto_search-property.php
                index.php -->

<?php
  include("./configuration/config.php"); 
 // $result = mysqli_query($mysqli,"select * from builder_details order by builder_id asc");
  	if (isset($_POST["query"])) 
  	{
  		$inpuText=$_POST["query"]; 
  		// $query="select DISTINCT location from property_details where location LIKE '%$inpuText%'";
  		$query="select DISTINCT location from property_details where location LIKE '%$inpuText%' UNION ALL
  				    select DISTINCT dname from project_details where dname LIKE '%$inpuText%' UNION ALL 
  				    select DISTINCT buildername from builder_details where buildername LIKE '%$inpuText%' ";

  		$result=mysqli_query($mysqli,$query);
  		if (mysqli_num_rows($result)>0) 
  		{
  			while ($row = mysqli_fetch_array($result)) 
	  		{
	  			echo "<a href='#' class='list-group-item list-group-item-action border-1'>" .$row['location']."</a>";		
	  		}
  		}
  		else{
  			echo "<p class='list-group-item border-1'>No Records Found..</p>";
  		}

  	}
?>
