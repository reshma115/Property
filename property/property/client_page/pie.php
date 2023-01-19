<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div  style="margin-left:25px; margin-top:40px; ">
<!-- bar chart -->
<?php
 

session_start();
$tp=$_SESSION['pri'];
$ti=$_SESSION['totalint'];

// principle
$p=$tp-$ti;
echo "Total Principle = ",round($tp),"<br>";
echo "Total Interest  = ",round($ti),"<br>";


// converting priniple into percentage
$p1=$p/$tp*100;
// converting interest into percentage 
$int=$ti/$tp*100;
//echo round($int),"<br>";

$dataPoints = array( 
	array("label"=>"INTEREST", "y"=>$int),
	array("label"=>"PRINCIPLE AMOUNT", "y"=>$p1),
	
)

?>

</div> 

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "EMI INTEREST AND PRINCIPLE AMOUNT"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0\" %\"",
		indexLabelPlacement: "outside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<button class="btn btn-success" style="margin-left:30px; margin-top:40px; "><a href="finalemical.php" style="color: white">GO BACK TO FIRST PAGE</a></button> <br><br>
<!-- <input type="button" name="b1" onclick="location.href='ibar.php';">BAR CHART
 -->
 <button class="btn btn-success" style="margin-left:30px; margin-top:5px; "><a href="ibar.php" style="color: white" >GO TO BAR GRAPH</a></button> 
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>



<!-- bar chart -->

