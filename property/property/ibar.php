<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<div style="margin-left:25px; margin-top:40px;">

<?php

 
session_start();
//$cy=$_SESSION['c_year'];
$ti=$_SESSION['cm'];
// $tp=$_SESSION['tp'];


$dataPointsp = array();
$dataPointsi = array();
$l=0;

    for($i=1; $i <= $ti; $i++)
    {
    	// echo $i;
    	$point=array("label"=>"year$i","y"=>$_SESSION['ir'][$l]);
    	$l++;
    	array_push($dataPointsp, $point);
    }
    $l=0;
	for($a=1; $a <= $ti; $a++)
    {
    	
    	$point1=array("label"=>"year$a","y"=>$_SESSION['tp'][$l]);
    	$l++;
    	array_push($dataPointsi, $point1);
    }

	 
?>

</div>

<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", 
{
	title: {
		text: "Repayment Details (Yearly/Monthly)"
	},
	theme: "light2",
	animationEnabled: true,
	toolTip:{
		shared: true,
		reversed: true
	},
	axisY: {
		suffix: "%"
	},
	data: [
		{
			type: "stackedColumn100",
			name: "PRINCIPLE",
			showInLegend: true,
			yValueFormatString: "#,##0 Rs",
			dataPoints: <?php echo json_encode($dataPointsi, JSON_NUMERIC_CHECK); ?>
		},
		{
			type: "stackedColumn100",
			name: "INTREST",
			showInLegend: true,
			yValueFormatString: "#,##0 Rs",
			dataPoints: <?php echo json_encode($dataPointsp, JSON_NUMERIC_CHECK); ?>
		},
	]
});
 
chart.render();
 

}

</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;" style="margin-top: 15px"></div>

<button class="btn btn-success" style="margin-left:30px; margin-top:30px; "><a href="finalemical.php" style="color: white" >GO BACK TO FIRST PAGE</a></button>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>  