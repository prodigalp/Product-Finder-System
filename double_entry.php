<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$a1 = "SELECT * FROM tblcurrent WHERE username!='eyestrain'";
	$a2 = mysql_query($a1);

?>
<html>
<head>
<title>Double Entry</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_double_entry.css" />

</head>
<body>
	<div id="wraper">
	<div id="header"><h2>Current User</h2></div>
	<div id="content">
	<table id="t1">
		<tr id="hed1">
			<td>#</td>
			<td width="60%">Fullname</td>
			<td width="20%">Time-In</td>
			<td width="20%">Option</td>
		</tr>
		<?php
			$cntr=0;
			while($row=mysql_fetch_assoc($a2)) { 
			$cntr++;
		?>
		<tr>
			<td><?php echo $cntr;?></td>
			<td><?php echo $row['fname'].' '. $row['mname'].' '.$row['lname'];?></td>
			<td><?php echo $row['timer'];?></td>
			<td>
				<a href="delete_double_entry.php?id=<?php echo $row['ctrlnum'];?>">
				[&nbsp;Unlock&nbsp;]
				</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	</div>
	<div id="footer"><h2>
		<a href="settings.php" style="background:#306EFF;color:#FFFF00;">
			&laquo;&nbsp;Back
		</a></h2></div>
	</div>
</body>
</html>
<?php
	}
else {
	header("location:login.php");
}
?>