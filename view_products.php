<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4') {
	require("config.php");
	
	
	# SELECTING VALUES FROM TWO(2) TABLES
	$a1 = "SELECT ptype,count(ptype)as total FROM tblproduct GROUP BY ptype ORDER BY total DESC ";
	$a2 = mysql_query($a1);
	
	$b1 = "SELECT count(ptype)as total FROM tblproduct";
	$b2 = mysql_query($b1);
	$b3 = mysql_fetch_assoc($b2);

?>

<!DOCTYPE html>
<html>
<head>
<title>View Reliever</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_view_agency.css" />
</head>
<body>
	<div id="wraper">
	<div id="header"><h2>Product Information</h2></div>
	<div id="content">
	<table id="top">
		<tr>
			<td colspan="4" 
			style="
				text-transform:uppercase;
				background:#00FF00;
				font-weight:bold;">Total Products</td>
		</tr>
		<tr style="background:#000;color:#FFF;text-transform:uppercase;">
			<td width="2%">#</td>
			<td width="60%">Product Type</td>
			<td width="25%">Total</td>
		</tr>	
		
		<?php
			$cntr=0;
			while($row=mysql_fetch_assoc($a2)) {
			$cntr++;
		?>
		
		<tr>
			<td><?php echo $cntr;?></td>
			<td><?php echo $row['ptype'];?></td>
			<td><?php echo $row['total'];?></td>
		</tr>
		
		<?php
			}
		?>
		
	</table>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total entry: <?php echo $b3['total'];?></b><br><br>
	
	<table id="hed">
		<tr>
			<td><img src="portrait/miner/GRP/PBI_1.jpg"></td>
		</tr>
	</table>
	
	</table>
	<table id="t1">
		<tr><td id="d1">Philippine Batteries Incorporated</td></tr>
		<tr><td>Barrio Bulac, Sta. Maria Bulacan</td></tr>
		<tr><td>Plastics Department</td></tr>
		<tr><td id="d2">299-6300 (169)</td></tr>
	</table>
	<div id="reset"></div>
	</div>
	<div id="footer"><h2>
		<a href="settings.php">
		&laquo;&nbsp;Back&nbsp;</a>
		</h2></div>
	</div>
	
</body>
</html>

<?php
	}
else {
	header("location:login.php");
}
?>